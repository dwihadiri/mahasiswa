<!Doctype HTML>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1" >
        <title>Podomoro University</title>
        <meta name="description" content="Sido Muncul Herbal Indonesia top Branded" />
        <meta name="keywords" content="jamu, sido muncul, jamu sido muncul, herbal, jamu herbal" />
        <meta name="robots" content="index,follow" />
        <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
		<script src="ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript">

            function hapus(id){
                var dika =  confirm('Are you sure you want to delete!');
                    if(dika) 
                    window.location='<?php echo $base_url."mahasiswa/hapus/"?>'+id;
                }
                function tampil_tambah(){
                    document.getElementById( 'hide_list_data' ).style.display = 'none';
                    document.getElementById( 'Show_data' ).style.display = 'inline';
                    document.getElementById('btn_tambah').style.display = 'none';
                }
                 
        </script>

        </head>
   <body>


                 <div class="row">
                    <div class="col-lg-8">
                        <center>
                                  <h1>Podomoro University</h1>
                        

                        <form role="form" action="<?php echo $base_url."mahasiswa/insert_calon" ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                               <tr>
                                    <td> 
                                        <label>Nim</label><br>
                                        <input class="form-control" name="nim" placeholder="nim">
                                    </td>
                                </tr>
                            </div>
                            <div class="form-group">
                                <tr>
                                    <td>
                                        <label>Nama</label><br>
                                        <input class="form-control" name="nama" placeholder="Nama">
                                    </td>
                                </tr>        
                            </div>
                             
                            <div class="form-group">
                                <tr>
                                    <td>                
                                        <label>Jurusan</label><br>
                                        <input class="form-control" name="jurusan" placeholder="Jurusan">
                                    </td>
                                </tr> 
                            </div>
                            
                            <tr>
                                <td>
                                    <input type="submit" class="btn btn-default" value="Save">
                                    <button type="reset" class="btn btn-default">Reset</button>
                                </td> 
                            </tr>
                             </table>   
                        </form>
                    </center>
  
                    </div>
                </div>
                
                <input id="btn_tambah" type="button" onclick="tampil_tambah()" class="btn btn-default" value="Tambah">
                <div id="hide_list_data">
                <h1>List Data</h1>
                <div class="table-responsive"> 
                <table class="table">
                <thead>    
                    <tr>
                        <th>Nim</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                    
                        <th colspan="2">Action</th>
                    </tr>
                </thead>   

                <?php $n=1; foreach ($data_kampus as $a) {?> 
                        <tr role="row" class="odd">
								
                            <td><?php echo $a->nim;?></td>
                            <td><?php echo $a->nama;?></td>
                            <td><?php echo $a->jurusan;?></td>
                            

                            <td><a href="#" onclick="hapus('<?php echo $a->calon;?>')">Hapus</a> | <a href="<?php echo $base_url;?>mahasiswa/edit_kampus/<?php echo $a->calon;?>">Edit</a></td>
                        </tr>
                    <?php $n++;}?>

                </table>
            </div>
            </div>
    </body>                   
</html>
 