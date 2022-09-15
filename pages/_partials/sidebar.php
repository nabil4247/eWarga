<?php
function is_active($page) {
  $uri = "$_SERVER[REQUEST_URI]";
  if (strpos($uri, $page)) {
    echo 'active';
  }
}
?>

<ul class="nav nav-sidebar">
  <li class="<?php is_active('dasbor'); ?>">
    <a href="../dasbor"><i class="glyphicon glyphicon-home"></i> Dashboard</a>
  </li>
</ul>

<ul class="nav nav-sidebar">
  <li class="<?php is_active('warga'); ?>">
    <a href="../warga"><i class="glyphicon glyphicon-book"></i> Data Warga</a>
  </li>
  <li class="<?php is_active('kartu-keluarga'); ?>">
    <a href="../kartu-keluarga"><i class="glyphicon glyphicon-inbox"></i> Data Kartu Keluarga</a>
  </li>
  <li class="<?php is_active('mutasi'); ?>">
    <a href="../mutasi"><i class="glyphicon glyphicon-export"></i> Data Mutasi</a>
  </li>
</ul>

<ul class="nav nav-sidebar">
  <li class="<?php is_active('galeri'); ?>">
    <a href="../galeri"><i class="glyphicon glyphicon-picture"></i> Galeri</a>
  </li>
</ul>

<?php if ($_SESSION['user']['status_user'] != 'RW'): ?>
<ul class="nav nav-sidebar">
  <li class="<?php is_active('user'); ?>">
    <a href="../user"><i class="glyphicon glyphicon-user"></i> User</a>
  </li>
</ul>

<h5 class="page-header"><a href="../dasbor/changelog.php"> Aplikasi v1.1u20220916</a></h5>
<?php
echo date('l, d-m-Y  h:i:s');
?>
<?php endif; ?>
