<?php
session_start();

?>

<html>
<title>Band Name</title>
<body>
<h1>Welcome to our band website!</h1>
<br>
<p>30 second preview of our latest track:
<li> Band Name - Song40.mp3 </li>
    <!-- Javascript for mp3 player below -->
    <script type="text/javascript">
    $(document).ready(function(){
    $("#jquery_jplayer_1").jPlayer({
    ready: function () {
    $(this).jPlayer("setMedia", {
    m4a: "/media/mysound.mp4",   // Link to your mp3 file here
    oga: "/media/mysound.ogg"    // OR Link to your ogg file here
    });
    },
    swfPath: "/js",
    supplied: "m4a, oga"
    });
    });
    </script>
    <!-- End mp3 player -->
    
    <!-- mp3 player container begin -->
    <div id="jquery_jplayer_1"></div>
    <div id="jp_container_1">
    <a href="#" class="jp-play">Play</a>
    <a href="#" class="jp-pause">Pause</a>
    </div>
    <!-- mp3 player container end -->
</p>
<p>If you liked this song sample you can download it now from our website for only $0.25</p>
<p><a href="payment.php">Pay with Bitcoin</a></p>
<br>
<br>
<p>Don't have Bitcoin? You can get some right now at <a href="http://www.circle.com" target="_blank">www.circle.com</a>
</body>
</html>
