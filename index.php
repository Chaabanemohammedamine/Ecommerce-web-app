<?php include('includes/header.php');?>

<div class="container">
    <div class="card main bg-light">
        <?php include('includes/logo.php');?>
        <?php include('includes/navigation.php');?>
        <div class="col-md-12 mx-1">
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-header bg-info text-white"><i class="fa fa-list"></i>Boutique</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-deck">
                                <?php
                                   $query = "SELECT * FROM products ";
                                   $result = query($query);
                                   while($row =  fetch_array($result)):
                                ?>
                                <div class="card">
                                    <div class="card-bady">
                                        <div class="card-img-top">
                                            <img src="<?php echo $row['product_image']; ?>" class="img-fluid" alt="">
                                        </div>
                                        <div class="ml-4">
                                            <h4 class="card-title"><?php echo $row['product_title']; ?>
                                            </h4>
                                            <p><span
                                                    class="badge badge-success"><?php echo $row['product_price'].'DH'; ?></span>
                                                <span
                                                    class="text-danger"><strike><?php echo $row['old_price'].'DH'; ?></strike></span>
                                            </p>
                                            <p class="lead card-text"><?php echo $row['short_desc']; ?>
                                            </p>
                                            <p><a href="product.php?id=<?php echo $row['product_id']; ?>" class="btn btn-outline-dark">Voir</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                   endwhile;
                                ?>
                            </div>

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