const visited = window.localStorage.getItem('visited');
console.log(visited)

if(!visited){
  // Create video element
  const video = document.createElement('video');

  // Use local file
  // video.src = 'video.mp4';

  // Use remote file
  video.src =
    'src/video/FINAL.mp4';


  video.controls = false;
  video.muted = true;
  video.autoplay = true;

  const box = document.getElementById('video-container');

  // Include in HTML as child of #box
  box.appendChild(video);

  window.addEventListener('load', function loadingVideo() {
    setTimeout(function() {
      var videoContainer = document.getElementById('video-container');
      var contentContainer = document.getElementById('content-container');
      videoContainer.removeChild(document.getElementById('intro-video'));
      contentContainer.style.opacity = 1;
    }, 8000);
  });

  var website = document.getElementById("content-container");
  website.classList.add("content-container");
}

window.localStorage.setItem('visited', true);