<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Data Barang Keluar</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Barang Keluar  
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" cellpadding="0" cellspacing="0" id="dataTables-example">
                    <thead>

        <form>
		<div class="input-group" method="GET">
				<input type="text" name="nama_barang" placeholder="Cari Nama Barang Atau Tanggal Atau Lokasi Barang" class="form-control " >
			        <div class="input-group-btn ">
					<button type="submit" name="cari3" class="btn btn-success">
					Cari
					</button>
			</div>
		</div>
        </form>

    <?php  
        if (is_array($db->tampil_barangkeluar()) && count($db->tampil_barangkeluar()) > 0) {
      ?>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang Keluar</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Tanggal Keluar</th>
                            <th>Jumlah Keluar</th>
                            <th>Barang Keluar Dari</th>
                            <th>Kondisi</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
    <?php 

    $no = 1;

    foreach ($db->tampil_barangkeluar() as $row) {


     ?>
    <tr>
                            <td><?=$no++?></td>
                            <td><?=$row['id_keluarbarang']?></td>
                            <td><?=$row['kode_barang']?></td>
                            <td><?=$row['nama_barang']?></td>
                            <td><?=$row['tgl_keluar']?></td>
                            <td><?=$row['jumlah_keluar']?></td>
                            <td><?=$row['lokasi_barang']?></td>
                            <td><?=$row['kondisi']?></td>
                            <td><?=$row['keterangan']?></td>
                            <td><a href="?hapus3&id=<?=$row['id_keluarbarang']?>" onclick="return confirm('Yakin mau dihapus?');">Hapus</a></td>
      </tr>
    <?php } 
}?>
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