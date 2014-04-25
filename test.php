<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>COMP2014 EngduinoIDE</title>
<link rel = "stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
<link rel = "stylesheet" type="text/css" href="bootstrap/css/main_style.css" />
<script src="http://use.edgefonts.net/lato.js"></script>


</head>

<body>
	<?php include("includes/header.php") ; ?>
    
    <div class = "main_container">
    	<p style = "font-size:20px; margin-top:30px;" align="center">Main Project Requirements</p>
        
        
        <table align="center" width="960px; " border="1px" bordercolor="#00FF33" class = "main_requirements_table">
        	
            <tr><td align="center" width="5%">ID</td>
            	<td align="center" width = "55%">Detail</td>
                <td align="center" width = "25%">Functional / Non Functional</td>
                <td align="center" width = "15%">Priority</td>
            </tr>
            
            <?php
			
				$details = array("The system shall be compatible with Windows, Mac OS X and Linux
","The system shall support the Raspberry Pi
","The system shall have a drag and drop interface suitable for use in schools
","The system shall make consistent use of colours to differentiate between types of programming element
","The system shall graphically represent different programming elements such as inputs, outputs and flow control
","The system shall be able to cross-compile the code to Atmel AVR machine code for the Engduino processor to run
","The system shall be able to upload the machine code on to an Engduino
","The system shall provide a view of the textual code for the use of students transitioning from graphical programming languages
","The system shall have line numbers in the code view to make debugging easier
","The system shall allow the use of the different sensors on the Engduino in the code
","The system shall allow the use of the different outputs on the Engduino in the code
","The system shall allow the manipulation of flow control when programming
","The system shall provide a simulator on which code can be tested before uploading to the Engduino
","The system shall have a very simple and easy to use UI
","The system shall provide interactive help if the user has problem using the software
","The system shall allow users to save sketches/programs
","The system shall allow the user to save sketches as modules which can then be used in other sketches
","The system shall be able to print out the code so that teachers can use it for marking
","The system shall be able to save a code sketch to a file
","The system shall be able to load previously saved sketches from a file
","The system shall be able to load multiple sketches at the same time
","The system shall allow an account to be created so that sketches can be saved online
","The system shall allow logging into an online account
","The system shall allow sketches to be saved to an online account
","The system shall allow sketches to be loaded from an online account
","The system shall provide a hierarchical online account system to allow different groups of users so that teachers can look at the sketches of students
","The system shall provide allow the use of Arduino shields connected to the Engduino to be used in the code
","The system shall allow the use of .NET Gadgeteer modules connected to the Engduino to be used in the code","The system shall allow the Engduino to communicate across a network in order to retrieve and store data") ;
			
				$functional_details = array("Non-functional
	","Non-functional
	","Functional
	","Non-functional
	","Functional
	","Functional
	","Functional
	","Functional
	","Functional
	","Functional
	","Functional
	","Functional
	","Functional
	","Non-functional
	","Functional
	","Functional
	","Functional
	","Functional
	","Functional
	","Functional
	","Functional
	","Functional
	","Functional
	","Functional
	","Functional
	","Functional
	","Functional
	","Functional
	","Functional") ;
	
				$priority_list = array("Must Have
","Should Have
","Must Have
","Must Have
","Must Have
","Must Have
","Must Have
","Should Have
","Should Have
","Must Have
","Must Have
","Must Have
","Could Have
","Must Have
","Should Have
","Must Have
","Should Have
","Should Have
","Must Have
","Must Have
","Could Have
","Could Have
","Could Have
","Could Have
","Could Have
","Would Have
","Should Have
","Should Have
","Could Have") ;
			
			for($i = 0; $i < count($details); $i++){
			
				$number = $i + 1 ;
				echo '<tr><td align="center" width="5%">' . $number . '</td>
            	<td align="left" width = "55%">'. $details[$i].'</td>
                <td align="center" width = "25%">'. $functional_details[$i].' </td>
                <td align="center" width = "15%">'. $priority_list[$i].'</td>
            	</tr>' ;
			}
			
			?>
            
            
            
        </table>
         
	</div>

</body>
</html>
