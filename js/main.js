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
      };
      mypos = newscroll;
      return false
  };
});
if(jQuery(window).scrollTop() > 1000){
  jQuery('.stat__ui--inner h4').each(function () {
    var stat = $(this);
    jQuery({ Counter: 0 }).animate({ Counter: stat.text() }, {
      duration: 3000,
      easing: 'easeOutQuint',
      step: function () {
        stat.text(Math.ceil(this.Counter));
      }
    });
  });
};