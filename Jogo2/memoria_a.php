<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Jogo da Memória do Taguinho</title>
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
body {
	background-color: #9a40ef;
}
-->
    </style>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body text="#FFFFFF" onLoad="loadImages(8, 1, 1);" oncontextmenu='return false' onselectstart='return false' ondragstart='return false'>
    <div align="center">
    <img src="images/jogo_titulo.jpg" width="625" height="86"  align="middle" />
</div>
    <table border="0" cellpadding="0" cellspacing="0" align="center">
      <tr>
        <td colspan="5"><img name="memory_id" src="images/10.gif" width="456" height="5" border="0" alt=""></td>
      </tr>
      <tr>
        <td width="636">
          <table cellspacing="0" cellpadding="2" border="0">
            <tr>
              <td><a href="javascript:showCard(0)"><img name="card1" src="images/card.jpg" width="155" height="135" border="0" alt=""></a></td>
              <td><a href="javascript:showCard(1)"><img name="card2" src="images/card.jpg" width="155" height="135" border="0" alt=""></a></td>
              <td><a href="javascript:showCard(2)"><img name="card3" src="images/card.jpg" width="155" height="135" border="0" alt=""></a></td>
              <td><a href="javascript:showCard(3)"><img name="card4" src="images/card.jpg" width="155" height="135" border="0" alt=""></a></td>
            </tr>
            <tr>
              <td><a href="javascript:showCard(4)"><img name="card5" src="images/card.jpg" width="155" height="135" border="0" alt=""></a></td>
              <td><a href="javascript:showCard(5)"><img name="card6" src="images/card.jpg" width="155" height="135" border="0" alt=""></a></td>
              <td><a href="javascript:showCard(6)"><img name="card7" src="images/card.jpg" width="155" height="135" border="0" alt=""></a></td>
              <td><a href="javascript:showCard(7)"><img name="card8" src="images/card.jpg" width="155" height="135" border="0" alt=""></a></td>
            </tr>
            <tr>
              <td><a href="javascript:showCard(8)"><img name="card9" src="images/card.jpg" width="155" height="135" border="0" alt=""></a></td>
              <td><a href="javascript:showCard(9)"><img name="card10" src="images/card.jpg" width="155" height="135" border="0" alt=""></a></td>
              <td><a href="javascript:showCard(10)"><img name="card11" src="images/card.jpg" width="155" height="135" border="0" alt=""></a></td>
              <td><a href="javascript:showCard(11)"><img name="card12" src="images/card.jpg" width="155" height="135" border="0" alt=""></a></td>
            </tr>
            <tr>
              <td><a href="javascript:showCard(12)"><img name="card13" src="images/card.jpg" width="155" height="135" border="0" alt=""></a></td>
              <td><a href="javascript:showCard(13)"><img name="card14" src="images/card.jpg" width="155" height="135" border="0" alt=""></a></td>
              <td><a href="javascript:showCard(14)"><img name="card15" src="images/card.jpg" width="155" height="135" border="0" alt=""></a></td>
              <td><a href="javascript:showCard(15)"><img name="card16" src="images/card.jpg" width="155" height="135" border="0" alt=""></a></td>
            </tr>
          </table>        </td>
        <td width="10"><img src="images/blank.gif" width="10" height="1" border="0" alt=""></td>
        <td width="90" align="left" valign="top">
          <div align="center">
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><img src="images/blank.gif" width="90" height="2" border="0" alt=""></td>
              </tr>
              <TR>
              <td>
              <p>&nbsp;</p>
              </td>
              </TR>
              <tr>
                <td><a href="javascript:startGame()"><img src="images/startstop1.gif" width="90" height="36" border="0" alt=""></a>
                </td>
              </tr>
              <tr>
                <td><img src="images/blank.gif" width="90" height="2" border="0" alt=""></td>
              </tr>
              <tr>
                <td><a href="javascript:stopGame()"><img src="images/startstop4.gif" width="90" height="36" border="0" alt=""></a></td>
              </tr>
              <tr>
                <td><img src="images/blank.gif" width="90" height="5" border="0" alt=""></td>
              </tr>
              <tr>
                <td><img src="images/level.gif" width="90" height="36" border="0" alt=""></td>
              </tr>
              <tr>
                <td>
                  <table cellspacing="0" cellpadding="0" border="0">
                    <tr bgcolor="f9ce3a">
                      <td><img src="images/10.gif" width="8" height="17" border="0" alt=""></td>
                      <td><a href="javascript:setLevel(-1)"><img src="images/plusminus3.gif" width="15" height="17" border="0" alt=""></a></td>
                      <td><img src="images/10.gif" width="15" height="17" border="0" alt=""></td>
                      <td><img src="images/4.gif" width="15" height="17" border="0" alt=""></td>
                      <td><img src="images/10.gif" width="15" height="17" border="0" alt=""></td>
                      <td><a href="javascript:setLevel(1)"><img src="images/plusminus1.gif" width="15" height="17" border="0" alt=""></a></td>
                      <td><img src="images/10.gif" width="7" height="17" border="0" alt=""></td>
                    </tr>
                  </table>                </td>
              </tr>
              <tr>
                <td><img src="images/10.gif" width="90" height="3" border="0" alt=""></td>
              </tr>
              <tr>
                <td><img src="images/blank.gif" width="90" height="10" border="0" alt=""></td>
              </tr>
              <tr>
                <td><img src="images/time.gif" width="90" height="36" border="0" alt=""></td>
              </tr>
              <tr>
                <td>
                  <table cellspacing="0" cellpadding="0" border="0">
                    <tr bgcolor="#9999FF">
                      <td><img src="images/10.gif" width="15" height="17" border="0" alt=""></td>
                      <td><img src="images/10.gif" width="15" height="17" border="0" alt=""></td>
                      <td><img src="images/10.gif" width="15" height="17" border="0" alt=""></td>
                      <td><img src="images/10.gif" width="15" height="17" border="0" alt=""></td>
                      <td><img src="images/10.gif" width="15" height="17" border="0" alt=""></td>
                      <td><img src="images/s.gif" width="15" height="17" border="0" alt=""></td>
                    </tr>
                  </table>                </td>
              </tr>
              <tr>
                <td><img src="images/blank.gif" width="90" height="10" border="0" alt=""></td>
              </tr>
              <tr>
                <td><img src="images/attempts.gif" width="90" height="20" border="0" alt=""></td>
              </tr>
              <tr>
                <td>
                  <table cellspacing="0" cellpadding="0" border="0">
                    <tr bgcolor="#9999FF">
                      <td><img src="images/10.gif" width="15" height="17" border="0" alt=""></td>
                      <td><img src="images/10.gif" width="15" height="17" border="0" alt=""></td>
                      <td><img src="images/10.gif" width="15" height="17" border="0" alt=""></td>
                      <td><img src="images/10.gif" width="15" height="17" border="0" alt=""></td>
                      <td><img src="images/10.gif" width="15" height="17" border="0" alt=""></td>
                      <td><img src="images/10.gif" width="15" height="17" border="0" alt=""></td>
                    </tr>
                  </table>                </td>
              </tr>
              <tr>
                <td><img src="images/blank.gif" width="90" height="10" border="0" alt=""></td>
              </tr>
              <tr>
                <td><img src="images/found.gif" width="90" height="20" border="0" alt=""></td>
              </tr>
              <tr>
                <td>
                  <table cellspacing="0" cellpadding="0" border="0">
                    <tr bgcolor="#f9ce3a">
                      <td><img src="images/10.gif" width="15" height="17" border="0" alt=""></td>
                      <td><img src="images/10.gif" width="15" height="17" border="0" alt=""></td>
                      <td><img src="images/10.gif" width="15" height="17" border="0" alt=""></td>
                      <td><img src="images/10.gif" width="15" height="17" border="0" alt=""></td>
                      <td><img src="images/10.gif" width="15" height="17" border="0" alt=""></td>
                      <td><img src="images/10.gif" width="15" height="17" border="0" alt=""></td>
                    </tr>
                  </table>                </td>
              </tr>
              <tr>
                <td><img src="images/blank.gif" width="90" height="10" border="0" alt=""></td>
              </tr>
              <tr>
                <td><a href="javascript:showHighScore()"><img src="images/highscore.gif" width="90" height="24" border="0" alt=""></a></td>
              </tr>
              <tr>
                <td><img src="images/blank.gif" width="90" height="10" border="0" alt=""></td>
              </tr>
              <tr>
                <td  align="center" bgcolor="#3582D0"><a href="memoria_b.php"><img src="images/fase_II.gif" width="90" height="24" border="0" alt=""></a></td>
              </tr>
              <tr>
                <td><img src="images/blank.gif" width="90" height="10" border="0" alt=""></td>
              </tr>
              <tr>
                <td  align="center" bgcolor="#3582D0"><a href="../menu.php"><img src="images/voltar.gif" width="90" height="24" border="0" alt=""></a></td>
              </tr>
            </table>
        </div></td>
        <td width="25" align="left" valign="top">&nbsp;</td>
        <td width="378" align="left" valign="top"><img src="images/taguinho.jpg" alt="" width="355" height="279" align="middle"></td>
      </tr>
</table>
  <noscript>
      Este jogo precisa do JavaScript versão 1.2 ou superior.
  </noscript>
  </body>
</html>
