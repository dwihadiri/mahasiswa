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
                    window.location='<?php echo $base_url."mahasiswa/hapus_pembayaran/"?>'+id;
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
                            <div class="form-group">
                               <tr>
                                  <h1>Podomoro University</h1>
								  <h2>FORM DATA ADMINISTRASI</h2>
                        

                        <form role="form" action="<?php echo $base_url."mahasiswa/insert_pembayaran" ?>" method="post" enctype="multipart/form-data">
                                    <td> 
                                        <label>SPP</label><br>
                                        <input class="form-control" name="spp" placeholder="SPP">
                                    </td>
                                </tr>
                            </div>
                            <div class="form-group">
                                <tr>
                                    <td>
                                        <label>BPP</label><br>
                                        <input class="form-control" name="bpp" placeholder="BPP">
                                    </td>
                                </tr>        
                            </div>
                             
                            <div class="form-group">
                                <tr>
                                    <td>                
                                        <label>SKS</label><br>
                                        <input class="form-control" name="sks" placeholder="SKS">
                                    </td>
                                </tr> 
                            </div>
							
							<div class="form-group">
                                <tr>
                                    <td>                
                                        <label>BIAYA</label><br>
                                        <input class="form-control" name="biaya" placeholder="BIAYA">
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
                        <th>SPP</th>
                        <th>BPP</th>
                        <th>SKS</th>
						<th>BIAYA</th>
                    
                        <th colspan="2">Action</th>
                    </tr>
                </thead>   

                <?php $n=1; foreach ($data_pembayaran as $a) {?> 
                        <tr role="row" class="odd">
								
                            <td><?php echo $a->spp;?></td>
                            <td><?php echo $a->bpp;?></td>
                            <td><?php echo $a->sks;?></td>
                            <td><?php echo $a->biaya;?></td>

                            <td><a href="#" onclick="hapus('<?php echo $a->id_spp;?>')">Hapus</a> | <a href="<?php echo $base_url;?>pembayaran/edit_pembayaran/<?php echo $a->id_spp;?>">Edit</a></td>
                        </tr>
                    <?php $n++;}?>

                </table>
            </div>
            </div>
    </body>                   
</html>
 