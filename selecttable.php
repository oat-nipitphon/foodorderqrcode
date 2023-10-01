<?php
	// include"connect.php";
	// $Sqltable="SELECT * FROM `tablebuy`";
	// $objtable = mysql_query($Sqltable) or die ("Error SQL Sqltable");
	// $numrow=mysql_num_rows($objtable);
	// for($i=0;$i<$numrow;$i++)
	// {
	// 	while($ResultID=mysql_fetch_array($objtable))
	// 	{
	// 		$number[$i]=$ResultID["idtable"];
	// 		$i++;
	// 	}
	// }
	include('app.php');
	include "connect.php";
	$Sqltables="SELECT * FROM `tablebuy`";
	$objtables = mysqli_query($connect_db ,$Sqltables);         
?>
<div id="menu" class="parallax-window" data-parallax="scroll" data-image-src="img/antique-cafe-bg-02.jpg">
	<div class="container mx-auto tm-container py-24 sm:py-48">
		<div class="text-center mb-16">
			<h2 class="bg-white tm-text-brown py-6 px-12 text-2xl font-medium inline-block rounded-md">กรุณาเลือกโต๊ะที่ ท่านต้องการ</h2>
		</div>
		<div class="col-md-12">
			<div class="row">
				<?php
					while($objtable = mysqli_fetch_array($objtables))
					{
					?>
					<!-- <div class="col-md-6 flex-1 m-5 rounded-xl px-4 py-6 sm:px-8 sm:py-10 tm-bg-brown tm-item-container">
						<div class="flex items-start mb-6 tm-menu-item">
							<img src="img/menu-item-1.jpg" alt="Image" class="rounded-md">
							<div class="ml-3 sm:ml-6">
								<h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow"><?php echo $objtable["idtable"]; ?></h3>
								<div class="text-white text-md sm:text-lg font-light mb-1">S $8.50</div>
								<div class="text-white text-md sm:text-lg font-light">L $10.50</div>
							</div>                    
						</div>
                	</div> -->
					<div class="col-md-5 rounded-x1 px-4 py-6 sm:py-10 tm-bg-brown tm-item-container item-center" style="padding: 20px; margin: 20px;" >
						<div class="flex item-start md-6 tm-menu-item">
						<img src="img/menu-item-1.jpg" alt="Image" class="rounded-md">
							<div class="ml-3 sm:ml-6">
								<div class="text-white text-md sm:text-lg font-light mb-1">
									<span class="">โต๊ะที่ :</span>
									<span class="text-lg sm:text-xl md-2 sm:mb-3 tm-text-yellow">
										<?php
											echo '<b>'.$objtable['idtable'].'</b>';
										?>
									</span>
								</div>
								<div class="text-white text-md sm:text-lg font-light">
									<label for="">สถานะ :</label>
									<label class="text-lg sm:text-xl md-2 sm:mb-3 tm-text-yellow">
										<?php
											echo '<b>'.$objtable['status'].'</b>';
										?>
									</label>
								</div>
							</div>
						</div>
					</div>
					<?php
					}    
				?>   
			</div>   
		</div>
	</div>        
</div>

<table width="100%" height="200" border="0" align="center" style="background-color:rgb(255, 255, 255, 0);">
	<?
	for($j=0;$j<$numrow;$j++)
	{
		?>
			<tr>
						<td>
						<?
						$row=$number[$j++];
						$Sql="SELECT * FROM `tablebuy` WHERE idtable='$row'";
						$obj=mysql_query($Sql)or die("Error.'$Sql'");
						while($Re=mysql_fetch_array($obj))
						{
							echo "สถานะ :: ".$Re["status"];
							?>
								<form method="post" action="buyorder.php">
								<input type="submit" style="width:100%;height:50px;" name="idtable" value="<?=$Re["idtable"];?>">
								</form>
							<?
						}
						?>
						</td>
						<td>
						<?
						$row=$number[$j++];
						$Sql="SELECT * FROM `tablebuy` WHERE idtable='$row'";
						$obj=mysql_query($Sql)or die("Error.'$Sql'");
						while($Re=mysql_fetch_array($obj))
						{
							echo "สถานะ :: ".$Re["status"];
							?>
								<form method="post" action="buyorder.php">
								<input type="submit" style="width:100%;height:50px;" name="idtable" value="<?=$Re["idtable"];?>">
								</form>
							<?
						}
						?>
						</td>
						<td>
						<?
						$row=$number[$j++];
						$Sql="SELECT * FROM `tablebuy` WHERE idtable='$row'";
						$obj=mysql_query($Sql)or die("Error.'$Sql'");
						while($Re=mysql_fetch_array($obj))
						{
							echo "สถานะ :: ".$Re["status"];
							?>
								<form method="post" action="buyorder.php">
								<input type="submit" style="width:100%;height:50px;" name="idtable" value="<?=$Re["idtable"];?>">
								</form>
								<?
						}
						?>
						</td>
						<td>
						<?
						$row=$number[$j++];
						$Sql="SELECT * FROM `tablebuy` WHERE idtable='$row'";
						$obj=mysql_query($Sql)or die("Error.'$Sql'");
						while($Re=mysql_fetch_array($obj))
						{
							echo "สถานะ :: ".$Re["status"];
							?>
								<form method="post" action="buyorder.php">
								<input type="submit" style="width:100%;height:50px;" name="idtable" value="<?=$Re["idtable"];?>">
								</form>
							<?
						}
						?>
						</td>
			</tr>
			
			
			<tr>
						<td>
						<?
						$row=$number[$j++];
						$Sql="SELECT * FROM `tablebuy` WHERE idtable='$row'";
						$obj=mysql_query($Sql)or die("Error.'$Sql'");
						while($Re=mysql_fetch_array($obj))
						{
							echo "สถานะ :: ".$Re["status"];
							?>
								<form method="post" action="buyorder.php">
								<input type="submit" style="width:100%;height:50px;" name="idtable" value="<?=$Re["idtable"];?>">
								</form>
							<?
						}
						?>
						</td>
						<td>
						<?
						$row=$number[$j++];
						$Sql="SELECT * FROM `tablebuy` WHERE idtable='$row'";
						$obj=mysql_query($Sql)or die("Error.'$Sql'");
						while($Re=mysql_fetch_array($obj))
						{
							echo "สถานะ :: ".$Re["status"];
							?>
								<form method="post" action="buyorder.php">
								<input type="submit" style="width:100%;height:50px;" name="idtable" value="<?=$Re["idtable"];?>">
								</form>
							<?
						}
						?>
						</td>
						<td>
						<?
						$row=$number[$j++];
						$Sql="SELECT * FROM `tablebuy` WHERE idtable='$row'";
						$obj=mysql_query($Sql)or die("Error.'$Sql'");
						while($Re=mysql_fetch_array($obj))
						{
							echo "สถานะ :: ".$Re["status"];
							?>
								<form method="post" action="buyorder.php">
								<input type="submit" style="width:100%;height:50px;" name="idtable" value="<?=$Re["idtable"];?>">
								</form>
							<?
						}
						?>
						</td>
						<td>
						<?
						$row=$number[$j++];
						$Sql="SELECT * FROM `tablebuy` WHERE idtable='$row'";
						$obj=mysql_query($Sql)or die("Error.'$Sql'");
						while($Re=mysql_fetch_array($obj))
						{
							echo "สถานะ :: ".$Re["status"];
							?>
								<form method="post" action="buyorder.php">
								<input type="submit" style="width:100%;height:50px;" name="idtable" value="<?=$Re["idtable"];?>">
								</form>
							<?
						}
						?>
						</td>
			</tr>
		<?			
	}
?>
</table>