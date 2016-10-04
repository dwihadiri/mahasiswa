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
                            News
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?php echo $base_url;?>admin">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> News
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                 <div class="row">
                    <div class="col-lg-8">

                        <form role="form" action="<?php echo $base_url."admin/update_news" ?>" method="post" enctype="multipart/form-data">
							<input type="hidden" id="txtid" name="txtid" value="<?php echo $news_id;?>">
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" name="title" placeholder="Title" value="<?php echo $title?>">
                            </div>
							<div class="form-group">
                                <label>Description</label>
								<textarea class="form-control" name="descrip" value="<?php echo $descrip?>" rows="3"><?php echo $descrip?></textarea>
                            </div>
							<div class="form-group">
                                <label>URL</label>
                                <input class="form-control" name="url" value="<?php echo $url?>">
                            </div>

                            <div class="form-group">
                                <label>File</label>
                                <input type="file" name="attach">
                            </div>
							<input type="hidden" class="form-control" name="edit_file" value="<?php echo $image;?>">
							<div class="form-group">
							    <label>Date</label>
								<div class='input-group date' id='datetimepicker1' class="date-picker">
									<input type="text" class="form-control" name="date" value="<?php  echo $date; ?>"/>
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
							</div>

                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" name="category">
                                    <option value="0" <?php if($category=='0') { echo 'selected';}?>>PR</option>
                                    <option value="1" <?php if($category=='1') { echo 'selected';}?>>CSR</option>
                                    <option value="2" <?php if($category=='2') { echo 'selected';}?>>Download</option>
									<option value="3" <?php if($category=='3') { echo 'selected';}?>>Facebook</option>
									<option value="4" <?php if($category=='4') { echo 'selected';}?>>Twitter</option>
									<option value="5" <?php if($category=='5') { echo 'selected';}?>>Instagram</option>
                                </select>
                            </div>

                          

                            <input type="submit" class="btn btn-default" value="Save">

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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.14.30/js/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript">
    //$(function () {
        //$('#datetimepicker1').datetimepicker();
	
    //});
	 $('#datetimepicker1').datetimepicker({
        format: 'YYYY-MM-DD hh:mm:ss'
      });
	
	</script>

</html>
</body>

</html>
