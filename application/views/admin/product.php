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
                            Add Product
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?php echo $base_url;?>admin">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Add Product
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                 <div class="row">
                    <div class="col-lg-8">
                        <div class="">
                                <form role="form" action="<?php echo $base_url."admin/insert_product" ?>" method="post" enctype="multipart/form-data">
                                   <div class="form-group" style="padding-bottom: 30px">
                                        <label class="col-sm-2">Title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="title" placeholder="Title">
                                         </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2">Menu</label>
                                        <div class="col-sm-10">
                                        <select id="menu_id" name="menu_id" class="form-control">
                                        <option value="0">-- Choose Menu --</option>
                                        <?php foreach($menu as $reg): ?>
<?php if($reg->parent_id == 19 || $reg->parent_id == 50 || $reg->parent_id == 51 || $reg->parent_id == 52 || $reg->parent_id == 53 || $reg->parent_id == 54) {?>
                                                <option value="<?php echo $reg->menu_id;?>"><?php echo $reg->title;?></option>
<?php } ?>
                                        <?php endforeach; ?>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-left: 15px">
                                                    <label class="">&nbsp;</label>
                                                    <div class=""><label class="">Image Cover</label><input type="file" name="attach"></div>
                                    </div>
                                    <input type="hidden" name="image">
                                    <div class="modal-body form-group">
                                            <span style="font-weight: bold;">Teks Indonesia</span>
                                            <textarea name="editor1" id="editor1" rows="10" cols="80" class="form-control" placeholder="Create your product..."></textarea>

                                    </div>
                                    <div class="modal-body form-group">
                                            <span style="font-weight: bold;">Teks Inggris</span>
                                            <textarea name="editor2" id="editor2" rows="10" cols="80" class="form-control" placeholder="Create your product..."></textarea>

                                    </div>
                                    
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-default" value="Save">
                                    </div>
                                </form>
                        </div>
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
    <script src="//cdn.ckeditor.com/4.5.4/full/ckeditor.js"></script>
    <!--<script type="text/javascript" src="<?php echo $base_url;?>sido_tools/ckeditor/ckeditor.js"></script>-->
	<script type="text/javascript">
            CKEDITOR.replace('editor1');
            CKEDITOR.replace('editor2');
           
	</script>

</html>
</body>

</html>
