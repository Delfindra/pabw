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
                                <form action="<?= base_url('cart/save') ?>" method="post">
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
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $no = 0;
                                                        foreach ($product_list as $row) :
                                                            $no++;
                                                        ?>
                                                            <tr>
                                                                <th scope="row"><?= $no ?></th>

                                                                <td><img src="<?php echo base_url('img/produk/' .$row['gambar']); ?>" class="img-fluid" width="50" alt="product"></td>
                                                                <td><?= $row['nama_produk'] ?></td>
                                                                <td>
                                                                    <div class="form-group mb-0">
                                                                        <input type="hidden" name="produk_cart<?= $no ?>" id="produk_cart<?= $no ?>" value="<?= $row['id_produk'] ?>">
                                                                        <input type="number" class="form-control cart-qty" name="cartQty<?= $no ?>" id="cartQty<?= $no ?>">
                                                                    </div>
                                                                </td>
                                                                <td>Rp <?= $row['harga_produk'] ?></td>
                                                            </tr>
                                                        <?php
                                                        endforeach; ?>
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
                                                                <textarea class="form-control" name="specialNotes" id="specialNotes" rows="4" placeholder="Message here"></textarea>
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
                                                                    <td>Rp -</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Tax(10%) :</td>
                                                                    <td>Rp -</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="f-w-7 font-18">
                                                                        <h4>Amount :</h4>
                                                                    </td>
                                                                    <td class="f-w-7 font-18">
                                                                        <h4>Rp -</h4>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-footer text-right">
                                            <button type="submit" class="btn btn-info my-1"><i class="ri-save-line mr-2"></i>Save Cart</button>
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