<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Sidomuncul Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata('email');?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        
                        <li>
                            <a href="<?php echo $base_url;?>admin/setting"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo $base_url;?>login/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li <?php if($this->uri->segment(2)==''){?> class="active"<?php }?>>
                        <a href="<?php echo $base_url;?>admin"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>
					<li <?php if($this->uri->segment(2)=='media'){?> class="active"<?php }?>>
                        <a href="<?php echo $base_url;?>admin/media"><i class="fa fa-fw fa-edit"></i> Section</a>
                    </li>
					<li <?php if($this->uri->segment(2)=='testimonial'){?> class="active"<?php }?>>
                        <a href="<?php echo $base_url;?>admin/testimonial"><i class="fa fa-fw fa-edit"></i> Testimonial</a>
                    </li>
                    <li <?php if($this->uri->segment(2)=='news'){?> class="active"<?php }?>>
                        <a href="<?php echo $base_url;?>admin/news"><i class="fa fa-fw fa-edit"></i> News</a>
                    </li>
					<li <?php if($this->uri->segment(2)=='variable'){?> class="active"<?php }?>>
                        <a href="<?php echo $base_url;?>admin/variable"><i class="fa fa-fw fa-edit"></i> Variable</a>
                    </li>
					<li <?php if($this->uri->segment(2)=='files'){?> class="active"<?php }?>>
                        <a href="<?php echo $base_url;?>admin/files"><i class="fa fa-fw fa-edit"></i> File</a>
                    </li>
					<li <?php if($this->uri->segment(2)=='subscriber'){?> class="active"<?php }?>>
                        <a href="<?php echo $base_url;?>admin/subscriber"><i class="fa fa-fw fa-edit"></i> Subscriber</a>
                    </li>
					<li <?php if($this->uri->segment(2)=='awards'){?> class="active"<?php }?>>
                        <a href="<?php echo $base_url;?>admin/awards"><i class="fa fa-fw fa-edit"></i> Awards</a>
                    </li>
                    <li <?php if($this->uri->segment(2)=='contact'){?> class="active"<?php }?>>
                        <a href="<?php echo $base_url;?>admin/contact"><i class="fa fa-fw fa-edit"></i> Contact Us</a>
                    </li>

					<li <?php if($this->uri->segment(2)=='menu'){?> class="active"<?php }?>>
                        <a href="<?php echo $base_url;?>admin/menu"><i class="fa fa-fw fa-edit"></i> Menu</a>
                    </li>
					<li <?php if($this->uri->segment(2)=='page'){?> class="active"<?php }?>>
                        <a href="<?php echo $base_url;?>admin/page"><i class="fa fa-fw fa-edit"></i> Page</a>
                    </li>
<li <?php if($this->uri->segment(2)=='product'){?> class="active"<?php }?>>
                        <a href="<?php echo $base_url;?>admin/product"><i class="fa fa-fw fa-edit"></i> Product</a>
                    </li>
                   <!-- <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>-->
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>