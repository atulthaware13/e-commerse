<?php
/*
	Author:Atul Thaware
	Created On:06-05-2018
	Purpose:Code to Insert Data
	Updated On:
*/
//Purpose: Validation Checking
function format_str($pstr)

{
	$rstr = trim(strip_tags(addslashes($pstr)));
	return $rstr;
}
/*
	Author:Atul Thaware
	Created On:10-05-2018
	Purpose:Code For Login User 
	Updated On:
*/
//Purpose: Login Checking
function login_user($table,$data)
{   
    $cols=array_keys($data);
	$arr=array_values($data);
	$count =count($arr);
	$rtr="";
	for($i=0;$i<$count;$i++){
		$rtr.= $cols[$i]."="."'".$arr[$i]."'"." and " ;
	}
	$data1=rtrim($rtr,' and ');
	$sql_qry="select * from $table where $data1";
	$res=mysql_query($sql_qry);
	$num_row = mysql_num_rows($res);
	if($num_row==1)
	{
		return $res;
	}
	else
	{
		$err_msg="User not Register";
		return $err_msg;
	}	
}
function insert_query($table,$data)
{   
    $cols=array_keys($data);
    $cols=implode(",",$cols);
	$arr=array_values($data);
	$count =count($arr);
	$rtr="";
	for($i=0;$i<=$count-1;$i++){
		$rtr.="'"."$arr[$i]"."'".",";
	}
	$data1=rtrim($rtr,',');
	$sql_qry="insert into  $table($cols) values($data1)";
	$res=mysql_query($sql_qry);
	if($res)
	{
		return true;
	}
	else
	{
		return false;
	}	
}
/*
	Author:Atul Thaware
	Created On:07-05-2018
	Purpose:Code to For Update Functionality Data
	Updated On:
*/
function update_query($table,$data,$userid,$uid)
{   

    $cols=array_keys($data);
	$arr=array_values($data);
	$count =count($arr);
	$rtr="";
    $j=0;
	for($i=0;$i<=$count-1;$i++){
         
		$rtr=$rtr."$cols[$j]"."="."'"."$arr[$i]"."'".",";
        $j++;
	}
	 
	 $data1=rtrim($rtr,',');
	 $update_qry ="update $table set $data1 where $userid=
	'$uid'";
	$res=mysql_query($update_qry);
	if($res)
	{
		return true;
	}
	else
	{
		return false;
	}	
}
/*
	Author:Atul Thaware
	Created On:04-05-2018
	Purpose:Code for checking duplicate Existence
	Updated On:
*/
function check_duplicate($table,$column,$value)
{   
	$sql_qry="select * from $table where $column='$value'";
	$res=mysql_query($sql_qry);
	$count=mysql_num_rows($res);
	if($count>0)
	{
		return true;
	}
	else
	{
		return false;
	}	
}
/*
	Author:Atul Thaware
	Created On:12-05-2018
	Purpose:Code for checking duplicate Existence
	Updated On:
*/
function select_exist($table,$col_id,$value)
{         
	$sql_qry="select * from $table where $col_id='$value'";
	//$sql_qry="select * from $table where $column='$value'";
	$res=mysql_query($sql_qry);
	$count=mysql_num_rows($res);
	if($count>0)
	{
		return $res;
	}
	else
	{
		$err_msg="No Record Found";
		return $err_msg;
	}	
}
/*
	Created On:10-05-2018
	Purpose:Code for select query Descending order functionality with Limit Value
	Updated On:
*/
function select_query($table,$uid,$n)
{   
	$sql_desc ="select * from $table order by $uid desc limit $n ";
    $res = mysql_query($sql_desc);
    $count = mysql_num_rows($res); 
    if($count>0)
	{
		
		return $res;
	}
	else
	{
		$msg="No Records Found";
		return $msg;
	}	
}
/*
	Created On:10-05-2018
	Purpose:Code for select query Descending order functionality with Limit Value
	Updated On:
*/
function select_asc($table,$uid)
{   
	$sql_desc ="select * from $table order by $uid asc limit 10";
    $res = mysql_query($sql_desc);
    $count = mysql_num_rows($res); 
    if($count>0)
	{
		
		return $res;
	}
	else
	{
		$msg="No Records Found";
		return $msg;
	}	
}
/*
	Created On:10-05-2018
	Purpose:Code for select query Descending order functionality with Limit Value
	Updated On:
*/
function select_seller($table,$col,$n)
{   
	$sql_desc ="select * from $table where $col=1 limit $n";
    $res = mysql_query($sql_desc);
    $count = mysql_num_rows($res); 
    if($count>0)
	{
		
		return $res;
	}
	else
	{
		$msg="No Records Found";
		return $msg;
	}	
}
/*
	Created On:10-05-2018
	Purpose:Code for select query Descending order functionality with Limit Value
	Updated On:
*/
function select_all($table)
{   
	$sql_desc ="select * from $table";
    $res = mysql_query($sql_desc);
    $count = mysql_num_rows($res); 
    if($count>0)
	{
		
		return $res;
	}
	else
	{
		$msg="No Records Found";
		return $msg;
	}	
}

/*
	Created On:05-05-2018
	Purpose:Code for Delete functionality
	Updated On:
*/
function delete_query($table,$col,$uid)
{   
	$sql_del ="delete from $table where $col='$uid'";
    $res=mysql_query($sql_del);
    if($res)
	{
		return true;
	}
	else
	{
		return false;
	}	
}
function product_desc()
{
	
}


?>