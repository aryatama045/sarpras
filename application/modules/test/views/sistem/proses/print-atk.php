<body ><!-- onload="window.print();" -->
    <div class="wrapper">
        <!-- title row -->
        <div class="row">
          <div class="col-xs-12">
            <h5 class="page-header">
              <i class="fa fa-task"></i> 
              <small class="pull-right">Date: <?php echo date('l, d / M /Y') ?></small>

            </h5>
          </div>
          <!-- /.col -->
        </div>
        <hr>
        <h4>Detail Permintaan ATK</h4>
        <hr>
        <!-- info row -->

        <div class="row invoice-info">
         <div class="col-sm-8 invoice-col">
            No Pengajuan : <b>ATK-<?php echo $barang->id_order_atk ?></b><br>
            Nama : <b><?php echo $barang->nama ?></b><br>
            Divisi: <b><?php echo $barang->divisi ?></b><br>
            Subjek : <b><?php echo $barang->subjek ?></b><br>
            Tanggal Pengajuan : <b> <?php echo $barang->created_date ?></b><br>
          </div>
          <!-- /.col -->
          <div class="col-sm-2 invoice-col">
            
            <address>
              <strong></strong><br>
            </address>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 invoice-col">
            Sekolah Pah Tsung
            <address>
              <img src="<?php echo base_url('dist/img/logo.png') ?>" alt="" align="center">  
            </address>
          </div>
          <!-- /.col -->
         
        </div>
        <!-- /.row -->

        <!-- Table row -->
        <div class="row">
          <div class="col-xs-12 table-responsive">
            <table class="table table-striped">
              <thead>
              <tr>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Satuan</th>
                <th>Keterangan</th>
              </tr>
              </thead>

              <tbody>
          <?php foreach($barangitem as $barangitem) { ?>
                <tr>
                  <td><?php echo $barangitem->nama_barang?></td>
                  <td><?php echo $barangitem->jumlah?></td>
                  <td><?php echo $barangitem->satuan?></td>
                  <td><?php echo $barangitem->keterangan?></td>
                </tr>
                <tr>
          <?php } ?>
              </tbody>
            </table>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
          <hr>
          <div class="card-block">
        <div class="row">
            <div class="col-xs-3">
             <p class="lead"><i class="fa fa-info"></i> Note Kep. Unit:</p>
             <p class="text-muted" align="justify">
               <?php echo $barang->note_kepsek ?>
              </p>
             
           </div>
           <div class="col-xs-3">
             <p class="lead"><i class="fa fa-info"></i> Note Direktur:</p>
             <p class="text-muted" align="justify">
               <?php echo $barang->note_direktur ?>
              </p>
             
           </div>

           <div class="col-xs-3">
             <p class="lead"><i class="fa fa-info"></i> Note Toko:</p>
             <p class="text-muted" align="justify">
               <?php echo $barang->note_toko ?>
              </p>

             
           </div>

        </div></div>
        <!-- /.row -->
    </div>
