<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73541035-1', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript" src="<?php echo $base_url;?>sido_tools/jq/jquery.slimscroll.js"></script>
<script type="text/javascript">
$(document).ready(function(){
                  
                    $('#scroll-mob').slimScroll({
                        height:'100%',
                        widthplus :'1',
                        color: '#333',
                        opacity: '0.9',
                        left: '1px'
                    });
                    $('.ico_search_mob').click(function(e){
                        e.preventDefault();
                        $('#searchbox_mob').stop().slideToggle();
                    });
                });
</script>
<?php
    $lang_id = $this->session->userdata('lang_id');
    $last_url='';

    if($this->uri->segment(1)!=""){
        $last_url=$this->uri->segment(1);
    }
    
    if($this->uri->segment(2)!=""){
        $last_url=$last_url.'/'.$this->uri->segment(2);
    }

    if($this->uri->segment(3)!=""){
        $last_url=$last_url.'/'.$this->uri->segment(3);
    }

    if($this->uri->segment(4)!=""){
        $last_url=$last_url.'/'.$this->uri->segment(4);
    }

    if($this->uri->segment(5)!=""){
        $last_url=$last_url.'/'.$this->uri->segment(5);
    }

    if($this->uri->segment(6)!=""){
        $last_url=$last_url.'/'.$this->uri->segment(6);
    }
    
    if($this->uri->segment(7)!=""){
        $last_url=$last_url.'/'.$this->uri->segment(7);
    }

    if($this->uri->segment(8)!=""){
        $last_url=$last_url.'/'.$this->uri->segment(8);
    }

    if($this->uri->segment(9)!=""){
        $last_url=$last_url.'/'.$this->uri->segment(9);
    }
    
    if($this->uri->segment(10)!=""){
        $last_url=$last_url.'/'.$this->uri->segment(10);
    }
?>
<div id="menu_head_desktop">
<div id="ubernav-wrapper" class="">
  <div id="ubernav-wrap-in">
    <div id="ubernav-nav">
      <!-- siteLogo-item-current is used for legacy support -->
            <ul id="ubernav-logo-links">
            <li class="ubernav-logo-link <?php if($this->uri->segment(1)=="home" || $this->uri->segment(1)=="" || $this->uri->segment(1)=="media"){ echo 'selected';}?> siteLogo-item-current" sitename="sidomuncul">
                <a href="<?php echo $base_url;?>home" class="ubernav-link" id="ubernav-sidomuncul" title="Sidomuncul">
                <span class="ubernav-logo"></span>
                </a>
            </li>

            <li class="ubernav-logo-link <?php if($this->uri->segment(1)=="tolakangin"){ echo 'selected';}?>" sitename="tolakangin">
                <a href="<?php echo $base_url;?>tolakangin" class="ubernav-link" id="ubernav-tolak" title="Tolakangin">
                <span class="ubernav-logo"></span>
                </a>
            </li>

            <li class="ubernav-logo-link <?php if($this->uri->segment(1)=="kukubima"){ echo 'selected';}?>" sitename="kukubima">
                <a href="<?php echo $base_url;?>kukubima" class="ubernav-link" id="ubernav-kukubima" title="Kukubima">
                <span class="ubernav-logo"></span>
                </a>
            </li>

            </ul>
    </div>
<!--bakal lang-->
    <div id="menu_navbar_desktop" style="position: absolute;z-index: 10000;">
        <div style="float: left">
            <div id="click_lang" class="box_lang_first">
                <div class="txt_lang_comp"><?php if($lang_id=='en'){echo 'English';}else{echo 'Indonesian';} ?></div>
            </div>
            <div id="lang_menu" class="box_lang_first_li">
                <ul class="ul_menu">
                    <li class="li_menu">
                        <a href="<?php echo $base_url; ?>lang/set_lang?lang_id=en&last_url=<?php echo $last_url; ?>">
                        <div id="langid" class="menu_lang_first menu_lang_text">
                            English
                        </div>
                        </a>
                    </li>
                    <li class="li_menu" >
                        <a href="<?php echo $base_url; ?>lang/set_lang?lang_id=id&last_url=<?php echo $last_url; ?>">
                        <div id="langeng" class="menu_lang_first menu_lang_text">
                            Indonesian
                        </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="box_shop_parent">
      <div class="box_shop">
<a href="http://shop2.tokopo.com/" target="_blank" style="color:#FFFFFF">
          <div class="txt_shop_now">Shop Now</div>
          <div class="icon_cart"></div>
</a>
      </div>
      <div class="box_shop_profile">
<a href="http://shop2.tokopo.com/customer/account/" target="_blank">
          <div class="icon_prof"></div>
</a>
      </div>
    </div>
  </div>
</div>
</div>
<!--menu mobile-->
<div id="menu_head_mobile">
        <div class="header_mob">
            <div style="float: left;width:100%">
                <div id="showLeftPush" class="icon_menu_left showLeftPush"></div>
                <div class="border_right_menu"></div>
                <div style="float:left">
                    <a href="<?php echo $base_url;?>home">
                        <img src="<?php echo $base_url;?>sido_img/images/logo_header.png" style="height: 40px;width:150px;margin-left: 10px">
                    </a>   
                </div>
                
                <a href="http://shop2.tokopo.com" target="_blank">
                    <div class="icon_cart_mob"></div>
                </a>
                <div class="ico_search_mob"></div>
                <div id="searchbox_mob" style="display:none;background-color: #4D5E27;width: 100%;position: absolute;z-index: 200;top: 50px;text-align: center;padding: 10px 0px;">
                    <form method="post" action="<?php echo $base_url.'search'; ?>" enctype="multipart/form-data">
                        <input type="search" name="search" style="border-radius: 4px;border: none;font-size: 14px;padding: 10px;width: 80%;" placeholder="Search">
                    </form>
                </div>
            </div>
            <div style="clear: both"></div>
        </div>
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
            <div id="scroll-mob">
				<h3>Menu</h3>
            	<ul style="list-style-type: none;width: 100%;padding: 0px;">
                    <?php foreach ($data_menu as $mn) :?>
                        <li style="list-style-type: none;float: none;" onclick="window.location.href = '<?php if($mn->menu_id == 18 || $mn->menu_id == 22 || $mn->menu_id == 24){ echo $base_url.$mn->link;} else if($mn->menu_id == 19 ){ echo $base_url.'product';} else {echo '#';} ?>';">
    	                    <div class="menu_mbl" style="position: relative;">
    	                        <a class="menu_a">
                                    <div><?php echo $mn->title;?></div>
                                    <div class="rotate90 arrow_menu_mbl">&#10095;</div>
                                </a>
                                <div class="submenu_mobile_frame">
                                    <?php foreach ($submenu_list as $submenu) :?>
                                        <?php if($submenu->parent_id == $mn->menu_id){ ?>
                                            <div class="submenu_mobile" onclick="window.location.href = '<?php echo $base_url.$submenu->link; ?>';">
                                                  <?php echo $submenu->title;?>
                                             </div>
                                        <?php } ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                        <li style="list-style-type: none;float: none;" onclick="">
    	                    <div class="menu_mbl" style="position: relative;">
    	                        <a class="menu_a">
                                    <div><?php if($lang_id=='en'){echo 'English';}else{echo 'Indonesian';} ?></div>
                                    <div class="rotate90 arrow_menu_mbl">&#10095;</div>
                                </a>
                                <div class="submenu_mobile_frame">
                                    <div class="submenu_mobile" onclick="window.location.href = '<?php echo $base_url; ?>lang/set_lang?lang_id=en&last_url=<?php echo $last_url; ?>'">
                                          English
                                    </div>
                                    <div class="submenu_mobile" onclick="window.location.href = '<?php echo $base_url; ?>lang/set_lang?lang_id=id&last_url=<?php echo $last_url; ?>'">
                                          Indonesian
                                    </div>
                                </div>
                            </div>
                        </li>
                </ul>
            </div>
        </nav>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('.menu_mbl').click(function(){
            if ($(this).find('.submenu_mobile_frame').is(':visible'))
            {
                $(this).find('.arrow_menu_mbl').hide();
                $(this).find('.submenu_mobile_frame').stop().slideToggle();
            }
            else
            {
                $('.submenu_mobile_frame').stop().slideUp();
                $('.arrow_menu_mbl').hide();
                var a = $(this).find('.submenu_mobile');
                if (a.length != 0){
                    $(this).find('.arrow_menu_mbl').show();
                    $(this).find('.submenu_mobile_frame').stop().slideToggle();
                }
            }
        });

        $('#click_lang').click(function(){
                var $t = $('#lang_menu');
                if ($t.is(':visible')) {
                    $t.slideUp();
                } else {
                    $t.slideDown();
                }

        });
    });

</script>
<style>
    .box_lang_first_li{
        width: 140px;
        height: 70px;
        color: #fff;
        background-color: #fff;
         border-radius:0px 0px 5px 5px;
        -webkit-border-radius:0px 0px 5px 5px;
          -moz-border-radius:0px 0px 5px 5px;
          -ms-border-radius:0px 0px 5px 5px;
          top: 46px;
          position: absolute;
          font-size: 14px;
          margin-left: 238px;
         -webkit-box-shadow: 7px 11px 22px -2px rgba(0,0,0,0.5);
-moz-box-shadow: 7px 11px 22px -2px rgba(0,0,0,0.5);
box-shadow: 7px 11px 22px -2px rgba(0,0,0,0.5);
          display: none;
    }
    .box_lang_first{
        margin-left: 238px;
        width: 140px;
        height: 26px;
        color: #4d5e27;
        background: url('<?php echo $base_url.'sido_img/images/panahbawah.png';?>') no-repeat 94% top;
        background-color: #ffffff;
        cursor: pointer;
    }
    .txt_lang_comp {
        font-weight: 600;
        font-family: Lato;
        font-size: 15px;
        margin-top: 15px;
        padding-left:20px;
        letter-spacing: 1px;
    }
    .box_lang_first_no_border{
        float: left;
        width: 230px;
        height: 60px;
        color: #fff;
        background-color: #85945D;
        cursor: pointer;
    }
    .menu_lang_text {
        color: #4D5E27;
        font-weight: bold;
        float: left;
    }
    .menu_lang_first {
        text-align: left;
        padding: 9px 16px 0px 20px;
        height: 30px;
    }
</style>