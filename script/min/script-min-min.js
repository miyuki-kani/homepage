$(function(){$(".hero_slider").slick({infinite:!0,autoplay:!0,dots:!1,fade:!0,speed:2e3,arrows:!1})}),$(function(){$(".reason_inr").slick({infinite:!0,autoplay:!1,dots:!0,fade:!0,pause:4e3,speed:2e3,arrows:!1})}),$(function(){$(".global_nav li").hover(function(){$(this).children("ul").stop().slideDown()},function(){$(this).children("ul").stop().slideUp()})}),$(function(){$(".single_slider").slick({infinite:!0})}),$(function(){var n=$(".imgchange"),o="_pc",i="_sp",t=425;n.each(function(){function n(){var n=parseInt($(window).width());n>=t?e.attr("src",e.attr("src").replace(i,o)).css({visibility:"visible"}):n<t&&e.attr("src",e.attr("src").replace(o,i)).css({visibility:"visible"})}var e=$(this),a=parseInt($(window).width());$(window).resize(function(){n()}),n()})}),$(function(){$("section").on("inview",function(n,o,i,t){o&&$(this).stop().addClass("animation")})}),$(function(){$("section.re").on("inview",function(n,o,i,t){o?$(this).stop().addClass("animation"):$(this).stop().removeClass("animation")})}),$(function(){$("#menu_btn").click(function(){$(this).hasClass("open")?($(this).removeClass("open"),$(".global_nav").removeClass("open"),$(".content").removeClass("active"),$(window).off(".noScroll")):($(this).addClass("open"),$(".global_nav").addClass("open"),$(".content").addClass("active"),$(window).on("touchmove.noScroll",function(n){n.preventDefault()}))})}),$(function(){$("#nav li a").click(function(){$("#nav").removeClass("open"),$("#menu_btn").removeClass("open"),$(window).off(".noScroll")})}),$(function(){$(".link").click(function(){return window.location=$(this).find("a").attr("href"),!1})}),$(window).on("load",function(){var n=$("#nav").offset().top,o=0;$(document).scroll(function(){o=$(this).scrollTop(),n<=o?$("#nav").addClass("fix"):n>=o&&$("#nav").removeClass("fix")})}),$(function(){var n=$("#sp_nav");$(window).scroll(function(){$(this).scrollTop()>100?n.addClass("active"):n.removeClass("active")})}),$(function(){var n=navigator.userAgent,o=100;n.indexOf("iPhone")>0||n.indexOf("Android")>0?$("a[href^=#]").click(function(){var n=$(this).attr("href"),o=$("#"==n||""==n?"html":n),i=o.offset().top;return $("html, body").animate({scrollTop:i},550,"swing"),!1}):$("a[href^=#]").click(function(){var n=$(this).attr("href"),o=$("#"==n||""==n?"html":n),i=o.offset().top-100;return $("html, body").animate({scrollTop:i},550,"swing"),!1})}),$(document).ready(function(){$("#pagetop").click(function(){return $("body, html").animate({scrollTop:0},500),!1})}),$(function(){$("#modal-open").click(function(){function n(){var n=$(window).width(),o=$(window).height(),i=$("#modal-main").outerWidth(),t=$("#modal-main").outerHeight();$("#modal-main").css({left:(n-i)/2+"px",top:(o-t)/2+"px"})}$("body").append('<div id="modal-bg"></div>'),n(),$("#modal-bg,#modal-main").fadeIn("slow"),$("#modal-bg").click(function(){$("#modal-main,#modal-bg").fadeOut("slow",function(){$("#modal-bg").remove()})}),$(window).resize(n)})}),$(function(){$("#faq .col2 li h4").on("click",function(){$(this).next().slideToggle(),$(this).next().toggleClass("open"),$(this).toggleClass("open")})}),$(function(){$(".modal-open").click(function(){function n(){var n=$(window).width(),i=$(window).height(),t=(n-$(o).outerWidth(!0))/2,e=(i-$(o).outerHeight(!0))/2;$(o).css({left:t+"px",top:e+"px"})}$("#searchbtn").addClass("open"),$("body").append('<div class="modal-overlay"></div>'),$(".modal-overlay").slideDown("slow");var o="#"+$(this).attr("data-target");n(),$(o).fadeIn("slow"),$(".modal-overlay, .modal-close").off().click(function(){$(o).fadeOut("slow"),$("#searchbtn").removeClass("open"),$(".modal-overlay").fadeOut("slow",function(){$(".modal-overlay").remove()})}),$(window).on("resize",function(){n()})})});