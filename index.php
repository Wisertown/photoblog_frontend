<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The Best Hike Blog</title>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">-->

<script type="text/javascript" src="oriDomi-master/oridomi.min.js"></script>
<link rel="stylesheet" href="css/style.css">
<script>



$( document ).ready(function() {

var $blurfocus = $('<div id="blurfocus"></div>');
var $image = $("<img>");
$blurfocus.append($image);

$("body").append($blurfocus);

$("#hikeshow a").click(function(event){
	event.preventDefault();

	var imageLocation = $(this).attr("href");

	$image.attr("src", imageLocation);
	$blurfocus.show();

})
$blurfocus.click(function(){
  //Hide the overlay
  $blurfocus.hide();
});
})
</script>
</head>
<body>

	<div class="content">
		<div class="heading">
			<h1 class="clip-text clip-text_twelve">You Should Be Hiking</h1>
		</div>
		<div class="subheading">
			<p> I enjoy hiking long distances and only remembering to take my camera half the time. Here you will find <i>most</i> of my exciting, and fun adventures cataloged for you in a nice photo layout... Enjoy.</p>
			<br>
			<p>Click on a photo below to view its full majestic glory.</p>
		</div>
		<div class="main">
			<ul id="hikeshow">
				<li><a href="/images/rlake/imag0014.jpg"><img class="imgv" src="/images/rlake/imag0014.jpg"  alt=""></a></li>
				<li><a href="/images/rlake/imag0015.jpg"><img class="imgv" src="/images/rlake/imag0015.jpg"  width="150" alt=""></a></li>
				<li><a href="/images/rlake/imag0016.jpg"><img class="imgv" src="/images/rlake/imag0016.jpg" width="150"  alt=""></a></li>
				<li><a href="/images/rlake/imag0057.jpg"><img class="imgv" src="/images/rlake/imag0057.jpg" width="150"  alt=""></a></li>
				<li><a href="/images/rlake/imag0018.jpg"><img class="imgv" src="/images/rlake/imag0018.jpg" width="150"  alt=""></a></li>
				<li><a href="/images/rlake/imag0036.jpg"><img class="imgv" src="/images/rlake/imag0036.jpg" width="150"  alt=""></a></li>
				<li><a href="/images/rlake/imag0099.jpg"><img class="imgv" src="/images/rlake/imag0099.jpg" width="150"  alt=""></a></li>
				<li><a href="/images/rlake/imag0021.jpg"><img class="imgv" src="/images/rlake/imag0021.jpg" width="150" alt=""></a></li>
				<li><a href="/images/rlake/imag0060.jpg"><img class="imgv" src="/images/rlake/imag0060.jpg" width="150"  alt=""></a></li>
				<li><a href="/images/rlake/imag0061.jpg"><img class="imgv" src="/images/rlake/imag0061.jpg" width="150"  alt=""></a></li>
				<li><a href="/images/rlake/imag0063.jpg"><img class="imgv" src="/images/rlake/imag0063.jpg" width="150"  alt=""></a></li>
				<li><a href="/images/rlake/imag0067.jpg"><img class="imgv" src="/images/thumbs/thumb0067.jpg" width="150" alt=""></a></li>
			</ul>
		</div>
	</div>
</body>
</html>