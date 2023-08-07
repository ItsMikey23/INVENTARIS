<?php 

/**
* 
*/
class Class_Barang
{

    // =====================================================================================
    // AMBIL DATA
    // ======================================================================================


    function tampil_data()
    {
        include("config.php");

            $sql = "select * from tbl_barang";


        $data = mysqli_query($conn,$sql);

        $data1 = mysqli_num_rows($data);
        if ($data1 == 0) {

            echo "<div class='alert alert-danger'>Tidak ada data</div>";
        }
        else{
            
            while ($d=mysqli_fetch_assoc($data)) {

                $hasil[] = $d;
            }
            return $hasil;
        }
    }


    function tampil_datakelas1()
    {
        include("config.php");

        $sql = "select * from tbl_masukbarang WHERE lokasi_barang='Kelas 1'";

        $data = mysqli_query($conn,$sql);

        $data1 = mysqli_num_rows($data);

        if ($data1 == 0) {

            echo "<div class='alert alert-danger'>Tidak ada data</div>";
        }
        else{
            
            while ($d=mysqli_fetch_assoc($data)) {

                $hasil[] = $d;
            }
            return $hasil;
        }
    }

    function tampil_datakelas2()
    {
        include("config.php");

        $sql = "select * from tbl_masukbarang WHERE lokasi_barang='Kelas 2'";

        $data = mysqli_query($conn,$sql);

        $data1 = mysqli_num_rows($data);

        if ($data1 == 0) {

            echo "<div class='alert alert-danger'>Tidak ada data</div>";
        }
        else{
            
            while ($d=mysqli_fetch_assoc($data)) {

                $hasil[] = $d;
            }
            return $hasil;
        }
    }

    function tampil_datakelas3()
    {
        include("config.php");

        $sql = "select * from tbl_masukbarang WHERE lokasi_barang='Kelas 3'";

        $data = mysqli_query($conn,$sql);

        $data1 = mysqli_num_rows($data);

        if ($data1 == 0) {

            echo "<div class='alert alert-danger'>Tidak ada data</div>";
        }
        else{
            
            while ($d=mysqli_fetch_assoc($data)) {

                $hasil[] = $d;
            }
            return $hasil;
        }
    }


    function tampil_datakelas4()
    {
        include("config.php");

        $sql = "select * from tbl_masukbarang WHERE lokasi_barang='Kelas 4'";

        $data = mysqli_query($conn,$sql);

        $data1 = mysqli_num_rows($data);

        if ($data1 == 0) {

            echo "<div class='alert alert-danger'>Tidak ada data</div>";
        }
        else{
            
            while ($d=mysqli_fetch_assoc($data)) {

                $hasil[] = $d;
            }
            return $hasil;
        }
    }

    function tampil_datakelas5()
    {
        include("config.php");

        $sql = "select * from tbl_masukbarang WHERE lokasi_barang='Kelas 5'";

        $data = mysqli_query($conn,$sql);

        $data1 = mysqli_num_rows($data);

        if ($data1 == 0) {

            echo "<div class='alert alert-danger'>Tidak ada data</div>";
        }
        else{
            
            while ($d=mysqli_fetch_assoc($data)) {

                $hasil[] = $d;
            }
            return $hasil;
        }
    }

    function tampil_datakelas6()
    {
        include("config.php");

        $sql = "select * from tbl_masukbarang WHERE lokasi_barang='Kelas 6'";

        $data = mysqli_query($conn,$sql);

        $data1 = mysqli_num_rows($data);

        if ($data1 == 0) {

            echo "<div class='alert alert-danger'>Tidak ada data</div>";
        }
        else{
            
            while ($d=mysqli_fetch_assoc($data)) {

                $hasil[] = $d;
            }
            return $hasil;
        }
    }

    function tampil_dataperpus()
    {
        include("config.php");

        $sql = "select * from tbl_masukbarang WHERE lokasi_barang='Perpustakaan'";

        $data = mysqli_query($conn,$sql);

        $data1 = mysqli_num_rows($data);

        if ($data1 == 0) {

            echo "<div class='alert alert-danger'>Tidak ada data</div>";
        }
        else{
            
            while ($d=mysqli_fetch_assoc($data)) {

                $hasil[] = $d;
            }
            return $hasil;
        }
    }

    function tampil_datamajelis()
    {
        include("config.php");

        $sql = "select * from tbl_masukbarang WHERE lokasi_barang='Majelis'";

        $data = mysqli_query($conn,$sql);

        $data1 = mysqli_num_rows($data);
        if ($data1 == 0) {

            echo "<div class='alert alert-danger'>Tidak ada data</div>";
        }
        else{
            
            while ($d=mysqli_fetch_assoc($data)) {

                $hasil[] = $d;
            }
            return $hasil;
        }
    }

    function tampil_datauks()
    {
        include("config.php");

        $sql = "select * from tbl_masukbarang WHERE lokasi_barang='UKS'";

        $data = mysqli_query($conn,$sql);

        $data1 = mysqli_num_rows($data);
        if ($data1 == 0) {

            echo "<div class='alert alert-danger'>Tidak ada data</div>";
        }
        else{
            
            while ($d=mysqli_fetch_assoc($data)) {

                $hasil[] = $d;
            }
            return $hasil;
        }
    }

    function tampil_datakantin()
    {
        include("config.php");

        $sql = "select * from tbl_masukbarang WHERE lokasi_barang='Kantin'";

        $data = mysqli_query($conn,$sql);

        $data1 = mysqli_num_rows($data);
        if ($data1 == 0) {

            echo "<div class='alert alert-danger'>Tidak ada data</div>";
        }
        else{
            
            while ($d=mysqli_fetch_assoc($data)) {

                $hasil[] = $d;
            }
            return $hasil;
        }
    }

    function tampil_datalabor()
    {
        include("config.php");

        $sql = "select * from tbl_masukbarang WHERE lokasi_barang='Labor IPA'";

        $data = mysqli_query($conn,$sql);

        $data1 = mysqli_num_rows($data);
        if ($data1 == 0) {

            echo "<div class='alert alert-danger'>Tidak ada data</div>";
        }
        else{
            
            while ($d=mysqli_fetch_assoc($data)) {

                $hasil[] = $d;
            }
            return $hasil;
        }
    }

    function tampil_barangmasuk()
    {
        include("config.php");

        $sql = "SELECT * from tbl_masukbarang ORDER BY id_masukbarang";
        
        // echo $sql;
        $data = mysqli_query($conn,$sql);
        
        $data1 = mysqli_num_rows($data);
        if ($data1 == 0) {

            echo "<div class='alert alert-danger'>Tidak ada data</div>";
        }
        else{
            
            while ($d=mysqli_fetch_assoc($data)) {

                $hasil[] = $d;
            }
            return $hasil;
        }
    }



    function tampil_barangkeluar()
    {
         include("config.php");

        $sql = "select * from tbl_keluarbarang";

        $data = mysqli_query($conn,$sql);

        $data1 = mysqli_num_rows($data);
        if ($data1 == 0) {

            echo "<div class='alert alert-danger'>Tidak ada data</div>";
        }
        else{
            
            while ($d=mysqli_fetch_assoc($data)) {

                $hasil[] = $d;
            }
            return $hasil;
        }
    }

    function tampil_barangrusak()
    {
         include("config.php");

        $sql = "select * from tbl_rusakbarang";

        $data = mysqli_query($conn,$sql);

        $data1 = mysqli_num_rows($data);
        if ($data1 == 0) {

            echo "<div class='alert alert-danger'>Tidak ada data</div>";
        }
        else{
            
            while ($d=mysqli_fetch_assoc($data)) {

                $hasil[] = $d;
            }
            return $hasil;
        }
    }

    // mengambil nama dan id_supplier
    function supplier()
    {
        include("config.php");

        $sql = "select * from tbl_supplier order by kode_supplier";

        $data = mysqli_query($conn,$sql);

        while ($d=mysqli_fetch_assoc($data)) {

            $hasil[] = $d;
        }
        return $hasil;
    }

    // mengambil nama dan kode_barang
    function barang()
    {
        include("config.php");

        $sql = "select * from tbl_barang order by kode_barang";

        $data = mysqli_query($conn,$sql);

        while ($d=mysqli_fetch_assoc($data)) {

            $hasil[] = $d;
        }
        return $hasil;
    }

    // ======================================================================================
    // INPUT DATA
    // ======================================================================================

    function input_barangbaru($kode_barang,$nama_barang,$spesifikasi,$kategori)
    {
        $kode_barang = addslashes($kode_barang);
        $nama_barang = addslashes($nama_barang);
        $spesifikasi = addslashes($spesifikasi);
        $kategori = addslashes($kategori);

        include("config.php");

        $sql1 = "insert into tbl_barang values('$kode_barang','$nama_barang','$spesifikasi','$kategori')";
        // echo $sql1;
        $data1 = mysqli_query($conn,$sql1);

    }

    function input_barangmasuk($id_barangmasuk,$nama_barang,$tgl,$jumlah)
    {
        // $id_barangmasuk = addslashes($id_barangmasuk);
        $nama_barang = addslashes($nama_barang);
        $tgl = addslashes($tgl);
        $jumlah = addslashes($jumlah);

        include("config.php");

        // Menyimpan barang masuk
        $sql1 = "insert into tbl_masukbarang values('".$id_barangmasuk."','".$nama_barang."','".$tgl."','".$jumlah."')";
        // echo $sql1;
        $data1 = mysqli_query($conn,$sql1);

    }

    function input_barangkeluar($id_barangkeluar,$kode_barang,$nama_barang,$tgl,$jumlah,$lokasi_barang,$kondisi,$keterangan)
    {
        $id_barangkeluar = addslashes($id_barangkeluar);
        $kode_barang = addslashes($kode_barang);
        $nama_barang = addslashes($nama_barang);
        $tgl = addslashes($tgl);
        $jumlah = addslashes($jumlah);
        $lokasi_barang = addslashes($lokasi_barang);
        $kondisi = addslashes($kondisi);
        $keterangan = addslashes($keterangan);

        include("config.php");

        // Menyimpan barang keluar
        $sql1 = "insert into tbl_keluarbarang values('".$id_barangkeluar."','".$kode_barang."','".$nama_barang."','".$tgl."','".$jumlah."','".$lokasi_barang."','".$kondisi."','".$keterangan."')";
        // echo $sql1;
        $data1 = mysqli_query($conn,$sql1);

    }

    function input_barangrusak($id_barangrusak,$kode_barang,$nama_barang,$kondisi,$tgl,$jumlah,$lokasi_barang,$keterangan)
    {
        $id_barangmasuk = addslashes($id_barangrusak);
        $kode_barang = addslashes($kode_barang);
        $nama_barang = addslashes($nama_barang);
        $kondisi = addslashes($kondisi);
        $tgl = addslashes($tgl);
        $jumlah = addslashes($jumlah);
        $lokasi_barang = addslashes($lokasi_barang);
        $keterangan= addslashes($keterangan);

        include("config.php");

        // Menyimpan barang rusak
        $sql1 = "insert into tbl_rusakbarang values('".$id_barangrusak."','".$kode_barang."','".$nama_barang."','".$kondisi."','".$tgl."','".$jumlah."','".$lokasi_barang."','".$keterangan."')";
        // echo $sql1;
        $data1 = mysqli_query($conn,$sql1);


    }

    // ======================================================================================
    // UPDATE DATA
    // ======================================================================================

    function edit_barang($kode_barang)
    {
        include("config.php");

        $sql = "select * from tbl_barang where kode_barang='".$kode_barang."'";

        $data = mysqli_query($conn,$sql);

        $data1 = mysqli_num_rows($data);
        if ($data1 == 0) {

            echo "<div class='alert alert-danger'>Tidak ada data</div>";
        }
        else{
            
            while ($d=mysqli_fetch_assoc($data)) {

                $hasil[] = $d;
            }
            return $hasil;
        }
    }

    function update_barang($nama_barang,$spesifikasi,$kategori,$kode_barang)
    {
        include("config.php");

        $sql = "update tbl_barang set 
        
        nama_barang='".$nama_barang."',

        spesifikasi='".$spesifikasi."',
        kategori='".$kategori."' where a.kode_barang='".$kode_barang."' ";

        // echo $sql;
        $data = mysqli_query($conn,$sql);

    }
    // ======================================================================================
    // HAPUS DATA
    // ======================================================================================


    function hapus($id)
    {
        include ("config.php");

        $sql1 = "delete from tbl_barang where kode_barang='".$id."' ";
        $data1 = mysqli_query($conn,$sql1);

        $sql3 = "delete from tbl_rusakbarang where kode_barang= '".$id."' ";
        $data3 = mysqli_query($conn,$sql3);

        $sql4 = "delete from tbl_masukbarang where kode_barang= '".$id."' ";
        $data4 = mysqli_query($conn,$sql4);

        $sql5 = "delete from tbl_keluarbarang where kode_barang= '".$id."' ";
        $data5 = mysqli_query($conn,$sql5);

    }

    // ======================================================================================
    // HAPUS DATA BARANG RUSAK
    // ======================================================================================
    function hapus1($id)
    {
        include ("config.php");

        $sql1 = "delete from tbl_rusakbarang where id_barangrusak='".$id."' ";
        $data1 = mysqli_query($conn,$sql1);

    }

    // ======================================================================================
    // HAPUS DATA BARANG MASUK
    // ======================================================================================
    function hapus2($id)
    {
        include ("config.php");

        $sql1 = "delete from tbl_masukbarang where id_masukbarang='".$id."' ";
        $data1 = mysqli_query($conn,$sql1);

    }

    // ======================================================================================
    // HAPUS DATA BARANG KELUAR
    // ======================================================================================
    function hapus3($id)
    {
        include ("config.php");

        $sql1 = "delete from tbl_keluarbarang where id_keluarbarang='".$id."' ";
        $data1 = mysqli_query($conn,$sql1);

    }

}
 ?>