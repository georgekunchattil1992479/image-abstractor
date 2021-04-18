<!DOCTYPE html>
<html lang="en-US">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Image Abstractor</title>
   <link rel="stylesheet" type="text/css" href="style.css" media="all">
 </head>

 <body>

    <?php
	   require 'vendor/autoload.php';
	   use League\ColorExtractor\Color;
	   use League\ColorExtractor\ColorExtractor;
		use League\ColorExtractor\Palette;

	   $palette = Palette::fromFilename('./images/flags.jpg');

	?>

 	<header class="masthead">
 		<div class="site-branding">
 			<h1 class="site-title">Image Abstractor</h1>
 			<p class="site-description">Pull the most domin</p>
 		</div>
 	<header>
 	<section class="the-grid">
 		<ul class="colors">
 			<?php
	 			   $colors=$palette->getMostUsedColors(1024);

	 			   foreach ($colors as $color => $count) {

	 			   	  //convert rgb int value to hex color value using fromIntToHex()
	 			   	  $current = Color::fromIntToHex($color); 

	 			   	  //finally, output list item with all current colors' information
	 			   	  echo '<li style="background-color:' . $current . '">' . $current . '</li>'; 
	 			   }

	 			   // Magical image abstraction thing will happen here.
 			?>
 		</ul>
 	</section>
 </body>
 </html>


