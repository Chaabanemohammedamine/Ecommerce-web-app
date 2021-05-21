<?php
include('includes/header.php');
$id = escape_string($_GET['id']);
$sql = "SELECT * FROM products WHERE product_category_id = '$id'";
$result = query($sql);
$product = fetch_array($result);
?>

<div class="container">
    <div class="card main bg-light">
        <?php include('includes/logo.php');?>
        <?php include('includes/navigation.php');?>
        <div class="col-md-12">
        <?php
             if($product != null):
        ?>
        <div class="card-deck">
            <div class="card mt-4 p-1">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-deck">
                                <div class="card">
                                    <div class="card-bady">
                                        <div class="card-img-top">
                                            <img src="<?php echo $product['product_image'];?>" class="img-fluid" alt="">
                                        </div>
                                        <h4 class="card-title"><?php echo $product['product_title'];?></h4>
                                        <p><span class="badge badge-success"><?php echo $product['product_price'].'DH';?></span> <span
                                                class="text-danger"><strike><?php echo $product['old_price'].'DH';?></strike></span></p>
                                        <p class="lead card-text"><?php echo $product['product_description'];?></p>
                                        <p><a href="product.php?id=<?php echo $product['product_id'];?>" class="btn btn-outline-dark">Voir</a></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
            <?php
             else:
        ?>
        <div class="alert alert-info mt-4">Aucun produit trouvé</div>
        <?php
             endif;
        ?>
        </div>
        <footer style="background-color: #e3f2fd;" class="mt-2">
            <p class="lead text-center  mt-2">AmineShop&copy;2021</p>
        </footer>
    </div>
    <?php include('includes/footer.php');?>