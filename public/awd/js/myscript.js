var h = $( window ).height(); // returns height of browser viewport
var w = $( window ).width(); // returns height of browser viewport

	var hproject = h/3 ;
	var wcontstart = w - 320 ;  
	var wcontlate = w - 60 ;  
	var postContWidth = $("#post-cont").width(); 
	var widthref = $("#references li").width();
	var menuStatus = 0;

	
$(window).load(function() {
setTimeout(closeMenu, 1500);
var widthvideo = $(".video-articolo").width();
var heightvideo = (widthvideo * 551) / 980;
$(".video-articolo").css("height", heightvideo);

var currenturl = document.URL;

if( currenturl != "http://www.awdagency.com/category/shooting/" && currenturl != "http://www.awdagency.com/category/advertising/" && currenturl != "http://www.awdagency.com/category/talents/" &&  currenturl != "http://www.awdagency.com/category/identity/" && currenturl != "http://www.awdagency.com/category/webdigital/" && currenturl != "http://www.awdagency.com/category/news/" && currenturl != "http://www.awdagency.com/services/" && currenturl != "http://www.awdagency.com/headquarter/" && currenturl != "http://www.awdagency.com/category/clients/" && currenturl != "http://www.awdagency.com/awards/" && currenturl != "http://www.awdagency.com/socialnetworks/" && currenturl != "http://www.awdagency.com/contacts/"){

var reload = $(".cont-ajax").attr( "attributo" );
window.history.pushState("", "AWD AGENCY", reload);
 if(reload != ""){
	  closeContR();

       $.ajax({
      type: "POST",
      url: reload+'?home=ok',
	  dataType: "html",
      success: function(articolo)
      {
        $(".cont-ajax").html(articolo);
		var postContWidth = $("#post-cont").width(); 
		$("#post-bg, #loader-project").css({ "width": postContWidth });
		var MarginPost = h - (h/3);
		$("#post-bg").css({ "height": MarginPost });
		$("#post-cont").css({ "margin-top": MarginPost });
		$("#post-bg-team, #cont-team-text").css({ "height": h });
		$("#next-art").animate({ right: "0px" },600, 'easeOutExpo');
		setTimeout(function() {$("#prev-art ").animate({ right: "0px" },600, 'easeOutExpo');}, 300);
	
		var widthvideo = $(".video-articolo").width();
		var heightvideo = (widthvideo * 551) / 980;
		$(".video-articolo").css("height", heightvideo);
	
		$('#post-cont-img img').bind('inview', function(event, visible) {
     	if (visible) {
        $(this).stop().animate({ opacity: 1 }, 400).transition({ scale: 1 });
   	   }
    });
	setTimeout(function() {	$("#post-bg").fadeTo( "slow", 1 , 'easeOutExpo');	}, 2800);

		if(menuStatus == 1){
		$("#post-bg, #loader-project").css({ left: 60 });
		}else{
		$("#post-bg, #loader-project").css({ left: 320 });
		};
				
      },
    });
 }
}
});



function prev(linkArticolo){
	 
   var h = $( window ).height(); // returns height of browser viewport
	var w = $( window ).width(); // returns height of browser viewport
	var wcontstart = w - 320 ;  
	var wcontlate = w - 60 ;  
	var postContWidth = $("#post-cont").width(); 
	var MarginPost = h - (h/3);

	var $newdiv = $( "<div class='cont-ajax new' ></div>" );
	$("#cont").prepend( $newdiv );
	$(".new").css({ right: postContWidth + 'px'  });
	$('html, body').animate({ scrollTop: "0px" },800, 'easeOutExpo');
	$("#post-bg").fadeTo( "slow", 0 , 'easeOutExpo');
	$("#prev-art ").animate({ right: "-60px" },200, 'easeOutExpo');
	setTimeout(function() {$("#next-art ").animate({ right: "-60px" },200, 'easeOutExpo');}, 200);

     $.ajax({
      type: "POST",
      url: linkArticolo+'?home=ok',
	  dataType: "html",
      success: function(articolo)
      {
        $(".new").html(articolo);
		var postContWidth = $("#post-cont").width(); 
		$(".new").find("#post-bg, #loader-project").css({ "width": postContWidth });
		$("#post-bg").css({ "height": MarginPost });
		$(".new #post-cont").css({ "margin-top": MarginPost });
		$("#post-bg-team, #cont-team-text").css({ "height": h });
	
		var widthvideo = $(".video-articolo").width();
		var heightvideo = (widthvideo * 551) / 980;
		$(".video-articolo").css("height", heightvideo);
	
		$('#post-cont-img img').bind('inview', function(event, visible) {
     	if (visible) {
        $(this).stop().animate({ opacity: 1 }, 400).transition({ scale: 1 });
   	   }
    });
	setTimeout(function() {
	$(".visible").animate({left: postContWidth }, 2000, 'easeOutExpo');
  	$(".new").animate({ right: "0px"  }, 2000, 'easeOutExpo');
	$(".new").find("#post-bg").animate({ right: "0px"  }, 2000, 'easeOutExpo');

	}, 800);
	setTimeout(function() {
    $(".visible").remove();
	$( ".new" ).addClass( "visible" );
	$( ".visible" ).removeClass( "new" );
	$("#next-art").animate({ right: "0px" },200, 'easeOutExpo');
	setTimeout(function() {$("#prev-art ").animate({ right: "0px" },200, 'easeOutExpo');}, 200);

	$("#post-bg").fadeTo( "slow", 1 , 'easeOutExpo');

	}, 2800);
	window.history.pushState("", "AWD AGENCY", linkArticolo);

	
		if(menuStatus == 1){
	    $(".new").find("#post-bg, #loader-project").css({ left: 60 });
		}else{
	    $(".new").find("#post-bg, #loader-project").css({ left: 320 });
		};
		
      },
    });
   
	}
	
	
	
	
function next(linkArticolo){
   
   var h = $( window ).height(); // returns height of browser viewport
	var w = $( window ).width(); // returns height of browser viewport

	var hproject = h/2 ;     
	var wcontstart = w - 320 ;  
	var wcontlate = w - 60 ;  
	var postContWidth = $("#post-cont").width(); 
	var widthref = $("#references li").width();
	
	var $newdiv = $( "<div class='cont-ajax new'></div>" );

	$( "#cont" ).append( $newdiv );
	$(".new").css({ right: - postContWidth + 'px'  });
	$('html, body').animate({ scrollTop: "0px" },800, 'easeOutExpo');
	$("#post-bg").fadeTo( "slow", 0 , 'easeOutExpo');
	$("#prev-art ").animate({ right: "-60px" },200, 'easeOutExpo');
	setTimeout(function() {$("#next-art ").animate({ right: "-60px" },200, 'easeOutExpo');}, 200);

     $.ajax({
      type: "POST",
      url: linkArticolo+'?home=ok',
	  dataType: "html",
      success: function(articolo)
      {
        $(".new").html(articolo);
		var postContWidth = $("#post-cont").width(); 
		$(".new").find("#post-bg, #loader-project").css({ "width": postContWidth });
		var MarginPost = h - (h/3);
		$(".new").find("#post-bg").css({ "height": MarginPost });
		$(".new #post-cont").css({ "margin-top": MarginPost });
		$("#post-bg-team, #cont-team-text").css({ "height": h });
		
		var widthvideo = $(".video-articolo").width();
		var heightvideo = (widthvideo * 551) / 980;
		$(".video-articolo").css("height", heightvideo);
		
		$('#post-cont-img img').bind('inview', function(event, visible) {
     	if (visible) {
        $(this).stop().animate({ opacity: 1 }, 400).transition({ scale: 1 });
   	   }
    });

	setTimeout(function() {
	$(".visible").animate({right: postContWidth }, 2000, 'easeOutExpo');
  	$(".new").animate({ right: "0px"  }, 2000, 'easeOutExpo');
	$(".new").find("#post-bg").animate({ right: "0px"  }, 2000, 'easeOutExpo');
	}, 800);

	setTimeout(function() {
    $(".visible").remove();
	$( ".new" ).addClass( "visible" );
	$( ".visible" ).removeClass( "new" );
	$("#next-art").animate({ right: "0px" },600, 'easeOutExpo');
	setTimeout(function() {$("#prev-art ").animate({ right: "0px" },600, 'easeOutExpo');}, 300);
	$("#post-bg").fadeTo( "slow", 1 , 'easeOutExpo');
	}, 2800);

		window.history.pushState("", "AWD AGENCY", linkArticolo);
	
		if(menuStatus == 1){
	    $(".new").find("#post-bg, #loader-project").css({ left: 60 });
		}else{
	    $(".new").find("#post-bg, #loader-project").css({ left: 320 });
		};
      },
    });
   
   
	
	
	}

function openMenu(){
	
	var h = $( window ).height(); // returns height of browser viewport
	var w = $( window ).width(); // returns height of browser viewport

	var hproject = h/2 ;     
	var wcontstart = w - 320 ;  
	var wcontlate = w - 60 ;  
	var postContWidth = $("#post-cont").width(); 
	var widthref = $("#references li").width();

	$("#menu-open").animate({ left: -60 },600 , 'easeOutExpo');
	var widthref = $("#references li").width();
	$("#references li").animate("height", widthref );	
	$("#cont-menu").animate({ left: 0 },600 , 'easeOutExpo');
	$("#cont , #cont-right").css({ width: w - 320 }); 
	var postContWidth = $("#post-cont").width(); 
 	$("#post-bg, #loader-project").css({ width: postContWidth });
 	$("#post-bg, #loader-project").css({ left: 320 });
	$("#post-bg-first-news").css({ width: postContWidth });
	$("#post-bg-first-news").css({ left:320 });
	menuStatus = 0;
}
  
function closeMenu(){
var h = $( window ).height(); // returns height of browser viewport
var w = $( window ).width(); // returns height of browser viewport

var hproject = h/2 ;     
var wcontstart = w - 320 ;  
var wcontlate = w - 60 ;  
var postContWidth = $("#post-cont").width(); 
var widthref = $("#references li").width();

	$("#cont-menu").animate({ left: -320 },800 , 'easeOutExpo');
	var widthref = $("#references li").width();
	$("#references li").animate("height", widthref );	
	setTimeout(function(){$("#menu-open").animate({ left: 0 },800, 'easeOutExpo');}, 600);
	$("#cont , #cont-right").css({ width:  wcontlate  });
	var postContWidth = $("#post-cont").width(); 
 	$("#post-bg, #loader-project").css({ width: postContWidth });
 	$("#post-bg, #loader-project").css({ left: 60 });
	$("#post-bg-first-news").css({ width: postContWidth });
 	$("#post-bg-first-news").css({ left: 60 });
	menuStatus = 1;
	
}

function openContR(linkArticolo){
	var h = $( window ).height(); // returns height of browser viewport
	var w = $( window ).width(); // returns height of browser viewport

	var hproject = h/2 ;     
	var wcontstart = w - 320 ;  
	var wcontlate = w - 60 ;  
	var postContWidth = $("#post-cont").width(); 
	var widthref = $("#references li").width();

	$("#cont-right").css("display","block");
	$("#cont-right").animate({right:0}, 800, 'easeOutExpo');
	$("#cont-right-open").animate({ right: -60 });
	setTimeout(function(){$(".cont-ajax").css("display","none");}, 800);
	setTimeout(function(){$(".cont-ajax").html("");}, 800);

	window.history.pushState("", "AWD AGENCY", linkArticolo);

}
  
function closeContR(){
	var h = $( window ).height(); // returns height of browser viewport
	var w = $( window ).width(); // returns height of browser viewport

	var hproject = h/3 ;
	var wcontstart = w - 320 ;  
	var wcontlate = w - 60 ;  
	var postContWidth = $("#post-cont").width(); 
	var widthref = $("#references li").width();

	var wcont = $("#cont-right").width();
	$(".cont-ajax").css("display","block");
	$("#cont-right").animate({right:- wcontlate}, 800, 'easeInExpo');
	setTimeout(function(){$("#cont-right-open").animate({ right: 0 });}, 800);
	setTimeout(function(){$("#cont-right").css("display","none");}, 800);
}

var url = window.location.href;

$(document).ready(function() {



var h = $( window ).height(); // returns height of browser viewport
var w = $( window ).width(); // returns width of browser viewport

var hproject = h/3 ;
var wcontstart = w - 320 ;  
var wcontlate = w - 60 ;  
var MarginPost = h - (h/3);
var postContWidth = $("#post-cont").width(); 
var MarginLoader = (MarginPost/2) - 16;


var widthvideo = $(".video-articolo").width();
		var heightvideo = (widthvideo * 551) / 980;
		$(".video-articolo").css("height", heightvideo);


$("#loader-project").css({ "margin-top": MarginLoader });

var widthvideo = $(".video-articolo").width();
		var heightvideo = (widthvideo * 551) / 980;
		$(".video-articolo").css("height", heightvideo);

  // Get current url
  // Select an a element that has the matching href and apply a class of 'active'. Also prepend a - to the content of the link
$('#menu li a[href="'+url+'"]').addClass('current_page_item');

$(".cont-right-close").click(function(){
	var linkArticolo = $(this).attr("attributo");
   
     $.ajax({
      type: "POST",
      url: linkArticolo+'?home=ok',
	  dataType: "html",
      success: function(articolo)
      {
        $(".cont-ajax").html(articolo);
		var postContWidth = $("#post-cont").width(); 
		$("#post-bg, #loader-project").css({ "width": postContWidth });
		var MarginPost = h - (h/3);
		$("#post-bg").css({ "height": MarginPost });
		$("#post-cont").css({ "margin-top": MarginPost });
		$("#post-bg-team, #cont-team-text").css({ "height": h });
		$("#next-art").animate({ right: "0px" },600, 'easeOutExpo');
		setTimeout(function() {$("#prev-art ").animate({ right: "0px" },600, 'easeOutExpo');}, 300);
		
		var widthvideo = $(".video-articolo").width();
		var heightvideo = (widthvideo * 551) / 980;
		$(".video-articolo").css("height", heightvideo);
		
		$('#post-cont-img img').bind('inview', function(event, visible) {
     	if (visible) {
        $(this).stop().animate({ opacity: 1 }, 400).transition({ scale: 1 });
   	   }
	    
    });
	setTimeout(function() {	$("#post-bg").fadeTo( "slow", 1 , 'easeOutExpo');	}, 2800);

		if(menuStatus == 1){
		$("#post-bg, #loader-project").css({ left: 60 });
		}else{
		$("#post-bg, #loader-project").css({ left: 320 });
		};
		
		window.history.pushState("", "AWD AGENCY", linkArticolo);
		
      },
    });
   
});


var MarginPost = h - (h/3);
$("#post-bg").css({ "height": MarginPost });
$("#post-cont").css({ "margin-top": MarginPost });
$('#post-cont-img img').bind('inview', function(event, visible) {
if (visible) {
$(this).stop().animate({ opacity: 1 }, 400).transition({ scale: 1 });
}
});
		

$("#news li").click(function(){
	var linkArticolo = $(this).attr("attributo");
   
     $.ajax({
      type: "POST",
      url: linkArticolo+'?home=ok',
	  dataType: "html",
      success: function(articolo)
      {
        $("#cont-ajax-news").html(articolo);
       
	    $( "#post-cont" ).scrollTop( 0 );
		var MarginPost = h - (h/3);
		var postContWidth = $("#post-cont").width(); 
		$("#post-bg").css({ "height": MarginPost });
		$("#post-bg").fadeTo( "slow", 1 , 'easeOutExpo');	
		$("#post-cont").css({ "margin-top": MarginPost });
		$('#post-cont-img img').bind('inview', function(event, visible) {
     	if (visible) {
        $(this).stop().animate({ opacity: 1 }, 400).transition({ scale: 1 });
   	    }
        });
		window.history.pushState("", "AWD AGENCY", linkArticolo);

		if(menuStatus == 1){
		$("#post-bg, #loader-project").css({ left: 60 });
		var postContWidth = $("#post-cont").width(); 
		$("#post-bg, #loader-project").css({ width: postContWidth });
		}else{
		$("#post-bg, #loader-project").css({ left: 320 });
		var postContWidth = $("#post-cont").width(); 
		$("#post-bg, #loader-project").css({ width: postContWidth });
	
		};
	  },
	  
    });
	$("#news li").removeClass("current-news");
    $(this).addClass("current-news");
	
});

if(menuStatus == 1){
  		$("#post-bg-first-news").css({ "height": MarginPost });
		$("#post-bg-first-news").css({ left: 60 });
		var postContWidth = $("#post-cont").width(); 
		$("#post-bg-first-news").css({ width: postContWidth });
		}else{
		$("#post-bg-first-news").css({ "height": MarginPost });
		$("#post-bg-first-news").css({ left: 320 });
		var postContWidth = $("#post-cont").width(); 
		$("#post-bg-first-news").css({ width: postContWidth });
};

$("#cont , #cont-right").css({ width: wcontstart , height: h });
$("#project li , #team li , .social ").animate({ height: hproject });

var widthref = $("#references li").width();
$("#references li").css("height", widthref );		

 $("#references li").mouseenter(function() {
	var altezzaRef = $(this).find(".bg-references").height();
	$(this).find(".bg-references").stop().animate({top: '+'+altezzaRef},500,"easeInOutExpo");
 }).mouseleave(function() {
	$(this).find(".bg-references").stop().animate({top: 0},500,"easeInOutExpo"); 
 });


$(".social").mouseenter(function() {
	$(this).find(".social-logo-colorato").fadeTo(100 , 0);
	$(this).find(".social-logo-bianco").fadeTo(100 , 1);
	$(this).find(".social-icon-colorato").fadeTo(100 , 0);
	$(this).find(".social-icon-bianco").fadeTo(100 , 1);
	$(this).find(".social-text .title a,  .social-text .subtitle ").css("color","#fff");
 }).mouseleave(function() {
	$(this).find(".social-logo-colorato").fadeTo(100 , 1);
	$(this).find(".social-logo-bianco").fadeTo(100 , 0);
	$(this).find(".social-icon-colorato").fadeTo(100 , 1);
	$(this).find(".social-icon-bianco").fadeTo(100 , 0);
	$(this).find(".social-text .title a , .social-text .subtitle ").css("color","#313133");
 });
 

 $(".services").mouseenter(function() {
	$(this).find("h1").stop().fadeTo(300 , 0);
	$(this).find(".cont-services p").stop().fadeTo(300 , 1);
	$(this).find(".shadow").stop().fadeTo(300 , 0);
 }).mouseleave(function() {
	$(this).find("h1").stop().fadeTo(300 , 1);
	$(this).find(".cont-services p").stop().fadeTo(300 , 0);
	$(this).find(".shadow").stop().fadeTo(300 , 0.35);
 });



$("#menu-close").click(closeMenu);
$("#menu-open").click(openMenu);

$(".cont-right-close").click(closeContR);



$("#news li").mouseover(function(){
   $(this).css("background-color","#313133");
   $(this).find(".title-small-news").css("color","#fff");
}).mouseleave(function() {
   $(this).css("background-color","#fff");
   $(this).find(".title-small-news").css("color","#313133");
});



$(".grande").mouseover(function(){
   $(this).find(".transit").stop().transition({ scale: 1.05 },800 , 'easeOutExpo');
   $(this).find(".shadow").stop().fadeTo(300 , 0);
   $(this).find(".cont-title").stop().fadeTo(300 , 0.8);
   $(this).find(".title-category , .riassunto-category p").stop().fadeTo(300 , 1);

}).mouseleave(function() {
   $(this).find(".transit").stop().transition({ scale: 1.01 },300 , 'easeOutExpo');
   $(this).find(".shadow").stop().fadeTo(300 , 0.35);
   $(this).find(".cont-title , .title-category , .riassunto-category p").stop().fadeTo(300 , 0);
});
  
$(".medio").mouseover(function(){
   $(this).find(".transit").stop().transition({ scale: 1.05 },800 , 'easeOutExpo');
   $(this).find(".shadow").stop().fadeTo(300 , 0);
   $(this).find(".cont-title").stop().fadeTo(300 , 0.8);
   $(this).find(".title-category , .riassunto-category p").stop().fadeTo(300 , 1);
}).mouseleave(function() {
   $(this).find(".transit").stop().transition({ scale: 1.01 },300 , 'easeOutExpo');
   $(this).find(".shadow").stop().fadeTo(300 , 0.35);
   $(this).find(".cont-title , .title-category , .riassunto-category p").stop().fadeTo(300 , 0);
});

$(".piccolo").mouseover(function(){
   $(this).find(".transit").stop().transition({ scale: 1.05 },800 , 'easeOutExpo');
   $(this).find(".shadow").stop().fadeTo(300 , 0);
   $(this).find(".cont-title").stop().fadeTo(300 , 0.9);
   $(this).find(".title-category , .riassunto-category p").stop().fadeTo(300 , 1);
}).mouseleave(function() {
   $(this).find(".transit").stop().transition({ scale: 1.01 },300 , 'easeOutExpo');
   $(this).find(".shadow").stop().fadeTo(300 , 0.05);
   $(this).find(".cont-title , .title-category , .riassunto-category p").stop().fadeTo(300 , 0);
});



$(".team-box").mouseover(function(){
   $(this).find(".transit").stop().transition({ scale: 1 },800 , 'easeOutExpo');
   $(this).find(".shadow").stop().fadeTo(300 , 0);
   $(this).find(".cont-title").stop().fadeTo(300 , 0.8);
   $(this).find(".title-category , .riassunto-category-team p").stop().fadeTo(300 , 1);
}).mouseleave(function() {
   $(this).find(".transit").stop().transition({ scale: 1 },300 , 'easeOutExpo');
   $(this).find(".shadow").stop().fadeTo(300 , 0.3);
   $(this).find(".cont-title , .title-category , .riassunto-category-team p").stop().fadeTo(300 , 0);
});



	


 
});

/*RESIZE*/

$( window ).resize(function() {
	
var h = $( window ).height(); // returns height of browser viewport
var w = $( window ).width(); // returns height of browser viewport

var hproject = h/2 ;     
var wcontstart = w - 320 ;  
var wcontlate = w - 60 ;  
var postContWidth = $("#post-cont").width(); 
var widthref = $("#references li").width();
var MarginPost = h - (h/3);
var MarginLoader = (MarginPost/2) - 16;

if(menuStatus == 1){
	$("#cont , #cont-right ").css({ width: wcontlate });
	$("#post-bg, #loader-project").css({ left: 60 });
	$("#post-bg-first-news").css({ left: 60 });
}else{
	$("#cont , #cont-right").css({ width: wcontstart });
	$("#post-bg, #loader-project").css({ left: 320 });
	$("#post-bg-first-news").css({ left: 320 });
};

$("#post-cont").css({ "margin-top": MarginPost });
$("#post-bg").css({ "height": MarginPost });
$("#post-bg-first-news").css({ "height": MarginPost });
$("#loader-project").css({ "margin-top": MarginLoader });

var widthvideo = $(".video-articolo").width();
var heightvideo = (widthvideo * 551) / 980;
$(".video-articolo").css("height", heightvideo);

	
$("#cont , #cont-right").css({ height: h });	
$("#project li , #team li , .social ").css({ height: hproject });	
$("#references li").css("height",widthref);	

$("#post-bg-team , #cont-team-text").css({ "height": h });

$("#post-bg, #loader-project").css({ width: postContWidth });
$("#post-bg-first-news").css({ width: postContWidth });

});
