<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Constant</title>
</head>
<body>
<h4>Constant</h4>
constant hampir sama dengan variabel namun nilainya tidak dapat dirubah atau di modifikasi laaknya variabel dan sifat ari constant itu sendiri yaitu global terhadap semua script. Pembuatan Constant ada beberpa cara yaitu ; <br/>
a. define.<br/>
Parameter penyusunnya adalah :<br/>
#Name : menjelaskan nama constant <br/>
#value : menjelaskan nilai dari constant <br/>
#Case-insensitive : menspesifikasi case-insensitive dari nama constant. kondisi defaulnya adalah false<br/>
Code :  define(name, value, case-insensitive);<br/>
b. Case-sensitive
<?php
define("Company","DKC Consulting");
echo Company;
?>
c. Case-insensitive
<?php
define("company","DKC Consulting">;
echo company;
?>

</body>
</html>
