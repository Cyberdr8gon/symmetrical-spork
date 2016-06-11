
// JSON File Interface

function fetchJSONFile(path, callback) {
   var httpRequest = new XMLHttpRequest();
   httpRequest.onreadystatechange = function() {
       if (httpRequest.readyState === 4) {
           if (httpRequest.status < 400) {
               var data = (httpRequest.responseText);
               if (callback) callback(data);
           }
       }
   };
   httpRequest.open('GET', path);
   httpRequest.send();
}


// this requests the file and executes a callback with the parsed result once
//   it is available
var jsonSampleFileName = 'vid1.json'
fetchJSONFile(jsonSampleFileName, function(data){
   console.log(data);
});











var windowWidth = window.innerWidth;
var windowHeight = window.innerHeight;

var playerWidth = windowWidth * 0.6
var playerHeight = windowHeight * 0.8
console.log(playerWidth);
console.log(playerHeight);

//HOLY SHIT DONT LEAVE THIS HERE
// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);


// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player;
function onYouTubeIframeAPIReady() {
    createPlayer(tempVideoIdenfitifer)
}

function createPlayer(vidId) {
    player = new YT.Player('player', {
        height: playerHeight,
        width: playerWidth,
        videoId: vidId,
        events: {
            'onReady': onPlayerReady,
        }
    });
}

// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
  event.target.playVideo();
}

// 5. The API calls this function when the player's state changes.
//    The function indicates that when playing a video (state=1),
//    the player should play for six seconds and then stop.
function stopVideo() {
player.stopVideo();
}

function playVideo(){
player.playVideo()
}

function pauseVideo(){
player.pauseVideo()
}

function jumpTo(seconds){
player.seekTo(seconds, true)
}
