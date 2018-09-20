<?php


	$tags = "Performance, RAM, H.D, Good";

	$items = array("red","blue","orange","black");

	$cmp = explode(", ", $tags);

	//print_r($cmp);

	$rcmp = implode(" & ", $cmp);

	//echo $rcmp;

	//sort($items);

	rsort($items);

	print_r($items);


  ?>