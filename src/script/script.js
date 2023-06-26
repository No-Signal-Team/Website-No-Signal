window.addEventListener('load', function loadingVideo() {
  setTimeout(function() {
    var videoContainer = document.getElementById('video-container');
    var contentContainer = document.getElementById('content-container');
    videoContainer.removeChild(document.getElementById('intro-video'));
    contentContainer.style.opacity = 1;
  }, 8000);
});

window.addEventListener('scroll', function() {
  setTimeout(function() {
    var videoContainer = document.getElementById('video-container');
    videoContainer.parentNode.style.opacity = 1;
  }, 0);
});