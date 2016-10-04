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
                                  <h1>UPDATE DATA PEMBAYARAN MAHASISWA</h1>
                        </center>
 

                        <form role="form" action="<?php echo $base_url."pembayaran/update_pembayaran" ?>" method="post" enctype="multipart/form-data">  
                         <?php foreach ($data_pembayaran as $a) {?>  
                        <table style="margin:20px auto;">
                            <input type="hidden" name="txtid_spp" value="<?php echo $a->id_spp;?>">
                            <div class="form-group">
                               <tr>
                                    <td> 
                                        <label>SPP</label><br>
                                        <input class="form-control" name="spp" placeholder="SPP" value="<?php echo $a->spp;?>">
                                    </td>
                                </tr>
                            </div>
                            <div class="form-group">
                                <tr>
                                    <td>
                                        <label>BPP</label><br>
                                        <input class="form-control" name="bpp" placeholder="BPP" value="<?php echo $a->bpp;?>">
                                    </td>
                                </tr>        
                            </div> 
                             <div class="form-group">
                                <tr>
                                    <td>                
                                        <label>SKS</label><br>
                                        <input class="form-control" name="sks" placeholder="SKS" value="<?php echo $a->sks;?>">
                                    </td>
                                </tr> 
                            </div>
							<div class="form-group">
                                <tr>
                                    <td>                
                                        <label>BIAYA</label><br>
                                        <input class="form-control" name="biaya" placeholder="BIAYA" value="<?php echo $a->biaya;?>">
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
 