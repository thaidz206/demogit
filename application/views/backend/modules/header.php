<header class="main-header" style="background-color: #f1f1f1;">
    <a style="background-color: #ccc;" href="<?php echo base_url()?>admin" class="logo">
        <span style="color: black; font-weight: bold;" class="logo-lg">QUẢN TRỊ</span>
    </a>
    <nav class="navbar navbar-static-top" style="height: 52px">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" >
            <span style="background-color: #f1f1f1;" class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu" style="background-color: #2659f3;">
            <ul class="nav navbar-nav" style="height: 52px;  padding: 1px">
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-bell-o"></i>
                      <span class="label label-warning">
                          <?php
                          $approved = $this->Morders->orders_count_header();
                          $not_approved = $this->Morders->orders_count_header_not();
                          echo  $approved+$not_approved;
                          ?>
                      </span>
                  </a>
                  <ul class="dropdown-menu">
                      <li>
                        <ul class="menu">
                          <li>
                            <a href="#">
                              <i class="fa fa-users text-aqua"></i>
                              <?php echo $this->Morders->orders_count_header_not();?> 
                              Đơn hàng chưa duyệt
                          </a>
                      </li>
                  </ul>
              </li>
              <li>
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 
                      <?php echo $this->Morders->orders_count_header();?> 
                      Đơn hàng đang giao
                  </a>
              </li>
          </ul>
      </li>
      <li class="footer"><a href="<?php echo base_url() ?>admin/orders">Xem</a></li>
  </ul>
</li>
<li style="height: 52px">
    <a target="_blank" href="<?php echo base_url(); ?>">
        <span class="glyphicon glyphicon-home"></span>
        <span>Trang web</span>
    </a>
</li>
<?php 
$image='';
if($user['img']){
    $image=$user['img'];
}else{
    $image='user.png';
}
?>
<li class="dropdown user user-menu" style="height: 52px; padding: 0px">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <img src="public/images/admin/<?php echo $image ?>" class="user-image" alt="User Image">
        <span class="hidden-xs"><?php echo $user['fullname'] ?></span>
    </a>
    <ul class="dropdown-menu">
        <li class="user-header">
            <img src="public/images/admin/<?php echo $image ?>" class="img-circle" alt="User Image">
            <p><?php echo $user['fullname'] ?><small><?php echo $user['phone'] ?></small></p>
        </li>
        <li class="user-footer">
            <div class="pull-left">
                <a href="<?php echo base_url()?>admin/useradmin/update/<?php echo $user['id'] ?>" class="btn btn-default btn-flat">Chi tiết</a>
            </div>
            <div class="pull-right">
                <a href="admin/user/logout.html" class="btn btn-default btn-flat">Thoát</a>
            </div>
        </li>
    </ul>
</li>
</ul>
</div>
</nav>
</header>