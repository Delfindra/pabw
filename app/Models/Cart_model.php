<?php

namespace App\Models;

use CodeIgniter\Model;

$db = db_connect();

class Cart_model extends Model
{

    public function get_product_list()
    {

        $query   = $this->query('SELECT * FROM produk');
        $results = $query->getResultArray();

        return $results;
    }

    public function get_pesanan($id_pesanan)
    {

        $query = $this->db->table("pesanan")->where('pesanan.id_pesanan', $id_pesanan)
        ->join('transaksi', 'pesanan.id_pesanan = transaksi.id_pesanan')
        ->join('produk', 'transaksi.id_produk = produk.id_produk')
        ->get()->getResultArray();
        return $query;
    }

    public function save_pesanan($data1, $data2)
    {

        $this->db->table("pesanan")->insert($data1);
        $quert_last = $this->query('SELECT * FROM pesanan ORDER BY id_pesanan DESC LIMIT 1')->getResultArray();
        $last_id = $quert_last[0]['id_pesanan'];
        for ($i = 0; $i < $data2['banyak']; $i++) {
            $data = array(
                'id_pesanan' => $last_id,
                'id_produk' => $data2['id_produk'][$i],
                'qty' => $data2['qty'][$i],
            );
            $this->db->table("transaksi")->insert($data);
        }

        return $last_id;
    }

    public function update_pesanan($id_pesanan, $data1, $data2)
    {
        $this->db->table("pesanan")->update($data1, array('id_pesanan' => $id_pesanan));

        for ($i = 0; $i < $data2['banyak']; $i++) {
            $id_transaksi = $data2['id_transaksi'][$i];
            $data = array(
                'qty' => $data2['qty'][$i],
            );
            $this->db->table("transaksi")->update($data, array('id_transaksi' => $id_transaksi));
        }

        return $id_pesanan;
    }
    public function delete_pesanan($id_pesanan)
    {
        $this->db->table('pesanan')->delete(array('id_pesanan' => $id_pesanan));
    }
}
