<?php  	  
include ("../admin/db_settings.php"); ?>
				<?php
				
mysql_connect($hostname, $user, $pass) OR DIE ("NI FIGA");
mysql_select_db($dbname) or die ("net takoi bazy");
$table="si_product";
$query="SELECT * FROM $table WHERE 1";
$res=mysql_query ($query) or die (mysql_error());

if ($p == "") {
							$query="SELECT * FROM si_product WHERE 1";
							$printprod=mysql_query ($query) or die (mysql_error());

while($q=mysql_fetch_array($printprod)) { ?>
                              <p style="margin-top:10px; margin-left:3px; margin-right:10px;margin-bottom:10px;"> 
                <span style="color:#0B83B6; font-weight: bold;"> 
                <?=$q['nam']?>
                </span> <br>
                
                <?=$q['sub'];?></p>
				
              <? }
			  	} else  {

					$query = "SELECT * FROM si_product WHERE id='$p'";
					$res_new=mysql_query ($query) or die (mysql_error());
					$qp=mysql_fetch_array($res_new);

					?>
					 <p style="margin-top:10px; margin-left:3px; margin-right:10px;margin-bottom:10px;"> 
                <span style="color:#0B83B6; font-weight: bold;"> 
                <?=$qp['nam']?>
                </span> <br>
                
                <?=$qp['sub'];?></p>


                <? } ?>