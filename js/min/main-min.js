var mywindow=jQuery(window),mypos=mywindow.scrollTop(),up=!1,newscroll;mywindow.scroll(function(){return newscroll=mywindow.scrollTop(),newscroll>150?(newscroll>mypos&&!up?(jQuery("#header").stop().animate({marginTop:"-105px"},400),up=!up,console.log(up)):mypos>newscroll&&up&&(jQuery("#header").stop().animate({marginTop:"0"},400),up=!up),mypos=newscroll,!1):void 0}),jQuery(window).scrollTop()>1e3&&jQuery(".stat__ui--inner h4").each(function(){var e=$(this);jQuery({Counter:0}).animate({Counter:e.text()},{duration:3e3,easing:"easeOutQuint",step:function(){e.text(Math.ceil(this.Counter))}})}),jQuery(".whoa").on("click",function(){jQuery(".browser-outer").animate({width:"100%"},600),jQuery(".block-1").animate({width:"25%"},600),jQuery(".browser-inner").animate({marginTop:"0"},600),jQuery(".browser-bottom").animate({opacity:"0"},600),jQuery(".first-circle").animate({left:"0"},600),jQuery(".second-circle").animate({left:"0",width:"10px",marginLeft:"0"},600),jQuery(".last-circle").animate({opacity:"1"},600),jQuery(".browser-outer").delay(2400).animate({width:"40%",height:"682px"},600),jQuery(".browser-bottom").delay(2600).animate({opacity:"1"},600),jQuery(".block-1").delay(2400).animate({width:"50%"},600),jQuery(".first-circle").delay(2400).animate({left:"38%"},600),jQuery(".second-circle").delay(2400).animate({left:"48%",width:"50px",marginLeft:"-25px"},600),jQuery(".last-circle").delay(2400).animate({opacity:"0"},600),jQuery(".browser-inner").delay(3e3).animate({marginTop:"-180px"},1500),jQuery(".browser-inner").delay(3500).animate({marginTop:"0px"},600),jQuery(".browser-outer").delay(4800).animate({width:"20%",height:"600px"},600),jQuery(".block-1").delay(4800).animate({width:"100%"},600),jQuery(".browser-inner").delay(2e3).animate({marginTop:"-900px"},1500)}),$(function(){$(".instagram").instagram({hash:"webtekcc",clientId:"0c5ba21e8e084a39b7aa8e14aae2647c",show:30})}),$(window).width()<943&&($(".mobile__nav--button span").click(function(){$(".main-nav").slideToggle(400)}),$(".nav__focus--web").click(function(e){e.preventDefault(),$(".dropdown--nav--design").slideToggle(400)}),$(".nav__focus--marketing").click(function(e){e.preventDefault(),$(".dropdown--nav--marketing").slideToggle(400)}));