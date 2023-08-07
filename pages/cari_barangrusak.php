<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Data Pencarian Barang Rusak</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Barang
            </div>
            
            <!-- /.panel-heading -->
            <div class="panel-body">

    <table width="100%" class="table table-striped table-bordered table-hover" cellpadding="0" cellspacing="0" id="dataTables-example">
            <thead>
                        <tr>
                                        <th>No</th>
                                        <th>Kode Barang Masuk</th>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Lokasi Rusak</th>
                                        <th>Jumlah Rusak</th>
                                        <th>Kondisi</th>
                                        <th>Tanggal Rusak</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                 </tr>
                                    </thead>
                        <tbody>
            <?php

            $no=1;
            $nama_barang=$_GET['nama_barang'];
            $datastok="SELECT * from tbl_rusakbarang WHERE nama_barang LIKE '%$nama_barang%' OR tgl_rusak LIKE '%$nama_barang%' OR lokasi_barang LIKE '%$nama_barang%'";
            $sb=$conn->query($datastok);
            echo "Hasil Pencarian : $nama_barang"; 
            while($stokbarang=$sb->fetch_assoc())
        {
            echo "
            <tr>
            <td>".$no++."</td>
            <td>".$stokbarang['id_barangrusak']."</td>
            <td>".$stokbarang['kode_barang']."</td>
            <td>".$stokbarang['nama_barang']."</td>
            <td>".$stokbarang['lokasi_barang']."</td>
            <td>".$stokbarang['jumlah_rusak']."</td>
            <td>".$stokbarang['kondisi']."</td>
            <td>".$stokbarang['tgl_rusak']."</td>
            <td>".$stokbarang['keterangan']."</td>
            <td>	
            <a href='?hapus1&id=".$stokbarang['id_barangrusak']."'>Hapus</a>		
            </td>
    
            </tr>
                ";
        }?>
        </tbody>
</table>