<?php
include ('db_settings.php');
mysql_connect($hostname, $user, $pass) OR DIE ("NI FIGA");
mysql_select_db($dbname) or die ("net takoi bazy");
$sql="SELECT * FROM si_seria WHERE 1";
$qq=mysql_query($sql);
$sql_type="SELECT * FROM si_type WHERE 1";
$qq_t=mysql_query($sql_type);

if ($filled=="yes"){
/*  ������ ���������� ����� � ���� ������    */


$table='si_product';

/*   �������� ����������� ������ �� ������������ */

if ( $nam !="" and $sub !=""and $sub_big !="" and $pic !=""and $seria !=""and $type !="") {

$query="INSERT INTO $table VALUES ('$id','$nam','$sub', '$sub_big','$pic','$price','$ml', '$seria', '$type')";
mysql_query($query) or die (mysql_error());

echo "<h1>�����������!</h1>������ ������� ��������� � ���� ";
}  else {

echo "<h1>���!</h1>��������� ���� �� �� ������ ���������. <br>
���������� ��� ��� - �����, ���������. ";
echo '<br><a href="javascript:history.back();">��������� � ���������� ���� �����</a>'; 
}


/*   ����� �������  ���������� ����� � ���� ������  */
}

?>
<html>
<head>
<title>���������� ��������</title>
<meta http-equiv="����������-���" content="text/html; charset=windows-1251">

<link rel="stylesheet" href="../stylle.css" type="text/css">
</head>

<body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
 
  <tr> 
   
	<td><!--   ������� �����   -->	
      
<h1>���������� ��������</h1><br>

      <form name="intro" method="post" action="">
	  
        <table width="75%" border="0" cellpadding="0" cellspacing="10" class="text">
          <tr> 
            <td width="30%" ><b><font size="3">�������� ��������</font></b></td>
          </tr>
		  
          <tr> 
            <td width="30%"> 
              <input type="text" name="nam" size="40" value="">
            </td>
          </tr>
          </td>
          </tr>
		  <tr> 
            <td width="30%" ><b><font size="3">������� �������� �����</font></b></td>
          </tr>
          <tr> 
            <td width="30%"> 
                 <textarea name="sub" cols="70" rows="10"></textarea>
            </td>
          </tr>
        <tr> 
            <td width="30%" ><b><font size="3">������  �������� �����</font></b></td>
          </tr>
          <tr> 
            <td width="30%"> 
                 <textarea name="sub_big" cols="70" rows="10"></textarea>
            </td>
          </tr>
		
		  <tr> 
            <td width="30%" ><b><font size="3">��� ����� pic</font></b></td>
          </tr>
          <tr> 
            <td width="30%"> 
                 <input type=file name="pic" value="" size=37>
            </td>
          </tr>
		  <tr> 
            <td width="30%" ><b><font size="3">���� ��������</font></b></td>
          </tr>
		  
          <tr> 
            <td width="30%"> 
              <input type="text" name="price" size="40" value="">
            </td>
          </tr>
		  <tr> 
            <td width="30%" ><b><font size="3">��������(��)</font></b></td>
          </tr>
		  
          <tr> 
            <td width="30%"> 
              <input type="text" name="m" size="40" value="">
            </td>
          </tr>
		  <tr> 
            <td width="30%" ><b><font size="3">�������� �����</font></b></td>
          </tr>
          <tr> 
            <td width="30%"> 
		<select name="seria">
		<option value="">�������� �� ������</option>
		<? while($t=mysql_fetch_array($qq)) {?>
		<option value="<?=$t['n']?>"><?=$t['name']?></option>
		<? } ?>
		</select>
		</tr>
		<tr> 
            <td width="30%" ><b><font size="3">��� ���������</font></b></td>
          </tr>
		<tr> 
            <td width="30%"> 
		<select name="type">
		<option value="">�������� �� ������</option>
		<? while($k=mysql_fetch_array($qq_t)) {?>
		<option value="<?=$k['num']?>"><?=$k['type']?></option>
		<? } ?>
		</select>
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