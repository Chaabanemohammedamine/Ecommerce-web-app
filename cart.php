<?php
 include('includes/header.php');
?>

<div class="container">
    <div class="card main bg-light">
        <?php include('includes/logo.php');?>
        <?php include('includes/navigation.php');?>
        <div class="row">
            <div class="col-md-12">
            <?php
              if(isset($_GET['message'])){
                  echo' <div class="alert alert-danger p-2 mt-2">'.$_GET['message'].'</div>';
              }
            ?>
                <div class="card mt-2 mb-3 mx-2">
                    <table class="table table-hover">
                
                        <thead>
                            <th>Produit</th>
                            <th>Prix</th>
                            <th>Quantité</th>
                            <th>Total</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                        <?php
                              foreach($_SESSION as $name => $product):
                            ?>
                        <?php
                              if(substr($name,0,8) == "products"):
                                
                            ?>
                            <tr>
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
                                <a href="cancel_cart.php?id=<?php echo !empty($product['id']) ? $product['id'] : "" ?>&price=<?php echo !empty($product['total']) ? $product['total'] : ""?> "
                                    class="btn btn-danger"> <i class="fa fa-trash"></i></a>
                            </td>
                            </tr>
                    <?php
                              endif; 
                            ?>
                    <?php
                             endforeach;
                            ?>
                      </tbody>
                        </table>          
                </div>
                <div class="row">
                    <div class="col-md-4 ml-auto mt-2 mb-3 mx-2">
                        <table class="table table-bordered">
                            <thead>
                                <th>Produits</th>
                                <th>Total HT</th>
                            </thead>
                            <tbody>
                                <td>
                                    <?php echo !empty($_SESSION['count']) ? $_SESSION['count'] : "" ?>
                                </td>
                                <td class="text-danger font-weight-bold">
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
<script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '0.01'
          }
        }]
      });
    }
  }).render('#paypal-button-container');
</script> 