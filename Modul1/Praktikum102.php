<?php 
    $panjang_limas = 8.9; 
    $tinggi_limas = 5.4; 
    $lebar_limas = 14.7; 
    $volume = $panjang_limas * $lebar_limas * $tinggi_limas / 3; 

    echo number_format($volume, 3, ',')." m3"; 
?>