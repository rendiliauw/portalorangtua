<!-- code -->
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <form role="form" method="post" action="inputData" name="postform" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="col-lg-6 offset-md-4">
                        <div class="card">
                            <div class="card-body">
                                <label for="input-file-max-fs">You can add multi file a max file size 3 Mega</label>
                                <input type="file" name="gambar[]" multiple="">
                                <button type="submit" name="pilihanfile" class="btn btn-info m-t-10 mb-2">Kirim</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 offset-md-2">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama File</th>
                                        <th>Tgl Upload</th>
                                        <th class="text-nowrap">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td> 
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                
                    <div class="col-lg-2 offset-md-5">
                        <button type="submit" name="close" class="btn btn-rounded btn-block btn-success">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>  