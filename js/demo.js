
//particleground jquery javascript

document.addEventListener('DOMContentLoaded', function () {
  particleground(document.getElementById('particles'), {
    dotColor: '#4EB2A5',
    lineColor: '#4EB2A5',
    directionX: 'right',
    directionY: 'up',
  });
  var intro = document.getElementById('intro');
  intro.style.marginTop = - intro.offsetHeight / 2 + 'px';
}, false);

// inspect element close function on key

document.onkeydown = function (e) {
  if (event.keyCode == 123) {
    return false;
  }
  if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
    return false;
  }
  if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
    return false;
  }
  if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
    return false;
  }
}