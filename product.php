<?php include('includes/header.php');?>

<div class="container">
    <div class="card main bg-light">
        <?php include('includes/logo.php');?>
        <?php include('includes/navigation.php');?>
        <div class="col-md-12">
            <div class="card mt-4 p-1">
                <div class="card-body">
                    <h5 class="card-header bg-info text-white"><i class="fa fa-archive"></i> Article</h5>
                    <div class="row">
                        <div class="col-md-7">
                            <?php
                                   $id = escape_string($_GET['id']);
                                   $query = "SELECT * FROM products WHERE product_id = '$id'";
                                   $result = query($query);
                                   $row =  fetch_array($result);
                                ?>
                            <div class="card-img-top text-center mt-4">
                                <img src="<?php echo $row['product_image']; ?>" class="w-100 img-fluid" alt="">
                            </div>
                            <div class="ml-4">
                                <h4 class="card-title"> <?php echo $row['product_title'];?> </h4>
                                <p><span class="badge badge-success"><?php echo $row['product_price'].'DH'; ?></span> <span class="text-danger"><strike><?php echo $row['old_price'].'DH'; ?></strike></span></p>
                                <p class="lead card-text"><?php echo $row['product_description'];?></p>
                            </div>
                        </div>
                        <div class="col-md-4 mt-3 ml-12">
                            <form action="checkout.php" method="post">
                                <div class="form-group">
                                    <label for="qte">Qté*</label>
                                    <input type="number" name="qte" style="width:20%;" class="form-control" value="1">
                                    <input type="hidden" name="product" value="<?php echo $row['product_title'];?> ">
                                    <input type="hidden" name="id" value="<?php echo $row['product_id'];?> ">
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-cart-arrow-down"></i>
                                    Ajouter au
                                    panier</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <footer style="background-color: #e3f2fd;" class="mt-2">
            <p class="lead text-center  mt-2">AmineShop&copy;2021</p>
        </footer>

    </div>
    <?php include('includes/footer.php');?>