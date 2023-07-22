<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelActivity extends CI_Model
{
    //manajemen buku
    public function getOrder()
    {
        return $this->db->get('isigudang');
    }
    public function getActivity()
    {
        $this->db->from("histori");
        $this->db->select(" COUNT(id_histori) as count, jumlah_produk as s, DAYNAME(tanggal) as day");
        $this->db->where("tanggal BETWEEN ADDDATE(NOW(),-7) AND NOW()");
        $this->db->where("status", 'Input Barang');
        $this->db->group_by("DAYNAME(tanggal), s");
        return $this->db->get();
    }
    public function getActivityOutput()
    {
        $this->db->from("histori");
        $this->db->select(" COUNT(id_histori) as count, jumlah_produk as s, DAYNAME(tanggal) as day");
        $this->db->where("tanggal BETWEEN ADDDATE(NOW(),-7) AND NOW()");
        $this->db->where("status", 'Output Barang');
        $this->db->group_by("DAYNAME(tanggal), s");
        return $this->db->get();
    }
    public function getProduk()
    {
        $this->db->from('produk');
        $this->db->order_by("id_kategori", "asc");
        return $this->db->get();
    }
    public function getGudang()
    {
        $this->db->from('gudang');
        $this->db->select('COUNT(id_block) as id_block, status_block');
        $this->db->group_by('status_block');
        return $this->db->get();
    }
    public function getHistori()
    {
        return $this->db->get('histori');
    }
    public function orderWhereGudang($where)
    {
        return $this->db->get_where('gudang', $where);
    }
    public function orderWhere($where)
    {
        return $this->db->get_where('isigudang', $where);
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