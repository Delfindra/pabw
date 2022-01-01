<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- cart -->
<br><br><br><br>
<div class="container">
    <div class="contentbar">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="card-title">Cart</h5>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-xl-8">
                                <form action="<?= base_url('cart/update') ?>" method="post">
                                    <div class="cart-container">
                                        <div class="cart-head">
                                            <div class="table-responsive">
                                                <table class="table table-borderless">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Photo</th>
                                                            <th scope="col">Product</th>
                                                            <th scope="col">Qty</th>
                                                            <th scope="col">Price/Pcs</th>
                                                            <th scope="col">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        // print_r($product_list);
                                                        $no = 0;
                                                        $total = 0;
                                                        $sub_total  = 0;
                                                        foreach ($product_list as $row) :
                                                            $temp_price = 0;
                                                            $temp_price = $row['harga_produk'] * $row['qty'];
                                                            $sub_total = $sub_total + $temp_price;
                                                            $no++;
                                                        ?>
                                                            <tr>
                                                                <th scope="row"><?= $no ?></th>

                                                                <td><img src="<?php echo base_url('img/produk/' . $row['gambar']); ?>" class="img-fluid" width="50" alt="product"></td>
                                                                <td><?= $row['nama_produk'] ?></td>
                                                                <td>
                                                                    <div class="form-group mb-0">
                                                                        <input type="number" class="form-control cart-qty" name="cartQty<?= $no ?>" id="cartQty<?= $no ?>" value="<?= $row['qty'] ?>">
                                                                        <input type="hidden" name="id_transaksi<?= $no ?>" id="id_transaksi<?= $no ?>" value="<?= $row['id_transaksi'] ?>">
                                                                    </div>
                                                                </td>
                                                                <td>Rp <?= $row['harga_produk']  ?></td>
                                                                <td>Rp <?= $temp_price  ?></td>
                                                            </tr>
                                                        <?php endforeach;
                                                        $tax = $sub_total * 10 / 100 ?>

                                                        <input type="hidden" name="no" id="no" value="<?= $no ?>">
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="cart-body">
                                            <div class="row">
                                                <div class="col-md-12 order-2 order-lg-1 col-lg-5 col-xl-6">
                                                    <div class="order-note">
                                                        <form>
                                                            <div class="form-group">
                                                                <label for="specialNotes">Special Note for this order:</label>
                                                                <textarea class="form-control" name="specialNotes" id="specialNotes" rows="4" placeholder="Message here"><?= $product_list[0]['note'] ?></textarea>
                                                                <input type="hidden" name="id_pesanan" id="id_pesanan" value="<?= $row['id_pesanan'] ?>">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 order-1 order-lg-2 col-lg-7 col-xl-6">
                                                    <div class="order-total table-responsive ">
                                                        <table class="table table-borderless text-right">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Sub Total :</td>
                                                                    <td>Rp <?= $sub_total ?></td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Tax(10%) :</td>
                                                                    <td>Rp <?= $tax ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="f-w-7 font-18">
                                                                        <h4>Amount :</h4>
                                                                    </td>
                                                                    <td class="f-w-7 font-18">
                                                                        <h4>Rp <?= $sub_total + $tax ?></h4>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-footer text-right">
                                            <button type="submit" class="btn btn-info my-1"><i class="ri-save-line mr-2"></i> Update Cart</button>
                                            <a href="<?= base_url('cart/delete/' . $row['id_pesanan']) ?>" class="btn btn-danger my-1">Delete Cart <i class="ri-delete-bin-2-line ml-2"></i></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>