<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sidomuncul - Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $base_url;?>sido_tools/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo $base_url;?>sido_tools/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $base_url;?>sido_tools/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
       <?php include "header.php";?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Variable
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?php echo $base_url;?>index.php/admin">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Variable
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

               <div class="row">
                    <div class="col-lg-8">

                        <form role="form" action="<?php echo $base_url."index.php/admin/update_variable" ?>" method="post">
							<input type="hidden" id="txtid" name="txtid" value="<?php echo $variable_id;?>">
                            <div class="form-group">
                                <label>Share price</label>
                                <input class="form-control" name="share_price" placeholder="" value="<?php echo $share_price ?>">
                            </div>
							<div class="form-group">
                                <label>Low</label>
                                <input class="form-control" name="low" placeholder="" value="<?php echo $low ?>">
                            </div>
							<div class="form-group">
                                <label>High</label>
                                <input class="form-control" name="high" placeholder="" value="<?php echo $high ?>">
                            </div>
							<div class="form-group">
                                <label>Volume</label>
                                <input class="form-control" name="volume" placeholder="" value="<?php echo $volume?>">
                            </div>
							<div class="form-group">
                                <label>Awards</label>
                                <input class="form-control" name="awards" placeholder="" value="<?php echo $awards ?>">
                            </div>
							<div class="form-group">
                                <label>Employee</label>
                                <input class="form-control" name="employee" placeholder="" value="<?php echo $employee ?>">
                            </div>
							<div class="form-group">
                                <label>Products</label>
                                <input class="form-control" name="products" placeholder="" value="<?php echo $products ?>">
                            </div>
							<div class="form-group">
                                <label>Link Download 1 Title</label>
                                <input class="form-control" name="link_download_1_title" placeholder="" value="<?php echo $link_download_1_title ?>">
                            </div>
							<div class="form-group">
                                <label>Link Download 2 Title</label>
                                <input class="form-control" name="link_download_2_title" placeholder="" value="<?php echo $link_download_2_title ?>">
                            </div>
							<div class="form-group">
                                <label>Link Download 1</label>
                                <input class="form-control" name="link_download_1" placeholder="" value="<?php echo $link_download_1 ?>">
                            </div>
							<div class="form-group">
                                <label>Link Download 2</label>
                                <input class="form-control" name="link_download_2" placeholder="" value="<?php echo $link_download_2 ?>">
                            </div>
							<div class="form-group">
                                <label>Facebook</label>
                                <input class="form-control" name="fb" placeholder="" value="<?php echo $fb ?>">
                            </div>
							<div class="form-group">
                                <label>Twitter</label>
                                <input class="form-control" name="tw" placeholder="" value="<?php echo $twitter ?>">
                            </div>
							<div class="form-group">
                                <label>Google plus</label>
                                <input class="form-control" name="googleplus" placeholder="" value="<?php echo $googleplus ?>">
                            </div>
							<div class="form-group">
                                <label>Youtube</label>
                                <input class="form-control" name="youtube" placeholder="" value="<?php echo $youtube ?>">
                            </div>
							<div class="form-group">
                                <label>Instagram</label>
                                <input class="form-control" name="instagram" placeholder="" value="<?php echo $instagram ?>">
                            </div>
							
                            <input type="submit" class="btn btn-default" value="Save">
                           <!-- <button type="reset" class="btn btn-default">Reset</button>-->

                        </form>

                    </div>
                    
                </div>
				<br>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo $base_url;?>sido_tools/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $base_url;?>sido_tools/js/bootstrap.min.js"></script>

</body>

</html>
