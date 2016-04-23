<!--Business Contact-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<title>Business Contact</title>
<meta name='viewport' content='width=1072'>
<meta name='Generator' content='Touch Forms for Mac 2.90'>
<meta name="keywords" content="">
<meta name="description" content="">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>

<!--Custom Header Code:0-->

<?php
$firstNumber=rand(0,9);
$secondNumber=rand(0,9);
$answerNumber=$firstNumber+$secondNumber;
$questionString="$firstNumber + $secondNumber=";
if (isset($_REQUEST['email']))
{$form1 = strip_tags($_REQUEST['form1']);
$form2 = strip_tags($_REQUEST['form2']);
$form4 = strip_tags($_REQUEST['form4']);
$form6 = nl2br(strip_tags($_REQUEST['form6']));
if($_SERVER["REQUEST_METHOD"] == "POST") { foreach($_POST as $key => $val) {if(is_array($_POST[$key])) $_POST[$key] = implode(", ", $_POST[$key]);}}
$form8=$_POST['form8'];
$headers="From:(null)\r\nContent-type:text/html\r\n";
$subject = 'Feedback from Business Contact';
mail('(null)', $subject, '<html><body><b>Name *</b><p>'.$form1.'<p><b>Phone</b><p>'.$form2.'<p><b>Email *</b><p>'.$form4.'<p><b>Feedback</b><p>'.$form6.'<p><b>Interested in the following service</b><p>'.$form8.'<p>', $headers);}

?>

<SCRIPT LANGUAGE='JavaScript'>
function validateEmail(email)
{ var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(".+"))@(([[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
return re.test(email);
}

function validateForm()
{
//FORMREDIRECTURLFORMREDIRECTURLEND
//FORMSUBMITSubmitFORMSUBMITEND
//FORMEMAILVERIFICATIONEmail address entered is invalid, please check and submit again.FORMEMAILVERIFICATIONEND
//FORMBOTCHECKERMSGBot checker answer incorrect, please try again.FORMBOTCHECKERMSGEND
var showRequiredAlert=0;
var x;
x=document.forms['untitled']['form4'].value;
if (x==null || x=='')
showRequiredAlert=1;

x=document.forms['untitled']['form1'].value;
if (x==null || x=='')
showRequiredAlert=1;

var showEmailAlert=0;
var emailX;
var validateFlag=true;

var showBotCheckerAlert=0;
var botCheckerValue;
if (showRequiredAlert==1)
{
alert('Required form fields are incomplete, please complete and submit again.');
//FORMMISSINGMSGRequired form fields are incomplete, please complete and submit again.FORMMISSINGMSGEND
return false;
}
if (showEmailAlert==1)
{
alert('Email address entered is invalid, please check and submit again.');
return false;
}
if (showBotCheckerAlert==1)
{
alert('Bot checker answer incorrect, please try again.');
return false;
}
else{
alert('Thank you for submitting this form.');
//FORMRESPONSEMSGThank you for submitting this form.FORMRESPONSEMSGEND
return true;
}
}
</SCRIPT>

<link href='http://fonts.googleapis.com/css?family=Actor|Poiret+One|Anton|' rel='stylesheet' type='text/css'>
<style type=text/css>


.tab {text-indent:40px;}
.text0{position:absolute;background-color:#FFFFFF;left:37px;top:228px;z-index:1;font-size:15px;color:#000000;width:1015px;height:641px;font-family:"Futura";padding:0px;border-style:solid;border-width:1px;text-align:left;border-radius:9px;-moz-border-radius:9px;fixed:0;shadowOpacity:0.000000;shadowRadius:0.000000;shadowOffSetY:0;textAlpha:1.000000;indentFlag:0;text-indent:0px;}.text0 a:link {text-decoration: none; color: #000000;}.text0 a:visited {text-decoration: none; color: #000000;formType:;formName:0;formOptionTag:-99;formRequiredFlag:0;}
.text1{position:absolute;left:60px;top:29px;z-index:2;font-size:40px;color:#FFFFFF;width:340px;height:46px;font-family:"Poiret One";padding:10px;border-style:none;border-width:1px;text-align:left;border-radius:1px;-moz-border-radius:1px;fixed:0;box-shadow: 0px 0px 0.000000px #000000;shadowOpacity:0.000000;shadowRadius:0.000000;shadowOffSetY:0;textAlpha:1.000000;indentFlag:0;text-indent:0px;}.text1 a:link {text-decoration: none; color: #FFFFFF;}.text1 a:visited {text-decoration: none; color: #FFFFFF;font-weight:normal;formType:;formTag:0;formOptionTag:-99;formRequiredFlag:0;}
.text2{position:absolute;background-color:#800000;left:71px;top:130px;z-index:3;font-size:15px;color:#000000;width:218px;height:75px;font-family:"Futura";padding:0px;border-style:none;border-width:1px;text-align:left;border-radius:0px;-moz-border-radius:0px;fixed:0;shadowOpacity:0.000000;shadowRadius:0.000000;shadowOffSetY:0;textAlpha:1.000000;indentFlag:0;text-indent:0px;}.text2 a:link {text-decoration: none; color: #000000;}.text2 a:visited {text-decoration: none; color: #000000;formType:;formName:0;formOptionTag:-99;formRequiredFlag:0;}
.text3{position:absolute;background-color:#555555;left:291px;top:130px;z-index:4;font-size:15px;color:#000000;width:218px;height:75px;font-family:"Futura";padding:0px;border-style:none;border-width:1px;text-align:left;border-radius:0px;-moz-border-radius:0px;fixed:0;shadowOpacity:0.000000;shadowRadius:0.000000;shadowOffSetY:0;textAlpha:1.000000;indentFlag:0;text-indent:0px;}.text3 a:link {text-decoration: none; color: #000000;}.text3 a:visited {text-decoration: none; color: #000000;formType:;formName:0;formOptionTag:-99;formRequiredFlag:0;}
.text4{position:absolute;background-color:#555555;left:511px;top:130px;z-index:5;font-size:15px;color:#000000;width:218px;height:75px;font-family:"Futura";padding:0px;border-style:none;border-width:1px;text-align:left;border-radius:0px;-moz-border-radius:0px;fixed:0;shadowOpacity:0.000000;shadowRadius:0.000000;shadowOffSetY:0;textAlpha:1.000000;indentFlag:0;text-indent:0px;}.text4 a:link {text-decoration: none; color: #000000;}.text4 a:visited {text-decoration: none; color: #000000;formType:;formName:0;formOptionTag:-99;formRequiredFlag:0;}
.text5{position:absolute;background-color:#555555;left:731px;top:130px;z-index:6;font-size:15px;color:#000000;width:218px;height:75px;font-family:"Futura";padding:0px;border-style:none;border-width:1px;text-align:left;border-radius:0px;-moz-border-radius:0px;fixed:0;shadowOpacity:0.000000;shadowRadius:0.000000;shadowOffSetY:0;textAlpha:1.000000;indentFlag:0;text-indent:0px;}.text5 a:link {text-decoration: none; color: #000000;}.text5 a:visited {text-decoration: none; color: #000000;formType:;formName:0;formOptionTag:-99;formRequiredFlag:0;}
.text6{position:absolute;left:50px;top:230px;z-index:7;font-size:35px;color:#4f4c4c;width:494px;height:43px;font-family:"Poiret One";padding:10px;border-style:none;border-width:1px;text-align:left;border-radius:1px;-moz-border-radius:1px;fixed:0;box-shadow: 0px 0px 0.000000px #000000;shadowOpacity:0.000000;shadowRadius:0.000000;shadowOffSetY:0;textAlpha:1.000000;indentFlag:0;text-indent:0px;}.text6 a:link {text-decoration: none; color: #4f4c4c;}.text6 a:visited {text-decoration: none; color: #4f4c4c;font-weight:normal;formType:;formTag:0;formOptionTag:-99;formRequiredFlag:0;}
.text7{position:absolute;left:69px;top:300px;z-index:8;font-size:25px;color:#4f4c4c;width:852px;height:41px;font-family:"Poiret One";padding:10px;border-style:none;border-width:1px;text-align:left;border-radius:1px;-moz-border-radius:1px;fixed:0;box-shadow: 0px 0px 0.000000px #000000;shadowOpacity:0.000000;shadowRadius:0.000000;shadowOffSetY:0;textAlpha:1.000000;indentFlag:0;text-indent:0px;}.text7 a:link {text-decoration: none; color: #4f4c4c;}.text7 a:visited {text-decoration: none; color: #4f4c4c;font-weight:normal;formType:;formTag:0;formOptionTag:-99;formRequiredFlag:0;}
.text8{position:absolute;left:71px;top:150px;z-index:9;font-size:32px;color:#FFFFFF;width:198px;height:34px;font-family:"Poiret One";padding:10px;border-style:none;border-width:1px;text-align:center;border-radius:1px;-moz-border-radius:1px;fixed:0;box-shadow: 0px 0px 0.000000px #000000;shadowOpacity:0.000000;shadowRadius:0.000000;shadowOffSetY:0;textAlpha:1.000000;indentFlag:0;text-indent:0px;}.text8 a:link {text-decoration: none; color: #FFFFFF;}.text8 a:visited {text-decoration: none; color: #FFFFFF;font-weight:normal;formType:;formTag:0;formOptionTag:-99;formRequiredFlag:0;}
.text9{position:absolute;left:289px;top:150px;z-index:10;font-size:32px;color:#FFFFFF;width:198px;height:34px;font-family:"Poiret One";padding:10px;border-style:none;border-width:1px;text-align:center;border-radius:1px;-moz-border-radius:1px;fixed:0;box-shadow: 0px 0px 0.000000px #000000;shadowOpacity:0.000000;shadowRadius:0.000000;shadowOffSetY:0;textAlpha:1.000000;indentFlag:0;text-indent:0px;}.text9 a:link {text-decoration: none; color: #FFFFFF;}.text9 a:visited {text-decoration: none; color: #FFFFFF;font-weight:normal;formType:;formTag:0;formOptionTag:-99;formRequiredFlag:0;}
.text10{position:absolute;left:510px;top:150px;z-index:11;font-size:32px;color:#FFFFFF;width:198px;height:34px;font-family:"Poiret One";padding:10px;border-style:none;border-width:1px;text-align:center;border-radius:1px;-moz-border-radius:1px;fixed:0;box-shadow: 0px 0px 0.000000px #000000;shadowOpacity:0.000000;shadowRadius:0.000000;shadowOffSetY:0;textAlpha:1.000000;indentFlag:0;text-indent:0px;}.text10 a:link {text-decoration: none; color: #FFFFFF;}.text10 a:visited {text-decoration: none; color: #FFFFFF;font-weight:normal;formType:;formTag:0;formOptionTag:-99;formRequiredFlag:0;}
.text11{position:absolute;left:730px;top:150px;z-index:12;font-size:32px;color:#FFFFFF;width:198px;height:34px;font-family:"Poiret One";padding:10px;border-style:none;border-width:1px;text-align:center;border-radius:1px;-moz-border-radius:1px;fixed:0;box-shadow: 0px 0px 0.000000px #000000;shadowOpacity:0.000000;shadowRadius:0.000000;shadowOffSetY:0;textAlpha:1.000000;indentFlag:0;text-indent:0px;}.text11 a:link {text-decoration: none; color: #FFFFFF;}.text11 a:visited {text-decoration: none; color: #FFFFFF;font-weight:normal;formType:;formTag:0;formOptionTag:-99;formRequiredFlag:0;}
.text12{position:absolute;left:60px;top:950px;z-index:13;font-size:20px;color:#D3D3D3;width:53px;height:31px;font-family:"Poiret One";padding:10px;border-style:none;border-width:1px;text-align:left;border-radius:1px;-moz-border-radius:1px;fixed:0;box-shadow: 0px 0px 0.000000px #000000;shadowOpacity:0.000000;shadowRadius:0.000000;shadowOffSetY:0;textAlpha:1.000000;indentFlag:0;text-indent:0px;}.text12 a:link {text-decoration: none; color: #D3D3D3;}.text12 a:visited {text-decoration: none; color: #D3D3D3;font-weight:normal;formType:;formTag:0;formOptionTag:-99;formRequiredFlag:0;}
.text13{position:absolute;left:150px;top:950px;z-index:14;font-size:20px;color:#D3D3D3;width:90px;height:31px;font-family:"Poiret One";padding:10px;border-style:none;border-width:1px;text-align:left;border-radius:1px;-moz-border-radius:1px;fixed:0;box-shadow: 0px 0px 0.000000px #000000;shadowOpacity:0.000000;shadowRadius:0.000000;shadowOffSetY:0;textAlpha:1.000000;indentFlag:0;text-indent:0px;}.text13 a:link {text-decoration: none; color: #D3D3D3;}.text13 a:visited {text-decoration: none; color: #D3D3D3;font-weight:normal;formType:;formTag:0;formOptionTag:-99;formRequiredFlag:0;}
.text14{position:absolute;left:270px;top:950px;z-index:15;font-size:20px;color:#D3D3D3;width:90px;height:31px;font-family:"Poiret One";padding:10px;border-style:none;border-width:1px;text-align:left;border-radius:1px;-moz-border-radius:1px;fixed:0;box-shadow: 0px 0px 0.000000px #000000;shadowOpacity:0.000000;shadowRadius:0.000000;shadowOffSetY:0;textAlpha:1.000000;indentFlag:0;text-indent:0px;}.text14 a:link {text-decoration: none; color: #D3D3D3;}.text14 a:visited {text-decoration: none; color: #D3D3D3;font-weight:normal;formType:;formTag:0;formOptionTag:-99;formRequiredFlag:0;}
.text15{position:absolute;left:380px;top:950px;z-index:16;font-size:20px;color:#D3D3D3;width:125px;height:31px;font-family:"Poiret One";padding:10px;border-style:none;border-width:1px;text-align:left;border-radius:1px;-moz-border-radius:1px;fixed:0;box-shadow: 0px 0px 0.000000px #000000;shadowOpacity:0.000000;shadowRadius:0.000000;shadowOffSetY:0;textAlpha:1.000000;indentFlag:0;text-indent:0px;}.text15 a:link {text-decoration: none; color: #D3D3D3;}.text15 a:visited {text-decoration: none; color: #D3D3D3;font-weight:normal;formType:;formTag:0;formOptionTag:-99;formRequiredFlag:0;}
.text16{position:absolute;left:60px;top:1010px;z-index:17;font-size:19px;color:#FFFFFF;width:467px;height:40px;font-family:"Poiret One";padding:10px;border-style:none;border-width:1px;text-align:left;border-radius:1px;-moz-border-radius:1px;fixed:0;box-shadow: 0px 0px 0.000000px #000000;shadowOpacity:0.000000;shadowRadius:0.000000;shadowOffSetY:0;textAlpha:1.000000;indentFlag:0;text-indent:0px;}.text16 a:link {text-decoration: none; color: #FFFFFF;}.text16 a:visited {text-decoration: none; color: #FFFFFF;font-weight:normal;formType:;formTag:0;formOptionTag:-99;formRequiredFlag:0;}
.text17{position:absolute;left:94px;top:383px;z-index:18;font-size:18px;color:#4f4c4c;width:76px;height:20px;font-family:"Anton";padding:10px;border-style:none;border-width:1px;text-align:left;border-radius:0px;-moz-border-radius:0px;fixed:0;box-shadow: 0px 0px 0.000000px #000000;shadowOpacity:0.000000;shadowRadius:0.000000;shadowOffSetY:0;textAlpha:1.000000;indentFlag:0;text-indent:0px;}.text17 a:link {text-decoration: none; color: #4f4c4c;}.text17 a:visited {text-decoration: none; color: #4f4c4c;font-weight:normal;formType:textLabel;formTag:1;formOptionTag:-99;formRequiredFlag:0;}
.text18{position:absolute;background-color:#FFFFFF;left:188px;top:383px;z-index:19;font-size:15px;color:#000000;width:299px;height:40px;font-family:"Futura";padding:0px;border-style:solid;border-width:1px;text-align:left;border-radius:0px;-moz-border-radius:0px;fixed:0;shadowOpacity:0.000000;shadowRadius:0.000000;shadowOffSetY:0;textAlpha:1.000000;indentFlag:0;text-indent:0px;}.text18 a:link {text-decoration: none; color: #000000;}.text18 a:visited {text-decoration: none; color: #000000;formType:text;formName:1;formOptionTag:-99;formRequiredFlag:1;}
.text19{position:absolute;left:94px;top:456px;z-index:20;font-size:18px;color:#4f4c4c;width:76px;height:20px;font-family:"Anton";padding:10px;border-style:none;border-width:1px;text-align:left;border-radius:0px;-moz-border-radius:0px;fixed:0;box-shadow: 0px 0px 0.000000px #000000;shadowOpacity:0.000000;shadowRadius:0.000000;shadowOffSetY:0;textAlpha:1.000000;indentFlag:0;text-indent:0px;}.text19 a:link {text-decoration: none; color: #4f4c4c;}.text19 a:visited {text-decoration: none; color: #4f4c4c;font-weight:normal;formType:textLabel;formTag:2;formOptionTag:-99;formRequiredFlag:0;}
.text20{position:absolute;background-color:#FFFFFF;left:189px;top:455px;z-index:21;font-size:15px;color:#000000;width:300px;height:40px;font-family:"Futura";padding:0px;border-style:solid;border-width:1px;text-align:left;border-radius:0px;-moz-border-radius:0px;fixed:0;shadowOpacity:0.000000;shadowRadius:0.000000;shadowOffSetY:0;textAlpha:1.000000;indentFlag:0;text-indent:0px;}.text20 a:link {text-decoration: none; color: #000000;}.text20 a:visited {text-decoration: none; color: #000000;formType:text;formName:2;formOptionTag:-99;formRequiredFlag:0;}
.text21{position:absolute;left:538px;top:383px;z-index:22;font-size:18px;color:#4f4c4c;width:77px;height:23px;font-family:"Anton";padding:10px;border-style:none;border-width:1px;text-align:left;border-radius:0px;-moz-border-radius:0px;fixed:0;box-shadow: 0px 0px 0.000000px #000000;shadowOpacity:0.000000;shadowRadius:0.000000;shadowOffSetY:0;textAlpha:1.000000;indentFlag:0;text-indent:0px;}.text21 a:link {text-decoration: none; color: #4f4c4c;}.text21 a:visited {text-decoration: none; color: #4f4c4c;font-weight:normal;formType:textLabel;formTag:4;formOptionTag:-99;formRequiredFlag:0;}
.text22{position:absolute;background-color:#FFFFFF;left:637px;top:383px;z-index:23;font-size:15px;color:#000000;width:300px;height:40px;font-family:"Futura";padding:0px;border-style:solid;border-width:1px;text-align:left;border-radius:0px;-moz-border-radius:0px;fixed:0;shadowOpacity:0.000000;shadowRadius:0.000000;shadowOffSetY:0;textAlpha:1.000000;indentFlag:0;text-indent:0px;}.text22 a:link {text-decoration: none; color: #000000;}.text22 a:visited {text-decoration: none; color: #000000;formType:text;formName:4;formOptionTag:-99;formRequiredFlag:1;}
.text23{position:absolute;left:94px;top:539px;z-index:24;font-size:17px;color:#4f4c4c;width:76px;height:20px;font-family:"Anton";padding:10px;border-style:none;border-width:1px;text-align:left;border-radius:0px;-moz-border-radius:0px;fixed:0;box-shadow: 0px 0px 0.000000px #000000;shadowOpacity:0.000000;shadowRadius:0.000000;shadowOffSetY:0;textAlpha:1.000000;indentFlag:0;text-indent:0px;}.text23 a:link {text-decoration: none; color: #4f4c4c;}.text23 a:visited {text-decoration: none; color: #4f4c4c;font-weight:normal;formType:textLabel;formTag:6;formOptionTag:-99;formRequiredFlag:0;}
.text24{position:absolute;background-color:#FFFFFF;left:189px;top:579px;z-index:25;font-size:15px;color:#000000;width:301px;height:200px;font-family:"Futura";padding:0px;border-style:solid;border-width:1px;text-align:left;border-radius:0px;-moz-border-radius:0px;fixed:0;shadowOpacity:0.000000;shadowRadius:0.000000;shadowOffSetY:0;textAlpha:1.000000;indentFlag:0;text-indent:0px;}.text24 a:link {text-decoration: none; color: #000000;}.text24 a:visited {text-decoration: none; color: #000000;formType:textarea;formName:6;formOptionTag:-99;formRequiredFlag:0;}
.text25{position:absolute;left:56px;top:1067px;z-index:26;font-size:18px;color:#F5F5F5;width:280px;height:30px;font-family:"Poiret One";padding:10px;border-style:none;border-width:1px;text-align:left;border-radius:0px;-moz-border-radius:0px;fixed:0;box-shadow: 0px 0px 0.000000px #000000;shadowOpacity:0.000000;shadowRadius:0.000000;shadowOffSetY:0;textAlpha:1.000000;indentFlag:0;text-indent:0px;}.text25 a:link {text-decoration: none; color: #F5F5F5;}.text25 a:visited {text-decoration: none; color: #F5F5F5;font-weight:normal;formType:;formTag:0;formOptionTag:-99;formRequiredFlag:0;}
.text26{position:absolute;left:873px;top:811px;z-index:27;font-size:20px;background-image:url(untitled/submit.png);background-repeat:	no-repeat;background-color:#FFFFFF;color:#808080;width:100px;height:20px;font-family:"Actor";padding:10px;border-style:solid;border-width:1px;text-align:center;border-radius:0px;-moz-border-radius:0px;fixed:0;opacity:0.000000;filter:alpha(opacity=0.000000);box-shadow: 0px 0px 0.000000px #000000;shadowOpacity:0.000000;shadowRadius:0.000000;shadowOffSetY:0;textAlpha:0.000000;indentFlag:0;text-indent:0px;formType:submit;formTag:7;formOptionTag:0;}
.submitButton{position:absolute;left:873px;top:811px;z-index:27;width:124px;height:44px;background-image:url(untitled/submit.png);background-repeat:no-repeat;text-indent:-999em;border:0;padding:0;margin:0;}
.text27{position:absolute;left:538px;top:516px;z-index:28;font-size:17px;color:#4f4c4c;width:388px;height:22px;font-family:"Anton";padding:10px;border-style:none;border-width:1px;text-align:center;border-radius:0px;-moz-border-radius:0px;fixed:0;box-shadow: 0px 0px 0.000000px #000000;shadowOpacity:0.000000;shadowRadius:0.000000;shadowOffSetY:0;textAlpha:1.000000;indentFlag:0;text-indent:0px;}.text27 a:link {text-decoration: none; color: #4f4c4c;}.text27 a:visited {text-decoration: none; color: #4f4c4c;font-weight:normal;formType:textLabel;formTag:8;formOptionTag:-99;formRequiredFlag:0;}
.text28{position:absolute;left:598px;top:571px;z-index:29;formType:checkbox;formTag:8;formOptionTag:1;}
.text29{position:absolute;left:628px;top:563px;z-index:30;font-size:17px;color:#4f4c4c;width:280px;height:21px;font-family:"Anton";padding:10px;border-style:none;border-width:1px;text-align:left;border-radius:0px;-moz-border-radius:0px;fixed:0;box-shadow: 0px 0px 0.000000px #000000;shadowOpacity:0.000000;shadowRadius:0.000000;shadowOffSetY:0;textAlpha:1.000000;indentFlag:0;text-indent:0px;}.text29 a:link {text-decoration: none; color: #4f4c4c;}.text29 a:visited {text-decoration: none; color: #4f4c4c;font-weight:normal;formType:textLabel;formTag:8;formOptionTag:1;formRequiredFlag:0;}
.text30{position:absolute;left:598px;top:616px;z-index:31;formType:checkbox;formTag:8;formOptionTag:2;}
.text31{position:absolute;left:628px;top:608px;z-index:32;font-size:17px;color:#4f4c4c;width:280px;height:21px;font-family:"Anton";padding:10px;border-style:none;border-width:1px;text-align:left;border-radius:0px;-moz-border-radius:0px;fixed:0;box-shadow: 0px 0px 0.000000px #000000;shadowOpacity:0.000000;shadowRadius:0.000000;shadowOffSetY:0;textAlpha:1.000000;indentFlag:0;text-indent:0px;}.text31 a:link {text-decoration: none; color: #4f4c4c;}.text31 a:visited {text-decoration: none; color: #4f4c4c;font-weight:normal;formType:textLabel;formTag:8;formOptionTag:2;formRequiredFlag:0;}
.text32{position:absolute;left:598px;top:661px;z-index:33;formType:checkbox;formTag:8;formOptionTag:3;}
.text33{position:absolute;left:628px;top:653px;z-index:34;font-size:17px;color:#4f4c4c;width:280px;height:21px;font-family:"Anton";padding:10px;border-style:none;border-width:1px;text-align:left;border-radius:0px;-moz-border-radius:0px;fixed:0;box-shadow: 0px 0px 0.000000px #000000;shadowOpacity:0.000000;shadowRadius:0.000000;shadowOffSetY:0;textAlpha:1.000000;indentFlag:0;text-indent:0px;}.text33 a:link {text-decoration: none; color: #4f4c4c;}.text33 a:visited {text-decoration: none; color: #4f4c4c;font-weight:normal;formType:textLabel;formTag:8;formOptionTag:3;formRequiredFlag:0;}
.text34{position:absolute;left:598px;top:706px;z-index:35;formType:checkbox;formTag:8;formOptionTag:4;}
.text35{position:absolute;left:628px;top:698px;z-index:36;font-size:17px;color:#4f4c4c;width:280px;height:21px;font-family:"Anton";padding:10px;border-style:none;border-width:1px;text-align:left;border-radius:0px;-moz-border-radius:0px;fixed:0;box-shadow: 0px 0px 0.000000px #000000;shadowOpacity:0.000000;shadowRadius:0.000000;shadowOffSetY:0;textAlpha:1.000000;indentFlag:0;text-indent:0px;}.text35 a:link {text-decoration: none; color: #4f4c4c;}.text35 a:visited {text-decoration: none; color: #4f4c4c;font-weight:normal;formType:textLabel;formTag:8;formOptionTag:4;formRequiredFlag:0;}
.text36{position:absolute;left:599px;top:747px;z-index:37;formType:checkbox;formTag:8;formOptionTag:5;}
.text37{position:absolute;left:630px;top:739px;z-index:38;font-size:17px;color:#4f4c4c;width:280px;height:21px;font-family:"Anton";padding:10px;border-style:none;border-width:1px;text-align:left;border-radius:0px;-moz-border-radius:0px;fixed:0;box-shadow: 0px 0px 0.000000px #000000;shadowOpacity:0.000000;shadowRadius:0.000000;shadowOffSetY:0;textAlpha:1.000000;indentFlag:0;text-indent:0px;}.text37 a:link {text-decoration: none; color: #4f4c4c;}.text37 a:visited {text-decoration: none; color: #4f4c4c;font-weight:normal;formType:textLabel;formTag:8;formOptionTag:5;formRequiredFlag:0;}
table, td, th{border:0px solid black; padding:0px;text-align:left;vertical-align:top;}



@media(-webkit-min-device-pixel-ratio: 2) {.submitButton{position:absolute;left:873px;top:811px;z-index:27;background-size:124px 44px !important;background-image:url(untitled/submit@2x.png);background-repeat:no-repeat;text-indent:-999em;border:0;padding:0;margin:0;}
}
</style></head>

<body bgcolor=#000000>
<div id=content><form name=untitled action=untitled.php onsubmit="return validateForm();" method=post>

<div class=text0></div>
<div class=text1>BUSINESS NAME</div>
<div class=text2></div>
<div class=text3></div>
<div class=text4></div>
<div class=text5></div>
<div class=text6>Thank you for visiting us</div>
<div class=text7>To get in touch with our company, please complete this Contact Form.</div>
<div class=text8>HOME</div>
<div class=text9>PRODUCTS</div>
<div class=text10>CLIENTS</div>
<div class=text11>CONTACT</div>
<div class=text12>Home</div>
<div class=text13>Products</div>
<div class=text14>Clients</div>
<div class=text15>Contact Us</div>
<div class=text16><a href=http://htmlegg.aidaluu.com target=_self>&copy; Business Name<br></a></div>
<div class=text17>Name *</div>
<input class=text18 type="text" name=form1 required>
<div class=text19>Phone</div>
<input class=text20 type="text" name=form2>
<div class=text21>Email *</div>
<input class=text22 type="text" name=form4 required>
<div class=text23>Feedback</div>
<textarea class=text24 cols=30 rows=20 name=form6></textarea>
<div class=text25><a href=http://touchforms.aidaluu.com target=_self>Powered by Touch Forms</a></div>
<input class=submitButton type="submit" name=form7>
<div class=text27>Interested in the following service</div>
<input class=text28 type="checkbox" value="Sales" name="form8[]">
<div class=text29>Sales</div>
<input class=text30 type="checkbox" value="General Production Info" name="form8[]">
<div class=text31>General Production Info</div>
<input class=text32 type="checkbox" value="Consulting" name="form8[]">
<div class=text33>Consulting</div>
<input class=text34 type="checkbox" value="Customer Service" name="form8[]">
<div class=text35>Customer Service</div>
<input class=text36 type="checkbox" value="Media Inquiries" name="form8[]">
<div class=text37>Media Inquiries</div>



<input type="hidden" name=email value="email"></form>

</div></body></html>