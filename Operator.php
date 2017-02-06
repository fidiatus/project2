<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
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
a. Operator Assigment digunakan dengan numerik values untuk menulis sebuah values menjadi variable. pada Operator Assigment 2 variabel yang berbeda jika ditambahkan salah satunya maka variabel yang lain tidak ikut berubah meskipun yang lain itu copyannya. <br />
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
b. Assigment by references<br/>
Assigment by reference ini yaitu ketika ada 2 buah variabel A dan B, dimana A memiliki nilai sendiri dan nilai B adalah copyan A, jika nilai A di rubah maka nilai b juga ikut berubah.
<?php
$a = 20;
$b = &$a;

echo "\$a = $a, \$b = $b";
echo "<br />";
// hasil proses: $a = 20, $b = 20

$a = $a + 5;
echo "\$a = $a, \$b = $b";
echo "<br />";
// hasil proses: $a = 25, $b = 25

$b = $b + 10;
echo "\$a = $a, \$b = $b";
// hasil proses: $a = 35, $b = 35
?>
<h5> Combined Operators</h5>
CO yaitu cara penulisan singkat operator dengan menggunakan OA secara bersamaan dengan operator lain.
<?php
$a = 10;
$a = $a + 5;
$a = $a - 10;
echo "\$a = $a";
echo "<br />";
 
// sama hasilnya dengan kode berikut:
 
$b = 10;
$b += 5; // sama dengan $b = $b + 5;
$b -= 10;// sama dengan $b = $b - 10;
echo "\$b = $b";
?>
<h5> 4. Operator Bitwise </h5>
OB yaitu operator ag khusus disediakan php untuk menangani proses logika untuk bilangan biner(bil yg terdiri dari 0 dan 1).
<?php
 
$a=0b10110101;
$b=0b01101100;
echo "\$a = 10110101 = $a"; echo "<br />";
echo "\$b = 01101100 = $b"; echo "<br />";
echo "<br />";
 
echo "==Hasil Bitwise=="; echo "<br />";
 
$hasil = $a & $b;
echo "1. \$a & \$b = $hasil"; echo "<br />";
 
$hasil = $a | $b;
echo "2. \$a | \$b = $hasil"; echo "<br />";
 
$hasil = $a ^ $b;
echo "3. \$a ^ \$b = $hasil"; echo "<br />";
 
echo "4. ~\$a = ".~$a; echo "<br />";
 
$hasil = $a >> 1;
echo "5. \$a >> 1 = $hasil"; echo "<br />";
 
$hasil = $b << 2;
echo "6. \$b << 2 = $hasil"; echo "<br />";
?>
<h5> 5. Operator Increment dan Decrement</h5>
Increment digunakan untuk menambah variabel sebanyak 1 angka, sedangkan decrement digunakan untuk mengurangi variabel sebanyak 1 angka. Penulisannya menggunakan tanda tambah 2 kali untuk increment, dan tanda kurang 2 kali untuk decrement.<br/>
2 jenis increment, yaitu Pre-increment, dan Post-Increment, dan 2 jenis decrement, yaitu Pre-decrement dan Post-decrement. Perbedaan keduanya terletak pada posisi mana tanda tambah atau kurang diletakkan.
<?php
echo "<h3>Postincrement</h3>";
$a = 5;
echo "\$a = $a <br />";
echo "\$a akan bernilai 5: " . $a++ . " (\$a++)<br />";
echo "\$a akan bernilai 6: " . $a . "<br />";
 
echo "<h3>Preincrement</h3>";
$a = 5;
echo "\$a = $a <br />";
echo "\$a akan bernilai 6: " . ++$a . " (++\$a)<br />";
echo "\$a akan bernilai 6: " . $a . "<br />";
 
echo "<h3>Postdecrement</h3>";
$a = 5;
echo "\$a = $a <br />";
echo "\$a akan bernilai 5: " . $a-- . " (\$a--)<br />";
echo "\$a akan bernilai 4: " . $a . "<br />";
 
echo "<h3>Predecrement</h3>";
$a = 5;
echo "\$a = $a <br />";
echo "\$a akan bernilai 4: " . --$a . " (--\$a)<br />";
echo "\$a akan bernilai 4: " . $a . "<br />";
?>
</body>
</html>
