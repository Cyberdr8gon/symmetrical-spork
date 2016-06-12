<head>

</head>

<body>
  <?php
     include("functions.php");

     $jsonObject = new jsonObject("vid1.json");
     ?>



<div id="player"></div>



<div ID="playback .5">
<button onclick="player.setPlaybackRate(.5)">speed .5</button>
</div>

<div ID="playback 1">
<button onclick="player.setPlaybackRate(1)">speed 1</button>
</div>

<div ID="playback 1.5">
<button onclick="player.setPlaybackRate(1.5)">speed 1.5</button>
</div>

<div ID="playback 2">
<button onclick="player.setPlaybackRate(2)">speed 2</button>
</div>



<br>


<script src="jquery-3.0.0.js"></script>
<script type="text/javascript" src="script.js"></script>
<script>
  var tempVideoIdenfitifer = "dQw4w9WgXcQ"
</script>


</body>
