<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1>Laporan</h1>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Laporan
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" cellpadding="0" cellspacing="0" id="dataTables-example">
                    <thead>
                        <tr>
                           <th>No</th>
                            <th>Nama Laporan</th>
                            <th>Print Semua</th>
                            <th>Periode</th>
                        </tr>
                    </thead>
                    <tbody>
    <?php 
        
    
     ?>
                    <tr>
                        <td>1</td>
                            <td>Laporan Kategori Barang</td>
                            <td><a href="laporan/lap_barang.php" data-toggle="tooltip" title="Print"><i class="fa fa-print fa-2x" style="margin-bottom: 10px;padding: 0 0 0 5px;color:#5aab26;"></i></a></td>

                    </tr>
                    <tr>
                        <td>2</td>
                            <td>Laporan Barang Masuk</td>
                            <td><a href="laporan/lap_barangmasuk.php" data-toggle="tooltip" title="Print"><i class="fa fa-print fa-2x" style="margin-bottom: 10px;padding: 0 0 0 5px;color:#5aab26;"></i></a></td>
                            <td> 
                                <form action="laporan/lap_barangmasuk.php" enctype="multipart/form-data">
                                <div class="input-group" method="GET">
                                <select name="tahun">
                                <option value="">Pilih Tahun</option>
                                <?php for($x = 1958; $x <= 3000; $x++){ ?>
                                    <option value="<?php echo "$x";?>"><?php echo "$x";?></option>
                                    <?php }
                                ?>
                                </select>
                                <select name="bulan">
                                <option value="">Pilih Bulan</option>
                                    <option value="01">Januari</option>
                                    <option value="02">Februari</option>
                                    <option value="03">Maret</option>
                                    <option value="04">April</option>
                                    <option value="05">Mei</option>
                                    <option value="06">Juni</option>
                                    <option value="07">Juli</option>
                                    <option value="08">Agustus</option>
                                    <option value="09">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
			                      <div class="input-group-btn">
					                <button type="submit" name="laporan" class="btn btn-success">
					                Print
					                </button>
			                    </div>
		                    </div>
                            </form>
                            </td>
                    </tr>
                    <tr>
                        <td>3</td>
                            <td>Laporan Barang Keluar</td>
                            <td><a href="laporan/lap_barangkeluar.php" data-toggle="tooltip" title="Print"><i class="fa fa-print fa-2x" style="margin-bottom: 10px;padding: 0 0 0 5px;color:#5aab26;"></i></a></td>
                            <td> 
                                <form action="laporan/lap_barangkeluar.php" enctype="multipart/form-data">
                                <div class="input-group" method="GET">
                                <select name="tahun">
                                <option value="">Pilih Tahun</option>
                                <?php for($x = 1958; $x <= 3000; $x++){ ?>
                                    <option value="<?php echo "$x";?>"><?php echo "$x";?></option>
                                    <?php }
                                ?>
                                </select>
                                <select name="bulan">
                                <option value="">Pilih Bulan</option>
                                    <option value="01">Januari</option>
                                    <option value="02">Februari</option>
                                    <option value="03">Maret</option>
                                    <option value="04">April</option>
                                    <option value="05">Mei</option>
                                    <option value="06">Juni</option>
                                    <option value="07">Juli</option>
                                    <option value="08">Agustus</option>
                                    <option value="09">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
			                      <div class="input-group-btn">
					                <button type="submit" name="laporan2" class="btn btn-success">
					                Print
					                </button>
			                    </div>
		                    </div>
                            </form>
                            </td>
                    </tr>
                    <tr>
                        <td>4</td>
                            <td>Laporan Barang Rusak</td>
                            <td><a href="laporan/lap_barangrusak.php" data-toggle="tooltip" title="Print"><i class="fa fa-print fa-2x" style="margin-bottom: 10px;padding: 0 0 0 5px;color:#5aab26;"></i></a></td>
                            <td> 
                                <form action="laporan/lap_barangrusak.php" enctype="multipart/form-data">
                                <div class="input-group" method="GET">
                                <select name="tahun">
                                <option value="">Pilih Tahun</option>
                                <?php for($x = 1958; $x <= 3000; $x++){ ?>
                                    <option value="<?php echo "$x";?>"><?php echo "$x";?></option>
                                    <?php }
                                ?>
                                </select>
                                <select name="bulan">
                                <option value="">Pilih Bulan</option>
                                    <option value="01">Januari</option>
                                    <option value="02">Februari</option>
                                    <option value="03">Maret</option>
                                    <option value="04">April</option>
                                    <option value="05">Mei</option>
                                    <option value="06">Juni</option>
                                    <option value="07">Juli</option>
                                    <option value="08">Agustus</option>
                                    <option value="09">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
			                      <div class="input-group-btn">
					                <button type="submit" name="laporan1" class="btn btn-success">
					                Print
					                </button>
			                    </div>
		                    </div>
                            </form>
                            </td>
                    </tr>
                    </tbody>
                </table>
                <!-- /.table-responsive -->
               
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->