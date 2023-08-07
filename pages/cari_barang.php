<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Data Pencarian Barang</h1>
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
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Spesifikasi</th>
                                            <th>Kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
            <?php

            $no=1;
            $nama_barang=$_GET['nama_barang'];
            $datastok="SELECT * FROM tbl_barang WHERE nama_barang LIKE '%$nama_barang%' ORDER BY kode_barang ASC";
            $sb=$conn->query($datastok);
            echo "Hasil Pencarian : $nama_barang"; 
            while($stokbarang=$sb->fetch_assoc())
        {
            echo "
            <tr>
            <td>".$no++."</td>
            <td>".$stokbarang['kode_barang']."</td>
            <td>".$stokbarang['nama_barang']."</td>
            <td>".$stokbarang['spesifikasi']."</td>
            <td>".$stokbarang['kategori']."</td>
            <td>
            <a href='?id=".$stokbarang['kode_barang']."&page=update'>Edit -</a>		
            <a href='?hapus&id=".$stokbarang['kode_barang']."'>Hapus</a>		
            </td>
    
            </tr>
                ";
        }?>
        </tbody>
</table>