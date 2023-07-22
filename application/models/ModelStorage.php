<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelStorage extends CI_Model
{
    //manajemen buku
    public function getOrder()
    {
        return $this->db->get('isigudang');
    }
    public function getKategori()
    {
        $this->db->from('kategori');
        $this->db->order_by("id_kategori", "asc");
        return $this->db->get();

    }

    public function getSubKategori($where)
    {
        $this->db->from('subkategori');
        $this->db->order_by("id_kategori", "asc");
        $this->db->where($where);
        return $this->db->get();

    }
    public function getProduk()
    {
        $this->db->from('produk');
        $this->db->order_by("nama_sub_kategori", "asc");
        return $this->db->get();
    }
    public function getGudang()
    {
        return $this->db->get('gudang');
    }
    public function getHistori()
    {
        $this->db->get('histori');
        $this->db->order_by('tanggal', 'asc');
        // $this->db->order_by("tanggal", "asc");
        return $this->db->get();

    }
    public function orderWhereGudang($where)
    {
        return $this->db->get_where('gudang', $where);
    }
    public function orderWhere($where)
    {
        return $this->db->get_where('isigudang', $where);
    }
    public function orderWhereJoin($where)
    {
        $this->db->from('isigudang');
        $this->db->join('produk', 'produk.id_produk = isigudang.id_produk');
        $this->db->where($where);
        return $this->db->get();
    }
    public function simpanOrder($data = null)
    {
        $this->db->insert('histori', $data);
    }

    public function updateOrderGudang($data = null, $where = null)
    {
        $this->db->update('gudang', $data, $where);
    }
    public function updateOrderTambahan($data = null, $where = null)
    {
        $this->db->update('tambahan', $data, $where);
    }
    public function hapusOrder($where = null)
    {
        $this->db->delete('booking', $where);
    }

    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if (!empty($where) && count($where) > 0) {
            $this->db->where($where);
        }
        $this->db->from('booking');
        return $this->db->get()->row($field);
    }

    //join
    public function joinIsiGudang($where)
    {
        $this->db->from('isigudang');
        $this->db->join('produk', 'produk.id_produk = isigudang.id_produk');
        $this->db->where($where);
        return $this->db->get();
    }
    public function joinHistori()
    {
        $this->db->from('histori');
        $this->db->join('produk', 'produk.id_produk = histori.id_produk');
        $this->db->join('user', 'user.id = histori.id_user');
        return $this->db->get();
    }
    public function joinHistoriInput()
    {
        $this->db->from('histori');
        $this->db->join('produk', 'produk.id_produk = histori.id_produk');
        $this->db->join('user', 'user.id = histori.id_user');
        $this->db->where('status', 'Input Barang');
        $this->db->order_by('tanggal', 'desc');
        return $this->db->get();
    }
    public function joinHistoriOutput()
    {
        $this->db->from('histori');
        $this->db->join('produk', 'produk.id_produk = histori.id_produk');
        $this->db->join('user', 'user.id = histori.id_user');
        $this->db->where('status', 'Output Barang');
        $this->db->order_by('tanggal', 'desc');
        return $this->db->get();
    }
    public function joinHistoriTerbaru()
    {
        $this->db->from('histori');
        $this->db->join('produk', 'produk.id_produk = histori.id_produk');
        $this->db->join('user', 'user.id = histori.id_user');
        $this->db->order_by('tanggal', 'desc');
        return $this->db->get();
    }
    public function joinHistoriTerlama()
    {
        $this->db->from('histori');
        $this->db->join('produk', 'produk.id_produk = histori.id_produk');
        $this->db->join('user', 'user.id = histori.id_user');
        $this->db->order_by('tanggal', 'asc');
        return $this->db->get();
    }
    public function joinHistoriCari($where)
    {
        $this->db->from('histori');
        $this->db->join('produk', 'produk.id_produk = histori.id_produk');
        $this->db->join('user', 'user.id = histori.id_user');
        $this->db->like('nama', $where);
        $this->db->or_like('nama_produk', $where);
        $this->db->or_like('status', $where);
        $this->db->or_like('jumlah_produk', $where);
        $this->db->or_like('tanggal', $where);

        return $this->db->get();
    }
    public function exportHistoriInput()
    {
        // $this->db->from('emp');
        // $this->db->limit(10);
        // $query = $this->db->get();
        // return $query->result_array();
        $this->db->select(array('id_histori', 'nama', 'id_block', 'nama_produk', 'status', 'jumlah_produk', 'tanggal'));
        $this->db->from('histori');
        $this->db->join('produk', 'produk.id_produk = histori.id_produk');
        $this->db->join('user', 'user.id = histori.id_user');
        $this->db->where('status', 'Input Barang');
        $this->db->where("tanggal BETWEEN ADDDATE(NOW(),-7) AND NOW()");
        $this->db->order_by('tanggal', 'desc');
        return $this->db->get()->result_array();
    }
    public function exportHistoriOutput()
    {
        // $this->db->from('emp');
        // $this->db->limit(10);
        // $query = $this->db->get();
        // return $query->result_array();
        $this->db->select(array('id_histori', 'nama', 'id_block', 'nama_produk', 'status', 'jumlah_produk', 'tanggal'));
        $this->db->from('histori');
        $this->db->join('produk', 'produk.id_produk = histori.id_produk');
        $this->db->join('user', 'user.id = histori.id_user');
        $this->db->where('status', 'Output Barang');
        $this->db->where("tanggal BETWEEN ADDDATE(NOW(),-7) AND NOW()");
        $this->db->order_by('tanggal', 'desc');
        return $this->db->get()->result_array();
    }
    //manajemen kategori
    // public function getKategori()
    // {
    //     return $this->db->get('kategori');
    // }

    // public function kategoriWhere($where)
    // {
    //     return $this->db->get_where('kategori', $where);
    // }

    // public function simpanKategori($data = null)
    // {
    //     $this->db->insert('kategori', $data);
    // }

    // public function hapusKategori($where = null)
    // {
    //     $this->db->delete('kategori', $where);
    // }

    // public function updateKategori($where = null, $data = null)
    // {
    //     $this->db->update('kategori', $data, $where);
    // }



    // public function getLimitBuku()
    // {
    //     $this->db->limit(5);
    //     return $this->db->get('buku');
    // }
}