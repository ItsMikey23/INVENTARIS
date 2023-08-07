<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Data Pencarian Ruangan</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Ruangan
            </div>
            
            <FORM>
            <div class="input-group kanan" method="GET">
            <select  class="form-control" name="nama_ruang" placeholder="Cari Ruangan">
            <option value="Tidak ada isi">Pilih Ruangan</option>
                <option value="kelas 1">Kelas 1</option>
                <option value="Kelas 2">Kelas 2</option>
                <option value="Kelas 3">Kelas 3</option>
                <option value="Kelas 4">Kelas 4</option>
                <option value="Kelas 5">Kelas 5</option>
                <option value="Kelas 6">Kelas 6</option>
                <option value="Perpustakaan">Perpustakaan</option>
                <option value="Majelis">Majelis</option>
                <option value="UKS">UKS</option>
                <option value="Kantin">Kantin</option>
                <option value="Labor IPA">Labor IPA</option>
                <option value="Aula">Aula</option>
                <option value="Ruang Ibadah">Ruang Ibadah</option>
                <option value="Ruang TU">Ruang TU</option>
                <option value="Gudang">Gudang</option>
            </select>
            <div class="input-group-btn">
					<button type="submit" name="cari4" class="btn btn-success">
					Cari
					</button>
			</div>
</div>
            </FORM>
            <!-- /.panel-heading -->
            <div class="panel-body">

<table width="100%" class="table table-striped table-bordered table-hover" cellpadding="0" cellspacing="0" id="dataTables-example">
            <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
            <?php


            $no=1;
            $nama_ruang=$_GET['nama_ruang'];
            $datastok="SELECT * FROM tbl_barang";
            $sb=$conn->query($datastok);
            echo "Hasil Pencarian : $nama_ruang"; 

            while($stokbarang=$sb->fetch_assoc())
                {
                    
                    $nama_barang=$stokbarang['nama_barang']; 
            
                    $masuk= "SELECT SUM(jumlah_masuk) AS t_masuk From tbl_masukbarang WHERE lokasi_barang LIKE '%$nama_ruang%' AND nama_barang='$nama_barang'";
                    $t_masuk=0;
                    $result = mysqli_query($conn, $masuk);
                    while($row = mysqli_fetch_assoc($result)){
                        number_format($data[] = $row['t_masuk']);
                        $t_masuk=$row['t_masuk'];
                        }
                    $keluar= "SELECT SUM(jumlah_keluar) AS t_keluar FROM tbl_keluarbarang WHERE lokasi_barang LIKE '%$nama_ruang%' AND nama_barang='$nama_barang'";
                    $t_keluar=0;
                    $result2 = mysqli_query($conn, $keluar);
                    while($row2 = mysqli_fetch_assoc($result2)){
                        number_format($data2[] = $row2['t_keluar']);
                        $t_keluar=$row2['t_keluar'];
                        }

                    $s_barang= $t_masuk - $t_keluar;
                    if($s_barang !=0 && $s_barang >=0){
            echo "
            <tr>
            <td>".$no++."</td>
            <td>".$stokbarang['kode_barang']."</td>
            <td>".$stokbarang['nama_barang']."</td>
            <td>".$s_barang."</td>
            </tr>
                ";
                    }
        }?>
        </tbody>
</table>