<?php 
// Iclude neccessary files
	$title = "EmpolyeesActivities";
	include_once('./controllers/common.php');
	include_once('./components/head.php');
	include_once('./models/employee.php');
	//Database::connect('epiz_22918393_school', 'epiz_22918393', 'ynaRH6xA7v');
	Database::connect('employeesactivitytracking', 'islam', '1234');
?>

<!-- !PAGE CONTENT! -->

<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <div class="w3-container" style="margin-top:100px" id="showcase">
    <h1 class="w3-jumbo"><b>Employees Activity Tracking</b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>All Activities</b></h1>
    <hr style="width:300px;border:5px solid red;float:left;" class="w3-round">
  </div>
  <!-- Table -->
  <h4>Filter By</h4>
  
  <button onclick="location.href = 'Actfilter.php';" id="myButton1" class="button" >Activities</button>
  <button onclick="location.href = 'Empfilter.php';" id="myButton2" class="button" >Employees</button>
  <button onclick="location.href = 'Taskfilter.php';" id="myButton3" class="button" >Tasks</button>
  <button onclick="location.href = 'Timefilter.php';" id="myButton4" class="button" >Time</button>
  <button onclick="location.href = 'Statusfilter.php';" id="myButton3" class="button" >Status</button>
  


  


  <section>
  <!--for demo wrap-->
    <h1></h1>
    <div class="tbl-header">
      <table cellpadding="0" cellspacing="0" border="0">
        <thead>
          <tr>
            <th>Code</th>
            <th>Title</th>
            <th>Task Title</th>
            <th>Employee Name</th>
            <th>Customer Name</th>
            <th>Starting Time</th>
            <th>Ending Time</th>
            <th>Status</th>
          </tr>
        </thead>
      </table>
    </div>
    <div class="tbl-content">
      <table id="main" cellpadding="0" cellspacing="0" border="0">
        <tbody>
          <?php	
		        $Employees = Employee::DisplayAll();
		        foreach ($Employees as $Employee) {
	         ?>
		        <tr>
    			   <td><?=$Employee->Code?></td>
    			   <td><?=$Employee->Title?></td>
			       <td><?=$Employee->Task_Title?></td>
    			   <td><?=$Employee->Employee_Name?></td>
			       <td><?=$Employee->Customer_Name?></td>
    			   <td><?=$Employee->Starting_time?></td>
			       <td><?=$Employee->Ending_time?></td>
    			   <td><?=$Employee->Status?></td>
    		    </tr>
    		  <?php } 
          ?>
    	  </tbody>
      </table>
    </div>
  </section>
  
  

<!-- End page content -->
  <?php include_once('./components/tail.php') ?>

</div>


<script>
  selectedRow();
</script>


</body>
</html>