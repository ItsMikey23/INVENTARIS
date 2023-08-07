<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Data Barang Ruangan</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Barang Ruangan
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