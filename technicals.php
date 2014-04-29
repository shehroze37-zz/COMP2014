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

			<h2>Referenced materials cited</h2>
				
                <p>The sources listed below were used because most of them provide open source Utility such as Creating and handling dialogs ...</p>
				<ul>
                	<li><a target="_blank" href = "http://docs.oracle.com/javafx/2/drag_drop/jfxpub-drag_drop.htm">http://docs.oracle.com/javafx/2/drag_drop/jfxpub-drag_drop.htm</a></li>
                    <li> <a target="_blank" href = "http://http//code.makery.ch/java/javafx-2-tutorial-part5/">http://http//code.makery.ch/java/javafx-2-tutorial-part5/</a></li>
                    
                    
                    <li><a target="_blank" href = "http://code.makery.ch/blog/javafx-2-dialogs/">http://code.makery.ch/blog/javafx-2-dialogs/</a></li>
                </ul>
			

		</div>
		
        

	</div>

</div>

<div id="technicals" class="section features" data-magellan-destination="technicals" style = "margin-top:50px;">

	<div class="row hi-icon-wrap hi-icon-effect-3 hi-icon-effect-3b">

		<div align="center" class="large-12 columns">

			<h2>Examples / Trials Made</h2>
				
                <p>We made some trials in order to understand how various graohical user elements behave in javafx. Below are the trials slong with their details</p>
                
                <p>The first trial we did was to understand the concept of stage, action handlers for buttons, Main GUI document controller in JavaFX and to test how the graphical elements are build and used in the java application. Below is the CustomControl window which has a text box and a button and when the button is clicked the text of the text box is printed.</p>
                
                <img src="graphics/Screen Shot 2014-04-27 at 23.33.15.png">
                <br/>
                
                <p>The most important part of the IDE is the drag and drop environment which makes easier for children in schools to use the IDE and program the engduino board and this was one of the main things we tested in our prototype for COMP 2013. We made a trail for this and were able to demonstrate that drag and drop is possible using javafx and we can go ahead with the project. </p>
                
                <img  src="graphics/Screen Shot 2014-04-27 at 23.33.31.png">
                
                <p>This trail led us in developing the first drag and drop prototype for the IDE<br/></p>
                
                 <img src="graphics/prototype.png" >
			
            
            	<p><br/>The third trial was another very important one in the entire application as how will different modules be connected with each other. This was suppose to be very flexible as users would drag the module component across the sketch so the connecting element was suppose to move with it in a really elegant manner. First we decided to use third party API for this but there was no proper API which could meet the specific needs of our IDE so we decided to build our own classes for it. Below is the trial which represents a bezier curve which acts as a wire in our application to connect teo modules together. As the circle are dragged the curve changes it structure based on the new coordinates and still holds the circles together. This was extended in our application as connection wires are dragged and then connected with modules which then gives two modules the same behaviour as demonstrated below. </p>
                
                <img src="graphics/Screen Shot 2014-04-27 at 23.32.51.png">
            
            <hr>

		</div>
		
        

	</div>

</div>

<div id="diagrams" class="section product gray" data-magellan-destination="diagrams">

	<div class="row">

		<div class="large-12 columns">

			<h2>Architectural Diagrams</h2>

			
			

		</div>

	</div>

</div>

<div id="hci1" class="section product gray" data-magellan-destination="diagrams">

	<div class="row">

		<div class="large-12 columns">

			<h2>Addressing User Needs</h2>
            <p>To ensure we addressed the needs of the users of the software, who would be school pupils from ages 9-14, we conducted interviews with school teachers from both primary and secondary schools. This gave us an insight into how they would expect our software to be used within the two different scenarios. We also conducted a competitor analysis using Scratch, a drag and drop IDE designed for a similar age group, and Choregraphe, also a drag and drop IDE but primarily aimed for use within academia.</p>
            <p>We identified the needs of the users from our research and found that providing visual feedback to users, whilst they are constructing the program would be important. Also consistent use of colour to represent different types of drag and drop block, would provide good affordance to those new to programming. We also realised that both setting up and starting up the software in schools should be as hassle free as possible, so that students can just use the software rather than getting teachers to come and fix it, therefore we decided on using automatic serial port selection to ensure that the Engduino was detected automatically, and also provided a bootable live cd for schools where installation could be problematic.</p>
            <p>From the needs we identified we then constructed multiple paper prototypes of the user interface, from which we chose the best features and made into a prototype using a JavaFX UI. We then went back to the school teachers we had previously interviewed and gathered feedback on the prototype.</p>



		</div>

	</div>

</div>




<div id="design_patterns"  class="section contact gray" data-magellan-destination="design_patterns">

	

    

    <div class="row">

		<div class="large-12 columns">

			<h2>Design Patterns</h2>

			<p>The design pattern we choose for our project are Singleton and MVP design patterns. Model View Presenter/Controller is the most widely used design pattern for creating GUI applications. In our application there is one main view which is the main user interface, which is made up of number of different components that work in coordination with each other and there are different controllers managing and controlling the graphical user interface which are listed below <br/>
            
            <ul style = "margin-left:20px;">
            
            	<li>Sketch Controller</li>
                <li>Module Controller</li>
                <li>Module Connection Controller</li>
                <li>Code View Controller</li>
                <li>Main GUI Controller</li>
                 <li>Utility Controller</li>
            </ul>
            These controllers are responsible for creating and handling multiple sketches, adding multiple modules in a particular sketch, creating connection between various modules , generating and parsing of Module tree for code generation and for handling the graphical components of the user interface such as creating tab panes, adding tabs etc ..
            
            
            <br/><br/>The model classes represent objects such as sketches, modules etc these model classes are represent to hold the object values. Our MVP implementation is passive because the model are directly controlled by the controller classes. 
            
            <br/><br/>
            
            Many of our utility functions were only to be created once when the program starts therefore we decided to use singleton design pattern for controlling these Utility classes. There is one main Utility controller which is responsible for creating and handling these Utilities. Following is the list of Utilities used in out application. 
            
            <br/><br/>
            
            
            <ul style = "margin-left:20px;">
            
            	<li>New Sketch Utility</li>
                <li>Save Sketch Utility</li>
                <li>Generate Code Utiltiy (Verify Code)</li>
                <li>Upload Code Utility</li>
                <li>Open Sketch Utility</li>
                <li>Print Code Utility</li>


   			 </ul>
             
             Various Event handler and Menu Items are associated with these utilities.
			</p>

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