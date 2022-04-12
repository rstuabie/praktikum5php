<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiswa Adzhimatinur Azzahra</title>
  </head>
  <body>
  <div class="container-fluid">
  <table class="table table-bordered table-dark">
  <thead>
    <tr>
        <th scope="col">No</th>
        <th scope="col">Customer</th>
        <th scope="col">No Rekening</th>
        <th scope="col">Saldo</th>
    </tr>
    </thead>
  
<?php
require_once 'class_accountbank.php';

$ac1 = new AccountBank("Ahmad","C001",6000000);
$ac2 = new AccountBank("Budi","C002",5350000);
$ac3 = new AccountBank("Kurniawan","C003",2500000);

echo '<tbody>
    <tr class="table-danger">
        <th scope="row">1</th>
        <td>'.$ac1->customer.'</td>
        <td>'.$ac1->nomor.'</td>
        <td>'.$ac1->saldo.'</td>
    </tr>
    <tr class="table-info">
        <th scope="row">2</th>
        <td>'.$ac2->customer.'</td>
        <td>'.$ac2->nomor.'</td>
        <td>'.$ac2->saldo.'</td>
    </tr>
    <tr class="table-light">
        <th scope="row">3</th>
        <td>'.$ac3->customer.'</td>
        <td>'.$ac3->nomor.'</td>
        <td>'.$ac3->saldo.'</td>
    </tr>
</tbody>'.'<br/>'.'</table>';


//ahmad nabung 1.000.000
echo '<br>'.'<hr>'.'<h4/>Ahmad Menabung 1.000.000</h4>';
$ac1->cetak();
$ac1->deposit(1000000);
echo '<hr>Ahmad nabung 1.000.000</br>';
$ac1->cetak();


//Ahmad Transfer ke Kurniawan
echo '<hr>'.'<h4/>Ahmad Transfer ke Kurniawan</h4>';
$ac1->cetak();
echo '<br>Ahmad transfer ke kurniawan 1.500.000'.'<br/>'.'Biaya Admin : '.AccountBank::$biaya_admin.'<br/>';
$ac1->transfer($ac3,1500000);
$ac1->cetak();
echo '<hr>';
$ac3->cetak();

//Ahmad Transfer ke Budi
echo '<hr>'.'<h4/>Ahmad Transfer ke Budi</h4>';
$ac1->cetak();
echo '<hr>Ahmad transfer ke Budi 500.000'.'<br/>'.'Biaya Admin : '.AccountBank::$biaya_admin.'<br/>';
$ac1->transfer($ac2,500000);
$ac1->cetak();
echo '<br/>';
$ac2->cetak();

//budi narik uang
echo '<hr>'.'<h4/>Budi Tarik Uang 2.500.000</h4>';
$ac2->witdrawl(2500000);
$ac2->cetak();
echo '<hr>'.'<br/>';

?>