 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Merek</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Haki</a></li>
               <li class="breadcrumb-item"><a href="<?= base_url()?>Pengajuan">Pengusulan</a></li>
              <li class="breadcrumb-item active">Daftar Merek</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
   

    <!-- formulir permohonan kode billing -->
     <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                              <h3>Billing</h3>
                                <!-- form permohonan kode pembayaran -->
                                <form>
                                  <div class="row"> 
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label>Tipe Permohonan</label>
                                          <select class="form-control"
                                            id="tipe" name="tipe"
                                            rows="1" required>
                                             <option>Pilih</option>
                                            <option>Merek Dagang</option>
                                            <option>Merek Dagang & Jasa</option>
                                            <option>Merek Jasa</option>
                                            <option>Merek Kolektif</option>

                                          </select>
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label>Jenis Permohonan</label>
                                         <select class="form-control"
                                            id="kelas" name="kelas"
                                            rows="1" required>
                                             <option>Pilih</option>
                                            <option>Umum</option>
                                            <option>Usaha Mikro dan Usaha Kecil</option>
                                          </select>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row"> 
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label>Kelas</label>
                                           <ol class="breadcrumb float-sm-right">
                                         
                                            <button type="submit" class="btn btn-primary btn-sm" > Detail Kelas (Barang/Jasa)</button>
                                            </ol>
                                         <input type="kelas" class="form-control" id="kelas" placeholder="Kelas">
                                         
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label>No.Telpon/WA</label>
                                          <input input type="number" 
                                          class="form-control"
                                          id="tlpn" rows="1" 
                                          name=""><b><i>contoh : 0811111111</i></b>
                                      </div>
                                    </div>
                                  </div>                 

                                <div class="modal-footer justify-content-between">
                                  <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
      

    <!-- tabel daftar merek -->
    <section class="content">
       <div class="content--center padding-content--left-right">
          <div class="wrapper--bg">
            <div class="table-container">
              <div class="row mt-3">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                       
                      <h1 class="card-title"><b>Tabel Daftar Merek</b></h1>
          
                      <div class="card-tools">
                        <ol class="breadcrumb float-sm-right">
                      <!-- tombol tambah usulan -->
                        <button type="button" class="btn btn-primary" title="Pengusulan Daftar Merek" data-toggle="modal" data-target="#tambah-usulan" ><i class="fa fa-plus"></i>Tambah Usulan</button>
                      </ol>
                   </div>

           <br></br>
      
            <table id="table" class="table table-striped table-bordered ">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nomor Transaksi </th>
                  <th>Tanggal Pengajuan</th>
                  <th>Tipe Merek</th>
                  <th>Merek</th>
                  <th>Kelas</th>
                  <th>Tipe Permohonan</th>
                  <th>Jenis Permohonan</th>
                  <th>Status</th>
                 
                  <th class="not-export-col">Aksi</th>
                </tr> 
              </thead>
              <tbody>
                <?php 
                $no=1;
                foreach ($merek as $r) { ?>
                <tr>    
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $r['no_transaksi'] ?></td>
                  <td><?php echo $r['tgl_pengajuan']?></td>
                  <td><?php echo $r['tipe_merek']?></td>
                  <td><?php echo $r['merek']?></td>
                  <td><?php echo $r['kelas']?></td>
                  <td><?php echo $r['tipe_permohonan']?></td>
                  <td><?php echo $r['jenis_permohonan']?></td>
                  <td><?php echo $r['file']?></td>
                  <td>
                    <button class="ubahusulan btn btn-warning btn-xs mt-1"
                      title="Ubah Detail Usulan" rel="tooltip"
                      data-ubahjudul=""
                      data-ubahanggota="" 
                      data-ubahjenis="" 
                      data-ubahbidang="" 
                      data-ubahtahun=""
                      data-ubahdana=""
                      data-ubahprogres=""
                      data-toggle="modal"
                      data-target=".ubah-usulan">
                      <i class="fas fa-edit"></i>
                    </button>
                    <button class="hapususulan btn btn-danger btn-xs mt-1"
                      title="Hapus Usulan" rel="tooltip"
                      data-toggle="modal"
                      data-judul=""
                      data-target=".hapus-usulan">
                      <i class="fas fa-trash"></i>
                    </button>                                    
                    
                    <a href=""
                    target="_blank"
                    class="btn btn-primary btn-xs mt-1"
                    title="Lihat Proposal"
                    rel="tooltip">
                    <i class="fa fa-file-pdf"> </i>
                    </a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table> 
          </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
           </div>
          </div>        
         </div>
            <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>


    <!-- FORMULIR General Info -->
    <div class="modal fade" id="tambah-usulan">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">GENERAL INFO</h4>
                </div>
                <div class="modal-body">
                  <?= validation_errors(); ?>
                  <form action="" method="post" accept-charset="utf-8">
                    <div class="form-group">
                        <label>Tanggal Pengajuan</label>
                          <input  class="form-control"
                            id="t_ajukan"
                            rows="1" name="t_ajukan" type="date"></input>
                    </div>

                    <div class="row"> 
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Tipe Permohonan</label>
                            <select class="form-control"
                                    id="tipe" name="tipe"
                                    rows="1" required>
                              <option>Pilih</option>
                              <option>Merek Dagang</option>
                              <option>Merek Dagang & Jasa</option>
                              <option>Merek Jasa</option>
                              <option>Merek Kolektif</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Jenis Permohonan</label>
                              <select class="form-control"
                                      id="kelas" name="kelas"
                                      rows="1" required>
                                <option>Pilih</option>
                                <option>Umum</option>
                                <option>Usaha Mikro dan Usaha Kecil</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      <div class="row"> 
                      <div class="col-sm-9">
                        <div class="form-group">
                         <label>Kode Billing </label>
                          <input  class="form-control"
                            id="jenis"
                            rows="1" name="jenis" ></input>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label></label>
                             <a href="" class="nav-link active" >
                              <button type="submit" class="btn btn-primary" name="simpan">Check</button>
                              </a> 
                          </div>
                        </div>
                      </div>

                    <div class="form-group">
                        <label>Tanggal Pembayaran</label>
                          <input  class="form-control"
                            id="t_bayar"
                            rows="1" name="t_bayar" type="date"></input>
                    </div>

                    <div class="form-group">
                          <label>Jumlah Pembayaran </label>
                        <input  class="form-control"
                            id="dana"
                            rows="1" name="dana" type="number"></input>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">Unggah Bukti Pembayaran</label><br />
                        <label class="text-red">Ukuran file <span class="badge bg-red">Max. 1 MB</span> dalam format <span class="badge bg-red">.jpg/.jpeg/.png</span></label><br />
                        <input type="file" id="bayar" name="usul_merek" >
                    </div>

                  </div>

                  <div class="modal-footer justify-content-between">
                    <a href="<?= base_url(); ?>Usul" class="nav-link active">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                    </a>
                    <a href="<?= base_url(); ?>merek/Permohonan_merek" class="nav-link active">
                      <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    </a>

                  </div>
                </form>
                </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div></div>
  <!-- /.content-wrapper -->