
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
          style="PADDING-LEFT: 7px; WIDTH: 100%; HEIGHT: 27px; BACKGROUND-COLOR: #458DD1"><font color="#FFFFFF" face="Arial, Helvetica, sans-serif">Лидер 
            продаж </font></TD>
          <TD 
            style="WIDTH: 100%; HEIGHT: 27px; BACKGROUND-COLOR: #458DD1">&nbsp;</TD>
        </TR>
        <TR>
          <TD 
            style="BORDER-RIGHT: #ffffff 5px solid; WIDTH: 30px; HEIGHT: 27px"><IMG 
            style="WIDTH: 5px" 
            src="images/filler.gif"></TD>
          <TD style="PADDING-TOP: 10px" colSpan=2>
            <TABLE style="WIDTH: 100%" cellSpacing=0 cellPadding=0>
              <TBODY> 
              <TR> 
                
            
          <TD style="VERTICAL-ALIGN: top; WIDTH: 5%"><IMG 
                  style="BORDER-RIGHT: #646a60 1px solid; BORDER-TOP: #646a60 1px solid; BORDER-LEFT: #646a60 1px solid; BORDER-BOTTOM: #646a60 1px solid" 
                  alt="" 
                  src="../img_cat/01_04.jpg" 
                  width=164 height="164"> </TD>
                <TD style="WIDTH: 10px">&nbsp;</TD>
                
          <TD style="VERTICAL-ALIGN: top; TEXT-ALIGN: right" valign="middle" align="left"><a href="http://www.si-ultra.biz/catalog/tovar.php?n=4">Лифтинг-крем 
            «Наслаждение» </a> 
            <TABLE style="WIDTH: 100%" cellSpacing=0 cellPadding=0>
              <TBODY> 
              <TR> 
                <TD 
                      style="WIDTH: 50%; PADDING-TOP: 10px; "></TD>
              </TR>
              </TBODY> 
            </TABLE>
                
            <span 
                        class=subhdr 
                        style="PADDING-RIGHT: 0px; PADDING-LEFT: 0px; FONT-SIZE: 0.95em; PADDING-BOTTOM: 0px; MARGIN: 0px; PADDING-TOP: 0px; BACKGROUND-COLOR: #e1f1fa"><br>
            <br>
            </span> <br>
            <span class=subhdr 
                        style="BACKGROUND-COLOR: #daf2ec">&nbsp;</span><nobr></nobr><nobr><span class=subhdr 
                        style="BACKGROUND-COLOR: #daf2ec"> 30&nbsp;мл&nbsp;</span> 
            </nobr></TD>
              </TR>
              </TBODY>
            </TABLE>
            <a href="http://www.si-ultra.biz/catalog/tovar.php?n=4"><BR>
                  Это косметическое средство для комплексного ухода за кожей после 
                  30 лет. По эффективности и силе воздействия он сопоставим с 
                  ампулированной косметикой. </a></TD></TR></TBODY></TABLE><BR><BR>
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

    
    
