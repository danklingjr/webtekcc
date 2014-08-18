/* Anything that has to do with scrolling is below */
var mywindow = jQuery(window);
var mypos = mywindow.scrollTop();
var up = false;
var newscroll;

/* Animating header on scroll */
mywindow.scroll(function(){
  newscroll = mywindow.scrollTop();
  if (newscroll > 150) {
    if (newscroll > mypos && !up) {
        jQuery( "#header" ).stop().animate({
          //opacity: "0",
          marginTop: "-150px",
        },400);

        up = !up;
        console.log(up);
      } else if(newscroll < mypos && up) {
        jQuery( "#header" ).stop().animate({
          //opacity: "1",
          marginTop: "0",
        },400);
        up = !up;
        jQuery( ".header-bg" ).stop().animate({
          opacity: "1",
        },100);

      }
      mypos = newscroll;
      return false
  }else if (newscroll < 151) {
      jQuery( ".header-bg" ).stop().animate({
        opacity: "0.3",
      },100);
  };
  
});