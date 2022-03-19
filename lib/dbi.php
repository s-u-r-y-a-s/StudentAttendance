<?php
class dbi
{
	function dbi()
	{
		$con=mysql_connect('localhost','root','');
		mysql_select_db("att_percentage_db");
		if(!$con)
		{
			$this->msg='Could not connect';
		}
	}
}
$db=new dbi();
?>

