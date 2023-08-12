    
<? 
$table="si_product";

$query="SELECT * FROM $table WHERE 1";
$res=mysql_query ($query) or die ("ni figa");
$number=mysql_num_rows ($res);

$n1=rand(1,$number);
$n2=rand(2,$number);
$n3=rand(3,$number);

$q1="SELECT * FROM $table WHERE id=$n1";
$q2="SELECT * FROM $table WHERE id=$n2";
$q3="SELECT * FROM $table WHERE id=$n3";
$r1=mysql_query ($q1) or die ("ni figa");
$r2=mysql_query ($q2) or die ("ni figa");
$r3=mysql_query ($q3) or die ("ni figa");
$f1=mysql_fetch_array($r1);
$f2=mysql_fetch_array($r2);
$f3=mysql_fetch_array($r3);
?>


<table width="90%" border="0" cellspacing="0" cellpadding="0" align="center">

  <tr> 
                      
    <td  align="center" width="33%"><img src="../img_cat/<?=$f1['pic']?>"  style="BORDER-RIGHT: #458DD1 1px solid; BORDER-TOP: #458DD1 1px solid; MARGIN-BOTTOM: 7px; BORDER-LEFT: #458DD1 1px solid;  BORDER-BOTTOM: #458DD1 1px solid" alt="Косметика Си-ультра" ></td>
                      
    <td align="center" width="33%" ><img src="../img_cat/<?=$f2['pic']?>"  style="BORDER-RIGHT: #458DD1 1px solid; BORDER-TOP: #458DD1 1px solid; MARGIN-BOTTOM: 7px; BORDER-LEFT: #458DD1 1px solid;  BORDER-BOTTOM: #458DD1 1px solid"></td>
					  
    <td align="center" width="33%"><img src="../img_cat/<?=$f3['pic']?>"  style="BORDER-RIGHT: #458DD1 1px solid; BORDER-TOP: #458DD1 1px solid; MARGIN-BOTTOM: 7px; BORDER-LEFT: #458DD1 1px solid;  BORDER-BOTTOM: #458DD1 1px solid" ></td>
                    </tr>
                    <tr> 
                      
    <td align="center" width="33%"><span class="new">
       <a href="http://www.si-ultra.biz/catalog/tovar.php?n=<?=$f1['id'] ;?>"><?=$f1['nam']?></a> 
      </span><br>
    </td>
                      
    <td align="center" width="33%"> 
     <span class="new"><a href="http://www.si-ultra.biz/catalog/tovar.php?n=<?=$f2['id'] ;?>"> <?=$f2['nam']?></a></span>
      <br>
    </td>
					     
    <td align="center" width="33%"> 
    <span class="new"><a href="http://www.si-ultra.biz/catalog/tovar.php?n=<?=$f3['id'] ;?>"><?=$f3['nam']?></a></span>
      <br>
    </td>
                    </tr>
                  </table>



		
		
 
 
 

