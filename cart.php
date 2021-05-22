<?php
 include('includes/header.php');

?>
<div class="container">
    <div class="card main bg-light">
        <?php include('includes/logo.php');?>
        <?php include('includes/navigation.php');?>
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-2 mb-3 mx-2">
                    <table class="table table-hover">
                        <?php
                              foreach($_SESSION as $name => $product):
                            ?>
                        <?php
                              if(substr($name,0,9) == "products_"):
                                print_r($product);
                            ?>
                        <thead>
                            <th>Produit</th>
                            <th>Prix</th>
                            <th>Quantité</th>
                            <th>Total</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <td>
                                <?php echo !empty($product['product']) ? $product['product'] : "" ?>
                            </td>
                            <td>
                                <?php echo !empty($product['price']) ? $product['price'] : ""  ?>
                            </td>
                            <td>
                                <?php echo !empty($product['qte']) ? $product['qte'] : ""  ?>
                            </td>
                            <td>
                                <?php echo !empty($product['total']) ? $product['total'] : ""  ?>
                            </td>
                            <td>
                                <a href="cancel_cart.php?id=<?phpecho !empty($product['id']) ? $product['id'] : ""?> "
                                    class="btn btn-danger"> <i class="fa fa-trash"></i></a>
                            </td>
                        </tbody>
                    </table>
                    <?php
                              endif; 
                            ?>
                    <?php
                             endforeach;
                            ?>
                </div>
                <div class="row">
                    <div class="col md-4 ml-auto">
                        <table class="table table-bordered">
                            <thead>
                                <th>Produits</th>
                                <th>Total HT</th>
                            </thead>
                            <tbody>
                                <td>
                                    <?php echo !empty($_SESSION['count']) ? $_SESSION['count'] : "" ?>
                                </td>
                                <td>
                                    <?php echo !empty($_SESSION['totaux']) ? $_SESSION['totaux'].' DH' : "" ?>
                                </td>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <footer style="background-color: #e3f2fd;" class="mt-2">
            <p class="lead text-center  mt-2">AmineShop&copy;2021</p>
        </footer>
    </div>
</div>