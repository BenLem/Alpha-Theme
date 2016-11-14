<?php
$statut = @fsockopen("91.134.185.171", 25565, $errno, $errstr, 1);
    if($statut) {
        fwrite($statut, "\xFE\x01");
 
        $d = fread($statut, 1024);
        if ($d != false AND substr($d, 0, 1) == "\xFF") {
            $d = substr($d, 3);
            $d = mb_convert_encoding($d, 'auto', 'UCS-2');
            $d = explode("\x00", $d);
            fclose($statut);
                
            echo "<div class='right'><div class='state on'></div><p class='players'><b class='o'>".$d[4]."</b>/".$d[5]." connectés</p></div>";
            
        }
    } else {
        
        echo "<div class='right'><div class='state off'></div><p class='players'><b class='o'>0</b>/64 connectés</p></div>";
        
    }
?>