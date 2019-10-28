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
              <input type="text" class="form-control" name="id_pembayaran" placeholder="ID Pembayaran" >
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
      
    <div class="col-md-9">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">UPDATE JENIS PEMBAYARAN</h3>
        </div>
        <!-- /.box-header -->
        <?php foreach ($get as $a): ?>
        <div class="box-body">
          <!-- /.box-header -->
          <form action="<?php echo site_url('jenis_pembayaran/action_update');?>" method="POST">
            <div class="box-body" id="view">
              <div class="form-group">
                <div class="input-group">
                </div>
              </div>

              <div class="form-group has-feedback">
                <input type="text" value="<?= $this->uri->segment(3) ?>" class="form-control" name="id_pembayaran" value="<?= $a->id_pembayaran?>" readonly>
              </div>
              <div class="form-group has-feedback">
                <input type="text" name="nama_pembayaran" class="form-control" value="<?= $a->nama_pembayaran;?>">
              </div>
               <div class="form-group has-feedback">
                <input type="text" name="harga" class="form-control" value="<?= $a->harga;?>">
              </div>
              <button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>  
        <?php endforeach ?>
        
      </section>