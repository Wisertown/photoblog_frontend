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
$( document ).ready(function(){

$(".main2").hide();

var $blurfocus = $('<div id="blurfocus"></div>');
var $image = $("<img>");
$blurfocus.append($image); 
$("body").append($blurfocus);

$("#hikeshow a").click(function(event){

	event.preventDefault();

	var imageLocation = $(this).attr("href");

	$image.attr("src", imageLocation);
	$blurfocus.show();
});

//$(".main2").hide();


$("#hikeshowtwo a").click(function(event){

	event.preventDefault();

	var imageLocation = $(this).attr("href");

	$image.attr("src", imageLocation);
	$blurfocus.show();

});


$blurfocus.click(function(){
  //Hide the overlay
  $blurfocus.hide();
});

$(".rachel").click(function(){
	$(".main2").hide();
	$(".main").show();
})
$(".tableR").click(function(){
	$(".main").hide();
	$(".main2").show();
})

});
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
		<div class="button_hold">
			<button class="rachel">Rachel Lake WA</button>
			<button class="tableR">Table Rock VA</button>
		</div>
		<div class="main">
			<ul id="hikeshow">
				<h4>Rachel Lake Washington</h4>
				<li><a href="images/rlake/imag0014.jpg"><img class="imgv" src="images/thumbs/thumb0014.jpg"  alt=""></a></li>
				<li><a href="images/rlake/imag0015.jpg"><img class="imgv" src="images/thumbs/thumb0015.jpg"  width="150" alt=""></a></li>
				<li><a href="images/rlake/imag0016.jpg"><img class="imgv" src="images/thumbs/thumb0016.jpg" width="150"  alt=""></a></li>
				<li><a href="images/rlake/imag0057.jpg"><img class="imgv" src="images/thumbs/thumb0057.jpg" width="150"  alt=""></a></li>
				<li><a href="images/rlake/imag0018.jpg"><img class="imgv" src="images/thumbs/thumb0018.jpg" width="150"  alt=""></a></li>
				<li><a href="images/rlake/imag0036.jpg"><img class="imgv" src="images/thumbs/thumb0036.jpg" width="150"  alt=""></a></li>
				<li><a href="images/rlake/imag0099.jpg"><img class="imgv" src="images/thumbs/thumb0099.jpg" width="150"  alt=""></a></li>
				<li><a href="images/rlake/imag0021.jpg"><img class="imgv" src="images/thumbs/thumb0021.jpg" width="150" alt=""></a></li>
				<li><a href="images/rlake/imag0060.jpg"><img class="imgv" src="images/thumbs/thumb0060.jpg" width="150"  alt=""></a></li>
				<li><a href="images/rlake/imag0061.jpg"><img class="imgv" src="images/thumbs/thumb0061.jpg" width="150"  alt=""></a></li>
				<li><a href="images/rlake/imag0063.jpg"><img class="imgv" src="images/thumbs/thumb0063.jpg" width="150"  alt=""></a></li>
				<li><a href="images/rlake/imag0067.jpg"><img class="imgv" src="images/thumbs/thumb0067.jpg" width="150" alt=""></a></li>
			</ul>
		</div>
		<div class="main2">
			<ul id="hikeshowtwo">
				<h4>Table Rock Virginia</h4>
				<li><a href="images/va1/IMAG0099.jpg"><img class="imgv" src="images/thumbs/thumb0099A.jpg"  alt=""></a></li>
				<li><a href="images/va1/IMAG0100.jpg"><img class="imgv" src="images/thumbs/thumb0100.jpg"  width="150" alt=""></a></li>
				<li><a href="images/va1/IMAG0101.jpg"><img class="imgv" src="images/thumbs/thumb0101.jpg"width="150"  alt=""></a></li>
				<li><a href="images/va1/IMAG0102.jpg"><img class="imgv" src="images/thumbs/thumb0102.jpg"width="150"  alt=""></a></li>
				<li><a href="images/va1/IMAG0104.jpg"><img class="imgv" src="images/thumbs/thumb0104.jpg" width="150"  alt=""></a></li>
				<li><a href="images/va1/IMAG0105.jpg"><img class="imgv" src="images/thumbs/thumb0105.jpg" width="150"  alt=""></a></li>
				<li><a href="images/va1/IMAG0113.jpg"><img class="imgv" src="images/thumbs/thumb0113.jpg" width="150"  alt=""></a></li>
				<li><a href="images/va1/IMAG0118.jpg"><img class="imgv" src="images/thumbs/thumb0118.jpg" width="150" alt=""></a></li>
				<li><a href="images/va1/IMAG0119.jpg"><img class="imgv" src="images/thumbs/thumb0119.jpg" width="150"  alt=""></a></li>
				<li><a href="images/va1/IMAG0120.jpg"><img class="imgv" src="images/thumbs/thumb0120.jpg" width="150"  alt=""></a></li>
				<li><a href="images/va1/IMAG0121.jpg"><img class="imgv" src="images/thumbs/thumb0121.jpg" width="150"  alt=""></a></li>
				<li><a href="images/va1/IMAG0122.jpg"><img class="imgv" src="images/thumbs/thumb0122.jpg" width="150" alt=""></a></li>
			</ul>
		</div>
	</div>
</body>
</html>