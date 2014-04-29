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
                <p>Our development was clearly divided and planned in order to provide achievable targets for completion of work packages so that:</p>
				<ul>
				    <li>By the 8th February, work was complete on tying in the compiler for the C++ code to be compiled and work on styling the UI and making it properly scalable was also completed.</li>
                	<li>By the 14th February, more UI styling was complete, as were the graphics for each module component and the code used to upload a hex file to the Engduino was completed.</li>
                	<li>By the 28th February, work on the integration of the GCC compiler was completed, in order to link together the C and C++ code both from Arduino/Engduino libraries and the user created sketch. The sketch and module controller classes were also completed as well as half of the module classes.</li>
                	<li>By the 15th March, work was completed on the connection of avr-objcopy to the IDE, so that a compiled sketch can be converted into an uploadable hex file. The graphical connection from module to module was also implemented using a bezier curve.</l>
                	<li>By the 31st March, work was completed on structuring the underlying C++ code and how it is formed as blocks are added to the tree. Extra modules were also created to represent boolean logic operators.</li>
                	<li>By the 14th April, the loading, saving and printing classes were completed, as was the custom module code.</li>

                    
                    
                    
                </ul>
			

		</div>
		
        

	</div>

</div>

<div id="meetings" class="section features" data-magellan-destination="technicals" style = "margin-top:50px;">

	<div class="row hi-icon-wrap hi-icon-effect-3 hi-icon-effect-3b">

		<div class="large-12 columns">

			<h2>Meetings</h2>

				<p>Over the course of the term, Tom organised meetings with our client Professor Stephen Hailes, to ensure that we got regular feedback from him regarding each stage of development:</p>
			    <ul>
			        <li>January 17th - We discussed implementation details with regards to flow control modules in the software, technical details around hardware that was to be ordered.</li>
			        <li>January 27th - We received feedback on the user interface prototype from Steve, discussed possible alternatives to layout of Arduino code.</li>
			        <li>February 13th - We discussed potential exercises for use with the IDE, organised a second meeting with school teachers in Camden to get feedback from them regarding the user interface.</li>
                    <li>February 24th - Following on from our meeting with the school teachers, we decided that use of an SD card reader would provide a good way of logging data using the Engduino, so requested that we could use an SD card library developed by the Engduino team (which was then unfortunately sent to us too late for us to use in the project).</li>
                    <li>March 26th - We discussed how we intended to join each block's code together and the typing of the links between modules.</li>
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
            <p>Because there were only two people working on the project, this made the management much easier among the group members and we divided the work fairly from the very start. We set deadlines in terms of the requirements we were suppose to complete and were getting feedback on the work from the client. Although the work burden was increased because of the number of people in the team, good management allowed us to finish the project in time along with the reports, presentations and other stuff. Both of us decided to complete the must have set of requirements by the end of reading week. Although we were a little late on schedule during that time period but after that we got on track. All the must have requirements were completed following the end of reading week and then we started working on the should have requirements and putting everything together.The individual bit for the project were completed by the end of march and then during april we started testing and putting everything together and making sure that nothing  in terms of features and functionality is left out. Shehroze was responsible for handling the graphical elements of the project and creating various controllers and model classes required for the project. Tom was responsible for integrating libraries for compiling and uploading the code on the Engduino. We were having consistent meetings discussing any issues and taking things further from that point. Listed below is the the complete list of the work packages completed between the two team memebers.</p>


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
