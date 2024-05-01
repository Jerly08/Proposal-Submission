
<body class="bg-gradient-primary">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-
            ">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">

                <div class="login-logo pt-2" style="line-height: 0.8em;">
                    <img class="mb-3" src="<?php echo base_url()?>public/dist/img/logo_unsrat.png" alt="logo" width="100"/><br/>
                    <a href=""><strong>MASUK</strong></a><br/>
                                    </div>
                <p class="login-box-msg text-red">
                    <label class="badge badge-danger"></label>
                </p>
                
                <form action="<?= base_url(); ?>Home" method="post" accept-charset="utf-8">

                    <div class="input-group mb-3">
                        <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <!-- lupa Password -->
                    <a href="#" style="text-align: right; padding-top: 10px"><legend id="forget-pass?" style="font-size: 13px;"><b>Forget Pass?</b></legend></a>

                    <!-- tombol login -->
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn bg-black btn-block">MASUK</button>
                        </div>
                    </div>
                    <!-- menu daftar akun -->
                    <center>
                    <p  id="Daftar">Belum memiliki akun?<a href="daftar.php" > <b>Daftar</b> </a></p>
                    </center>
                </form>
            </div>
        </div>
    </div>  

