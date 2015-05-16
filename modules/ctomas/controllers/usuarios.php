<?php
function ejecutarController($request)
{
	$action= $request[2];
	return $action(); 
}

//actions
//************************//
function index($request)
{
    $request[2] = 'select';
	return select($request);
}

function select()
{
    
}

function delete()
{
	
}

function update()
{
	
} 