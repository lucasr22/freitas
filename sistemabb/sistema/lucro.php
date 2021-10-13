
<?php
include "topo.php";
?>
<?php
if(isset($_POST["ativo"])){
		$datta=mysqli_escape_string($conm,$_POST["datta"]);
		$lucro=mysqli_escape_string($conm,$_POST['valor']);
		
	
		$sql="INSERT INTO lucro(datta,lucro)
			VALUES('$datta','$lucro')";
		mysqli_query($conm,$sql);
		
}

?>


		


<h1 class="h1">#lucro</h1>
<hr class="hr">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	<input type="date" name="datta" class="inputt" placeholder="data">
	<input type="munber" name="valor" class="inputt" placeholder="lucro">
	<button type="submit" name="ativo"  class="btnn"><h4>enviar</h4></button>
</form>	
<div style="margin-left:14%">
<div style="height:780px;width:90%;overflow:auto;">
<?php
	echo "<table class='table'>";
		
			$sql = "SELECT * FROM `lucro`";
			
			$taka=mysqli_query($conm,$sql);

			while ($line=mysqli_fetch_assoc($taka)) {
				echo "<tr><td>".$line['datta'] . "<hr class='hrb'></td>";
				echo "<td>".$line['lucro'] . "<hr class='hrb'></td>";
				echo "<td>"."<a href='reslucro.php?id={$linhas['id']}'>apagar</a></td></tr>";
			}

	echo"</table>";
?>
</div>
</div>

<?php
include "rodape.php";

?> 