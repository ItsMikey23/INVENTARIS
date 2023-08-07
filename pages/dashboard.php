
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
  <?php

$datastok="SELECT * FROM tbl_barang";
$sb=$conn->query($datastok);
    
if($sb->num_rows>0)
{
    while($stokbarang=$sb->fetch_assoc())
    {
        //Menghitung Total Stok Barang
        $nama_barang=$stokbarang['nama_barang']; 
    
        $masuk= "SELECT SUM(jumlah_masuk) AS t_masuk FROM tbl_masukbarang";
        $t_masuk=0;
        $result = mysqli_query($conn, $masuk);
        while($row = mysqli_fetch_assoc($result)){
            number_format($data[] = $row['t_masuk']);
            $t_masuk=$row['t_masuk'];
            }
        $keluar= "SELECT SUM(jumlah_keluar) AS t_keluar FROM tbl_keluarbarang";
        $t_keluar=0;
        $result2 = mysqli_query($conn, $keluar);
        while($row2 = mysqli_fetch_assoc($result2)){
            number_format($data2[] = $row2['t_keluar']);
            $t_keluar=$row2['t_keluar'];
            }
        $brng= "SELECT COUNT(nama_barang) AS d_barang FROM tbl_barang";
        $d_barang=0;
        $result3 = mysqli_query($conn, $brng);
        while($row3 = mysqli_fetch_assoc($result3)){
            number_format($data3[] = $row3['d_barang']);
            $d_barang=$row3['d_barang'];
            }
        $rusak= "SELECT SUM(jumlah_rusak) AS t_rusak FROM tbl_rusakbarang";
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

    }
    
}
else{
    $d_barang=0;  
    $t_masuk=0;    
    $t_keluar=0;    
    $t_rusak=0;    
    $s_barang=0;    
}
   


if ($d_barang>0){?>

<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-qrcode fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?=$d_barang?></div>
                        <div>Barang!</div>
                    </div>
                </div>
            </div>
            <a href="index.php?page=databarang">
                <div class="panel-footer">
                    <span class="pull-left">Lihat Detail</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-truck fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?=$s_barang?></div>
                        <div>Stok!</div>
                    </div>
                </div>
            </div>
            <a href="index.php?page=datastok">
                <div class="panel-footer">
                    <span class="pull-left">Lihat Detail</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-sign-in fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?=$t_masuk?></div>
                        <div>Barang Masuk!</div>
                    </div>
                </div>
            </div>
            <a href="index.php?page=barangmasuk">
                <div class="panel-footer">
                    <span class="pull-left">Lihat Detail</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-sign-out fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?=$t_keluar?></div>
                        <div>Barang Keluar!</div>
                    </div>
                </div>
            </div>
            <a href="index.php?page=barangkeluar">
                <div class="panel-footer">
                    <span class="pull-left">Lihat Detail</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

<div class="row">
<div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-wrench fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?=$t_rusak?></div>
                        <div>Barang Rusak!</div>
                    </div>
                </div>
            </div>
            <a href="index.php?page=barangrusak">
                <div class="panel-footer">
                    <span class="pull-left">Lihat Detail</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
 </div>

<?php } 

else{
?>

    <div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-qrcode fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">0</div>
                        <div>Barang!</div>
                    </div>
                </div>
            </div>
            <a href="index.php?page=databarang">
                <div class="panel-footer">
                    <span class="pull-left">Lihat Detail</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-truck fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">0</div>
                        <div>Stok!</div>
                    </div>
                </div>
            </div>
            <a href="index.php?page=datastok">
                <div class="panel-footer">
                    <span class="pull-left">Lihat Detail</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-sign-in fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">0</div>
                        <div>Barang Masuk!</div>
                    </div>
                </div>
            </div>
            <a href="index.php?page=barangmasuk">
                <div class="panel-footer">
                    <span class="pull-left">Lihat Detail</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-sign-out fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">0</div>
                        <div>Barang Keluar!</div>
                    </div>
                </div>
            </div>
            <a href="index.php?page=barangkeluar">
                <div class="panel-footer">
                    <span class="pull-left">Lihat Detail</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

<div class="row">
<div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-wrench fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">0</div>
                        <div>Barang Rusak!</div>
                    </div>
                </div>
            </div>
            <a href="index.php?page=barangrusak">
                <div class="panel-footer">
                    <span class="pull-left">Lihat Detail</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
 </div>




<?php } ?>