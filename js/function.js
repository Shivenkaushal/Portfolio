
//progress bar logic

function CircleBar(e) {
   $(e)
      .circleProgress({ fill: { color: "#00EAFF" } })
      .on("circle-animation-progress", function (_event, _progress, stepValue) {
      });
}
CircleBar(".round");

var $root = $('html, body');

$('a[href^="#biography"]').click(function () {
    $root.animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);

    return false;
});
$('a[href^="#home"]').click(function () {
   $root.animate({
       scrollTop: $( $.attr(this, 'href') ).offset().top
   }, 500);

   return false;
});
$('a[href^="#projects"]').click(function () {
   $root.animate({
       scrollTop: $( $.attr(this, 'href') ).offset().top
   }, 500);

   return false;
});
$('a[href^="#cert"]').click(function () {
   $root.animate({
       scrollTop: $( $.attr(this, 'href') ).offset().top
   }, 500);

   return false;
});
$('a[href^="#gallery"]').click(function () {
   $root.animate({
       scrollTop: $( $.attr(this, 'href') ).offset().top
   }, 500);

   return false;
});
$('a[href^="#contact"]').click(function () {
   $root.animate({
       scrollTop: $( $.attr(this, 'href') ).offset().top
   }, 500);

   return false;
});
