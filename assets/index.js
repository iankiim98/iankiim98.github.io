$(function() {
    // Masonry Grid
    $('.row').masonry({
      itemSelector: '.grid-item',
      columnWidth: 180,
      fitWidth: true, // When enabled, you can center the container with CSS.
      gutter: 10
    });
  
    // Loading Animation
    $('.rec').each(function(i) {
      setTimeout(function() {
        $('.rec').eq(i).addClass('is-visible');
      }, 200 * i);
    });
  
 
  });