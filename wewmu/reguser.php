<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!-- saved from url=(0032)http://localhost/news//index.php -->
<?php require 'config.php'; ?>
<?php require 'sql_inject.php'; ?>
<HTML><HEAD><TITLE><?php print $title; ?></TITLE>
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1"><LINK 
href="css.css" type=text/css rel=stylesheet>
<SCRIPT language=JavaScript src="jsfunc.js" 
type=text/javascript></SCRIPT>
<META content="MSHTML 6.00.2800.1400" name=GENERATOR>
<style type="text/css">
<!--
.style1 {font-size: 10}
-->
</style>
</HEAD>
<BODY bgcolor="#000000" leftMargin=9 topMargin=9>
<DIV align=center>
        </TR></TBODY></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=100% border=0>
        <TBODY>
        <TR>
<tr>
                  <th scope="col"><?PHP
srand(time());
$random = (rand()%9999);
?>
<table border="0" cellspacing="0" cellpadding="0" width="480">
  <tr> 
    <td> 
      <TABLE width="480" border=0 align=center cellPadding=5 cellSpacing=1 bordercolor="#000000" bgcolor="#000000" dwcopytype="CopyTableRow">
        <FORM method=post name=regform action=idreg.php>
          <TBODY>
            <TR bgcolor="#000000" class="content"> 
              <TD height="68" colSpan=2 align=right> <div align="center"><img src="registration.gif" width="379" height="36"></div></TD>
            </TR>
            <TR class="content"> 
              <TD width="105" align=right valign="top" bgcolor="#000000"> <div align="left"><font color="#999999" size="2.5" face="Tahoma, Arial">Login</font></div></TD>
                      <TD width="352" bgcolor="#000000"> <div align="left">
                        <input name="login" type="text" id="login" maxlength="10">
                            <B><font color="#999999" size="2.5" face="Tahoma, Arial">From <span class="style2">4</span> 
                            to <span class="style2">10</span> words.</font></B> 
                          </div></TD>
            </TR>
            <TR class="content"> 
              <TD align=right valign="top" bgcolor="#000000"> <div align="left"><font color="#999999" size="2.5" face="Tahoma, Arial">Name</font></div></TD>
                      <TD bgcolor="#000000"> <div align="left">
                        <input name="name" type="text" id="name" maxlength="10">
                            <B><font color="#999999" size="2.5" face="Tahoma, Arial">From <span class="style2">4</span> 
                            to <span class="style2">10</span> words.</font></B> 
                          </div></TD>
            </TR>
            <TR class="content"> 
              <TD valign="top" bgcolor="#000000"><div align="left"><font color="#999999" size="2.5" face="Tahoma, Arial">Password</font></div></TD>
                      <TD bgcolor="#000000"> <div align="left">
                        <input name="pw" type="password" id="login3" maxlength="10">
                            <B><font color="#999999" size="2.5" face="Tahoma, Arial">From <span class="style2">4</span> 
                            to <span class="style2">10</span> words.</font></B> 
                          </div></TD>
            </TR>
            <TR class="content"> 
              <TD valign="top" bgcolor="#000000"><div align="left"><font color="#999999" size="2.5" face="Tahoma, Arial">Re-Password</font></div></TD>
                      <TD bgcolor="#000000"> <div align="left">
                        <input name="cpw" type="password" id="login4" maxlength="10">
                            <B><font color="#999999" size="2.5" face="Tahoma, Arial">From <span class="style2">4</span> 
                            to <span class="style2">10</span> words.</font></B></div></TD>
            </TR>
            <TR class="content"> 
              <TD valign="top" bgcolor="#000000"><div align="left"><font color="#999999" size="2.5" face="Tahoma, Arial">E-mail</font></div></TD>
                      <TD bgcolor="#000000"> <div align="left">
                        <input name="email" type="text" id="email" maxlength="50">
                            <strong><font color="#999999" size="2.5" face="Tahoma, Arial">Needed to recover 
                            data.</font></strong></div></TD>
            </TR>
            <TR class="content"> 
                      <TD height="34" valign="top" bgcolor="#000000"><div align="left"><font color="#999999" size="2.5" face="Tahoma, Arial">ID 
                            Number</font></div></TD>
              <TD bgcolor="#000000"><div align="left">
                <input name="idnumb" type="text" id="idnumb" maxlength="12">
                            <strong><font color="#999999" size="2.5" face="Tahoma, Arial">Needed to recover 
                            data. </font></strong></div></TD>
            </TR>
            <TR class="content"> 
                      <TD height="32" valign="top" bgcolor="#000000"><div align="left"><font color="#999999" size="2.5" face="Tahoma, Arial">Secret 
                            Question</font></div></TD>
                      <TD bgcolor="#000000"> <div align="left">
                        <input name="squest" type="text" id="squest" maxlength="10">
                            <B><font color="#999999" size="2.5" face="Tahoma, Arial">Used to recover data.</font></B></div></TD>
            </TR>
            <TR class="content"> 
                      <TD valign="top" bgcolor="#000000"><div align="left"><font color="#999999" size="2.5" face="Tahoma, Arial">Secret 
                            Answer</font></div></TD>
                      <TD bgcolor="#000000"> <div align="left">
                        <input name="sansw" type="text" id="sansw" maxlength="10">
                            <B><font color="#999999" size="2.5" face="Tahoma, Arial">Used to recover data.</font></B></div></TD>
           
            </TR>
                      <tr align="center" bgcolor="#000000" class="content"> 
                        <TD 
            colSpan=2>
<input type="submit" name="Submit" value="Submit">
                          <input type="reset" name="Submit2" value="Reset"></TD>
            </TR>
        </form>
      </TABLE>
    </td>
  </tr>
</table></th>
                </tr>
              </table>
            </DIV>
            </TD>
        </TR>
        <TR>
          <TD class=headBG1 vAlign=center><div align="center"><SPAN class=textLogin><?php print $credits; ?> </SPAN></div></TD>
        </TR></TBODY></TABLE>
      </TD>
  </TR></TBODY></TABLE></DIV></BODY></HTML>
