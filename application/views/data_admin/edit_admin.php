 <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>Admin</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="<?= base_url('user')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Laporan Pembayaran</p>
            </div>
            <div class="icon">
              <i class="fa fa-money"></i>
            </div>
            <a href="<?= site_url('laporan/index') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>Siswa</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="<?= site_url('siswa/index')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Kelas</p>
            </div>
            <div class="icon">
              <i class="fa fa-bank"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

<!-- TAMBAH MODAL CLIENT -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">TAMBAH ADMIN</h4>
        </div>
        <div class="modal-body">
          
          </div>
          <!-- /.box-header -->
           <form action="<?php echo site_url('user_admin/simpan_data');?>" method="POST">
          <div class="box-body" id="view">
            <div class="form-group">
             <div class="input-group">
              <div class="input-group-addon">
                <b>ID Username</b>
              </div>
              <input type="text" class="form-control" name="id_username" placeholder="ID Username" >
            </div>
          </div>
         
      <div class="form-group has-feedback">
        <input type="email" focus="true" name="email" class="form-control" required="required" placeholder="Email">
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" required="required" placeholder="Username">
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" required="required" placeholder="password">
      </div>
       <div class="form-group has-feedback">
        <input type="text" name="namalengkap" class="form-control" placeholder="Nama Lengkap">
      </div>
      
            </div>
            <div class="modal-footer">
         <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-close"> Batal</span></button>
            <button type="submit" name="register" class="btn btn-primary"><span class="fa fa-save"> Simpan</span></button>    </div>

          </div>
        </div>
      </div>
    </form>
    <!-- END MODAL TAMBAH CLIENT -->
      <!-- tabel -->
      <section class="content">
      <div class="row">
        <div class="col-md-3">
              
   <button type="button" class="btn btn-success btn-block margin-bottom" data-toggle="modal" data-target="#modal-default">
              <i class="fa fa-plus-circle"></i> Tambah Admin
              </button>
         </div>
        <!-- /.col -->
    <div class="col-md-9">
    <div class="box">
            <div class="box-header">
              <h3 class="box-title">UPDATE SISWA</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
          <!-- /.box-header -->
           <form action="<?php echo site_url('user_admin/action_update');?>" method="POST">
          <div class="box-body" id="view">
            <div class="form-group">
             <div class="input-group">
              <div class="input-group-addon">
                <b>ID Username</b>
              </div>
              <input type="text" class="form-control" name="id_username" placeholder="ID Username" >
            </div>
          </div>
         
      <div class="form-group has-feedback">
        <input type="email" focus="true" name="email" class="form-control"  >
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" >
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password"  >
      </div>
       <div class="form-group has-feedback">
        <input type="text" name="namalengkap" class="form-control"  >
      </div>
            <button type="submit" name="simpan" class="btn btn-primary"><span class="fa fa-save"> Simpan</span></button>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </section>