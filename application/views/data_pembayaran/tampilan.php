
      <!-- TAMBAH MODAL CLIENT -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">TAMBAH JENIS TUNGGAKAN</h4>
        </div>
        <div class="modal-body">
          
          </div>
          <!-- /.box-header -->
           <form action="<?php echo site_url('jenis_pembayaran/simpan_data');?>" method="POST">
          <div class="box-body" id="view">
            <div class="form-group">
             <div class="input-group">
              <div class="input-group-addon">
                <b>ID Pembayaran</b>
              </div>
              <input type="text" class="form-control" name="id_pembayaran"  >
            </div>
          </div>
          <div class="form-group has-feedback">
        <input type="text" focus="true" name="nama_pembayaran" class="form-control" required="required" placeholder=" Nama Pembayaran">
      </div>
       <div class="form-group has-feedback">
        <input type="text" focus="true" name="harga" class="form-control" required="required" placeholder=" Harga">
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

    <section class="content">
      <div class="row">
      <div class="col-md-3">
   <button type="button" class="btn btn-primary btn-block margin-bottom" data-toggle="modal" data-target="#modal-default">
              <i class="fa fa-plus-circle"></i> Tambah Jenis Bayaran
              </button>
         </div>
    <div class="col-md-12">
    <div class="box">
            <div class="box-header">
              <h3 class="box-title">JENIS PEMBAYARAN</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                  <th>No</th>
                  <th>ID Pembayaran</th>
                  <th>Nama Pembayaran</th>
                  <th>Harga</th>
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
                    <td><?php echo $row->id_pembayaran;  ?></td>
                    <td><?php echo $row->nama_pembayaran;  ?></td>
                    <td><?php echo $row->harga;  ?></td>

                    <td align="center">
                       <a href="<?= site_url()?>/jenis_pembayaran/update/<?php echo $row->id_pembayaran; ?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
                      <a href="<?= site_url()?>/jenis_pembayaran/hapus_data/<?php echo $row->id_pembayaran; ?>" class="btn btn-danger" onClick='return confirm("Apakah Ada yakin menghapus <?php echo $row->nama_pembayaran;?> ?")'><i class="fa fa-trash"></i></a>
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
