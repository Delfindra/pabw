<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Cart_model;

class cart extends Controller
{
    protected $model_cart;
    function __construct()
    {
        $this->model_cart = new Cart_model();
    }


    public function index()
    {
        $data['product_list'] = $this->model_cart->get_product_list();

        echo view('layout/template');
        echo view('layout/navbar');
        echo view('pages/cart', $data);
    }

    public function save()
    {
        $cek = $this->request->getPost('no');
        $data1 = array("note" => $this->request->getPost('specialNotes'));
        $banyak = 0;
        for ($no = 1; $no <= $cek; $no++) {
            $cek_kosong = $this->request->getPost('cartQty' . $no);
            if ($cek_kosong != null) {
                $data2['id_produk'][$banyak] = $this->request->getPost('produk_cart' . $no);
                $data2['qty'][$banyak]  = $cek_kosong;
                $banyak++;
            }
        }
        $data2['banyak'] = $banyak;
        $last_id = $this->model_cart->save_pesanan($data1, $data2);
        return redirect()->to('cart/invoice/' . $last_id);
    }

    public function invoice($id)
    {


        $data['product_list'] =  $this->model_cart->get_pesanan($id);
        $data['id_test'] = $id;
        echo view('layout/template');
        echo view('layout/navbar');
        echo view('pages/invoice', $data);
    }

    public function update()
    {
        $cek = $this->request->getPost('no');
        $id_pesanan = $this->request->getPost('id_pesanan');
        $data1 = array("note" => $this->request->getPost('specialNotes'));
        $banyak = 0;
        for ($no = 1; $no <= $cek; $no++) {
            $data2['id_transaksi'][$banyak]  = $this->request->getPost('id_transaksi' . $no);
            $data2['qty'][$banyak]  =  $this->request->getPost('cartQty' . $no);
            $banyak++;
        }
        $data2['banyak'] = $banyak;
        print_r($data1);
        print_r($data2);
        $this->model_cart->update_pesanan($id_pesanan, $data1, $data2);
        return redirect()->to('cart/invoice/' . $id_pesanan);
    }

    public function delete($id_pesanan)
    {
        $this->model_cart->delete_pesanan($id_pesanan);
        return redirect()->to('cart');
    }
}
