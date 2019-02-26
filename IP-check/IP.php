<?php
$remote=$_SERVER['REMOTE_ADDR'];
#$forward= $_SERVER['HTTP_FORWARDED_FOR'];
#$client = $_SERVER['HTTP_CLIENT_IP'];

if(!empty($client))
{
	$ip=client;
}

echo"Your IP is :";
echo $remote;

#echo "<br>Forward address<br>" .$forward;
#echo "Client address" .$ip;


if ($remote=='77.31.250.240')
{
	#echo "<br> You are from Local Network<br>";
        header('Location: http://mkcloes:2020/OES/login/eventSelection');
}
else 
{ 
	header('Location: ../IP-check/ErrorPage.html');
}