<?php
    include("././admin/config/config.php");
?>
<?php
    $sql_desc = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sp = '$_GET[id]' LIMIT 1";
    $query_desc = mysqli_query($mysqli,$sql_desc);
?>
<?php
    $sql_pro_bonnus = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_danhmuc = '$_GET[iddm]' LIMIT 5";
    $query_pro_bonnus = mysqli_query($mysqli, $sql_pro_bonnus);
?>

<div class="page-product">
    <div class="page-product-heading">
        <div class="page-product-heading-text">
            <h2>Sản Phẩm</h2>
            <p>Trang chủ > Sản phẩm</p>
        </div>
    </div>
    <?php
    while($row_desc = mysqli_fetch_array($query_desc)){
    ?>
    <div class="page-product-body">
        <div class="page-product-body-left">
            <img src="admin/modules/quanlysp/uploads/<?php echo $row_desc['hinhanh'] ?>" alt=""
                class="page-product-body-left-img">
        </div>
        <form action="pages/main/addtocart.php?id=<?php echo $row_desc['id_sp'] ?>" method="POST">
            <div class="page-product-body-right">
                <h2 class="page-product-body-right-title">
                    <?php echo $row_desc['tensp']?>
                </h2>
                <p class="page-product-body-right-cate">
                    <?php echo $row_desc['tendanhmuc']?>
                </p>
                <div class="page-product-body-right-star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <?php
                    if($row_desc['gia_sale']>0){
                ?>
                <p style="text-decoration: line-through;" class="page-product-body-right-price">
                    Giá: <?php echo number_format($row_desc['giasp'],0,'.','.')." vnđ" ?>
                </p>
                <p class="page-product-body-right-price-sale">
                    Giá sale: <?php echo number_format($row_desc['gia_sale'],0,'.','.')." vnđ" ?>
                </p>
                <?php
                }else{
                ?>
                <p class="page-product-body-right-price">
                    Giá: <?php echo number_format($row_desc['giasp'],0,'.','.')." vnđ" ?>
                </p>
                <?php
                }
                ?>
                <p class="page-product-body-right-desc">
                    <?php echo $row_desc['mota']?>
                </p>
                <input type="submit" name="themgiohang" value=" +Thêm Giỏ Hàng" class="page-product-body-right-cart">
                <div class="page-product-body-right-social">
                    <p>Share</p>
                    <div class="page-product-body-right-social-list">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-google"></i>
                       
                    </div>
                </div>
                <ul class="page-product-body-right-support">
                    <li class="page-product-body-right-support-item">
                        <i class="fa-solid fa-truck-fast"></i>
                        <p>Giao hàng miễn phí. Các hóa đơn trị giá 200k trở lên</p>
                    </li>
                    <li class="page-product-body-right-support-item">
                        <i class="fa-solid fa-right-left"></i>
                        <p>Hoàn trả miễn phí trong 24 giờ</p>
                    </li>
                    <li class="page-product-body-right-support-item">
                        <i class="fa-solid fa-credit-card"></i>
                        <p>Thanh toán của bạn được an toàn với chúng tôi</p>
                    </li>
                </ul>
            </div>
        </form>
    </div>
    <?php
    }
    ?>
</div>

      
</script>