<?php
	require_once('pages/header.php');
	
	$link = $pageTitle -> getPageLink();
	include('pages/'.$link.'.php');
	
	require_once('pages/footer.php');
?>