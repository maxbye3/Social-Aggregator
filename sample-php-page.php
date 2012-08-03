<?php 
session_start(); //start session, later display the javascript value stored in session. 
?>  

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
    <html xmlns="http://www.w3.org/1999/xhtml">  
    <head>  
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
    <title>Sample PHP Page</title>  
    </head>  
    
    <body>  
    
    This is a PHP Page. The javascript value is: <?php echo $_SESSION['spotjsvalue'];?>  <br />
	This is a PHP Page. The javascript value is: <?php echo $_SESSION['instajsvalue'];?>  <br />
    This is a PHP Page. The javascript value is: <?php echo $_SESSION['flickrjsvalue'];?>  <br />
    This is a PHP Page. The javascript value is: <?php echo $_SESSION['twitterjsvalue'];?>  <br />
    This is a PHP Page. The javascript value is: <?php echo $_SESSION['youtubejsvalue'];?>  <br />
    
    </body>  
    </html> 
    
