<?php
    if(isset($_GET['quanly'])){
        $tam = $_GET['quanly'];
    }else{
        $tam = '';
    }
    if($tam == 'shop'){
        include("main/shop.php");
    }
    elseif($tam == 'danhmuc'){
        include("main/categories.php");
    }
    elseif($tam == 'sanpham'){
        include("main/product.php");
    }
    elseif($tam == 'timkiem'){
        include("main/search.php");
    }
    elseif($tam == 'giohang'){
        include("main/cart.php");
    }
    elseif($tam == 'camon'){
        include("main/thanks.php");
    }
    else{
        include("main/index.php");
    }
?>