<?php
function renderLayout($layout, $content)
{
    ob_start();
	require_once("../modules/ctomas/views/layouts/".$layout);
	$response = ob_get_contents();
	ob_end_clean();
	return $response;
}