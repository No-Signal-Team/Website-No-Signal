window.addEventListener('load', function() {
    setTimeout(function() {
      var videoContainer = document.getElementById('video-container');
      var contentContainer = document.getElementById('content-container');
      videoContainer.removeChild(document.getElementById('intro-video'));
      contentContainer.style.opacity = 1;
    }, 8000);
  });