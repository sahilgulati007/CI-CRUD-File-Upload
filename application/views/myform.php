<html>
 
   <head> 
      <title>My Form</title> 
   </head>
	
   <body>
      
         <?php echo validation_errors(); ?>  
         <?php echo form_open('form'); ?>  
         <h5>Name</h5> 
         <input type = "text" name = "name" value = "" size = "50" />  
         <div><input type = "submit" value = "Submit" /></div>  
       <?php echo form_close(); ?>
   </body>
	
</html>