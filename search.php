<?php include 'inc/header.php'; ?>


<?php 
    if(isset($_POST['search'])){

           

      ?>

           <div class="main">
    <div class="content">
      <div class="content_top">
        <div class="heading">
        <h3>Feature Products</h3>
        </div>
        <div class="clear"></div>
      </div>
        <div class="section group">
          <?php 
           $product = $_POST['product'];
            $resultProduct = $ct->searchProduct($product);
              if ($resultProduct) {
                  while ($result = $resultProduct->fetch_assoc()) {
                      ?>
        <div class="grid_1_of_4 images_1_of_4">
           <a href="details.php?proId=<?php echo $result['productId']; ?>"><img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
           <h2><?php echo $result['productName']; ?></h2>
           <p><span class="price"><?php echo $result['price']; ?></span></p>
             <div class="button"><span><a href="details.php?proId=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>
        </div>
        <?php
                  }
              } ?>
      </div>


    </div>
 </div>  

      <?php
    }else {
        header('Location: index.php');
    }

?>


<?php include 'inc/footer.php'; ?>
