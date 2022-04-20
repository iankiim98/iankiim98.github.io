$(document).ready(function(){
    $('.nav-list').before('<div id header><div id="nav_list"><img style="width:70px; padding-right:20px; padding-left:10px;" src="./assets/imgs/lmc-logo-copy.png"><i class="fa fa-align-left fa-2x" aria-hidden="true"></i></div></div>');
    $("#nav_list").click(function(){
      $(this).toggleClass("nav-list--active");
      $(".nav-list").slideToggle();
    });  
  });