<div class="content-wrapper" style="min-height: 359px; background-color: #fff;">
    <?php
   if (isset($_GET['action']) && $_GET['query']) {
      $tam = $_GET['action'];
      $query = $_GET['query'];
   } else {
      $tam = '';
      $query = '';
   }
  
   if ($tam == 'quanlysp' && $query == 'them') {
      include("modules/quanlysp/them.php");
   } 
   elseif ($tam == 'quanlysp' && $query == 'lietke'){
      include("modules/quanlysp/lienke.php");
   }
   elseif ($tam == 'quanlysp' && $query == 'sua') {
      include("modules/quanlysp/sua.php");
   } 
   elseif ($tam == 'quanlydonhangddk' && $query == 'lietke') {
      include("modules/quanlydonhang/lietke-registered.php");
   } 
   
   elseif ($tam == 'donhang' && $query == 'xemdonhang') {
      include("modules/quanlydonhang/xemdonhang.php");
   } 
   elseif ($tam == 'taikhoannguoidung' && $query == 'lietke') {
      include("modules/quanlytaikhoan/lietkekhachhang.php");
   }
   elseif ($tam == 'add' && $query == 'them') {
      include("modules/themadmin/addadmin.php");
   }
   else {
      include("modules/dashboard.php");
   }
   ?>
</div>