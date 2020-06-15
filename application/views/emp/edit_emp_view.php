<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Emap Example</title> 
   </head> 
   <body>
   	<?php 
   		echo form_open('Emp_Controller/update_emp');
         echo form_hidden('emp_id',$records[0]->emp_id);
   		echo form_label('Name');
   		echo form_input(array('id'=>'emp_name','name'=>'emp_name', 'value'=>$records[0]->emp_name));
   		echo "<br/>";
   		echo form_label('Address');
   		echo form_input(array('id'=>'emp_address','name'=>'emp_address', 'value'=>$records[0]->emp_address));
   		echo "<br/>";
   		echo form_label('Mobile No.');
   		echo form_input(array('id'=>'emp_mob','name'=>'emp_mob', 'value'=>$records[0]->emp_mob));
   		echo "<br/>";
   		echo form_label('Email');
   		echo form_input(array('id'=>'emp_email','name'=>'emp_email', 'value'=>$records[0]->emp_email));
   		echo "<br/>";
   		echo form_submit(array('id'=>'add_emp','value'=>'Edit Employee'));
   		echo form_close();
   	?>
   </body>
</html>