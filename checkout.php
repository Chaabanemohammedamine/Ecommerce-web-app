<?php
require('includes/functions.php');
if(isset($_POST['id']) && isset($_POST['qte'])){
    $id = escape_string($_POST['id']);
    $qte= escape_string($_POST['qte']);
    $sql = "SELECT * FROM products WHERE product_id = '$id'";
    $result = query($sql);
    $product = fetch_array($result);
    if($_SESSION['product'.$id]['product'] == $_POST['product']){
       $message = "Vous avez déja ajouté ce produit dans votre panier";
       redirect("cart.php?message=" .$message);
    }else{
        if($product['product_quantity'] < $qte ){
           $message = "La quantité disponible en stock est : ".$product['product_quantity'];
           redirect("cart.php?message=" .$message);
    }else{
        $_SESSION['products' .$product['product_id']] = array(
            'id' => $product['product_id'],
            'product' =>$product['product_title'],
            'price' =>$product['product_price'],
            'qte' => $qte,
            'total' => $product['product_price'] * $qte,
        );
        $_SESSION['totaux'] += $_SESSION['products' .$product['product_id']]['total'];
        $_SESSION['count'] += 1;
        redirect("cart.php");
        }
    }
}
?>
AfzFvaCndAfWnqN2LCF7ZXvdAH80r07bVXwfrAhQ5WcM3HccHMw973iGxUPkmgn3yCu3zw86CLVmOTFV