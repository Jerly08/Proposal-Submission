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


  </div>
  <!-- /.content-wrapper -->
</div>