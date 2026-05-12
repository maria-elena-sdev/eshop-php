<?php
    require 'connection.php';
    session_start();
    $item_id = $_GET['id'];
    $user_id = $_SESSION['id'];
    $remove_from_cart_query = "DELETE FROM users_items WHERE user_id='$user_id' AND item_id='$item_id'";
    $remove_from_cart_result = mysqli_query($con,$remove_from_cart_query) or die(mysqli_error($con));
    header('location: cart.php');
?>
