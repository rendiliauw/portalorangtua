<?php 
error_reporting(false);
session_start();
?>
<!-- code -->
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
    <form class="">
    <div class="row">                                                                                     
        <div class="col-sm-6 col-xs-6">
            
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama <?php if(isset($_POST['pilihanayah'])){echo 'ayah';}else{echo 'ibu';}?></label>
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
        </div>
                

    
        <div class="col-sm-6 col-xs-6">
            
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
        </div>

        <button type="submit" class="btn btn-primary ">Submit</button>  
    </div>
</div>
<!--end row-->
  
</form>
</div>
<!-- end countener-->
</div>
<!-- end page wrapper-->
       