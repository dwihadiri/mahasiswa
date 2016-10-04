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

    <!-- Morris Charts CSS -->
    <link href="<?php echo $base_url;?>sido_tools/css/plugins/morris.css" rel="stylesheet">

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
                            Menu
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?php echo $base_url;?>admin">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Menu
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                  <div class="row">
                    <div class="col-lg-8">

                        <form role="form" class="form-horizontal" action="<?php echo $base_url."admin/update_menu" ?>" method="post">
							<input type="hidden" id="txtid" name="txtid" value="<?php echo $menu_id;?>">
                            <div class="form-group">
                                <label class="col-sm-2">Parent id</label>
								<div class="col-sm-10">
                                <input class="form-control" name="parent_id" placeholder="Parent id" value="<?php echo $parent_id;?>">
								</div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2">Title</label>
								<div class="col-sm-10">
                                <input class="form-control" name="title" placeholder="Title" value="<?php echo $title;?>">
								</div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2">Title Url</label>
								<div class="col-sm-10">
                                <input class="form-control" name="title_url" placeholder="Title Url" value="<?php echo $title_url;?>">
								</div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2">Link</label>
								<div class="col-sm-10">
                                <input class="form-control" name="link" placeholder="Link" value="<?php echo $link;?>">
								</div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2">Sort Order</label>
								<div class="col-sm-10">
								<select class="form-control" name="order_num" style="width:200px">
                                    <option value="1" <?php if($order_num=='1') { echo 'selected';}?>>1</option>
                                    <option value="2" <?php if($order_num=='2') { echo 'selected';}?>>2</option>
                                    <option value="3" <?php if($order_num=='3') { echo 'selected';}?>>3</option>
									<option value="4" <?php if($order_num=='4') { echo 'selected';}?>>4</option>
									<option value="5" <?php if($order_num=='5') { echo 'selected';}?>>5</option>
									<option value="6" <?php if($order_num=='6') { echo 'selected';}?>>6</option>
									<option value="7" <?php if($order_num=='7') { echo 'selected';}?>>7</option>
									<option value="8" <?php if($order_num=='8') { echo 'selected';}?>>8</option>
									<option value="9" <?php if($order_num=='9') { echo 'selected';}?>>9</option>
									<option value="10" <?php if($order_num=='10') { echo 'selected';}?>>10</option>
                                </select>
								</div>
                            </div>


                          <div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<input type="submit" class="btn btn-default" value="Save">
							</div>
							
						  </div>

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
