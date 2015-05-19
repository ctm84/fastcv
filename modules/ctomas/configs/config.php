<?php
class Config
{
	static function getConfig()
	{
		require_once('../modules/ctomas/configs/configDB.php');
		require_once('../modules/ctomas/configs/configGeneral.php'); 

		return array_merge(
			ConfigDB::getConfigDB(),
			ConfigGeneral::getConfigGeneral()
		);
	}
}