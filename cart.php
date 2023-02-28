<?php
include "system/init.php";
// Если пользователь не авторизован, то перенаправляем его на главную страницу
if(!isset($_SESSION['logged_user'])){
    echo '<script>alert("Please auth");location.replace("/");</script>';
}
// Выводим товары из корзины
if(isset($_SESSION['logged_user'])){
    $id = $_SESSION['logged_user']->id;
    $products = R::find('cart', 'user_id = ?', [$id]);
    foreach($products as $product){
        $product_id = $product->product_id;
        $product = R::load('products', $product_id);
        echo $product->name;
        echo $product->price;
        echo $product->description;
        echo $product->image;
        echo '<a href="/delete/cart?id='.$product->id.'">Delete</a>';
    }
}
?>