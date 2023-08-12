<? 
include ('../admin/db_settings.php');
$table="aforizm";

mysql_connect($hostname, $user, $pass) OR DIE (mysql_error());
mysql_select_db($dbname) or die ("Временно отсутствует связь с базой данных");

$query="SELECT * FROM $table WHERE 1";
$res=mysql_query ($query) or die (mysql_error());
$n=mysql_num_rows($res);


$n1=rand(1,$n);
$n2=rand(2,$n);
$n3=rand(3,$n);

$q1="SELECT * FROM $table WHERE id=$n1";
$q2="SELECT * FROM $table WHERE id=$n2";
$q3="SELECT * FROM $table WHERE id=$n3";

$r1=mysql_query ($q1) or die ("ni figa");
$r2=mysql_query ($q2) or die ("ni figa");
$r3=mysql_query ($q3) or die ("ni figa");
print'<div style="padding-left:12px; padding-top:5px; color: #363636; font-size: 11px; font-family: tahoma; padding-bottom:13px; padding-rigth:4px;"><img src="/images/point_4.jpg" width="3" height="5">&nbsp;';
$f1=mysql_fetch_array($r1);
print $f1['citate'] ;
print'<br><a href="history.php?n='.$n1.'" target="_blank">'.$f1['autor'].'</a></div>';
print'<div style="padding-left:12px; padding-top:5px; color: #363636; font-size: 11px; font-family: tahoma; padding-bottom:13px; padding-rigth:4px;"><img src="/images/point_4.jpg" width="3" height="5">&nbsp;';
$f2=mysql_fetch_array($r2);
print $f2['citate'] ;
print '<br><a href="autor/history.php?n='.$n2.'" target="_blank">'.$f2['autor'].'</a></div>';
print'<div style="padding-left:12px; padding-top:5px; color: #363636; font-size: 11px; font-family: tahoma; padding-bottom:13px; padding-rigth:4px;"><img src="/images/point_4.jpg" width="3" height="5">&nbsp;';
$f3=mysql_fetch_array($r3);
print $f3['citate'] ;
print '<br><a href="autor/history.php?n='.$n3.'" target="_blank">'.$f3['autor'].'</a></div>';












?>
