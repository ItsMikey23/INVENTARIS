<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Data Barang Masuk</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-24">
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Barang Masuk
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" cellpadding="0" cellspacing="0" id="dataTables-example">
                    <thead>

                    <form>
		<div class="input-group" method="GET">
				<input type="text" name="nama_barang" placeholder="Cari Nama Barang Atau Lokasi Barang Atau Tanggal" class="form-control " >
			        <div class="input-group-btn ">
					<button type="submit" name="cari2" class="btn btn-success">
					Cari
					</button>
			</div>
		</div>
</form>
    <?php
        if (is_array($db->tampil_barangmasuk()) && count($db->tampil_barangmasuk()) > 0) {

    ?>
                        <tr>
                           <th>No</th>
                            <th>Kode Barang Masuk</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Spesifikasi</th>
                            <th>Masuk Ke</th>
                            <th>Kategori</th>
                            <th>Jumlah Masuk</th>
                            <th>Kondisi</th>
                            <th>Sumber Dana</th>
                            <th>Tanggal Masuk</th>
                            <th>Supplier</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
    <?php 
        $no = 1;

    foreach ($db->tampil_barangmasuk() as $row) {

     ?>
                    <tr>
                        <td><?=$no++?></td>
                        <td><?=$row['id_masukbarang']?></td>
                        <td><?=$row['kode_barang']?></td>
                        <td><?=$row['nama_barang']?></td>
                        <td><?=$row['spesifikasi']?></td>
                        <td><?=$row['lokasi_barang']?></td>
                        <td><?=$row['kategori']?></td>
                        <td><?=$row['jumlah_masuk']?></td>
                        <td><?=$row['kondisi']?></td>
                        <td><?=$row['sumber_dana']?></td>
                        <td><?=$row['tgl_masuk']?></td>
                        <td><?=$row['nama_supplier']?></td>
                        <td><?=$row['keterangan']?></td>
                        <td><a href="?hapus2&id=<?=$row['id_masukbarang']?>" onclick="return confirm('Yakin mau dihapus?');">Hapus</a></td>
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