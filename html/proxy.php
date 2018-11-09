<?php

    header('Content-type: text/xml');
    $fil = fopen("https://www.yr.no/sted/Norge/Østfold/Fredrikstad/Fredrikstad/varsel.xml", "r");

    while($linje = fgets($fil)){
        echo $linje;
    }



?>