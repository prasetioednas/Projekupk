<section class="content">
  <div class="row">
  <div class="col-md-12">
        <div class="row">
       <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Cari Data </h3>
            </div>
            <div class="box-body">
              <!-- Date range -->
              <form action="" method="POST"></form>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-2">
                <label>Bulan :</label>
                  </div> 
                  <div class="col-sm-4">
                    <select class="form-control select2" name="bulan" data-placeholder="-BULAN-">
                    <option value=""></option>
                    
                  </select>
                  </div>
                  <button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-search"></i></button> 
                </div>
                <!-- /.input group -->
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
   </div>
 </div>
</div>
<!-- /.box-body -->
<div class="col-md-13">
    <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">JENIS PEMBAYARAN</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                  <th>No</th>
                  <th>Nama Lengkap</th>
                  <th>Bulan</th>
                  <th>Jatuh Tempo</th>
                  <th>No Bayar</th>
                  <th>Tgl Bayar</th>
                  <th>Total Bayar</th>
                  <th>Keterangan</th>
                </tr>
              </thead>
                <tbody>
                  <tr>
                  <?php 
                  $no=1;
                  $sql ="SELECT * FROM transaksi";
                  $tr = $this->db->query($sql)->result();
                  foreach ($tr as $row ) {
                  ?>
                <td><?php echo $no++;  ?></td>
                <td><?php echo $row->id_siswa;  ?></td>
                <td><?php echo $row->bulan;  ?></td>
                <td><?php echo $row->jatuh_tempo;?></td>
                <td><?php echo $row->no_bayar;  ?></td>
                <td><?php echo $row->tgl_bayar;  ?></td>
                <td><?php echo $row->total_bayar;  ?></td>
                <td><?php echo $row->keterangan;  ?></td>
                 </tr>
                 <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
</div>
<!-- /.box -->
</div>
</section>