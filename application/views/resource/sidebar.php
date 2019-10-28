<ul class="sidebar-menu" data-widget="tree">
  <li class="header">HEADER</li>
  <li class="active"><a href="<?= site_url('home'); ?>"><i class="fa fa-dashboard"></i> <span>Beranda</span></a></li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-laptop"></i>
      <span>Master Data</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?= site_url('user_admin'); ?>"><i class="fa fa-user"></i>Admin</a></li>
      <li><a href="<?= site_url('user_siswa')?>"><i class="fa fa-users"></i> Siswa</a></li>
      <li><a href="<?= site_url('kelas')?>"><i class="fa fa-bank"></i> Kelas</a></li>
      <li><a href="<?= site_url('jenis_pembayaran'); ?>"><i class="fa fa-inbox"></i> Jenis Pembayaran</a></li>
              </li>
    </ul>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-exchange"></i>
      <span>Transaksi</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?= site_url('laporan'); ?>"><i class="fa fa-money"></i>Pembayaran SPP</a></li>
    </ul>
  </li>
  
  <li class="header">Setting</li>
  <li><a href="<?= site_url('utilitas')?>"><i class="fa fa-circle-o text-red"></i> <span>Backup</span></a></li>
  <!-- <li><a href="<?= site_url('utilitas/rest')?>"><i class="fa fa-circle-o text-green"></i> <span>Restore</span></a></li> -->

</ul>