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
              <li class="breadcrumb-item active">Desain Industri</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
   

    <!-- Main content -->
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
                                        <label>Nama</label>
                                          <input type="text" 
                                          class="form-control"
                                          id="jenis" rows="1" 
                                          name="nama" >
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label>Judul</label>
                                          <input input type="text" 
                                          class="form-control"
                                          id="jenis" rows="1" 
                                          name="judul">
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row"> 
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label>Sumber Dana</label>
                                          <select class="form-control"
                                            id="tgl" name="dana"
                                          rows="1" required>
                                            <option>Individu</option>
                                            <option>Instansi</option>
                                            <option>Kelompok</option>
                                          </select>
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label>No.Telpon/WA</label>
                                          <input input type="number" 
                                          class="form-control"
                                          id="jenis" rows="1" 
                                          name="">
                                      </div>
                                    </div>
                                  </div>                  </form>

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

    <section class="content">
       <div class="content--center padding-content--left-right">
          <div class="wrapper--bg">
            <div class="table-container">
              <div class="row mt-3">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                       
                      <a href="index.html">
                    <button class="btn btn-sm btn-flat bg-navy" title="kembali"><i class="fa fa-arrow-left"></i></button>
                </a>&nbsp;
            
                  List Pengajuan Desain Industri
                </h3>
                <div class="card-tools"></div>
              </div>
              <div class="card-body p-0">
                <table class="table table-bordered table-hover table-responsive">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-center" width="5%">NO.</th>
                      <th class="text-uppercase text-center" width="20%">Judul</th>
                      <th class="text-uppercase text-center" width="25%">Keanggotaan</th>
                      <th class="text-uppercase text-center" width="15%">Jenis / Kategori</th>
                      <th class="text-uppercase text-center" width="20%">Progress</th>
                      <th class="text-uppercase text-center" width="15%">Aksi</th>
                    </tr>
                  </thead>
                
                  </tbody>
                </table>
              </div>
              <tbody>
                <?php 
                $no=1;
                foreach ($desain as $r) { ?>
                <tr>    
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $r['judul'] ?></td>
                  <td><?php echo $r['nama']?></td>
                  <td><?php echo $r['jenis_usul']?></td>
                  <td><?php echo $r['anggota']?></td>
                  <td><?php echo $r['tgl_usul']?></td>
                  <td><?php echo $r['fakultas']?></td>
                  <td><?php echo $r['id_usul']?></td>
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
    <!-- /.content -->
    <div class="modal fade" id="tambah-usulan">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Pengusulan Daftar Merek</h4>
                </div>
                <div class="modal-body">
                  <?= validation_errors(); ?>
                  <form action="" method="post" accept-charset="utf-8">
                    <div class="form-group">
                        <label>Judul Daftar Merek</label>
                      <textarea class="form-control"
                            id="judul"
                            rows="3" name="judul" ></textarea>
                    </div>
                    <div class="form-group">
                          <label>Keanggotaan </label>
                        <textarea class="form-control"
                            id="anggota"
                            rows="2" name="anggota" ></textarea>
                    </div>
                    <div class="form-group">
                          <label>Jenis/Kategori </label>
                        <input  class="form-control"
                            id="jenis"
                            rows="1" name="jenis" ></input>
                    </div>
                     <div class="form-group">
                          <label>Bidang Fokus </label>
                        <input  class="form-control"
                            id="bidang"
                            rows="1" name="bidang" ></input>
                    </div>
                     <div class="form-group">
                          <label>Tahun </label>
                        <select type="number" class="form-control"
                            id="tgl" name="tahun"
                            rows="1" required>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            
                            </select>
                    </div>
                     <div class="form-group">
                          <label>Sumber Dana </label>
                        <input  class="form-control"
                            id="dana"
                            rows="1" name="dana" ></input>
                    </div>
                    <div class="form-group">
                          <label>Kode Bukti Pembayaran </label>
                        <input  class="form-control"
                            id="dana"
                            rows="1" name="dana" type="number"></input>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Unggah File Usulan</label><br />
                        <label class="text-red">Ukuran file <span class="badge bg-red">Max. 5 MB</span> dalam format <span class="badge bg-red">PDF</span></label><br />
                        <input type="file" id="" name="usul_merek" >
                    </div></form>
                  </div>
                  <div class="modal-footer justify-content-between">
                    <a href="<?= base_url(); ?>Usul" class="nav-link active">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                    </a>
                    <a href="<?= base_url(); ?> Usul" class="nav-link active">
                      <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    </a>

                  </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->


  </div>
  <!-- /.content-wrapper -->
</div>