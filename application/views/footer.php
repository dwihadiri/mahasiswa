<div class="box_footer">
        <div class="width_980">
            <a href="<?php echo $base_url;?>">
            <div class="logo_footer">
                <img src="<?php echo $base_url;?>sido_img/images/Logo-Sidomuncul-White-Footer.png" class="logo_foot"><br>
                <div style="color: #fff;font-size: 14px;margin-top: 15px">Copyright &copy; Sidomuncul 2016 - All Right Reserved</div>
            </div>
            </a>
            <div id="show_subscribe" style="float: right">
                <div class="txt_subs_foot">Ingin tetap terhubung dengan Kami? Silahkan kirimkan email anda</div>
                <form id="form_submit" method="post" action="<?php echo $base_url.'home/subscribe'?>" enctype="multipart/form-data">
                <div class="input-group">
                    <div style="float: left">
                        <input type="text" class="form-control-subscribe" name="subscribe" id="subscribe" placeholder="Enter Your email address" required>
                    </div>
                    <button  type="submit" class="btn_subs">
                        SUBSCRIBE
                    </button>
                </div>
                </form>
            </div>
            <div style="clear: both"></div>
            <div class="border_bott_footer"></div>
            <div id="show_menu_foot_desktop" style="float: left">
                    <a href="<?php echo $base_url;?>home" style="text-decoration:none;">
                        <div class="txt_foot">
                           Home     
                        </div>
                    </a>
                    <a href="<?php echo $base_url;?>about-us/sejarah-sidomuncul" style="text-decoration:none;">
                        <div class="txt_foot">
                            About Us      
                        </div>
                    </a>
                    <a href="<?php echo $base_url;?>faq" style="text-decoration:none;">
                        <div class="txt_foot">
                            FAQ      
                        </div>
                    </a>
                    <a style="text-decoration:none;">
                        <div class="txt_foot">
                            Privacy Policy      
                        </div>
                    </a>
                    <a style="text-decoration:none;">
                        <div class="txt_foot">
                           RSS     
                        </div>
                    </a>
                    <a href="<?php echo $base_url;?>sitemap" style="text-decoration:none;">
                        <div class="txt_foot">
                           Sitemap     
                        </div>
                    </a>
                    <a href="<?php echo $base_url;?>career" style="text-decoration:none;">
                        <div class="txt_foot">
                           Career     
                        </div>
                    </a>
                    <a href="<?php echo $base_url;?>contact" style="text-decoration:none;">
                        <div class="txt_foot">
                           Contact Us     
                        </div>
                    </a>
            </div>
            <div id="show_menu_foot_mobile" style="width: 100%;">
                <div style="width: 103px;margin: 0px auto;padding-top: 15px;">
                    <a href="#popmenu" style="text-decoration:none;">
                        <div class="txt_foot" style="float: left">
                            About Us      
                        </div>
                        <div class="arrow_down_footer"></div>
                    </a>
                </div>
                <div style="clear: both;height: 30px"></div>
            </div>
            
            <div class="socmed_box">
                <a href="<?php echo $fb;?>" style="text-decoration:none;"><div class="icon_fb"></div></a>
                <a href="<?php echo $twitter;?>" style="text-decoration:none;"><div class="icon_tw"></div></a> 
                <a href="<?php echo $googleplus;?>" style="text-decoration:none;"><div class="icon_gplus"></div></a>
                <a href="<?php echo $youtube;?>" style="text-decoration:none;"><div class="icon_yt"></div></a>
                <a href="<?php echo $instagram;?>" style="text-decoration:none;"><div class="icon_insta"></div></a>
                <a href="http://tokopo.com/" target="_blank" style="text-decoration:none;"><div id="powered_desk" class="icon_powered"></div></a>
            </div>
            <div id="powered_mob">
                <div style="height:20px;clear:both"></div>
                     <a href="http://tokopo.com/" target="_blank" style="text-decoration:none;"><div class="icon_powered"></div></a>
            </div>   
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#form_submit').on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    url : $(this).attr('action'),
                    type: "POST",
                    data: $(this).serialize(),
                    success: function (response) {
                        $('#subscribe').val('');
                    }
                });
            });
        });
    </script>