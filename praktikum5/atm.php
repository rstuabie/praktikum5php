<?php
require_once 'class_account.php';

$ac1 = new Account("C001",6000000);
$ac2 = new Account("C002",5350000);
$ac3 = new Account("C003",2500000);

//ahmad menabung 
echo '<h4/>Ahmad Menabung 1.000.000</h4>';
$ac1->cetak();
$ac1->deposit(1000000);
echo '<br/>Ahmad nabung 1.000.000</br>';
$ac1->cetak();

//transferan ahmad ke kurniawan
echo '<h4/>Transaksi Ahmad dan Kurniawan</h4>';
$ac1->cetak();
$ac1->witdrawl(1500000);
echo '<br/>Ahmad transfer ke kurniawan 1.500.000</br>';
$ac1->cetak();
echo '<br/>';

$ac3->cetak();
$ac3->deposit(1500000);
echo '<br/>Kurniawan ditransfer Ahmad 1.500.000</br>';
$ac3->cetak();

//transferan ahmad ke budi
echo '<h4/>Transaksi Budi dan Ahmad</h4>';
$ac1->cetak();
$ac1->witdrawl(500000);
echo '<br/>Ahmad tramsfer ke Budi 500.000</br>';
$ac1->cetak();
echo '<br/>';

$ac2->cetak();
$ac2->deposit(500000);
echo '<br/>Budi ditransfer Ahmad 500.000</br>';
$ac2->cetak();

//budi narik uang
echo '<h4/>Budi Tarik Uang 2.500.000</h4>';
$ac2->cetak();
$ac2->witdrawl(2500000);
echo '<br/>Budi nabung 2.500.000</br>';
$ac2->cetak();
echo '<br/>';
?>