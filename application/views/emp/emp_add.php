<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Students Example</title> 
   </head> 
   <body>
   	<?php 
   		echo form_open('Emp_Controller/add_emp');
   		echo form_label('Name');
   		echo form_input(array('id'=>'emp_name','name'=>'emp_name'));
   		echo "<br/>";
   		echo form_label('Address');
   		echo form_input(array('id'=>'emp_address','name'=>'emp_address'));
   		echo "<br/>";
   		echo form_label('Mobile No.');
   		echo form_input(array('id'=>'emp_mob','name'=>'emp_mob'));
   		echo "<br/>";
   		echo form_label('Email');
   		echo form_input(array('id'=>'emp_email','name'=>'emp_email'));
   		echo "<br/>";
   		echo form_submit(array('id'=>'add_emp','value'=>'Add Employee'));
   		echo form_close();
   	?>
   </body>
</html>