<?php 
error_reporting(false);
session_start();
include 'header.php'; 
?>
<!-- code -->
<form role="form" method="post" action="inputData" name="postform" enctype="multipart/form-data">
<div class="page-wrapper" style="min-height: 591px;">
<div class="container-fluid">
    <div class="row page-titles"> </div>
    
    <div class="row">
        <?php
            if((isset($_POST['pilihananak']))||(isset($_POST['anaksatu']))||(isset($_POST['anakdua']))){
                require "inputanak.php";
            }else if(isset($_POST['pilihananak2'])){ ?>
                <div class="col-md-3 offset-md-3">
                    <!--pilihan ayah-->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Anak 1</h4>
                            <img class="card-img-top img-responsive" src="assets/images/users/student.png" alt="Card image cap">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <button type="submit" name="anaksatu" class="btn btn-rounded btn-block btn-success">Anak 1</button>
                        </div>
                    <!--end card body-->
                    </div>
                    <!--end card-->
                <!--End ayah-->
                </div>
                <!--end col-md-3-->

                <div class="col-md-3">
                    <!--pilihan ibu-->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Anak 2</h4>
                            <img class="card-img-top img-responsive" src="assets/images/users/student.png" alt="Card image cap">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <button type="submit" name="anakdua" class="btn btn-rounded btn-block btn-success">Anak 2</button>
                        </div>
                        <!--end card body-->
                    </div>
                    <!--end card-->
                    <!--End ibu-->
                </div>
                <!--end col-md-3-->
            <?php
            }else if(isset($_POST['pilihanortu'])){ ?>
                <div class="col-md-3 offset-md-3">
                    <!--pilihan ayah-->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Ayah</h4>
                            <img class="card-img-top img-responsive" src="assets/images/users/man.png" alt="Card image cap">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <button type="submit" name="pilihanayah" class="btn btn-rounded btn-block btn-success">View</button>
                        </div>
                    <!--end card body-->
                    </div>
                    <!--end card-->
                <!--End ayah-->
                </div>
                <!--end col-md-3-->

                <div class="col-md-3">
                    <!--pilihan ibu-->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Ibu</h4>
                            <img class="card-img-top img-responsive" src="assets/images/users/women.png" alt="Card image cap">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <button type="submit" name="pilihanibu" class="btn btn-rounded btn-block btn-success">View</button>
                        </div>
                        <!--end card body-->
                    </div>
                    <!--end card-->
                    <!--End ibu-->
                </div>
                <!--end col-md-3-->
            <?php
            }else if(isset($_POST['pilihanayah']) || isset($_POST['pilihanibu'])){
                require "inputorangtua.php";
            }else if(isset($_POST['pilihansaudara'])){
                require "inputsaudara.php";
            
            }else if(isset($_POST['close'])){ ?>
                <script>
                    window.location.href = "<?php echo $base_url ?>inputhome";
                </script>
            <?php
            }else if(isset($_POST['pilihanfile'])){
                require "inputfiles.php";
            }
        ?>   
    </div>
<!--end row-->

</div>
<!-- end countener-->
</div>
<!-- end page wrapper-->
</div>
<!-- end form-->
<?php include 'footer.php'; //exit(); ?>        