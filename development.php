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

<div id="collab" class="section features" data-magellan-destination="technicals" style = "margin-top:50px;">

	<div class="row hi-icon-wrap hi-icon-effect-3 hi-icon-effect-3b">

		<div class="large-12 columns">

			<h2>Collaboration opportunities</h2>

				<p>Our IDE could be developed further to support new functionality within both the IDE itself and also to provide further functionality with Engduino. This could include:</p>
			    <ul>
			        <li>Allow the use of additional components on the Engduino, including Arduino shields, .NET Gadgeteer modules and other electrical components. These could then have functionality included within a drag and drop block in the IDE.</li>
			        <li>Provide a cloud service to allow the IDE to save onto the cloud, allowing pupils to work on a sketch from multiple locations and also to allow the teachers to look through the work and mark it in one centralised location.</li>
			        <li>Parts of our code could also be repurposed and released as a Java library to allow the compilation of AVR code and communication and upload with Arduino boards</l>

			    </ul>
                <p>These could be supported by groups such as the Engduino team within UCL Computer Science, Microsoft Research providing support for Gadgeteer modules or Arduino shield manufacturers integrating their libraries into the IDE. Addition of other components could be provided by storing library and module details within an XML file to describe each module or functionality.</p>
		</div>



	</div>

</div>

<div id="management" class="section product gray" data-magellan-destination="diagrams">

	<div class="row">

		<div class="large-12 columns">

			<h2>Management of the Project</h2>
            <p>Because there were only two people working on the project, this made the management much easier among the group members and we divided the work fairly from the very start. We set deadlines in terms of the requirements we were suppose to complete and were getting feedback on the work from the client. Although the work burden was increased because of the number of people in the team, good management allowed us to finish the project in time along with the reports, presentations and other stuff. Both of us decided to complete the must have set of requirements by the end of reading week. Although we were a little late on schedule during that time period but after that we got on track. All the must have requirements were completed following the end of reading week and then we started working on the should have requirements and putting everything together.The individual bit for the project were completed by the end of march and then during april we started testing and putting everything together and making sure that nothing  in terms of features and functionality is left out. Shehroze was responsible for handling the grahical elements of the project and creating various controllers and model classes required for the project. Tom was responsible for integrating libraries for compiling and uploading the code on the engduino. We were havong consistent meetings discussing any issues and taking things further from that point. Listed below is the the complete list of the work packages completed between the two team memebers.</p>


			<h2>Work Packages</h2>
            <ul>
                <p>Shehroze completed the following work packages:</p>
                <ul>
                    <li>Creating and designing the main User interface</li>
                    <li>Creating the classes to connect the modules together</li>
                    <li>Creating different controller classes including the Sketch Controller, Module Controller, Module Connection controller, Code View Controller etc</li>
                    <li>Creating model classes to represent objects such as sketch, module, different modules classes that extend the main module class</li>
                    <li>Designing and creating graphics for representing different modules</li>
                    <li>Creating different classes involved in creating connection between different modules</li>
                    <li>Creating utilities such as opening and saving of sketch,  creating new sketch, verifying code</li>
                    <li>Creating classes to generate XML file for sketches and to parse XML and generate sketches</li>
                    <li>Programming the main controller for the graphical user interface</li>
                    <li>Integrating Dialogs which are used for displaying errors and messages to the user</li>
                    
                    <li>Testing functionality on Mac</li>
                </ul>
                
                <br/>
             
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
