<!Doctype HTML> 
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1" >
	    <title>UNIVERSITY PODOMORO</title>
		<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
		<script src="ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="bootstrap/dist/js/bootstrap.min.js"></script>
    </head>
   <body>


                 <div class="row">
                    <div class="col-lg-8">
                        <center>
                                  <h1>UPDATE DATA MAHASISWA</h1>
                        </center>
 

                        <form role="form" action="<?php echo $base_url."mahasiswa/update_calon" ?>" method="post" enctype="multipart/form-data">  
                         <?php foreach ($data_kampus as $a) {?>  
                        <table style="margin:20px auto;">
                            <input type="hidden" name="txtcalon" value="<?php echo $a->calon;?>">
                            <div class="form-group">
                               <tr>
                                    <td> 
                                        <label>Nim</label><br>
                                        <input class="form-control" name="nim" placeholder="Nim" value="<?php echo $a->nim;?>">
                                    </td>
                                </tr>
                            </div>
                            <div class="form-group">
                                <tr>
                                    <td>
                                        <label>Nama</label><br>
                                        <input class="form-control" name="nama" placeholder="Nama" value="<?php echo $a->nama;?>">
                                    </td>
                                </tr>        
                            </div> 
                             <div class="form-group">
                                <tr>
                                    <td>                
                                        <label>Jurusan</label><br>
                                        <input class="form-control" name="jurusan" placeholder="Jurusan" value="<?php echo $a->jurusan;?>">
                                    </td>
                                </tr> 
                            </div>
                            <tr>
                                <td>
                                    <input type="submit" class="btn btn-default" value="Save">
                                </td> 
                            </tr>
                            <tr>
                                <td>
                                    <input type="button" onclick="history.go(-1)" class="btn btn-default" value="Kembali">
                                </td> 
                            </tr>
                             </table>
                             <?php }?>
                        </form> 
                    </div>
                </div>
                
    </body>                     
</html>
 