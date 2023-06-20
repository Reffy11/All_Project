window.addEventListener('DOMContentLoaded', function() {
    const audioPlayer = document.getElementById('audioPlayer');
    const playlist = document.getElementById('playlist');
    const songs = playlist.getElementsByTagName('li');
  
    for (let i = 0; i < songs.length; i++) {
      songs[i].addEventListener('click', function() {
        const source = this.getAttribute('data-src');
        audioPlayer.src = source;
        audioPlayer.play();
      });
    }
  });