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

				<ul>
                	<li><a target="_blank" href = "http://docs.oracle.com/javafx/2/drag_drop/jfxpub-drag_drop.htm">http://docs.oracle.com/javafx/2/drag_drop/jfxpub-drag_drop.htm</a></li>
                    <li> <a target="_blank" href = "http://http//code.makery.ch/java/javafx-2-tutorial-part5/">http://http//code.makery.ch/java/javafx-2-tutorial-part5/</a></li>
                    
                    
                    <li><a target="_blank" href = "http://code.makery.ch/blog/javafx-2-dialogs/">http://code.makery.ch/blog/javafx-2-dialogs/</a></li>
                </ul>
			

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




<div id="design_patterns"  class="section contact gray" data-magellan-destination="design_patterns">

	

    

    <div class="row">

		<div class="large-12 columns">

			<h2>Design Patterns</h2>

			<p>The design pattern we choose for our project are Singleton and MVP design patterns. Model View Presenter/Controller is the most widely used design pattern for creating GUI applications. In our application there is one main view which is the main user interface and there are different controllers managing and controlling the graphical user interface which are listed below <br/>
            
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