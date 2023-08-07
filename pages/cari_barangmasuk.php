<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Data Pencarian Barang Masuk</h1>
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

            $no=1;
            $nama_barang=$_GET['nama_barang'];
            $datastok="SELECT * 
            from tbl_barang a 
            inner join tbl_masukbarang b 
            on a.kode_barang=b.kode_barang 
            inner join tbl_supplier d 
            on b.kode_supplier=d.kode_supplier 
            WHERE a.nama_barang LIKE '%$nama_barang%' OR b.tgl_masuk LIKE '%$nama_barang%' OR b.lokasi_barang LIKE '%$nama_barang%'";
            $sb=$conn->query($datastok);
            echo "Hasil Pencarian : $nama_barang"; 
            while($stokbarang=$sb->fetch_assoc())
        {
            echo "
            <tr>
            <td>".$no++."</td>
            <td>".$stokbarang['id_masukbarang']."</td>
            <td>".$stokbarang['kode_barang']."</td>
            <td>".$stokbarang['nama_barang']."</td>
            <td>".$stokbarang['spesifikasi']."</td>
            <td>".$stokbarang['lokasi_barang']."</td>
            <td>".$stokbarang['kategori']."</td>
            <td>".$stokbarang['jumlah_masuk']."</td>
            <td>".$stokbarang['kondisi']."</td>
            <td>".$stokbarang['sumber_dana']."</td>
            <td>".$stokbarang['tgl_masuk']."</td>
            <td>".$stokbarang['nama_supplier']."</td>
            <td>".$stokbarang['keterangan']."</td>
            <td>	
            <a href='?hapus2&id=".$stokbarang['id_masukbarang']."'>Hapus</a>		
            </td>
    
            </tr>
                ";
        }?>
        </tbody>
</table>