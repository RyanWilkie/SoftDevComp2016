<?php

    $regno = str_replace(' ', '', $_GET["regno"]);

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => "https://uk1.ukvehicledata.co.uk/api/datapackage/VehicleData?key_vrm=" . $regno,
        CURLOPT_HTTPHEADER => array("Authorization: ukvd-ipwhitelist 67a18a66-c24d-43ab-9ac3-b85e75ffd2cc")
    ));

    $resp = curl_exec($curl);

    curl_close($curl);

    var_dump($resp);

 ?>
