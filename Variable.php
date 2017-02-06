<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<h4> variabel</h4>
<h5> 1. Array </h5>
<?php
/*
* Variabel : lokasi penyimpanan yng berisikan informasi dan nilai yang tidak dapat diketahui 
* 1. array : kumpulan variabel bertipe sama dengan pernyataan nama yang sama.
*/
$angka =[1,2,3,4,5,6];
var_dump($angka);
?>
<h5>2. Boolean</h5>
Tipe data Boolean <Bernilai true atau false.>
ex : 
<?php
$ada = true;
if($ada == TRUE){
echo "NIM Terdaftar";
}else {
echo "Maaf NIM anda tidak terdaftar";
}
?>
<h5>3. Constant</h5>
<?php
/* constant : lokasi penyimpanan data/nilai yang nilainya tidak dapat dirubah
*/
define ("Pi", 3.141592); 
echo Pi;
?>
<h5> 4. Integer</h5>
Tipe data ini hanya digunakan jika bilangan yang digunakan bilangan bulat.
<?php
   $umur=21;
   $harga=15000;
   $rugi=-500000;
 
   echo $umur; //21
   echo "<br />";
   echo $harga; //15000
   echo "<br />";
   echo $rugi; //-500000
?>
<h5> 5. Float </h5>
tipe data ini digunakan untuk bilangan yang memiliki bagian desimal di akhir angka ".", ex 9,4.   
<?php
   $angka_float1= 0.78;
   $angka_float2= 14.99;
   $angka_scientific1=0.314E1;
   $angka_scientific2=0.3365E-3;

   echo $angka_float1; // 0.78
   echo "<br />";
   echo $angka_float2; //14.99
   echo "<br />";
   echo $angka_scientific1; //3.14
   echo "<br />";
   echo $angka_scientific2; //0.0003365
?>
<h5> 6. String </h5>
tipe data ini hanya digunakan untuk data berupa text,kalimat dan karakter.
<?php
$string1='Ini adalah string sederhana';
$string2='Anda telah berhasil menghapus C:\\xampp\\htdoc';
$string3='Kalimat ini tidak akan pindah ke: \n baris baru';
$string4='Variabel juga tidak otomatis ditampilkan $string1 dan $string3';
 
echo $string1; echo "<br>";
echo $string2; echo "<br>";
echo $string3; echo "<br>";
echo $string4; 
?>
<h4> Escaping from HTML</h4>
echo : digunakan untuk mencetak nilai dari string atau pun variable dari string
<?
    echo ". . .";
?>
</body>
</html>
