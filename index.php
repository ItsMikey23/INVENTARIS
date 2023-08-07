


<?php 

include_once("config/Class_Barang.php");
$db = new Class_Barang();

include_once("config/Class_User.php");
$cu = new Class_User();


include_once("config/config.php");
// Mengambil kode barang baru
include_once("fungsi/nomatbrg.php");
// Mengambil kode barang masuk dan keluar dan rusak
include_once("fungsi/nomatbrgmasuk.php");
include_once("fungsi/nomatbrgkeluar.php");
include_once("fungsi/nomatbrgrusak.php");
?>

<?php

?>

<?php
    


if (isset($_GET['hapus'])) {
    $db->hapus($_GET['id']);
    echo "<script>alert('barang berhasil dihapus'); window.location.href='index.php?page=databarang';</script>";
}
//Hapus Barang Rusak
if (isset($_GET['hapus1'])) {
    $db->hapus1($_GET['id']);
    echo "<script>alert('barang Rusak berhasil dihapus'); window.location.href='index.php?page=barangrusak';</script>";
}
//Hapus Barang Masuk
if (isset($_GET['hapus2'])) {
    $db->hapus2($_GET['id']);
    echo "<script>alert('barang Masuk berhasil dihapus'); window.location.href='index.php?page=barangmasuk';</script>";
}
//Hapus Barang Keluar
if (isset($_GET['hapus3'])) {
    $db->hapus3($_GET['id']);
    echo "<script>alert('barang Keluar berhasil dihapus'); window.location.href='index.php?page=barangkeluar';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<?php 
include_once("config/Class_Barang.php");
$db = new Class_Barang();
 ?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi Inventaris</title>

    <?php 
    include_once("includes/header.php"); ?>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
            <?php include_once("includes/navbar.php"); ?>
            <!-- /.navbar-top-links -->
            <?php include_once("includes/sidebar.php"); ?>
            
            <!-- /.navbar-static-side -->
        <div id="page-wrapper">

<?php 

        if (isset($_GET['page']) && $_GET['page'] == "databarang") {
            include_once("pages/data_barang.php");
        }

        else if (isset($_GET['cari'])) {
            include_once("pages/cari_barang.php");
        }
        else if (isset($_GET['cari1'])) {
            include_once("pages/cari_barangrusak.php");
        }
        else if (isset($_GET['cari2'])) {
            include_once("pages/cari_barangmasuk.php");
        }
        else if (isset($_GET['cari3'])) {
            include_once("pages/cari_barangkeluar.php");
        }
        else if (isset($_GET['cari4'])) {
            include_once("pages/cari_ruang.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "barangbaru") {

            include_once("pages/input_barang.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "ruang") {

            include_once("pages/ruang.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "update") {

            include_once("pages/edit_barang.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "barangmasuk") {

            include_once("pages/data_barangmasuk.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "barangkeluar") {

            include_once("pages/data_barangkeluar.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "barangrusak") {

            include_once("pages/data_barangrusak.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "inputbarangmasuk") {

            include_once("pages/input_barangmasuk.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "inputbarangkeluar") {

            include_once("pages/input_barangkeluar.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "inputbarangrusak") {

            include_once("pages/input_barangrusak.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "kelas_1") {

            include_once("pages/data_kelas1.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "kelas_2") {

            include_once("pages/data_kelas2.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "kelas_3") {

            include_once("pages/data_kelas3.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "kelas_4") {

            include_once("pages/data_kelas4.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "kelas_5") {

            include_once("pages/data_kelas5.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "kelas_6") {

            include_once("pages/data_kelas6.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "perpustakaan") {

            include_once("pages/data_perpus.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "majelis") {

            include_once("pages/data_majelis.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "uks") {

            include_once("pages/data_uks.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "kantin") {

            include_once("pages/data_kantin.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "labor") {

            include_once("pages/data_labor.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "aula") {

            include_once("pages/data_aula.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "ruangibadah") {

            include_once("pages/data_ruangibadah.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "ruangtu") {

            include_once("pages/data_tu.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "gudang") {

            include_once("pages/data_gudang.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "datastok") {

            include_once("stok/data_stok.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "pengaturan") {

            include_once("pages/pengaturan.php");
        }
        
        else{
            include_once("pages/dashboard.php");
        }

 ?>
            
        </div>
        <!-- /#pag-wrapper -->

    </div>
    <!-- /#wrapper -->

   <?php include_once("includes/footer.php"); ?>

<!-- <script>
$(document).ready(function() {
$('#dataTables-example').DataTable({
responsive: true
});
});
</script>
 -->
</body>

</html>
