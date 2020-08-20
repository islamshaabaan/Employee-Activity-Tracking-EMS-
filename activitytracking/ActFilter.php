<?php
	include_once('./controllers/common.php');
	include_once('./components/head.php');
	include_once('./models/employee.php');
	//Database::connect('epiz_22918393_school', 'epiz_22918393', 'ynaRH6xA7v');
	
	include_once('./models/database.php');
	Database::connect('employeesactivitytracking', 'islam', '1234');


?>
  <!--  Table Displaying the Filtered Data based on Activity -->
<section> 
    <div class="tbl-header" style="margin-left:350px ">
      <table cellpadding="0" cellspacing="0" border="0">
        <thead>
          <tr>
            <th>Activity Code</th>
            <th>Activity Title</th>
            
          </tr>
        </thead>
      </table>
    </div>
    <div class="tbl-content" style="margin-left:350px ">
      <table id="main" cellpadding="0" cellspacing="0" border="0">
        <tbody>
          	<?php	
          		//$Employees = Database::FilterBy1();
		    	$Employees = Employee::FilterByActivity();
		    	foreach ($Employees as $Employee) {
	      	?>
		        <tr>
    			   <td><?=$Employee->Code?></td>
    			   <td><?=$Employee->Title?></td>
			       
    		    </tr>
    		  	<?php } 
          		?>
    	</tbody>
      </table>
    </div>
  </section>
  <!--  Button to back Activities Tracking -->
  <button onclick="location.href = 'employeesactivity_tracking.php';" id="myButton" class="button" style="margin-left:350px ">BackToActivities</button>
  <?php include_once('./components/tail.php') ?>



