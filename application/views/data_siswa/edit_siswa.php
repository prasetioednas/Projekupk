
    <section class="content">
      <div class="row">
      <div class="col-md-3">
         </div>
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">UPDATE SISWA</h3>
        </div>
        <!-- /.box-header -->
        <?php foreach ($get as $a): ?>
        <div class="box-body">
          <!-- /.box-header -->
          <form action="<?php echo site_url('user_siswa/action_update');?>" method="POST">
            <div class="box-body" id="view">
              <div class="form-group">
                <div class="input-group">
                </div>
              </div>

              <div class="form-group has-feedback">
                <input type="text" focus="true" name="nipd" class="form-control" value="<?= $a->nipd; ?>" readonly>
                <input type="hidden" value="<?= $this->uri->segment(3) ?>" class="form-control" name="id_siswa" value="<?= $a->id_siswa?>" >
              </div>
              <div class="form-group has-feedback">
                <input type="text" name="nama_siswa" class="form-control" value="<?= $a->nama_siswa;?>">
              </div>
              <div class="form-group has-feedback">
                <select required="required" name="gender" class="form-control" >
                  <option value="L" <?php echo $a->gender =='L' ? 'selected' : '' ?>>L</option>
                  <option value="P" <?php echo $a->gender =='P' ? 'selected' : '' ?>>P</option>
                </select>
              </div>
              <div class="form-group has-feedback">
                <input type="text" name="id_kelas" class="form-control" value="<?= $a->id_kelas; ?>">
              </div>
              <button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-save"></i>  Simpan</button>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>  
        <?php endforeach ?>
        
      </section>
