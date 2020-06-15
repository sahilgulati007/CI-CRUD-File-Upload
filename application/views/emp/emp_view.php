<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Employee View</title> 
   </head> 
   <body> 
         <h3>Employee view</h3> 
         <a href = "<?php echo base_url(); ?>emp/add_emp_view">Add</a>
      
      <table border = "1"> 
         <?php 
            $i = 1; 
            echo "<tr>"; 
            echo "<td>Emp ID</td>"; 
            echo "<td>Name</td>"; 
            echo "<td>Address</td>"; 
            echo "<td>Mobile no.</td>"; 
            echo "<td>Email</td>"; 
            echo "<td>Edit</td>";
            echo "<td>Delete</td>";
            echo "<tr>"; 
            
            foreach($records as $r) { 
               echo "<tr>"; 
               echo "<td>".$r->emp_id."</td>"; 
               echo "<td>".$r->emp_name."</td>"; 
               echo "<td>".$r->emp_address."</td>";
               echo "<td>".$r->emp_mob."</td>";
               echo "<td>".$r->emp_email."</td>"; 
               echo "<td><a href = '".base_url()."emp/edit_emp/".$r->emp_id."'>Edit</a></td>"; 
               echo "<td><a href = '".base_url()."emp/delete_emp/".$r->emp_id."'>Delete</a></td>"; 
               echo "<tr>"; 
            } 
         ?>
      </table> 
   </body>
</html>