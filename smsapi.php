<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://amazesms.in/api/pushsms.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "usr=717770&key=010eW3JP40pAAtisyX47VQs3U75OSl&sndr=KRISHN&ph=".$mobile."&text=".$msg."&rpt=1");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
$server_output = curl_exec ($ch);
curl_close ($ch);
?>