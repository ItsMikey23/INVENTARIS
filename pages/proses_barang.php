<?php 
include_once("../config/Class_Barang.php");
$db = new Class_Barang();
include_once("../config/config.php");

$aksi = $_GET["aksi"];

// ===========================================================================================
// BARANG BARU
// ===========================================================================================

if ($aksi == "tambah") {

    $kode_barang = $_POST["kode_barang"];
    $nama_barang = $_POST["nama_barang"];
    $spesifikasi = $_POST["spesifikasi"];
    $kategori = $_POST["kategori"];


    $stok = "0";
    $jmlkeluar = "0";

    $db->input_barangbaru($kode_barang,$nama_barang,$spesifikasi,$kategori,$stok,$jmlkeluar);

    echo "<script>alert('Data barang tersimpan'); window.location.href='../index.php?page=databarang';</script>";

}

// ===========================================================================================
// BARANG MASUK
// ===========================================================================================
else if($aksi == "tambahbarangmasuk"){

    $nama_supplier = $_POST["nama_supplier"];
    $id_barangmasuk = $_POST["id_masukbarang"];
    $nama_barang = $_POST["nama_barang"];
    $tgl = $_POST["tgl_masuk"];
    $jumlah = $_POST["jumlah_masuk"];
    $lokasi_barang = $_POST["lokasi_barang"];
    $kondisi = $_POST["kondisi"];
    $sumberdana = $_POST["sumber_dana"];
    $keterangan = $_POST["keterangan"];

    $kdsup = mysqli_query($conn,"select kode_supplier from tbl_supplier where nama_supplier='".$nama_supplier."'");
    $skode = mysqli_fetch_array($kdsup);
    $kode_supplier = $skode["kode_supplier"];

    $kdbarang = mysqli_query($conn,"select kode_barang from tbl_barang where nama_barang='".$nama_barang."' ");
    $skodebrg = mysqli_fetch_array($kdbarang);
    $kode_barang = $skodebrg["kode_barang"];


    $db->input_barangmasuk($id_barangmasuk,$kode_barang,$nama_barang,$tgl,$jumlah,$lokasi_barang,$kondisi,$sumberdana,$keterangan,$kode_supplier);
    
    echo "<script>alert('Barang Masuk Berhasil ditambahkan'); window.location.href='../index.php?page=barangmasuk';</script>";

}

// ===========================================================================================
// BARANG RUSAK
// ===========================================================================================
else if($aksi == "tambahbarangrusak"){


    $id_barangrusak = $_POST["id_barangrusak"];
    $nama_barang = $_POST["nama_barang"];
    $kondisi = $_POST["kondisi"];
    $tgl = $_POST["tgl_rusak"];
    $jumlah = $_POST["jumlah_rusak"];
    $lokasi_barang = $_POST["lokasi_barang"];
    $keterangan = $_POST["keterangan"];

    $kdbarang = mysqli_query($conn,"select kode_barang from tbl_barang where nama_barang='".$nama_barang."' ");
    $skodebrg = mysqli_fetch_array($kdbarang);
    $kode_barang = $skodebrg["kode_barang"];

    $db->input_barangrusak($id_barangrusak,$kode_barang,$nama_barang,$kondisi,$tgl,$jumlah,$lokasi_barang,$keterangan);
    
    echo "<script>alert('Barang Rusak Berhasil Ditambahkan'); window.location.href='../index.php?page=barangrusak';</script>";

}

// ===========================================================================================
// BARANG Keluar
// ===========================================================================================
else if($aksi == "tambahbarangkeluar"){

    $id_barangkeluar = $_POST["id_keluarbarang"];
    $nama_barang = $_POST["nama_barang"];
    $tgl = $_POST["tgl_keluar"];
    $jumlah = $_POST["jumlah_keluar"];
    $lokasi_barang = $_POST["lokasi_barang"];
    $kondisi = $_POST["kondisi"];
    $keterangan = $_POST["keterangan"];

    $kdbarang = mysqli_query($conn,"select kode_barang from tbl_barang where nama_barang='".$nama_barang."' ");
    $skodebrg = mysqli_fetch_array($kdbarang);
    $kode_barang = $skodebrg["kode_barang"];
    
    $masuk= "SELECT SUM(jumlah_masuk) AS t_masuk From tbl_masukbarang WHERE lokasi_barang LIKE '%$lokasi_barang%' AND nama_barang='$nama_barang'";
    $t_masuk=0;
    $result = mysqli_query($conn, $masuk);
    while($row = mysqli_fetch_assoc($result)){
        number_format($data[] = $row['t_masuk']);
        $t_masuk=$row['t_masuk'];
        }

    if ($t_masuk - $jumlah >0) {
        $db->input_barangkeluar($id_barangkeluar,$kode_barang,$nama_barang,$tgl,$jumlah,$lokasi_barang,$kondisi,$keterangan);
    echo "<script>alert('Barang Keluar Berhasil Ditambahkan'); window.location.href='../index.php?page=barangkeluar';</script>";
    }
    else {
        echo "<script>alert('Barang Keluar Gagal Ditambahkan'); window.location.href='../index.php?page=barangkeluar';</script>";
    }
    
    
}


else if($aksi == "updatebarang")
{
    $kode_barang = $_POST["kode_barang"];
    $nama_barang = $_POST["nama_barang"];
    $spesifikasi = $_POST["spesifikasi"];
    $kategori = $_POST["kategori"];

    // $query = $db->update_barang($nama_barang,$spesifikasi,$lokasi,$kategori,$kondisi,$jenis,$sumber_dana,$kode_barang);

    $query = mysqli_query($conn,"update tbl_barang set 
        nama_barang='".$nama_barang."',
        spesifikasi='".$spesifikasi."',
        kategori='".$kategori."' where kode_barang='".$kode_barang."' ");

    // mengambil data barang keluar/masuk
    $UPD = mysqli_query($conn,"select * from tbl_keluarbarang a inner join tbl_masukbarang b on a.kode_barang=b.kode_barang 
    where a.kode_barang='".$kode_barang."' and  b.kode_barang='".$kode_barang."' ");

    $cek = mysqli_fetch_array($UPD);
    
    if ($query) {
        if ($cek > 0) {
            $queryupdate  = mysqli_query($conn,"update tbl_keluarbarang a inner join tbl_masukbarang b on a.kode_barang=b.kode_barang 
                set a.nama_barang='".$nama_barang."',b.nama_barang='".$nama_barang."'
                where a.kode_barang='".$kode_barang."' ");
            if ($queryupdate) {
                echo "<script>alert('Data Berhasil Diubah'); window.location.href='../index.php?page=databarang';</script>";
            }
        }
                echo "<script>alert('Data Berhasil Diubah'); window.location.href='../index.php?page=databarang';</script>";

    }
    else
    {
        echo "Gagal";
    }


}