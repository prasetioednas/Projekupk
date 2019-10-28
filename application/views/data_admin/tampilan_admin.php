
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
              <input type="text" class="form-control" name="id_username" value ="<?php echo $nomor; ?>" readonly >
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
          <button type="button" class="btn btn-primary btn-block margin-bottom col-md-3" data-toggle="modal" data-target="#modal-default">
              <i class="fa fa-plus-circle"></i> Tambah Admin
              </button>
         </div>
        <!-- /.col -->
    <div class="col-md-12">
    <div class="box">
      
            <div class="box-header">
              <h3 class="box-title">ADMIN</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                  <th>No</th>
                  <th>ID Username</th>
                  <th>Email</th>
                  <th>Username</th>
                  <th>Nama Lengkap</th>
                  <th>Aksi</th>
                </tr>
              </thead>
                <tbody>
                  <tr>
                    <?php 
                    $no=1;
                      foreach($isi->result() as $row){
                    ?>
                    <td><?php echo $no++;  ?></td>
                    <td><?php echo $row->id_username;  ?></td>
                    <td><?php echo $row->email;  ?></td>
                    <td><button class="btn btn-block"><?php echo $row->username;  ?></button></td>
                    <td><?php echo $row->namalengkap;  ?></td>
                    <td>
                      <a href="<?php echo site_url()?>/user_admin/hapus_data/<?php echo $row->id_username; ?>" class="btn btn-danger" onClick='return confirm("Apakah Ada yakin menghapus <?php echo $row->namalengkap;?> ?")'><i class="fa fa-trash"></i></a>
                    </td>
                 </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

          <!-- /.box -->
        </div>
      </section>