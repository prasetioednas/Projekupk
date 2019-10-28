
<!-- TAMBAH MODAL CLIENT -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">TAMBAH PEMBAYARAN</h4>
        </div>
        <div class="modal-body">

          <!-- /.box-header -->
          <form action="<?php echo site_url('laporan/simpan_data');?>" method="POST">
            <div class="box-body" id="view">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">
                    <b>Nama Siswa</b>
                  </div>
                  <!-- <input type="text" class="form-control" name="nipd" > -->
                  <select class="form-control select2" name="nama_siswa" data-placeholder="-PILIH SISWA-">
                    <option></option>
                    <?php foreach ($siswa->result() as $a): ?>
                      <option value="<?php echo $a->id_siswa ?>"><?php echo $a->nama_siswa ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
              <div class="form-group has-feedback">
                <?php
                $jatuhtempo ="1 Bulan";
                $date = date('F Y');
                $nomor = date('Ymd');
                ?>
                <input type="text" focus="true" name="bulan" class="form-control" value="<?php echo $date;?>">
              </div>
              <div class="form-group has-feedback">
                <!-- nanti disini bikin otomatis -->
                <input type="text" focus="true" name="jatuh_tempo" class="form-control" value="<?php echo $jatuhtempo;?>" readonly>
              </div>
              <div class="form-group has-feedback">
                <!-- nanti disini bikin otomatis -->
                <input type="text" focus="true" name="no_bayar" class="form-control" value="<?php echo $nomor;?>">
              </div>
              <div class="form-group has-feedback">
                <select required="required" id="nama_pembayaran" name="pembayaran" class="form-control select2" data-placeholder="-PILIH PEMBAYARAN-" onchange="price()" >
                  <option></option>
                  <?php 
                  foreach ($pembayaran->result() as $a): ?>
                    <option  value="<?php echo $a->id_pembayaran ?>"><?php echo $a->nama_pembayaran ?></option>
                    ";
                  <?php endforeach ?>
                </select>
              </div>
              <div class="form-group has-feedback">
                <input type="date" focus="true" name="tgl_bayar" class="form-control" "> 
              </div>
              <div class="form-group has-feedback ">
                <input type="text" focus="true" id="total_bayar" name="total_bayar" class="form-control" placeholder="Contoh : 250.000" onkeyup="fungsi();">
              </div>
              <div class="form-group has-feedback">
                <input type="text" focus="true" id="harga" name="harga" class="form-control" placeholder="Harga">
              </div>
              <div class="form-group has-feedback">
                <input type="text" focus="true" id="keterangan" name="keterangan" class="form-control" placeholder="Keterangan">
              </div>
              <!-- <a href="<?= site_url('#')?>" class="btn btn-info"><i class="fa fa-plus"></i></a> -->
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-close"> Batal</span></button>
            <button type="submit" name="bayar" class="btn btn-primary"><span class="fa fa-save"> Bayar</span></button>
          </div>
        </div>
      </div>
    </div>
  </form>
  <!-- END MODAL TAMBAH CLIENT -->

  <div id="tabel" class="col-md-13">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">PEMBAYARAN</h3>
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
              <th align="center">Aksi</th>
              <!--  <th>Bayar</th> -->
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php 
              $no=1;
              foreach($isi->result() as $row){
                ?>
                <td><?php echo $no++;  ?></td>
                <td><?php echo $row->nama_siswa;  ?></td>
                <td><?php echo $row->bulan;  ?></td>
                <td><?php echo $row->jatuh_tempo;?></td>
                <td><?php echo $row->no_bayar;  ?></td>
                <td><?php echo $row->tgl_bayar;  ?></td>
                <td><?php echo $row->total_bayar;  ?></td>
                <td><?php echo $row->keterangan;  ?></td>
                <td align="center" class="print">
                  <a href="<?= site_url('laporanpdf/cetak/').$row->idspp;?>" class="btn btn-info"><i class="fa fa-print"></i></a>
                   <a href="<?= site_url('laporan/hapus_data/').$row->idspp;?>" class="btn btn-danger" onClick='return confirm("Apakah anda yakin ingin menghapus pembayaran <?php echo $row->nama_siswa;?> ?")'><i class="fa fa-trash"></i></a>
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
  <div class="col-md-2">
    <button type="button" class="btn btn-primary  margin-bottom" data-toggle="modal" data-target="#modal-default">
      <i class="fa fa-plus-circle"> Tambah Pembayaran</i>
    </button>
  </div>

  <div class="col-md-2">
    <button type="button" class="btn btn-danger  margin-bottom">
      <a class="fa fa-print" href="<?= site_url('laporanpdf/cetak1')?>"></a>
    </button>
  </div>
</section>
<script>
  function fungsi()
  {
    var bayar, voteable;
    bayar = Number(document.getElementById("total_bayar").value);
    harga = Number(document.getElementById("harga").value);

    if (isNaN(bayar)) {
      voteable = "Error in input";
    }else{
      voteable = (bayar < harga) ? "BELUM" : "LUNAS";
    }

    document.getElementById("keterangan").value = voteable;
  }

  function price2(){
    var tes = document.getElementById('nama_pembayaran').value;
    document.getElementById("harga").value= tes;
  }

  function price2() {

    var str = document.getElementById('nama_pembayaran').value;

    var vars = "kode="+str;
      //hr.open("POST", url, true);

      var url = "<?php echo site_url('laporan/getHarga/')?>"+vars;

      if (str.length == 0) { 
        document.getElementById("harga").innerHTML = "";
        return;
      } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("harga").innerHTML = this.responseText;
          }
        };
        //xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.open("GET", url, true);
        
        xmlhttp.send();
      }
    }

    function price() {

      var url = "<?php echo site_url('laporan/getHarga/')?>";
      var str = document.getElementById('nama_pembayaran').value;

      $.ajax(
      {
        type: "POST",
        url: url,
        data: {'kode': str},

        success: function(data)
        {
      //alert(html);
      //document.getElementById("harga").innerHTML = data;

      $("#harga").val(data)
    }
  });
    }

  </script> 

