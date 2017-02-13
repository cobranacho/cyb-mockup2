function resetVideo() {
  $( "#video_src").attr("src", "");
}


$( "#testmonial1" ).mouseover(function() {
  $( "#video_src").attr("src", "https://www.youtube.com/embed/63F14Ro_fyM?rel=0");
});

$( "#testmonial2" ).mouseover(function() {
  $( "#video_src").attr("src", "https://www.youtube.com/embed/9nJi8CQGs6g?rel=0");
});

$( "#testmonial3" ).mouseover(function() {
  $( "#video_src").attr("src", "https://www.youtube.com/embed/IVKWaaOetJk?rel=0");
});


function loadImages(type, count) {
  var images = [];
  for (var i = 0; i < count; i++) {
    images[i] = type + i + ".jpg";
  }
  
  for (var i = 0; i < images.length; i++) {
    console.log(images[i]);
  }
  
}

function doFunction() {
  $("#bar1").removeClass("yellow-stripe");
  $("#bar1").addClass("blue-stripe");
  $("#bar2").removeClass("blue-stripe");
  $("#bar2").addClass("yellow-stripe");
  $("#donate1").fadeOut(500, function() {
    $("#donate2").fadeIn(500);
  });
  
}

$(document).ready(function (){
  
    $("#donate2").hide();
    $("#click").click(function (){
        $('html, body').animate({
            scrollTop: $("#main").offset().top
          }, 1500);
     });
     
     $("#click").hover(function () {
        $(this).addClass("bounce");
     },
     function() {
       $(this).removeClass("bounce");
     });
     
     	$(".navbar-toggle").on("click", function () {
				  $(this).toggleClass("active");
				  $(".slo").fadeToggle(150);
			});
			
			$("#demo01").animatedModal({
        animatedOut:'fadeOutUp',
        animatedIn: 'fadeInUp',
			  color: '#666666'
			});
			
});
        
