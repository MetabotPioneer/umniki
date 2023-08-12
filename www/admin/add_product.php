<?php
include ('db_settings.php');
mysql_connect($hostname, $user, $pass) OR DIE ("NI FIGA");
mysql_select_db($dbname) or die ("net takoi bazy");
$sql="SELECT * FROM si_seria WHERE 1";
$qq=mysql_query($sql);
$sql_type="SELECT * FROM si_type WHERE 1";
$qq_t=mysql_query($sql_type);

if ($filled=="yes"){
/*  СКРИПТ ДОБАВЛЕНИЯ ПИСЕМ В БАЗУ ДАННЫХ    */


$table='si_product';

/*   проверка заполненных данных на корректность */

if ( $nam !="" and $sub !=""and $sub_big !="" and $pic !=""and $seria !=""and $type !="") {

$query="INSERT INTO $table VALUES ('$id','$nam','$sub', '$sub_big','$pic','$price','$ml', '$seria', '$type')";
mysql_query($query) or die (mysql_error());

echo "<h1>Поздравляем!</h1>Данные успешно добавлены в базу ";
}  else {

echo "<h1>Увы!</h1>Некоторые поля вы не успели заполнить. <br>
Попробуйте еще раз - может, получится. ";
echo '<br><a href="javascript:history.back();">Вернуться к заполнению этой формы</a>'; 
}


/*   КОНЕЦ СКРИПТА  ДОБАВЛЕНИЯ ПИСЕМ В БАЗУ ДАННЫХ  */
}

?>
<html>
<head>
<title>Добавление афоризма</title>
<meta http-equiv="Содержимое-Тип" content="text/html; charset=windows-1251">

<link rel="stylesheet" href="../stylle.css" type="text/css">
</head>

<body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
 
  <tr> 
   
	<td><!--   выводим форму   -->	
      
<h1>Добавление продукта</h1><br>

      <form name="intro" method="post" action="">
	  
        <table width="75%" border="0" cellpadding="0" cellspacing="10" class="text">
          <tr> 
            <td width="30%" ><b><font size="3">Название продукта</font></b></td>
          </tr>
		  
          <tr> 
            <td width="30%"> 
              <input type="text" name="nam" size="40" value="">
            </td>
          </tr>
          </td>
          </tr>
		  <tr> 
            <td width="30%" ><b><font size="3">Краткое Описание серии</font></b></td>
          </tr>
          <tr> 
            <td width="30%"> 
                 <textarea name="sub" cols="70" rows="10"></textarea>
            </td>
          </tr>
        <tr> 
            <td width="30%" ><b><font size="3">Полное  Описание серии</font></b></td>
          </tr>
          <tr> 
            <td width="30%"> 
                 <textarea name="sub_big" cols="70" rows="10"></textarea>
            </td>
          </tr>
		
		  <tr> 
            <td width="30%" ><b><font size="3">имя файла pic</font></b></td>
          </tr>
          <tr> 
            <td width="30%"> 
                 <input type=file name="pic" value="" size=37>
            </td>
          </tr>
		  <tr> 
            <td width="30%" ><b><font size="3">Цена продукта</font></b></td>
          </tr>
		  
          <tr> 
            <td width="30%"> 
              <input type="text" name="price" size="40" value="">
            </td>
          </tr>
		  <tr> 
            <td width="30%" ><b><font size="3">Упаковка(мл)</font></b></td>
          </tr>
		  
          <tr> 
            <td width="30%"> 
              <input type="text" name="m" size="40" value="">
            </td>
          </tr>
		  <tr> 
            <td width="30%" ><b><font size="3">Название серии</font></b></td>
          </tr>
          <tr> 
            <td width="30%"> 
		<select name="seria">
		<option value="">Выберите из списка</option>
		<? while($t=mysql_fetch_array($qq)) {?>
		<option value="<?=$t['n']?>"><?=$t['name']?></option>
		<? } ?>
		</select>
		</tr>
		<tr> 
            <td width="30%" ><b><font size="3">Тип продукции</font></b></td>
          </tr>
		<tr> 
            <td width="30%"> 
		<select name="type">
		<option value="">Выберите из списка</option>
		<? while($k=mysql_fetch_array($qq_t)) {?>
		<option value="<?=$k['num']?>"><?=$k['type']?></option>
		<? } ?>
		</select>
		</tr>
        </table>
        <input  style="14pt" type="submit"  value="Отправить"  name="submit">
		<input  type="hidden"  name="filled" value="yes">
      </form><br>
 </td>
  </tr>
  
</table>



</body>
</html>