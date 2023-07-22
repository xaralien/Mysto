<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Storage extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function storage()
    {
        $data = [
            'order' => $this->ModelStorage->getGudang()->result(),
        ];
        if ($this->session->userdata('email')) {
            $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
            $data['user'] = $user['nama'];
            $this->load->view('templates/header', $data);
            $this->load->view('storage/storage');
            $this->load->view('templates/footer');
        } else {
            redirect('home/login');
        }
    }
    public function history()
    {
        $data = [
            'order' => $this->ModelStorage->joinHistori()->result(),
        ];
        if ($this->session->userdata('email')) {
            $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
            $data['user'] = $user['nama'];
            $this->load->view('templates/header', $data);
            $this->load->view('storage/history');
            $this->load->view('templates/footer');
        } else {
            redirect('home/login');
        }
    }
    public function detail()
    {
        $id = $this->uri->segment(3);
        $data = [
            'id_block' => $id,
            'title' => "Tabel Gudang $id",
            'order' => $this->ModelStorage->joinIsiGudang(['id_block' => $id])->result(),
            'block' => $this->ModelStorage->orderWhereGudang(['id_block' => $id])->result(),
            'role' => $this->session->userdata('role_id'),
        ];
        // $data['kategori'] = $this->ModelBuku->getKategori()->result_array();
        if ($this->session->userdata('email')) {
            $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

            $data['user'] = $user['nama'];
            $this->load->view('templates/header', $data);
            $this->load->view('storage/detail');
            $this->load->view('templates/footer');

        } else {
            redirect('home/login');
        }
    }
    public function input()
    {
        $id = $this->uri->segment(3);
        $data = [
            'produk' => $this->ModelStorage->getProduk()->result(),
        ];
        // $data['kategori'] = $this->ModelBuku->getKategori()->result_array();
        if ($this->session->userdata('email')) {
            $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
            if ($this->session->userdata('role_id') == 3 or $this->session->userdata('role_id') == 1) {
                $data['user'] = $user['nama'];
                $this->load->view('templates/header', $data);
                $this->load->view('storage/input', $data);
                $this->load->view('templates/footer');
            } else {
                redirect('storage/storage');
            }
        } else {
            redirect('home/login');
        }
    }
    public function output()
    {
        $id = $this->uri->segment(3);
        $data = [
            'isigudang' => $this->ModelStorage->orderWhereJoin(['id_produk_gudang' => $id])->result(),
        ];
        // $data['kategori'] = $this->ModelBuku->getKategori()->result_array();
        if ($this->session->userdata('email')) {
            $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
            if ($this->session->userdata('role_id') == 2 or $this->session->userdata('role_id') == 1) {
                $data['user'] = $user['nama'];
                $this->load->view('templates/header', $data);
                $this->load->view('storage/output', $data);
                $this->load->view('templates/footer');
            } else {
                redirect('storage/storage');
            }
        } else {
            redirect('home/login');
        }
    }
    public function input_produk()
    {

        $id = $this->uri->segment(3);
        $kategori = $this->input->post('id_kategori');
        $data = [
            'subkategori' => $this->ModelStorage->getSubKategori(['id_kategori' => $kategori])->result(),
        ];
        // $data['kategori'] = $this->ModelBuku->getKategori()->result_array();
        if ($this->session->userdata('email')) {
            $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
            if ($this->session->userdata('role_id') == 3 or $this->session->userdata('role_id') == 1) {
                $data['user'] = $user['nama'];
                $this->load->view('templates/header', $data);
                $this->load->view('storage/input_produk');
                $this->load->view('templates/footer');
            } else {
                redirect('storage/storage');
            }
        } else {
            redirect('home/login');
        }
    }
    public function pilih_kategori()
    {

        $id = $this->uri->segment(3);
        $data = [
            'kategori' => $this->ModelStorage->getKategori()->result(),
        ];
        // $data['kategori'] = $this->ModelBuku->getKategori()->result_array();
        if ($this->session->userdata('email')) {
            $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
            if ($this->session->userdata('role_id') == 3 or $this->session->userdata('role_id') == 1) {
                $data['user'] = $user['nama'];
                $this->load->view('templates/header', $data);
                $this->load->view('storage/pilih_kategori');
                $this->load->view('templates/footer');
            } else {
                redirect('storage/storage');
            }
        } else {
            redirect('home/login');
        }
    }

    public function input_kategori()
    {
        $data = [
            'kategori' => $this->ModelStorage->getKategori()->result(),
        ];
        // $data['kategori'] = $this->ModelBuku->getKategori()->result_array();
        if ($this->session->userdata('email')) {
            $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
            if ($this->session->userdata('role_id') == 2 or $this->session->userdata('role_id') == 1) {
                $data['user'] = $user['nama'];
                $this->load->view('templates/header', $data);
                $this->load->view('storage/input_kategori');
                $this->load->view('templates/footer');
            } else {
                redirect('storage/storage');
            }
        } else {
            redirect('home/login');
        }
    }
    public function proses()
    {
        $id_block = $this->uri->segment(3);
        $id_block = strtoupper($id_block);
        $id_user = $this->session->userdata('id_user');
        $id_produk = $this->input->post('id_produk');
        $jumlah_produk = $this->input->post('jumlah_produk');
        $total_berat = 0;
        $proses = 0;
        // $d = $this->db->query("Select * from paket where id='$id_paket'")->row();

        $cek_data = [
            'cek_isi_gudang' => $this->ModelStorage->orderWhere(['id_block' => $id_block])->result(),
        ];

        if ($cek_data['cek_isi_gudang'] != Null) {
            foreach ($cek_data['cek_isi_gudang'] as $cek) {
                echo $cek->id_produk;
                $id_produk_gudang = $cek->id_produk_gudang;
                $cek_id = $cek->id_produk;
                $jumlah_produk_gudang = $cek->jumlah_produk;
                if ($cek_id == $id_produk) {
                    $total_produk = (int) $jumlah_produk + (int) $jumlah_produk_gudang;
                    $sisa_produk =  (int) $jumlah_produk_gudang;
                    $data_isi_gudang = [
                        'jumlah_produk' => $total_produk,
                        // 'sisa_produk' => $sisa_produk,
                ];
                    $this->db->where('id_produk_gudang', $id_produk_gudang);
                    $this->db->update('isigudang', $data_isi_gudang);
                    $proses = 'sukses';
                    
                    $data_histori = [
                        'id_user' => $id_user,
                        'id_block' => $id_block,
                        'id_produk' => $id_produk,
                        'status' => 'Input Barang',
                        'jumlah_produk' => $this->input->post('jumlah_produk'),
                        'sisa_produk' => $sisa_produk,
                    ];
                    $this->ModelStorage->simpanOrder($data_histori);
                    break;
                    // $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Selamat!! Anda Berhasil Input Barang</div>');
                    // redirect('storage/detail/' . $id_block);
                }
                echo 0;
                    $proses = 1;
            }
        } else {
            $data_isi_gudang = [
                'id_block' => $id_block,
                'id_produk' => $id_produk,
                'jumlah_produk' => $jumlah_produk,
            ];
            print_r($data_isi_gudang);

            echo 2;
            $proses = 2;
            $this->db->insert('isigudang', $data_isi_gudang);
            $data_histori = [
                'id_user' => $id_user,
                'id_block' => $id_block,
                'id_produk' => $id_produk,
                'status' => 'Input Barang',
                'jumlah_produk' => $this->input->post('jumlah_produk'),
                'sisa_produk' => 0,
            ];
            echo 4;
            $this->ModelStorage->simpanOrder($data_histori);
        }
        if ($proses == 1) {
            $data_isi_gudang = [
                'id_block' => $id_block,
                'id_produk' => $id_produk,
                'jumlah_produk' => $jumlah_produk,
            ];
            print_r($data_isi_gudang);
            echo 3;
            $this->db->insert('isigudang', $data_isi_gudang);

            $data_histori = [
                'id_user' => $id_user,
                'id_block' => $id_block,
                'id_produk' => $id_produk,
                'status' => 'Input Barang',
                'jumlah_produk' => $this->input->post('jumlah_produk'),
                'sisa_produk' => 0,
            ];
            echo 4;
            $this->ModelStorage->simpanOrder($data_histori);

        }
        
        $total_berat = 0;
        $isi_gudang = $this->ModelStorage->joinIsiGudang(['id_block' => $id_block])->result();
        foreach ($isi_gudang as $d) {
            $satuan = $d->satuan_produk;
            if($satuan == "Liter"){
                $berat = 1 * $d->jumlah_satuan_produk;
            }else if($satuan == "Dus"){
                $berat = 25 * $d->jumlah_satuan_produk;
            } else if($satuan == "KG"){
                $berat = 1 * $d->jumlah_satuan_produk;
            }
            $jumlah_isi_gudang = $d->jumlah_produk;
            $total_berat_produk = $jumlah_isi_gudang * $berat;
            $total_berat = $total_berat_produk + $total_berat;
        }
        echo ' berat' . $total_berat;
        if ($total_berat == 0) {
            $status = 'Kosong';
        } elseif ($total_berat >= 1000) {
            $status = 'Penuh';
        } elseif ($total_berat >= 750) {
            $status = 'SepaKosong';
        } elseif ($total_berat >= 500) {
            $status = 'Setengah';
        } elseif ($total_berat >=250) {
            $status = 'Separuh';
        }
        echo ' status' . $status;
        $data_gudang = [
            'status_block' => $status,
        ];
        $this->ModelStorage->updateOrderGudang($data_gudang, ['id_block' => $id_block]);

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Selamat!! Anda Berhasil Input Barang</div>');
        redirect('storage/detail/' . $id_block);
    }
    public function prosesoutput()
    {

        $id_produk_gudang = $this->uri->segment(3);
        $jumlah_produk_output = $this->input->post('jumlah_produk');
        $total_berat = 0;

        // $d = $this->db->query("Select * from paket where id='$id_paket'")->row();

        $cek_data = $this->ModelStorage->orderWhereJoin(['id_produk_gudang' => $id_produk_gudang])->result();
        // print_r($cek_data[0]);
        $id_block = $cek_data[0]->id_block;
        $id_block = strtoupper($id_block);
        $id_user = $this->session->userdata('id_user');
        $id_produk = $cek_data[0]->id_produk;
        // $berat_produk = $cek_data[0]->berat_produk;
        $jumlah_asli = $cek_data[0]->jumlah_produk;
        // echo $jumlah_asli;

        echo $berat_asli = $jumlah_asli * $berat_produk;
        echo $berat_output = $jumlah_produk_output * $berat_produk;
        echo $total_berat_1 = $berat_asli - $berat_output;
        $jumlah_produk = $jumlah_asli - $jumlah_produk_output;
        if($jumlah_produk == 0){
            $this->db->where('id_produk_gudang', $id_produk_gudang);
            $this->db->delete('isigudang');
        }else{
            $data_isi_gudang = [
                'jumlah_produk' => $jumlah_produk,
            ];
            // print_r($data_isi_gudang);
    
            $this->db->where('id_produk_gudang', $id_produk_gudang);
            $this->db->update('isigudang', $data_isi_gudang);    
        }

        // echo $jumlah_produk;
        
        $data_histori = [
            'id_user' => $id_user,
            'id_block' => $id_block,
            'id_produk' => $id_produk,
            'status' => 'Output Barang',
            'sisa_produk' => $jumlah_produk,
            'jumlah_produk' => $this->input->post('jumlah_produk'),
        ];
        $this->ModelStorage->simpanOrder($data_histori);
        $total_berat_produk = 0;
        $isi_gudang = $this->ModelStorage->joinIsiGudang(['id_block' => $id_block])->result();
        foreach ($isi_gudang as $d) {
            $satuan = $d->satuan_produk;
            if($satuan == "Liter"){
                $berat = 1;
            }else if($satuan == "Dus"){
                $berat = 25;
            } else if($satuan == "KG"){
                $berat = 1;
            }
            $jumlah_isi_gudang = $d->jumlah_produk;
            $total_berat_produk = $jumlah_isi_gudang * $berat;
            $total_berat = $total_berat_produk + $total_berat;
        }
        echo ' berat' . $total_berat;
        if ($total_berat == 0) {
            $status = 'Kosong';
        } elseif ($total_berat >= 1000) {
            $status = 'Penuh';
        } elseif ($total_berat > 750) {
            $status = 'SepaKosong';
        } elseif ($total_berat > 500) {
            $status = 'Setengah';
        } elseif ($total_berat >250) {
            $status = 'Separuh';
        }
        echo ' status' . $status;
        $data_gudang = [
            'status_block' => $status,
        ];
        $this->ModelStorage->updateOrderGudang($data_gudang, ['id_block' => $id_block]);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Selamat!! Anda Berhasil Input Barang</div>');
        redirect('storage/detail/' . $id_block);
    }
    public function proses_produk()
    {
        // $d = $this->db->query("Select * from paket where id='$id_paket'")->row();


        $isi_produk = [
            'nama_produk' => $this->input->post('nama_produk'),
            'nama_sub_kategori' => $this->input->post('subkategori'),
            'jumlah_satuan_produk' => $this->input->post('jumlah_satuan'),
            'satuan_produk' => $this->input->post('satuan'),
            'harga_produk' => $this->input->post('harga_produk'),
            'deskripsi_produk' => $this->input->post('deskripsi_produk'),
        ];
        $this->db->insert('produk', $isi_produk);

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Selamat!! Anda Berhasil membuat Produk</div>');
        redirect('storage/storage');
    }
    public function proses_kategori()
    {
        // $d = $this->db->query("Select * from paket where id='$id_paket'")->row();


        $isi_sub = [
            'id_kategori' => $this->input->post('id_kategori'),
            'nama_sub_kategori' => $this->input->post('nama_sub'),
        ];
        $this->db->insert('subkategori', $isi_sub);

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Selamat!! Anda Berhasil membuat Produk</div>');
        redirect('storage/storage');
    }
    public function createExcelInput()
    {
        $fileName = 'laporan Mingguan Input ' . date("Y-m-d") . '.xlsx';
        $historyData = $this->ModelStorage->exportHistoriInput();
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Id Histori');
        $sheet->setCellValue('B1', 'Nama User');
        $sheet->setCellValue('C1', 'Id Block');
        $sheet->setCellValue('D1', 'Nama Produk');
        $sheet->setCellValue('E1', 'Status');
        $sheet->setCellValue('F1', 'Jumlah Produk');
        $sheet->setCellValue('G1', 'Tanggal Input');
        $rows = 2;
        // print_r($historyData);
        foreach ($historyData as $val) {
            $sheet->setCellValue('A' . $rows, $val['id_histori']);
            $sheet->setCellValue('B' . $rows, $val['nama']);
            $sheet->setCellValue('C' . $rows, $val['id_block']);
            $sheet->setCellValue('D' . $rows, $val['nama_produk']);
            $sheet->setCellValue('E' . $rows, $val['status']);
            $sheet->setCellValue('F' . $rows, $val['jumlah_produk']);
            $sheet->setCellValue('G' . $rows, $val['tanggal']);
            $rows++;
        }
        $writer = new Xlsx($spreadsheet);
        $writer->save("upload/" . $fileName);
        header("Content-Type: application/vnd.ms-excel");
        redirect(base_url() . "/upload/" . $fileName);
    }

    public function createExcelOutput()
    {
        $fileName = 'laporan Mingguan Output ' . date("Y-m-d") . '.xlsx';
        $historyData = $this->ModelStorage->exportHistoriOutput();
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Id Histori');
        $sheet->setCellValue('B1', 'Nama User');
        $sheet->setCellValue('C1', 'Id Block');
        $sheet->setCellValue('D1', 'Nama Produk');
        $sheet->setCellValue('E1', 'Status');
        $sheet->setCellValue('F1', 'Jumlah Produk');
        $sheet->setCellValue('G1', 'Tanggal Input');
        $rows = 2;
        // print_r($historyData);
        foreach ($historyData as $val) {
            $sheet->setCellValue('A' . $rows, $val['id_histori']);
            $sheet->setCellValue('B' . $rows, $val['nama']);
            $sheet->setCellValue('C' . $rows, $val['id_block']);
            $sheet->setCellValue('D' . $rows, $val['nama_produk']);
            $sheet->setCellValue('E' . $rows, $val['status']);
            $sheet->setCellValue('F' . $rows, $val['jumlah_produk']);
            $sheet->setCellValue('G' . $rows, $val['tanggal']);
            $rows++;
        }
        $writer = new Xlsx($spreadsheet);
        $writer->save("upload/" . $fileName);
        header("Content-Type: application/vnd.ms-excel");
        redirect(base_url() . "/upload/" . $fileName);
    }
}