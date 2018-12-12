	<?php
		session_start();
        include_once  'conection.php';

        $get_id=$dbkonek->query(" select right (ID,4) as ID from customer  ORDER BY ID DESC LIMIT 1");
            while ($d_id=mysqli_fetch_array($get_id)) {
                
                $i=$d_id['ID'];

            }
        
    $id=$i+1;
    $r_id="c00$id";
    echo $r_id;
    $status="Belum Verifikasi";



    $insert=$dbkonek->query("insert into customer (ID,Nama,Alamat,Telp,paket,Status) values
    
                            ('$r_id','$_POST[nama]','$_POST[alamat]','$_POST[nomor]','$_POST[paket]','$status')    
                            
                            ");

    if($insert){

       	echo "<script type='text/javascript'>
								$(document).ready(function(){
								$('#salah').modal('show');
								});
								</script>
                			";
    }
            
?>