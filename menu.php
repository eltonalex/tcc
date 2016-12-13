<?php include "verifica.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Jogo da Memória</title>
<style type="text/css">
body {
	background-color: #333;
}
body,td,th {
	color: #FFF;
}
</style>
</head>

<body>

<?php
    session_start();
	echo "<form name=\"form1\">
	<table  width=\"1024\" border=\"0\" align=\"center\">
	<tr>
      <td>
	  <label><strong>Jogador: </strong></label>".$_SESSION['nome_usuario']."
	</td>
	</tr>
	</table>
	</form>";
?>
<form name="form2" > 
<table width="1024" height="768" border="0" align="center" >
	<tr>
	<td><img src="images/fundo_jogo.jpg" width="1024" height="768" border="0"  align="bottom" usemap="#Map"/>
    <map name="Map" id="Map">
      <area shape="rect" coords="4,283,188,323" href="Jogo1/memoria_a.php" /><area shape="rect" coords="1,381,199,421" href="Jogo2/memoria_a.php" /><area shape="rect" coords="816,282,1008,322" href="Jogo3/memoria_a.php" />
      <area shape="rect" coords="830,381,1007,421" href="Jogo4/memoria_a.php" />
      <area name="sair" value="Sair" shape="rect" coords="2,724,96,767" href="sair.php"/>
    </map>
    </td>
    </tr>
</table>
</form>
</body>
</html>