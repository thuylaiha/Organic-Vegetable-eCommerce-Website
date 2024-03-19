<?php
$sql_pro_sale = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc = tbl_sanpham.id_danhmuc AND tbl_sanpham.gia_sale > '0' ORDER BY tbl_sanpham.id_sp ASC" ;
$query_pro_sale = mysqli_query($mysqli,$sql_pro_sale);
?>
<?php
$sql_pro_raucu = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc = tbl_sanpham.id_danhmuc AND tbl_sanpham.id_danhmuc='2' ORDER BY tbl_sanpham.id_sp ASC";
$query_pro_raucu = mysqli_query($mysqli,$sql_pro_raucu);
?>
<?php
$sql_pro_nam = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc = tbl_sanpham.id_danhmuc AND tbl_sanpham.id_danhmuc='3' ORDER BY tbl_sanpham.id_sp ASC";
$query_pro_nam = mysqli_query($mysqli,$sql_pro_nam);
?>
<?php
$sql_post = "SELECT * FROM tbl_baiviet ORDER BY id_baiviet DESC";
$query_post = mysqli_query($mysqli,$sql_post);
?>
<!-- //todo slider -->
<div id="myCarousel" class="carousel slide border" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="./assets/img/bia4.jpg" alt="Leopard">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="./assets/img/bia5.jpg" alt="Cat">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="./assets/img/bia6.jpg" alt="Lion">
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- //todo container product sales -->
<div class="container-product-sales">
    <div class="container-product-sales-heading">
        <strong>Sản phẩm đang sale</strong>
        <p>Thêm các sản phẩm giảm giá vào hàng tuần</p>
    </div>
    <div class="container-product-sales-slider">
        <?php
        while ($row_pro_sale = mysqli_fetch_array($query_pro_sale)){
        ?>
        <form action="pages/main/addtocart.php?id=<?php echo $row_pro_sale["id_sp"]?>" method="POST">
            <div class=" container-product-sales-item">
                <div class="container-product-sales-img">
                    <img src="admin/modules/quanlysp/uploads/<?php echo $row_pro_sale['hinhanh']?>" alt="">
                </div>
                <div class="product-icon-cart">
                    <ul class="icon-cart-list">
                        <li class="icon-cart-item">
                            <i class="fa-solid fa-heart"></i>
                        </li>
                        <li class="icon-cart-item">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </li>
                        <li class="icon-cart-item">
                            <i class="fa-solid fa-right-left"></i>
                        </li>
                    </ul>
                </div>
                <p class="product-cate">
                    <?php echo $row_pro_sale['tendanhmuc'] ?>
                </p>
                <a href="index.php?quanly=sanpham&id=<?php echo $row_pro_sale['id_sp'] ?>&iddm=<?php echo $row_pro_sale['id_danhmuc']?>"
                    class="product-title">
                    <?php echo $row_pro_sale['tensp']?>
                </a>
                <?php
                if($row_pro_sale['gia_sale']>0){
                ?>
                <p style="text-decoration: line-through;" class="product-price">
                    <?php echo number_format($row_pro_sale['giasp'],0,',','.'). ' vnđ'?>
                </p>
                <p class="product-price-sales">
                    <?php echo number_format($row_pro_sale['gia_sale'],0,',','.'). ' vnđ'?>
                </p>
                <?php
                }else{
                ?>
                <p class="product-price">
                    <?php echo number_format($row_pro_sale['giasp'],0,',','.'). ' vnđ'?>
                </p>
                <?php
                }
                ?>
                <input type="submit" name="themgiohang" value="Thêm giỏ hàng" class="add-to-cart">
            </div>
        </form>
        <?php
        }
        ?>
    </div>
</div>

<div class="go-to-top js-top">
    <a href="#top">
        <i class="fa-solid fa-up-long"></i>
    </a>
</div>