<?php 
	session_start(); 
	if (!isset($_SESSION['logged_in'])) {
		header('location:index.php');
	}

	include 'inc/header.php';
?>

<script type="text/javascript">
	function autoload() {
		$('#ruslet').load("inc/1t10result.php").show();
	}
	setInterval('autoload()',1000);
</script>

<div class="trianingtitlel">
	<h1>United and Ignited | Prime Bank Limited</h1>
</div>

<div id="ruslet"></div>

<div class="orgfls">
	<div class="facilitated_by">
		<h2>Facilitated by:</h2>
		<img src="img/logo/flslogo.png">
	</div>
		
	<div class="organized_by">
		<h2>Organized by:</h2>
		<img src="img/logo/flslogo.png">
	</div>
		

</div>

<?php include 'inc/footer.php'; ?>