<?php

/*
 * Simple Image Display
 * Used to pull images from folder based on page name
 * Created by Cory Mosey
 */

$directory = 'assets/img/transitions/'.$page.'/';
if(is_dir($directory)) {
	
	// Check if the directory exists
	if($handle = opendir($directory)) {
		// Check if its able to open the directory
		$images = array();

		// Loop through files
		while(false !== ($entry = readdir($handle))) {
            if($entry != "." && $entry != "..") {

            	// If the file exists store it in array
                // Build the full file path
                $images[] = '/'.$directory.$entry;
            }
        }

        // Close directory and sort array
        closedir($handle);
        sort($images);

        if(!empty($images)) {
?>
            <!-- Start Slider -->
            <div class="inner-slider">
<?php

        	// Check if images exists and loop through them
            // Set count of images for class
            $i = 0;
        	foreach($images as $image) {
                $i++;
?>
        		<img src="<?= $image ?>" class="banner__slide slide--<?= $i ?>" alt="<?= $sitename ?>" />
<?php
        	}
        }
?>
            </div>
            <!-- End Slider -->
<?php
	}

}

?>