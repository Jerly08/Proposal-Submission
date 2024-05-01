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
</div>
</div>


  <!-- /.content-wrapper -->
