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
        </TR></TBODY></TABLE><body bgcolor="#000000" text="#999999">
      <TABLE cellSpacing=0 cellPadding=0 width=100% border=0>
        <TBODY>
        <TR>    
              </table>
            <table width="100%" height="5%" border="0.5">
                <tr>
                </tr>
                <tr>
                  <th scope="col"><p>&nbsp;</p>
      <p>
        <?php
$login = stripslashes($_POST['login']);
$name = stripslashes($_POST['name']);
$email = stripslashes($_POST['email']);
$idnumb = stripslashes($_POST['idnumb']);
$pw = stripslashes($_POST['pw']);
$cpw = stripslashes($_POST['cpw']);
$sques = stripslashes($_POST['squest']);
$sansw = stripslashes($_POST['sansw']);
$extcode = stripslashes($_POST['extcode']);
$extcode1 = stripslashes($_POST['code']);
$sql_email_check = mssql_query("SELECT mail_addr FROM MEMB_INFO WHERE mail_addr='$email'"); 
$sql_username_check = mssql_query("SELECT memb___id FROM MEMB_INFO WHERE memb___id='$login'"); 
$email_check = mssql_num_rows($sql_email_check); 
$username_check = mssql_num_rows($sql_username_check); 

if (($email_check > 0) || ($username_check > 0) || empty($login) || empty($name) || empty($email) || empty($idnumb) || empty($pw) || empty($cpw) || empty($sques) || empty($sansw)) 
{ 
    echo "Error: <br />"; 
	
	if (empty($login) || empty($name) || empty($email) || empty($idnumb) || empty($pw) || empty($cpw) || empty($sques) || empty($sansw))
{ 
echo "Some Fields were left blank. Please go back and try again.";
}

    elseif($email_check > 0){ 
        echo "'$email' has already been used by another member 
        in our database. Please submit a different Email address!<br />"; 
        $Error=1;
    } 
    elseif ($username_check > 0)
	{ 
        echo "'$login' has already been used by another member 
         in our database. Please choose a different Username.<br />"; 
         $Error=1;
    } 
elseif ($pw != $cpw) 
{
	echo "<br />The passwords you entered do not match.";  $Error=1;
}
elseif ($extcode != $extcode1) 
{
	echo "<br />You entered a bad code.";  $Error=1;
}

}
else
{
$msquery2 = "SET IDENTITY_INSERT MEMB_INFO ON";
$msquery3 = "INSERT INTO MEMB_INFO (memb_guid,memb___id,memb__pwd,memb_name,sno__numb,post_code,addr_info,addr_deta,tel__numb,mail_addr,phon_numb,fpas_ques,fpas_answ,job__code,appl_days,modi_days,out__days,true_days,mail_chek,bloc_code,ctl1_code) VALUES ('1','$login','$pw','$name', '1','1234','11111','$idnumb','12343','$email','$email','$sques','$sansw','1','2003-11-23','2003-11-23','2003-11-23','2003-11-23','1','0','1')";
$msquery4 = "INSERT INTO VI_CURR_INFO (ends_days,chek_code,used_time,memb___id,memb_name,memb_guid,sno__numb,Bill_Section,Bill_value,Bill_Hour,Surplus_Point,Surplus_Minute,Increase_Days )  VALUES ('2005','1',1234,'$login','$name',1,'7','6','3','6','6','2003-11-23 10:36:00','0' )";
$msresults= mssql_query($msquery2);
$msresults= mssql_query($msquery3);
$msresults= mssql_query($msquery4);
echo "<p align='center'>Accounts successfully created.</p> <br><p align='left'>Login ID: $login<br>
          Name:  $name <br>
          E-mail: $email<br>
          ID Number: $idnumb<br>
          Password: $pw<br>
          Question: $sques<br>
          Answer: $sansw </p>";
}
?>
      </p></th>
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
