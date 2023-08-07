<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Barang</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Input Barang Masuk
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                    <form action="pages/proses_barang.php?aksi=tambahbarangmasuk" method="post" enctype="multipart/form-data">
        
                            <div class="form-group">
                                <label>Kode Barang Masuk</label>
                                <input type="text" placeholder="kode Barang Masuk" name="id_masukbarang" class="form-control" required value="<?=$hasilkodemasuk?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Pilih Supplier</label>
                                <select name="nama_supplier" class="form-control" required>
                                    <option value="">Pilih Supplier</option>
                                    <?php 
                                            foreach($db->supplier() as $sup)
                                            {
                                                ?>
                                                <option value="<?=$sup['nama_supplier']?>"><?=$sup['nama_supplier']?></option>
                                                <?php
                                            }
                                    ?>  
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nama Barang</label>
                                 <select name="nama_barang" class="form-control" required>
                                    <option value="">Pilih Barang</option>
                                    <?php 
                                            foreach($db->barang() as $brg)
                                            {
                                                ?>
                                                <option value="<?=$brg['nama_barang']?>"><?=$brg['nama_barang']?></option>
                                                <?php
                                            }
                                    ?>  
                                </select>
                            </div>
                            <div class="form-group">
                            <label>Jumlah Masuk</label>
                                <input type="text" placeholder="Masukan jumlah masuk" name="jumlah_masuk" class="form-control" required pattern="[0-9]+">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Masuk</label>
                                <input type="date" placeholder="Tanggal Masuk" name="tgl_masuk" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                        <div class="form-group">
                                <label>Sumber Dana</label>
                                <input type="text" placeholder="Masukan Sumber Dana" name="sumber_dana" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Kondisi</label>
                                <select name="kondisi" class="form-control" required>
                                    <option value="">Pilih Kondisi</option>
                                    <option value="Baru">Baru</option>
                                    <option value="Bekas">Bekas</option>
                                </select>
                            </div>     
                            <div class="form-group">
                                <label>Lokasi Masuk</label>
                                <select name="lokasi_barang" class="form-control" required>
                                    <option value="">Pilih Lokasi</option>
                                    <option value="Kelas 1">Kelas 1</option>
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
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea type="text" placeholder="Keterangan" name="keterangan" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                            <button type="submit" name="submit" value="Simpan" class="btn btn-default" style="background-color: #333; color: #fff;">Submit</button>
                            <a href='?page=barangmasuk' class="btn btn-default" >Batal</a>
                            </div>
                        </div>
                        </form>
                    </div>
                    <!-- /.col-lg-6 (nested) -->
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->