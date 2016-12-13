<!doctype html public "-//w3c//dtd html 4.0 transitional//en">

<html>
  <head>
  	<title>Pontuação do Jogo da Memória</title>
    <script language="JavaScript1.2" src="memory.js" type="text/javascript"></script>
  <link href="images/default.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
<!--
.style1 {color: #FFFFFF}
body,td,th {
	font-size: 18px;
	color: #FFF;
}
a:link {
	color: #FFF;
}
-->
    </style>
  </head>
  <body bgcolor="#FFFF99">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="40" align="left">&nbsp;</td>
        <td align="left">
          <div style="font-family: Arial, Helvetica, sans-serif; font-size: 26px; font-weight: bold;">
            <nobr>Ranking do Jogo</nobr>
          </div>
        </td>
        
      </tr>
    </table>

    <p><br>
      <?php
	 include "../include/conexao.php";
      // Sort function called by usort
      function sortfunc($val1, $val2) {
        return ($val1["p"] < $val2["p"]);
      }

      // Read the scorefile into an array
      $i = 0;
      $fp = fopen("memory_highscore.dat", "r");
      while($strLine = fgets($fp, 100)) {
        $arr = split(chr(9), $strLine);
        $arrarr{$i} = array("p" => $arr[0], "n" => $arr[1], "d" => $arr[2], "l" => $arr[3], "t" => $arr[4], "a" => $arr[5]);
        $i++;
      }
      fclose($fp);
      
      // Sort the array
      usort($arrarr, sortfunc);

      // Output as table
      echo '    Cadastro Realizado Com Sucesso !!!';
      
      $i = 1;
      while(list($id, $val) = each($arrarr)) {
        $p = $arrarr{$id}{"p"};
        $n = $arrarr{$id}{"n"};
        $d = $arrarr{$id}{"d"};
        $l = $arrarr{$id}{"l"};
        $t = $arrarr{$id}{"t"};
        $a = $arrarr{$id}{"a"};
        $i++;
      }
        
	   $sql = "REPLACE INTO jogo2 VALUES ('','$i','$p','$n','$d','$l','$t','$a')";
	   mysql_query($sql);
	
	
	$resultado = mysql_query ("select * from jogo2 order by pontos desc");
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
    <table width="200" border="0">
      <tr>
        <td align="center">
          <a href="javascript:window.close()"><img src="images/close.gif" width="100" height="30" border="0" alt=""></a>
        </td>
      </tr>
    </table>
   <p><!-- </p>
    <table width="200" border="1">
      <tr>
        <td><a href="resultado.php">Ver Ranking</a></td>
      </tr>
    </table>
    <p>&nbsp;</p> -->
  </body>
</html>
