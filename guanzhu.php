<?php
$name = $_POST["name"];
$con = mysql_connect("127.0.0.1", "root", "huang123");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	
	mysql_select_db("lz_wcj", $con);
	mysql_query("set names utf8");
	
	$ip=$_SERVER["REMOTE_ADDR"];
	echo $ip;
	
	
	$sql="SELECT COUNT(*) AS count FROM jiankong WHERE ip='".$ip."'"; 
	$result=mysql_fetch_array(mysql_query($sql)); 
	
	$count=$result['count'];
	
	/*$sql=mysql_query("select * from jiankong  WHERE ip = '".$ip."'");
	
	$result=mysql_fetch_array($sql); 
	
	$count=count($result);*/
	
	echo "--".$count;
	if($count==0){
		$mes=mysql_query("insert into jiankong(name,shuliang,ip)values('".$name."','1','".$ip."')");
	}
	
	if($mes){
		echo "yes";
	}else{
		echo "no";
	}



?>
