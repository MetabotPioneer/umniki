	<?php
if ($filled=="yes"){
/*  ������ ���������� ����� � ���� ������    */

include ('db_settings.php');
$table='si_seria';

/*   �������� ����������� ������ �� ������������ */

if ( $name !=""  and  $text !="") {


mysql_connect($hostname, $user, $pass) OR DIE ("NI FIGA");
mysql_select_db($dbname) or die ("net takoi bazy");

$res_no="���, ������ �� ������� ��������. ���-�� ������...";


$query="INSERT INTO $table VALUES ('$n','$name','$text')";
mysql_query($query) or die (mysql_error());

echo "<h1>�����������!</h1>������ ������� ��������� � ���� ";
}  else {

echo "<h1>���!</h1>��������� ���� (��� ������, ������� ���������� � ��� ��� �������) �� �� ������ ���������. <br>
���������� ��� ��� - �����, ���������. ";
echo '<br><a href="javascript:history.back();">��������� � ���������� ���� �����</a>'; 
}


/*   ����� �������  ���������� ����� � ���� ������  */
}

?>
<html>
<head>
<title>��������������� ��������� ��-������</title>
<meta http-equiv="����������-���" content="text/html; charset=windows-1251">


</head>

<body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
 
  <tr> 
    
	<td><!--   ������� �����   -->	
      
<h1>���������� ����� ��������� �������� ��-������</h1>
      <form name="intro" method="post" action="">
	  
        <table width="100%" border="0" cellpadding="0" cellspacing="10" >
          <tr> 
            <td width="30%" ><b><font size="3">�������� �����</font></b></td>
          </tr>
          <tr> 
            <td width="30%"> 
              <input type="text" name="name" size="40" value="">
            </td>
          </tr>
		   <tr> 
            <td width="30%" ><b><font size="3">�������� �����</font></b></td>
          </tr>
          <tr> 
            <td width="30%"> 
                 <textarea name="text" cols="70" rows="10"></textarea>
            </td>
          </tr>
         
        </table>
        <input  style="14pt" type="submit"  value="���������"  name="submit">
		<input  type="hidden"  name="filled" value="yes">
      </form><br>
 </td>
  </tr>
  
</table>



</body>
</html>