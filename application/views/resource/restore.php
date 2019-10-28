<section class="content">
  <div class="panel">
    <div class="panel-body">
      <div class='row'>
        <div class='col-sm-12'>
          <div class="panel">
            <div class="panel-heading">Restore Database</div>
            <div class="panel-body">
              <form class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/utilitas/restorein" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="control-label col-sm-2"> Restore Database</label>
                  <div class="col-sm-6">

                      <input type="file" name="datafile" id="datafile" />
                      <button type="submit" >Upload Database</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- <form action="<?php echo base_url();?>uti/backup" method="post">
    <select required="" name="tabel">
        <?php
           foreach ($tabel as $baris) {  ?>
            <option value="<?php echo $baris->Tables_in_db_sismas; ?>"><?php echo $baris->Tables_in_db_sismas; ?></option>
        <?php } ?>
    </select>
    <button type="submit" >Backup Database</button>
</form>


<?php echo form_open_multipart('home/restore');?>
    <input type="file" name="datafile" id="datafile" />
    <button type="submit" >Upload Database</button>
</form> -->
<!-- 
 <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Restore </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?= site_url('utilitas/restoredb')?>" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">
                </div>
                 <div class="callout callout-danger">
       
                <h4>PERHATIAN !! </h4>
                 <p>FILE YANG DI TERIMA HANYA BERBENTUK SQL.</p>
              </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Upload Database</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

        </div> -->