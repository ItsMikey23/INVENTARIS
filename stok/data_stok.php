<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1>Data Stok</h1>
        </div>

    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Stok Barang
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" cellpadding="0" cellspacing="0" id="dataTables-example">
                    <thead>
                    
    <?php


?>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Jumlah Barang Masuk</th>
                            <th>Jumlah Barang Keluar</th>
                            <th>Jumlah Barang Rusak</th>
                            <th>Total Barang Saat Ini Tersedia</th>
                        </tr>
                    </thead>
                    <tbody>
    <?php 
 
        $no = 1;
        $datastok="SELECT * FROM tbl_barang";
        $sb=$conn->query($datastok);
        
        if($sb->num_rows>0)
        {
            while($stokbarang=$sb->fetch_assoc())
            {
                
                $nama_barang=$stokbarang['nama_barang']; 
        
                $masuk= "SELECT SUM(jumlah_masuk) AS t_masuk From tbl_masukbarang WHERE nama_barang='$nama_barang'";
                $t_masuk=0;
                $result = mysqli_query($conn, $masuk);
                while($row = mysqli_fetch_assoc($result)){
                    number_format($data[] = $row['t_masuk']);
                    $t_masuk=$row['t_masuk'];
                    }
                $keluar= "SELECT SUM(jumlah_keluar) AS t_keluar FROM tbl_keluarbarang WHERE nama_barang='$nama_barang'";
                $t_keluar=0;
                $result2 = mysqli_query($conn, $keluar);
                while($row2 = mysqli_fetch_assoc($result2)){
                    number_format($data2[] = $row2['t_keluar']);
                    $t_keluar=$row2['t_keluar'];
                    }

                $rusak= "SELECT SUM(jumlah_rusak) AS t_rusak FROM tbl_rusakbarang WHERE nama_barang='$nama_barang'";
                $t_rusak=0;
                $result4 = mysqli_query($conn, $rusak);
                while($row4 = mysqli_fetch_assoc($result4)){
                    number_format($data4[] = $row4['t_rusak']);
                    $t_rusak=$row4['t_rusak'];
                    
                    }
                $s_barang= $t_masuk - $t_keluar; 

                if($t_rusak<=0){
                    $t_rusak=0;
                }

                if($t_masuk<=0){
                    $t_masuk=0;
                }

                if($t_keluar<=0){
                    $t_keluar=0;
                }
                    
                echo "
                <tr>
                    <td>".$no++."</td>
                    <td>".$stokbarang['kode_barang']."</td>
                    <td>".$stokbarang['nama_barang']."</td>
                    <td>".$t_masuk."</td>
                    <td>".$t_keluar."</td>
                    <td>".$t_rusak."</td>
                    <td>".$s_barang."</td>
                </tr>
                    ";
                
            }
        } 
?>
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