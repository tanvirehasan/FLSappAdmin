<?php


	include 'conn.php';
    include 'fun.php'; 


	$sql = "SELECT AVG(current) as 'sumcurrent', AVG(expected) as 'sumexpected' FROM onetoten ";
	$result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_array($result);
	$rowcount = mysqli_num_rows($result);

	$avgcurrent = $data['sumcurrent'];
	$avgexpected = $data['sumexpected'];
	$lastresult= $avgexpected - $avgcurrent;
?>

<div id="identifier" class="onetoten">

	<div class="avgr">
		<h2><?php echo number_format($avgcurrent, 2, '.', ''); ?></h2>
		<p>AVG score of current team work</p>
	</div>

	<div class="avgr" style="background-color:#FFBF00;" >
		<h2><?php echo number_format($avgexpected, 2, '.', ''); ?></h2>
		<p>AVG score of expected team work</p>
	</div>

	<div class="avgr"style="background-color: #04B486;" >
		<h2><?php echo number_format($lastresult, 2, '.', ''); ?></h2>
		<p>AVG gap in team work</p>		
	</div>


<?php
	/* Delete all rows from the FRUIT table */
	$del = $con->prepare("SELECT * FROM onetoten");
	$del->execute();
	$count = $del->rowCount();
?>


	<div class="avgr"style="background-color:#A5DF00;" >
		<h2><?php echo $count;?></h2>
		<p>Total Submited</p>		
	</div>


</div>




