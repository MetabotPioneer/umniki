
      <TABLE 
      style="BORDER-RIGHT: #ffffff 5px solid; BORDER-TOP: medium none; BORDER-LEFT: medium none; WIDTH: 100%; BORDER-BOTTOM: medium none" 
      cellSpacing=0 cellPadding=0>
        <TBODY> 
        <TR> 
          <TD 
          style="BORDER-RIGHT: #ffffff 5px solid; WIDTH: 30px; HEIGHT: 27px; BACKGROUND-COLOR: #458DD1"><IMG 
            style="WIDTH: 5px" 
            src="images/filler.gif"></TD>
          <TD 
          style="PADDING-LEFT: 7px; WIDTH: 100%; HEIGHT: 27px; BACKGROUND-COLOR: #458DD1"><font color="#FFFFFF" face="Arial, Helvetica, sans-serif">Продукция 
            компании </font></TD>
        </TR>
        <TR> 
          <TD 
            style="BORDER-RIGHT: #ffffff 5px solid; WIDTH: 30px; HEIGHT: 27px"><IMG 
            style="WIDTH: 5px" 
            src="images/filler.gif"></TD>
          <TD style="PADDING-TOP: 10px"> 
            <TABLE style="WIDTH: 100%" cellSpacing=0 cellPadding=0>
              <TBODY> 
              <TR> 
                <TD style="VERTICAL-ALIGN: top; WIDTH: 5%" height="156"> <span class="main"> 
                <?php  	  
include ("../admin/db_settings.php"); ?>
              <?php
mysql_connect($hostname, $user, $pass) OR DIE ("NI FIGA");
mysql_select_db($dbname) or die ("net takoi bazy");
$q="SELECT  n, name FROM si_seria WHERE 1 ";
$result=mysql_query($q) or die(mysql_error());


while($r=mysql_fetch_array($result)){ ?>
<a href="http://www.si-ultra.biz/catalog/seria.php?k=<?=$r['n']?>" target="_blank">• <?=$r['name']?></a><br>
			  <? }
?>
</span></TD>
              </TR>
              </TBODY> 
            </TABLE>
          </TD>
        </TR>
        </TBODY> 
      </TABLE>
      <BR><BR>
      <TABLE 
      style="BORDER-RIGHT: #ffffff 5px solid; BORDER-TOP: medium none; BORDER-LEFT: medium none; WIDTH: 100%; BORDER-BOTTOM: medium none" 
      cellSpacing=0 cellPadding=0>
        <TBODY>
        <TR>
          <TD 
          style="BORDER-RIGHT: #ffffff 5px solid; WIDTH: 30px; HEIGHT: 27px; BACKGROUND-COLOR: #458DD1"><IMG 
            style="WIDTH: 5px" 
            src="images/filler.gif"></TD>
          <TD class=pghdr 
          style="PADDING-LEFT: 7px; WIDTH: 100%; HEIGHT: 27px; BACKGROUND-COLOR: #458DD1"><font color="#FFFFFF" face="Arial, Helvetica, sans-serif">Бегун.Автоконтекст</font></TD>
          <TD 
            style="WIDTH: 100%; HEIGHT: 27px; BACKGROUND-COLOR: #458DD1">&nbsp;</TD>
        </TR>
        <TR>
          <TD 
            style="BORDER-RIGHT: #ffffff 5px solid; WIDTH: 30px; HEIGHT: 27px"><IMG 
            style="WIDTH: 5px" 
            src="images/filler.gif"></TD>
          <TD style="PADDING-TOP: 10px" colSpan=2> <SCRIPT type="text/javascript">
   var begun_auto_colors = new Array();
   var begun_auto_fonts_size = new Array();
   begun_auto_pad = 85684367; // идентификатор площадки
   begun_auto_limit = 5; // число объявлений выводимых на площадке
   begun_auto_width = 200; // ширина блока объявлений.
   begun_auto_colors[0] = '#0000CC'; // цвет ссылки объявлений
   begun_auto_colors[1] = '#000000'; // цвет текста объявления
   begun_auto_colors[2] = '#00CC00'; // цвет домена объявления
   begun_auto_colors[3] = '#FFFFFF'; // цвет фона блока объявлений
   begun_auto_fonts_size[0] = '10pt'; // р-мер шрифта ссылки объявлений
   begun_auto_fonts_size[1] = '10pt'; // р-мер шрифта текста объявления
   begun_auto_fonts_size[2] = '10pt'; // р-мер шрифта домена объявления
   begun_auto_fonts_size[3] = '10pt'; // р-мер шрифта заглушки
   begun_block_type = 'Vertical'; // тип блока
   begun_rambler_type = 0; // цвет блока поиска Рамблер
</SCRIPT>
<SCRIPT src="http://autocontext.begun.ru/autocontext.js" type="text/javascript">
</SCRIPT>
         </TD>
        </TR></TBODY></TABLE><BR><BR>
      <TABLE 
      style="BORDER-RIGHT: #ffffff 5px solid; BORDER-TOP: medium none; BORDER-LEFT: medium none; WIDTH: 100%; BORDER-BOTTOM: medium none" 
      cellSpacing=0 cellPadding=0>
        <TBODY> 
        <TR> 
          <TD 
          style="BORDER-RIGHT: #ffffff 5px solid; WIDTH: 30px; HEIGHT: 27px; BACKGROUND-COLOR: #458DD1"><IMG 
            style="WIDTH: 5px" 
            src="images/filler.gif"></TD>
          <TD class=pghdr 
          style="PADDING-LEFT: 7px; WIDTH: 100%; HEIGHT: 27px; BACKGROUND-COLOR: #458DD1"><font color="#FFFFFF" face="Arial, Helvetica, sans-serif">Рассылка 
            &quot;Лечебная косметика&quot;</font></TD>
        </TR>
        <TR> 
          <TD 
            style="BORDER-RIGHT: #ffffff 5px solid; WIDTH: 30px; HEIGHT: 27px"><IMG 
            style="WIDTH: 5px" 
            src="images/filler.gif"></TD>
          <TD style="PADDING-TOP: 10px"> 
            <TABLE style="WIDTH: 100%" cellSpacing=0 cellPadding=0>
              <TBODY> 
              <TR> 
                <TD style="VERTICAL-ALIGN: top"> 
                  
              
            <DIV 
                  style="PADDING-BOTTOM: 5px; VERTICAL-ALIGN: bottom; BORDER-BOTTOM: #646a60 1px dotted; HEIGHT: 20px"><a href="../rass/index.php"><SPAN 
                  class=date>22.11.2007</SPAN>&nbsp;&nbsp;</a></DIV>
                  
            <DIV class=txt 
                  style="PADDING-RIGHT: 7px; PADDING-TOP: 2px"><a href="../rass/index.php">Si-Ultra.biz 
              :: Лечебная косметика. Советы косметолога.<br>
              Выпуск 1.
              Косметика которая лечит</a></DIV>
                  <DIV style="PADDING-RIGHT: 7px; PADDING-TOP: 7px"><table width="190" cellspacing="0" cellpadding="1" border="0" bgcolor="#4C4C4C">
	    <form action="http://content.mail.ru/cgi-bin/subscribe.cgi" method="get">
	    <tr><td>
	    <table border="0" cellspacing="0" cellpadding="5" width=100% bgcolor="#3B4D6B">
	    <tr>
                          <td bgcolor="#3B4D6B" align="center"><a href="http://content.mail.ru" style="text-decoration: none"><b><font face="Tahoma" size="2" color="#ffffff">Рассылки<font color="#FAAD31">@</font>Mail<font color="#FAAD31">.ru</font></font></b></a></td>
                        </tr>
	    </table>
	    <table border="0" cellspacing="0" cellpadding="5" width=100% bgcolor="#ffffff">
	    <tr><td bgcolor="#ffffff">
	    <input type="hidden" name="theme" value="content_new">    
		<input type="hidden" name="list_id" value="27616"><input type="hidden" name="list_id_src" value="27616"><center><a href="http://content.mail.ru/pages/p_27616.html"><font face="Arial" 
	    color="#3b4d6b" size="1">Лечебная косметика. Советы косметолога.</font></a></center><table border="0" cellspacing="5" cellpadding="0">
    
	    <tr>
	    <td></td>
	    <td><input type="text" name="email" value="Ваш E-mail" size="20" align="absmiddle" maxlength="100"></td>
	    <td><input type="submit" name="ok" align="absmiddle" value="OK"></td>
	    </tr>
	    </table>
	    </td></tr>
	    </table>
	    </td></tr>
	    </form>
	    </table></DIV>
                </TD>
                <TD 
                style="PADDING-RIGHT: 0px; PADDING-LEFT: 0px; PADDING-BOTTOM: 0px; VERTICAL-ALIGN: top; WIDTH: 5%; PADDING-TOP: 0px"> 
                  
                </TD>
              </TR>
              <TR> 
                <TD style="HEIGHT: 20px" colSpan=2><IMG height=1 src="" 
                  width=10></TD>
              </TR>
              </TBODY> 
            </TABLE>
          </TD>
        </TR>
        </TBODY> 
      </TABLE>

    
    
