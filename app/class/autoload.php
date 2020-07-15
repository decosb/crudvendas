<?php

// $dir = dirname(__FILE__);
// echo $dir;

//autoload
$autoload = spl_autoload_register(function($classes)
{
	require "$classes.class.php"; 
});

?>