<!doctype html public "-//w3c//dtd html 4.0 transitional//en">

<html>
  <head>
  	<title>Ranking de Pontuação</title>
  </head>
  <body bgcolor="#fdbe00">
    <div style="font-family: Arial, Helvetica, sans-serif; font-size: 26px; font-weight: bold;">
      <nobr>Pontua&ccedil;&atilde;o do Jogo da Mem&oacute;ria</nobr>
    </div>
    <br>
    <script type="text/javascript">
      <!--
	    document.write("    <table width=\"100%\" cellspacing=\"0\" cellpadding=\"4\" border=\"1\">");
        document.write("      <tr>");
        document.write("        <th align=\"left\">Ranking</th>");
        document.write("        <th align=\"left\">Pontos</th>");
        document.write("        <th align=\"left\">Nome</th>");
        document.write("        <th align=\"left\">Data</th>");
        document.write("        <th align=\"left\">Nível</th>");
        document.write("        <th align=\"left\">Tempo</th>");
        document.write("        <th align=\"left\">Tentativas</th>");
        document.write("      </tr>");
        
        if(opener.arrHighScore.length != null)
        {
          var n = opener.arrHighScore.length;
          for(var i = n - 1; i >= 0; i--)
          {
            document.write("      <tr>");
            document.write("        <td>" + (n - i) + "</td>");
            document.write("        <td>" + opener.arrHighScore[i].nPoints + "</td>");
            document.write("        <td>" + opener.arrHighScore[i].strName + "</td>");
            document.write("        <td>" + opener.arrHighScore[i].strDate + "</td>");
            document.write("        <td>" + opener.arrHighScore[i].nLevel + "</td>");
            document.write("        <td>" + opener.arrHighScore[i].nSeconds + "</td>");
            document.write("        <td>" + opener.arrHighScore[i].nAttempts + "</td>");
            document.write("      </tr>");
          }
        }
        document.write("    </table>");             
   //-->
    </script>
    
    <?php
	
	echo "teste";
	$texto = "<script>" . 'document.write(opener.arrHighScore[i].nPoints);' ."</script>";
	echo $texto;
	?> 
   
    <br>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="right"><a href="javascript:window.close()"><img src="images/close.gif" width="100" height="30" border="0" alt=""></a>
      </td>
      </tr>
    </table>
    <noscript>
      Este jogo precisa do JavaScript versão 1.2 ou superior.
    </noscript>
  </body>
</html>
