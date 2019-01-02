<?php
include_once  '../login/conection.php';

if (isset($_POST['submit'])) {
    # code...

                $tg=date("Y-m-d");
                $biaya=$_POST['biaya']*2000;

                $simpan=$dbkonek->query("insert into transaksi (Customer_ID,Biaya,Tanggal_Bayar,Bayar) values ('$_POST[id]','$biaya','$tg','$_POST[bayar]')");



                if ($simpan) {

                    echo"<script>window.alert('Pembayaran Berhasil')</script>";
                    header("location:pembayaran.php");
                }else{
                    echo"transaksi gagal<br>";
                    var_dump($_POST);
                    echo $tg;
                }

    }
?>