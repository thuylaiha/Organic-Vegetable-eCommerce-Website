<div class="page-cart">
    <div class="page-cart-heading">
        <img src="././assets/img/bia6.jpg" alt="" class="page-cart-heading-img">
        <div class="page-cart-heading-text">
            <h2>Giỏ Hàng</h2>
            <p>Trang chủ > Giỏ hàng</p>
        </div>
    </div>
    <table style="width:100%;" class="table table-bordered">
        <thead class="" style="background-color: #000;color: #fff;">
            <tr>
                <th>ID</th>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Số lượng</th>
                <th>Giá sản phẩm</th>
                <th>Giá sale</th>
                <th>Thành tiền</th>
                <th>Quản Lý</th>
            </tr>
        </thead>
        <?php
    if (isset($_SESSION['cart'])) {
      $i = 0;
      $tongtien = 0;
        foreach ($_SESSION['cart'] as $cart_item) {
          if($cart_item['gia_sale']>0){
            $thanhtien = $cart_item['soluong'] * $cart_item['gia_sale'];
            $tongtien += $thanhtien;
            $i++;
          }else{
            $thanhtien = $cart_item['soluong'] * $cart_item['giasp'];
            $tongtien += $thanhtien;
            $i++;
          }
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $cart_item['masp']; ?></td>
            <td><?php echo $cart_item['tensp']; ?></td>
            <td><img src="admin/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" width="150px"></td>
            <td>
                <a href="pages/main/addtocart.php?cong=<?php echo $cart_item['id'] ?>">
                    <i style="color:#000;" class="fas fa-plus-circle"></i>
                </a>
                <?php echo $cart_item['soluong']; ?>
                <a href="pages/main/addtocart.php?tru=<?php echo $cart_item['id'] ?>">
                    <i style="color:#000;" class="fas fa-minus-circle"></i>
                </a>
            </td>
            <td>
                <?php echo number_format($cart_item['giasp'], 0, ',', '.') . 'vnđ'; ?>
            </td>
            <td>
                <?php echo number_format($cart_item['gia_sale'], 0, ',', '.') . 'vnđ'; ?>
            </td>
            <td>
                <?php echo number_format($thanhtien, 0, ',', '.') . 'vnđ' ?>
            </td>
            <td>
                <a style="text-decoration: none;color: #fff;padding: 2px 6px; background-color:#000;border-radius: 2px;"
                    href="pages/main/addtocart.php?xoa=<?php echo $cart_item['id'] ?>">
                    Xóa
                </a>
            </td>
        </tr>
        <?php
        }
        ?>
        <tr>
            <td colspan="8">
                <p style="float: left; font-weight: 700;font-size: 20px;color:#000;">
                    Tổng tiền:
                    <?php echo number_format($tongtien, 0, ',', '.') . 'vnđ' ?>
                </p>
                <p style="float: right;">
                    <a style="color: #fff; text-decoration: none;font-size: 18px;font-weight: normal;background-color: #000;border-radius: 2px;border: none; padding: 5px 10px;"
                        href="pages/main/addtocart.php?xoatatca=1">
                        Xóa tất cả
                    </a>
                </p>
                <div style="clear:both;"></div>
                <?php
                if (isset($_SESSION['dangky'])) {
                ?>
                <p style="text-align:center">
                    <a style="font-weight: normal;text-decoration: none;padding: 5px 10px; background-color:#000;color:#fff;font-size: 18px;"
                        href="index.php?quanly=camon">
                        Đặt hàng
                    </a>
                </p>
                <?php
                } else {
                ?>
                <p style="text-align:center">
                    <button class="js-btn-order"
                        style="font-weight: normal;padding: 5px 10px;border:none;outline:none;cursor:pointer; background-color:#000;color:#fff;font-size: 18px;"
                        href="#">
                        Đặt hàng
                    </button>
                </p>
                <p style="text-align:center">
                    <a style="font-weight: normal;text-decoration: none;padding: 5px 10px; background-color:#000;color:#fff;font-size: 18px;"
                        href="sign-up.php">
                        Đăng ký
                    </a>
                </p>
                <?php
                }
                ?>
            </td>
        </tr>
        <?php
    } else {
    ?>
        <p></p>
        <?php
    }
    ?>
    </table>
</div>



<script>
const btnOrder = document.querySelector(".js-btn-order");
const containerOrder = document.querySelector(".js-container-order");
const orderFormLeft = document.querySelector(".js-order-form-left");
const orderFormRight = document.querySelector(".js-order-form-right");

function openOrderForm() {
    containerOrder.classList.add("open");
}

function closeOrderForm() {
    containerOrder.classList.remove("open");
}

btnOrder.addEventListener("click", openOrderForm);
containerOrder.addEventListener("click", closeOrderForm);

orderFormLeft.addEventListener("click", function(event) {
    event.stopPropagation();
});
orderFormRight.addEventListener("click", function(event) {
    event.stopPropagation();
});
</script>