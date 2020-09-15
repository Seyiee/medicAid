var animate;

$('.btn-open').on('click',function(e){
  //e.stopImmediatePropagation();
  $('body').append("<div class='overlay'></div>");
  animate = TweenMax.to(modal,1,{autoAlpha:1,display:"block",scale:1})
});

$("body").click(function(e){
  var selectorClass = e.target.classList[0];
  if( selectorClass === "overlay" || selectorClass === "btn-close" ){
    $('.overlay').remove();
    animate.reverse();
    $('#modal').hide();
  }
  console.log(e.target.classList[0]);
})