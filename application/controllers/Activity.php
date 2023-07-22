<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Activity extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function Activity()
    {
        // $this->db->from("histori");
        // $this->db->select(" COUNT(id_histori) as count, jumlah_produk as s, DAYNAME(tanggal) as day");
        // $this->db->where("tanggal BETWEEN ADDDATE(NOW(),-7) AND NOW() AND status = 'Input barang'");
        // $this->db->group_by("DAYNAME(tanggal), s");
        // $record = $this->db->get();
        $record = $this->ModelActivity->getActivity()->result();
        // print_r($record);
        $records = $this->ModelActivity->getActivityOutput()->result();
        // print_r($records);
        $recordgudang = $this->ModelActivity->getGudang()->result();
        // print_r($recordgudang[0]);

        // $db = \Config\Database::connect();
        // $builder = $db->table('histori');
        // // $sql = 'SELECT count(), tanggal(tg) as t FROM statistics WHERE t BETWEEN ADDDATE(NOW(),-7) AND NOW() GROUP BY t';
        // $query = $builder->select("COUNT(id_histori) as count, jumlah_produk as s, DAYNAME(tanggal) as day");
        // $query = $builder->where("tanggal BETWEEN ADDDATE(NOW(),-7) AND NOW() GROUP BY DAYNAME(tanggal), s")->get();
        // $record = $query->getResult();
        $products = [];
        $ar = 0;
        foreach ($record as $row) {
            $ar = $ar + 1;
            $products[] = array(
                'day' => $row->day,
                'sell' => floatval($row->s)
            );
        }
        foreach ($records as $rows) {
            $ar = $ar + 1;
            $products_output[] = array(
                'day_output' => $rows->day,
                'sell_output' => floatval($rows->s)
            );
        }
        foreach ($recordgudang as $rowgd) {
            $ar = $ar + 1;
            $gudangchart[] = array(
                'status' => $rowgd->status_block,
                'jumlah' => floatval($rowgd->id_block)
            );
        }
        $data['products'] = ($products);
        $data['products_output'] = ($products_output);
        $data['gudangchart'] = ($gudangchart);
        if ($this->session->userdata('email')) {
            $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
            $data['user'] = $user['nama'];
            $this->load->view('templates/header', $data);
            $this->load->view('activity/main');
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/header');
            $this->load->view('activity/main');
            $this->load->view('templates/footer');
        }
    }
}