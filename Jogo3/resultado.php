<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>
  <?php
include ("../include/conexao.php");

$resultado = mysql_query ("select * from jogo1 order by pontos desc");
echo '    <table width="100%" cellspacing="0" cellpadding="4" border="1">';
      echo '      <tr>';
	  echo '        <th align="left">Posição</th>';
      echo '        <th align="left">Pontos</th>';
      echo '        <th align="left">Nome</th>';
      echo '        <th align="left">Data/Hora</th>';
      echo '        <th align="left">Nível</th>';
      echo '        <th align="left">Tempo</th>';
      echo '        <th align="left">Tentativas</th>';
      echo '      </tr>';
$i = 1;
while ($campos = mysql_fetch_array ($resultado))
{
	$cod = $campos["cod"];
	$posicao = $campos["posicao"];
	$pontos = $campos["pontos"];
	$nome = $campos["nome"];
	$datahora = $campos["datahora"];
	$nivel = $campos["nivel"];
	$tempo = $campos["tempo"];
	$tentativa = $campos["tentativa"];
	
		echo '      <tr>';
		echo '        <td>' . "$i" . '</td>';
        echo '        <td>' . "$nome" . '</td>';
        echo '        <td>' . "$pontos" . '</td>';
        echo '        <td>' . "$datahora" . '</td>';
        echo '        <td>' . "$nivel" . '</td>';
        echo '        <td>' . "$tempo" . '</td>';
        echo '        <td>' . "$tentativa" . '</td>';
        $i++;
}

echo '    </table>';

?>
<p>&nbsp;</p>
</body>
</html>
