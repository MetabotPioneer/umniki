	<?php
if ($filled=="yes"){
/*  СКРИПТ ДОБАВЛЕНИЯ ПИСЕМ В БАЗУ ДАННЫХ    */

include ('db_settings.php');
$table='si_seria';

/*   проверка заполненных данных на корректность */

if ( $name !=""  and  $text !="") {


mysql_connect($hostname, $user, $pass) OR DIE ("NI FIGA");
mysql_select_db($dbname) or die ("net takoi bazy");

$res_no="Увы, данные не удалось добавить. Где-то ошибка...";


$query="INSERT INTO $table VALUES ('$n','$name','$text')";
mysql_query($query) or die (mysql_error());

echo "<h1>Поздравляем!</h1>Данные успешно добавлены в базу ";
}  else {

echo "<h1>Увы!</h1>Некоторые поля (имя автора, краткая информация о нем или история) вы не успели заполнить. <br>
Попробуйте еще раз - может, получится. ";
echo '<br><a href="javascript:history.back();">Вернуться к заполнению этой формы</a>'; 
}


/*   КОНЕЦ СКРИПТА  ДОБАВЛЕНИЯ ПИСЕМ В БАЗУ ДАННЫХ  */
}

?>
<html>
<head>
<title>Добавлениесерии продукции Си-ультра</title>
<meta http-equiv="Содержимое-Тип" content="text/html; charset=windows-1251">


</head>

<body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
 
  <tr> 
    
	<td><!--   выводим форму   -->	
      
<h1>Добавление серии продуктов компании Си-ультра</h1>
      <form name="intro" method="post" action="">
	  
        <table width="100%" border="0" cellpadding="0" cellspacing="10" >
          <tr> 
            <td width="30%" ><b><font size="3">Название серии</font></b></td>
          </tr>
          <tr> 
            <td width="30%"> 
              <input type="text" name="name" size="40" value="">
            </td>
          </tr>
		   <tr> 
            <td width="30%" ><b><font size="3">Описание серии</font></b></td>
          </tr>
          <tr> 
            <td width="30%"> 
                 <textarea name="text" cols="70" rows="10"></textarea>
            </td>
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