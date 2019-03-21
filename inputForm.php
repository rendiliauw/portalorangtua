<?php include 'header.php'; 
?>

<?php 
    $nama = ['rendi','hendri','edo','ahong'];

    
?>

<!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Profile Anak</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Profile Anak</li>
                            </ol>
                            <!-- <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button> -->
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== --> 
 <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                
                            <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img class="img-responsive" src="assets/images/big/img6.jpg" alt="First slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h3 class="text-white">First title goes here</h3>
                                                <p>this is the subcontent you can use this</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-responsive" src="assets/images/big/img3.jpg" alt="Second slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h3 class="text-white">Second title goes here</h3>
                                                <p>this is the subcontent you can use this</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-responsive" src="assets/images/big/img4.jpg" alt="Third slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h3 class="text-white">Third title goes here</h3>
                                                <p>this is the subcontent you can use this</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body">    
                                <div class="row">  
                              
                                    <div class="form-group col-10">
                                        <select class="form-control" name="anak" id="pilihAnak">
                                            <option value="#"  >--Pilih Anak--</option>
                                            <?php for($i=1; $i<count($nama); $i++) {?>
                                            <option value="<?php echo $i; ?>"  nama="<?php  echo $nama[$i]; ?>" > <?php echo $nama[$i]; ?></option>
                                            <?php } ?>
                                        </select>                               
                                    </div>
                            </div>    

                                <small class="text-muted">Sekolah</small>
                                    <h6>Smak 1 Bpk Penabur Jakarta</h6> 
                                <small class="text-muted p-t-30 db">Kelas</small>
                                    <h6>IPA 3</h6> 
                                <small class="text-muted p-t-30 db">No. SPJ</small>
                                    <h6>111506-101</h6>
                                <small class="text-muted p-t-30 db">Email Penabur</small>
                                    <h6>user@gmail.com</h6>    
                               <small class="text-muted p-t-30 db">Social Profile</small>
                                <br/>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-facebook"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-youtube"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Siswa</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Orang Tua</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Saudara</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#lainlain" role="tab">Lain-lain</a> </li>
                            </ul>
                            <!-- Tab siswa -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                                                                      
                                            <div class="col-sm-6 col-xs-6">
                                                <form class="formSiswa" name="formSiswa">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Nama Lengkap</label>
                                                        <input type="text" class="form-control" value="" id="namaLengkap" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Nama Panggilan</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Nama Penyingkatan</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Jumlah Saudara Kandung</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Jumlah Saudara Tiri</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Tgl Lahir</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Jenis Kelamin</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Negara</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Anak Ke</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Kartu Keluarga</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Agama Kepercayaan Lain</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Provinsi</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Kota</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Kartu Keluarga</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">RT</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Jalan</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Kota KTP</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Kecamatan KTP</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Kode Pos KTP</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">RT KTP</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Jalan KTP</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">No. TLP</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    
                                                </form>
                                            </div>
                                                   

                                          
                                            <div class="col-sm-6 col-xs-6">
                                                <form class="formSiswa" name="pilihSiswa">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Jumlah Saudara Angkat</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Bahasa Rumah</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Status Tempat Tinggal</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Tinggal Bersama :</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">No KTP </label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">NO Paspor</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">NO KK</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Kewarnegaraan</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Agama</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">GKI</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Tempat Ibadah</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Kecamatan</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Kelurahan</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Kode Pos</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">RW</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Provinsi KTP</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Kelurahan KTP</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">RW KTP</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Email Pribadi</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">No HP</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">RT KTP</label>
                                                        <input type="text" class="form-control" value="" name="">
                                                    </div>
                                                    
                                                    
                                                </form>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                <!--Tab orang tua-->
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="card-body">
                                    <div class="row">
                                                                                      
                                                <div class="col-sm-6 col-xs-6">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Nama Ayah</label>
                                                            <input type="text" class="form-control" value="" name="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Tgl Lahir</label>
                                                            <input type="text" class="form-control" value="" name="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">GKI</label>
                                                            <input type="text" class="form-control" value="" name="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">NO. KTP</label>
                                                            <input type="text" class="form-control" value="" name="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">NO. KK</label>
                                                            <input type="text" class="form-control" value="" name="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Pendidikan</label>
                                                            <input type="text" class="form-control" value="" name="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Pekerjaan</label>
                                                            <input type="text" class="form-control" value="" name="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Kota</label>
                                                            <input type="text" class="form-control" value="" name="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Kel</label>
                                                            <input type="text" class="form-control" value="" name="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">RT</label>
                                                            <input type="text" class="form-control" value="" name="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Jalan</label>
                                                            <input type="text" class="form-control" value="" name="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Kota KTP</label>
                                                            <input type="text" class="form-control" value="" name="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Kel KTP</label>
                                                            <input type="text" class="form-control" value="" name="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">RT KTP</label>
                                                            <input type="text" class="form-control" value="" name="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Jalan KTP</label>
                                                            <input type="text" class="form-control" value="" name="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Penghasilan</label>
                                                            <input type="text" class="form-control" value="" name="">
                                                        </div>
                                                        
                                                        
                                                        
                                                    </form>
                                                </div>
                                                        
    
                                            
                                                <div class="col-sm-6 col-xs-6">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Tempat Lahir</label>
                                                            <input type="text" class="form-control" value="" name="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Agama</label>
                                                            <input type="text" class="form-control" value="" name="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">ID. GKI</label>
                                                            <input type="text" class="form-control" value="" name="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">NO KTP KITAS</label>
                                                            <input type="text" class="form-control" value="" name="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">NO PASPOR</label>
                                                            <input type="text" class="form-control" value="" name="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Jurusan</label>
                                                            <input type="text" class="form-control" value="" name="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Kec</label>
                                                            <input type="text" class="form-control" value="" name="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Kode POS</label>
                                                            <input type="text" class="form-control" value="" name="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">RW</label>
                                                            <input type="text" class="form-control" value="" name="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Prop KTP</label>
                                                            <input type="text" class="form-control" value="" name="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Kec KTP</label>
                                                            <input type="text" class="form-control" value="" name="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Kode POS KTP</label>
                                                            <input type="text" class="form-control" value="" name="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">RW KTP</label>
                                                            <input type="text" class="form-control" value="" name="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email</label>
                                                            <input type="text" class="form-control" value="" name="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Tlp. Rumah</label>
                                                            <input type="text" class="form-control" value="" name="">
                                                        </div>
                                                        
                                                    </form>
                                                </div>
                                                
                                            </div>
                                    </div>
                                </div>
                                <!----Tab saudara-------->
                                <div class="tab-pane" id="settings" role="tabpanel">
                                    <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-6"> 
                                            <form>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Status Siswa Penabur</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Nama Panggilan</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Jumlah Saudara Kandung</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Jumlah Saudara Angkat</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Status Tempat Tinggal</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Tempat Lahir</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Jenis Kelamin</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">NO Paspor</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Kewarnegaraan</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Anak Ke</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Agama</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Tempat Ibadah</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Provinsi</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Kecamatan</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Kode Pos</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">RW</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Provinsi KTP</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Kecamatan KTP</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Kode POS KTP</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">RW KTP</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email Pribadi</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">No HP</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                
                                            </form>
                                        </div>
                                          
                                        <div class="col-sm-6 col-xs-6">
                                            <form>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Nama Lengkap</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Nama Penyingkatan</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Jumlah Saudara Tiri</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Bahasa Rumah</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Tinggal Bersama</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                    <div class="form-group">
                                                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">No KTP Kitas</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">NO KK</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Negara</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Kartu Keluarga</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">GKI</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Agama Kepercayaan Lain</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Kota</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Kelurahan</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">RT</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Jalan</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Kota KTP</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Kelurahan KTP</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">RT KTP</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Jalan KTP</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">No. TLP</label>
                                                    <input type="text" class="form-control" value="" name="">
                                                </div>
                                                
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!---Tab Dokumen--->
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="card-body">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                


                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->


<?php include 'footer.php'; ?>        