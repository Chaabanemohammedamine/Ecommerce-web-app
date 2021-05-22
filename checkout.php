<?php
require('includes/functions.php');
if(isset($_POST['id']) && isset($_POST['qte'])){
    $id = escape_string($_POST['id']);
    $qte= escape_string($_POST['qte']);
    $sql = "SELECT * FROM products WHERE product_id = '$id'";
    $result = query($sql);
    $product = fetch_array($result);
    $_SESSION['products_' .$product['product_id']] = array(
        'id' => $product['product_id'],
        'product' =>$product['product_title'],
        'price' =>$product['product_price'],
        'qte' => $qte,
        'total' => $product['product_price'] * $qte,
    );
    $_SESSION['totaux'] += $_SESSION['products_' .$product['product_id']]['total'];
    $_SESSION['count'] += 1;
    redirect("cart.php");

}
 