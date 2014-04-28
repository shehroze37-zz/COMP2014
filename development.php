<!DOCTYPE html>

<!--[if lt IE 7]><html class="lt-ie9 lt-ie8 lt-ie7" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><![endif]-->

<!--[if IE 7]><html class="lt-ie9 lt-ie8" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><![endif]-->

<!--[if IE 8]><html class="lt-ie9" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><![endif]-->

<!--[if gt IE 8]><!--><html xmlns="http://www.w3.org/1999/xhtml"><!--<![endif]-->

<html>

<head>

  <meta charset="utf-8" />

  <meta name="viewport" content="width=device-width" />

  <title>COMP2014 EngduinoIDE Technicals</title>
<link rel = "stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
<link rel = "stylesheet" type="text/css" href="bootstrap/css/main_style.css" />
<script src="http://use.edgefonts.net/lato.js"></script>




  <link rel="stylesheet" href="css/normalize.css" />

  <link rel="stylesheet" href="css/foundation.min.css" />

  <link rel="stylesheet" href="css/style.css" />

  <link rel="stylesheet" href="css/ie.css" />

  <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>

  <link href='http://fonts.googleapis.com/css?family=Cabin+Condensed:600' rel='stylesheet' type='text/css'>



  <script src="js/vendor/custom.modernizr.js"></script>

</head>

<body>


<?php include("includes/header_content.php") ; ?>



<div id="technicals" class="section features" data-magellan-destination="technicals" style = "margin-top:50px;">

	<div class="row hi-icon-wrap hi-icon-effect-3 hi-icon-effect-3b">

		<div class="large-12 columns">

			<h2>Development Plan</h2>

				<ul>
                	<li>By the 24th February, work on the uploading and compiling code was complete, as was the majority of the final version of the UI. </li>
                    <li>By the 29th March, the C++ code to run on the Engduino and sit behind the graphical blocks was completed, as well as the code that subsequently traversed the tree and combined the code.</li>
                    
                    
                    
                </ul>
			

		</div>
		
        

	</div>

</div>

<div id="management" class="section product gray" data-magellan-destination="diagrams">

	<div class="row">

		<div class="large-12 columns">

			<h2>Work Packages</h2>
            <ul>
                <p>Shehroze completed the following work packages:</p>
                <ul>
                    <li></li>
                </ul>
                <p>Tom completed the following work packages:</p>
                <ul>
                    <li>Creation of JUnit Tests.</li>
                    <li>Code to reset the bootloader on the Engduino to allow for upload.</li>
                    <li>Code to generate commands to run the G++ and GCC compilers to compile for the Engduino.</li>
                    <li>Code to convert the compiler output to a writable hex file to be deployed on the Engduino using avr-objcopy.</li>
                    <li>Integrated the avrdude programming tool into the IDE so that the hex file can be transferred over the USB connection to the Engduino.</li>
                    <li>The printUtility class to allow the user to print the underlying C++ code.</li>
                    <li>Testing functionality across Linux and Windows</li>
                    <li>Sourced the tools and libraries required for each CPU architecture and OS and integrated them in, where external binaries were used.</l>

                </ul>
            </ul>
			
			

		</div>

	</div>

</div>






	

    



</div>

<?php include("includes/footer.php") ; ?>	

			

  <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>

  <script type="text/javascript" src="js/foundation.min.js"></script>

  <script type="text/javascript" src="js/functions.js"></script>

  <script type="text/javascript" src="js/jquery.nicescroll.js"></script>

  <script src="js/jquery.localscroll-1.2.7.js" type="text/javascript"></script>

  <script src="js/jquery.scrollTo-1.4.3.1.js" type="text/javascript"></script>

  <link rel="stylesheet" href="css/flexslider.css"> <!-- Flex slider -->

  <script src="js/jquery.flexslider.js" type="text/javascript"></script><!-- Flex slider -->

  <script type="text/javascript" src="js/custom.js"></script>



</body>

</html>
