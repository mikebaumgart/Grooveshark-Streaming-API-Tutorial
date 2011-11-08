<!DOCTYPE html>
<html>

<head>
	<meta charset='UTF-8'>
	
	<title>Grooveshark Song Streaming</title>
	
	<link rel='stylesheet' href='css/style.css'>
	
	<script src="swfobject/swfobject.js"></script>
</head>

<body>

	<div id="player"></div>
	<script>
		swfobject.embedSWF("http://grooveshark.com/APIPlayer.swf", "player", "300", "300", "9.0.0", "", {}, {allowScriptAccess: "always"}, {id:"groovesharkPlayer", name:"groovesharkPlayer"}, function(e) {
		
	    var element = e.ref;
	    	    
	    if (element) {
	    
	        setTimeout(function() {
	            window.player = element;
	            window.player.setVolume(99);
	        }, 1500);
	        
	    } else {
	    
	        // Couldn't load player
	        
	    }
	    
		});
	</script>

	<div id="page-wrap">
		
		<h1>Play Music through the Grooveshark Streaming API</h1>
		
		<p>Resources: <a href="http://jquery.com">jQuery</a>, <a href="http://code.google.com/p/swfobject/">SWFObject</a>, <a href="http://developers.grooveshark.com/tuts/streaming">Grooveshark Streaming API</a>, <a href="http://tinysong.com/api">Tinysong API</a></p>
		
		<h2>Pre-determined song(s)</h2>
		<p>As in, you already have the song ID's</p>
		
		<p><strong>MMW - <em>Whatever Happened to Gus?</em></strong> 
		<a href="#" data-songid="198155">Play</a>
		<a href="#" class="pause">Pause</a>
		<a href="#" class="resume">Resume</a>
		</p>
		
		<h2>Any song</h2>
		<p>Get the song ID through the <a href="http://tinysong.com/api">Tinysong API</a>, then play it.</p>
		
		<form>
			<label for="song-search-input">Search for a song: </label>
			<input type="text" id="song-search-input" name="song-search-input" value="America">
			<input type="submit" value="Search and play" class="search-song">
		</form>
		<p><a href="#" class="pause">Pause</a>
		<a href="#" class="resume">Resume</a></p>
		
		<footer>
			Powered by <a href="http://grooveshark.com">Grooveshark</a>
		</footer>
		
	</div>

	<script src="http://code.jquery.com/jquery-1.7.min.js"></script>
	<script src="js/grooveshark.js"></script>
	
</body>

</html>