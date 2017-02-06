<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PHP</title>
</head>
<body>
<?php
/* 
*HTML : bahasa program yang digunakan untuk membuat web.
* dibawah ini contoh pembuatan dasar html
*/
?>
<h2>Dasar PHP #1</h2>
<h4>Server Side </h4>
<h5> yaitu code yang datanya dinputkan, data tersebut maasuk ke database web "cloud" yang di atur oleh dba.scrip php di eksekusi di server yang hsilnya akan dikirimkan ke browser dalam bentuk html yang mana kde php tak terlihat.</h5>
<h4> HTML</h4>
<form name==”input data” action=”dta1.php” method=”post”>
<table border="1">
<tr>
<td>Nama</td>
<td>:</td>
<td><input type=”text” name=”nama” /></td>
</tr>
<td>NIM</td>
<td>:</td>
<td><input type=”text” name=”nim” /></td>
</tr>
<tr>
<td>Prodi</td>
<td>:</td>
<td><form method="post" action="#">
<input type="radio" name="tk" value="teknik"/>Teknik Komputer<br/>
<input type="radio" name="tk" value="manj"/>Manajemen Informatika<br/>
<br/>
</tr>
<tr>
<td>Jurusan</td>
<td>:</td>
<td><select id=”jurusan” name=”jurusan”>
<option value=”TE”>Teknik Elektro</option>
<option value=”TS”>Teknik Sipil</option>
<option value=”Ti”>Teknologi Informasi</option>
</select>
</td>
</tr>
<tr> 
<td> Alamat</td>
<td>:</td>
<td><textarea></textarea>
</table>
<table>
<tr>
<td><button type=”submit” name=”submit” value=”submit” /> Simpan </td>
<td></td>
<td><button type=”reset” name=”reset” value=”submit” /> Batal </td>
</table>
<h4> Control Structure</h4>
<h5>1. IF</h5>
if disini hanya akan dijalankan jika kondisi nya true
<?php
/** Code:
if(condisi) {
    #code...
}
*/
    $a=2;
    if($a>0) {
      //code yang akan dijalankan
    }
?>
<h5> 2. IF Else </h5>
<?php
/**
*if else : jika kondisi pada if benar maka akan di eksekusi dan jika kondisi if salah maka akan mengeksekusi yang ada di dalam else
* Code :
if(kondisi){
    #code...
}else{
    #code..
}
*/
$a=7;
if($a<3){
    //dijalankan bila kondisi nya benar
    echo "\$a kurang dari lima";
}else{
    //dijalan kan jika kondisi if salah
    echo "\$a lebih dari 5";
}
?>
<h5>3. Switch</h5>
<?php
/**
* Structur Switch
* switch berfungsi  untuk mencocokan variable dengan septiap case yang tertulis jika case cocok dengan variable, maka akan menjalan kan code di dalam case fungsi code break di dalam case adaah untuk menghentikan pengecekan
* Code :
    switch(var){
        case kondisi1:
            #code di eksekusi jika var=kondisi1;
            break;
        case kondisi2:
            #code di eksekusi jika var=kondisi2;
            break;
        default:
            code di eksekusi jika tidak ada yang sama dengan case;
    }
*/
$a=2;
switch ($a) {
    case 2:
        //di eksekusi jika a = 2
        echo " a = 2 ";
        break;
    case 4:
        //di eksekusi jika a = 4
        echo "a = 4";
        break;
		   default:
        //dieksekusi jika tidk sama dengan semua case
        echo "bukan 4 dan bukan 2";
        break;
}
?>
<h5>4. While</h5>
<?php
/**
* Perulangan While
* Code :
while(kondisi){
    # kode yang akan di ulangi
}
* kode didalam while akan di ulangi jika kondisi nya benar
*/
$a=1;
while ($a <= 10) {
    echo $a;
    $a++; //akan menambah nilai value dan operator ++ bisa diganti sesuai keinginan
}
?>
<h5> 5. FOR</h5>
code : <br/>
for (start; condition; increment) { <br/>
   statement;<br/>
}<br/>
<?php
for ($i=1;$i<=5;$i++) {
echo "Belajar PHP perulangan for";
echo "<br/>"; }
?>
<h4> Basic Syntax </h4>
1. < ?php   ?>  <br />
2. < html> <br/>
3. < bodey> <br/>
4. < title> <br/>
5. < border> <br/>
6. < div> <br/>
7. < tr> <br/>
8. /*. . . */
<h4> Data Strukture </h4>
<h5> 1. Stack (tumpukan)</h5>
# array_unshif() <br/>
# array_shift() <br/>
# array_push() <br/>
<?php
/*  Code :
$myBooks->push('The Armageddon Rag'); */
?>
# array_pop() 
<?php
/*  Code :
echo $myBooks->pop(); */
?>
<h5> 2. Antrian </h5>
# init : membuat antrian
# enqueue : menambahkan item ke "end" dari antrian
<?php /*
* Code :
$myBooks->enqueue('A Clash of Kings'); */
?>
# dequeue : menghapus item dri "depan" dari antrian
<?php 
/* Code :
 echo $myBooks->dequeue() . "n"; */
?>
# isEmpty : kembali apakah antrian berisi item
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
<h4> Escaping from HTML</h4>
echo : digunakan untuk mencetak nilai dari string atau pun variable dari string
<?
    echo ". . .";
?>
<h4> Operator </h4>
<h5> 1. Aritmathic </h5>
<?php
$a = 2;
$b = 3;
/*Operator ini adalah aritmatika yang di gunakan dalam operasi perhitungan*/
$tambah = $a + $b;
$kurang = $a - $b;
$kali = $a * $b;
$bagi = $a / $b;
$mod = $a % $b;

echo 'Arithmetic Operator <br><br>';

echo $tambah;
echo "penjumlahan";
echo "<br>";
echo $kurang;
echo "pengurangan";
echo "<br>";
echo $kali;
echo "perkalian";
echo "<br>";
echo $bagi;
echo "pembagian";
echo "<br>";
echo $mod;
echo "Modulo";
?>
<h5> 2. Assigment </h5>
Operator Assigment digunakan dengan numerik values untuk menulis sebuah values menjadi variable <br />
<?php
/*Basic dari assignment operator adalah "=".
/* Definisi*/
$a = 10;
echo $a;
echo '<br>';
/* Penambahan */
$a = 10;
$a += 100;
echo $a;
echo '<br>';
/* pengurangan */
$b = 50;
$b -= 10;
echo $b;
echo '<br>';
/*Perkalian*/
$c = 10;
$c *= 40;
echo $c;
echo '<br>';
/*  Pembagian*/
$d = 40;
$d /= 2;
echo $d;
echo '<br>';
/* modulus */
$e = 30;
$e %= 20;
echo $e;
echo '<br>';
?>
<h5> 3. Comparison </h5>

</body>
</html>
