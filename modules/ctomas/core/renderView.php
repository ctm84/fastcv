<?php
function renderView($vista)
{
    ob_start();
	require_once("../modules/ctomas/views/".$vista.".html.php");
	$content = ob_get_contents();
	ob_end_clean();
	return $content;
}
      
     