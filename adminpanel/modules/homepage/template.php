<?php
	require '../../include/core.inc.php';
	require '../../include/loggedin.php';
	require '../../include/dbhelper.inc.php';	

?>
<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en">

<![endif]--><!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang="en">

<![endif]--><!--[if IE 8]>
<html class="no-js lt-ie9" lang="en">

<![endif]--><!--[if gt IE 8]>
<!-->
<html class="no-js" lang="en">

<!--<![endif]-->
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title><?php echo $_SESSION['userLogin'] ?> - Template</title>
<!-- Metadata -->
<meta content="" name="description" />
<meta content="" name="keywords" />
<meta content="" name="author" />
<?php require '../../include/foundation.php'; ?>
</head>
<body>

<?php require '../../include/header.php'; ?>
<div class="row content">
<div class="large-12 columns">
	<h4>Manage Your Template</h4>
	<div class="section-container tabs" data-section>
		<section class="section">
			<p class="title"><a href="#panel1">Section</a></p>
					<div class="content">
					</div>
		</section>
	</div>
</div>		
</div>
<?php require '../../include/footer.php'; ?>

</body>

</html>
<![endif]-->