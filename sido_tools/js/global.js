function floating_object(){var o=$("#box_height").height()-$("#ceo").height()+$("#box_height").offset().top;$(window).width()>=1025?$(window).scroll(function(){var i=$(this).scrollTop(),e=($("#ceo").height()+"px",$(window).width()),s=$("#box_height").width(),t=(e-s)/2;i<$("#box_height").offset().top?$("#ceo").css({position:"absolute",top:"0",right:"0"}):i>o?$("#ceo").css({position:"absolute",bottom:"0",top:"auto",right:"0"}):$("#ceo").css({position:"fixed",top:"0",right:t})}):$(window).scroll(function(){var o=$(this).scrollTop();$("#ceo").height()+"px";o<$("#box_height").offset().top&&$("#ceo").css({position:"relative",width:"181px",margin:"0px auto"})})}$(function(){var o,i,e=!1,s=navigator.userAgent;(s.match(/iPad/i)||s.match(/iPhone/i))&&(e=!0,o=s.indexOf("OS ")),e&&o>-1&&(i=s.substr(o+3,3).replace("_",""),10>i?i=100*i:100>i&&(i=10*i),820>i&&$(".tag_size_text").css("font-size","4vw"))}),$(document).ready(function(){$(".home_slider").slick({autoplaySpeed:4e3,slidesToShow:1,slidesToScroll:1,infinite:!0,autoplay:!0,dots:!0,arrows:!1,prevArrow:'<div class="prev_btn_feat icon_panah_slide_left_feat"></div>',nextArrow:'<div class="next_btn_feat icon_panah_slide_right_feat"></div>'}),$(".announcement_slider").slick({autoplaySpeed:2e3,slidesToShow:2,slidesToScroll:1,infinite:!0,dots:!1,arrows:!0,prevArrow:'<div class="prev_btn_feat icon_panah_slide_left_feat"></div>',nextArrow:'<div class="next_btn_feat icon_panah_slide_right_feat"></div>',responsive:[{breakpoint:1250,settings:{slidesToShow:2,slidesToScroll:1,dots:!1}},{breakpoint:1060,settings:{slidesToShow:2,slidesToScroll:1,dots:!1}},{breakpoint:820,settings:{slidesToShow:1,slidesToScroll:1,dots:!1}},{breakpoint:650,settings:{slidesToShow:1,slidesToScroll:1,dots:!1}},{breakpoint:420,settings:{slidesToShow:1,slidesToScroll:1,dots:!1}}]}),$(".product_slider").slick({slidesToShow:5,slidesToScroll:1,infinite:!0,autoplay:!1,autoplaySpeed:2e3,arrows:!0,prevArrow:'<div class="prev_btn_product icon_panah_slide_left_product"></div>',nextArrow:'<div class="next_btn_product icon_panah_slide_right_product"></div>',responsive:[{breakpoint:1250,settings:{slidesToShow:5,slidesToScroll:1,dots:!1}},{breakpoint:1060,settings:{slidesToShow:4,slidesToScroll:1,dots:!1}},{breakpoint:820,settings:{slidesToShow:3,slidesToScroll:1,dots:!1}},{breakpoint:650,settings:{slidesToShow:2,slidesToScroll:1,dots:!1}},{breakpoint:420,settings:{slidesToShow:1,slidesToScroll:1,dots:!1}}]}),$(".testimonial_slider").slick({speed:300,infinite:!0,dots:!1,arrows:!0,prevArrow:'<div class="prev_btn_testi icon_panah_slide_left"></div>',nextArrow:'<div class="next_btn_testi icon_panah_slide_right"></div>'}),$(".first_slider").slick({speed:300,infinite:!0,dots:!0,arrows:!0,prevArrow:'<div class="prev_btn icon_panah_slide_left"></div>',nextArrow:'<div class="next_btn icon_panah_slide_right"></div>'}),$(document).on("click",".loadmore",function(){$("#form_load").ajaxForm({success:function(o){var i=($("#news_id").val(),$(o)),e=$("#data_news");e.append(i).isotope("appended",i,!0),""==o&&$(".loadmore").hide()}}).submit()}),$("#click_menu").click(function(){var o=$("#content_menu");o.is(":visible")?(o.slideUp(),$("#click_menu").addClass("box_menu_first"),$("#click_menu").removeClass("box_menu_first_no_border")):(o.slideDown(),$("#click_menu").removeClass("box_menu_first"),$("#click_menu").addClass("box_menu_first_no_border"))})}),jQuery(document).ready(function(o){o(".counter").counterUp({delay:20,time:1e3})}),$(function(){});var current_width=$(window).width();$(window).resize($.throttle(250,function(){$(window).width()!=current_width&&(window.location.href="")}));