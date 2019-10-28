
      <!-- tabel -->
      <section class="content">
      <div class="row">
        <div class="col-md-3">
         </div>
        <!-- /.col -->
    <div class="col-md-12">
    <div class="box">
            <div class="box-header">
              <h3 class="box-title">KELAS</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                  <th>No</th>
                  <th>ID Kelas</th>
                  <th>Kelas</th>
                
                </tr>
              </thead>
                <tbody>
                  <tr>
                    <?php 
                    $no=1;
                      foreach($isi->result() as $row){
                    ?>
                    <td><?php echo $no++;  ?></td>
                    <td><?php echo $row->id_kelas;  ?></td>
                    <td><?php echo $row->kelas;  ?></td>                    
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