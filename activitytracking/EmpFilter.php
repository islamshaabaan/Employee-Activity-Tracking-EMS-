<?php
	include_once('./controllers/common.php');
	include_once('./components/head.php');
	include_once('./models/employee.php');
	//Database::connect('epiz_22918393_school', 'epiz_22918393', 'ynaRH6xA7v');
	
	include_once('./models/database.php');
	Database::connect('employeesactivitytracking', 'islam', '1234');


?>

<section> 
  <h1 center>Employees</h1>
    <div class="tbl-header" style="margin-left:350px ">
      <table cellpadding="0" cellspacing="0" border="0" >
        <thead >
          <tr>
            <th >Employee Code</th>
            <th>Employee Title</th>
            
          </tr>
        </thead>
      </table>
    </div>
    <div class="tbl-content" style="margin-left:350px ">
      <table id="main" cellpadding="0" cellspacing="0" border="0">
        <tbody>
          	<?php	
          		//$Employees = Database::FilterBy1();
		    	$Employees = Employee::FilterByEmployees();
		    	foreach ($Employees as $Employee) {
	      	?>
		        <tr>
    			   <td><?=$Employee->Code?></td>
    			   <td><?=$Employee->Employee_Name?></td>
			       
    		    </tr>
    		  	<?php } 
          		?>
    	</tbody>
      </table>
    </div>
  </section>
  <button onclick="location.href = 'employeesactivity_tracking.php';" id="myButton" class="button"  style="margin-left:350px ">BackToActivities</button>
  <?php include_once('./components/tail.php') ?>
