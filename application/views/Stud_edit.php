<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Students Example</title> 
   </head> 
	
   <body> 
     <!--  <form method = "" action = ""> -->
         <?php 
            echo form_open('Stud_controller/update_student'); 
            echo form_hidden('old_roll_no',$old_roll_no); 
            echo form_label('Roll No.'); 
            echo form_input(array('id'=>'roll_no','name'=>'roll_no','value'=>$records[0]->roll_no)); 
            echo ""; 

            echo form_label('Name'); 
            echo form_input(array('id'=>'stud_name','name'=>'stud_name','value'=>$records[0]->stud_name)); 
            echo ""; 

            echo form_submit(array('id'=>'submit','value'=>'Edit')); 
            echo form_close();
         ?> 
			
      <!-- </form>  -->
   </body>