<?php

if(!isset($_SESSION))
{
    session_start();
}
if(isset($_SESSION['hospital']))
{
  header('Location:index.php');

}
else{

 ?>


<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Hospital</title>
<link href="bootstrap/css/bootstrap.min.css" media="all" rel="stylesheet" type="text/css">
<style media="screen">
.navigation_bottom_border01 {
  border-bottom: 3px solid #000000;
  line-height: 5px;
}
.top_border {
    background-image: url(img/top_border.jpg);
    background-repeat: repeat-x;
    line-height: 7px;
}




.login-bg { background-image:url(../images/login-bg.jpg); background-repeat:repeat-x; background-position:center-top; border:1px solid #cecece;}

.heading-login {font-family: Calibri,Arial, Helvetica, sans-serif; font-size:30px; color:#40aa05; text-decoration:none;padding: 7px;}

.heading-black {font-family: Calibri,Arial, Helvetica, sans-serif; font-size:18px; line-height:20px; color:#413f3f; text-decoration:none;padding: 7px;}



</style>



</head>

<body>


<form name="login" id="login" action="login_check.php" method="post" >
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td>
    <!--starts header -->
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td height="7" colspan="2" class="top_border"></td>
        </tr>
      <tr>
        <td width="25%" height="131" rowspan="2" class="navigation_bottom_border01" style="padding-left:25px;"><a href="index.php"><h1>admin</h1></a></td>
        <td width="75%" valign="top">&nbsp;</td>
      </tr>

      <tr>
        <td valign="bottom"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tbody><tr>
            <td width="935" class="navigation_bottom_border01">&nbsp;</td>
            <td width="700" class="navigation_bottom_border01">&nbsp;</td>

          </tr>
        </tbody></table></td>
      </tr>
    </tbody></table>
    </td>
  </tr>
  <tr>
    <td height="15">&nbsp;</td>
  </tr>
  <tr>
    <td>
     </td>
  </tr>

  <tr>
    <td valign="top"><table width="98%" border="0" align="center" cellpadding="2" cellspacing="0">

      <tbody><tr>
        <td height="400"><table width="485" border="0" align="center" cellpadding="0" cellspacing="0">
          <tbody><tr>
            <td height="236" class="login-bg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tbody><tr>
                <td>&nbsp;</td>
                <td class="heading-login">Admin Login Area</td>
              </tr>
              <tr>
                <td width="29%"><img src="img/login-icon.png" width="141" height="133" border="0"></td>
                <td width="71%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="3">
                  <tbody><tr>
                    <td height="30" colspan="2" class="heading-black">Please enter your Emp ID and password</td>
                    </tr>
                  <tr>
                    <td width="20%" align="right" class=" username" style="padding:7px;">Emp Id:</td>
                    <td width="80%"><input type="text" name="username" id="username" class="textfield form-control" style="height:15px; width:200px;"></td>
                  </tr>
                  <tr>
                    <td align="right" class=" username"  style="padding:7px;">Password:</td>
                    <td><input type="password" name="userpass" id="userpass" class="textfield form-control" style="height:15px; width:200px;"></td>
                  </tr>

                  <tr>
                    <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tbody><tr>
                        <td width="64%" class="forgot"></td>
                        <td width="36%" align="left"><input type="image" src="img/login_button.jpg" width="57" height="23" border="0"></td>
                      </tr>
                    </tbody></table></td>
                    </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="2"><a href="forgot.php" style="float: right;
    margin-right: 10%;
    font-size: 12px;">Forgot Password</a></td>

                  </tr>
                </tbody></table></td>
              </tr>
            </tbody></table></td>
          </tr>
        </tbody></table></td>
      </tr>


    </tbody></table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><!-- #BeginLibraryItem "/Library/fotter.lbi" --><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tbody><tr class="text">
        <td width="33%" height="30" class="sigma"></td>
        <td width="34%" align="center" class="report_bug">&nbsp;</td>
  </tr>
    </tbody></table><!-- #EndLibraryItem --></td>
  </tr>
</tbody></table>
</form>


</body></html>


<?php } ?>
