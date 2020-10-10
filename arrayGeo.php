<?php
$towns = [
    "Moscow"=>["Istra", "Zelenograd", "Taldom"],
    "St.Petersburg"=>["Krosstadt", "Vyborg", "Tsarskoye Selo"],
    "Kaluga"=>["Sukhinichi", "Bolshiye Kozly", "Rezvan"]
];
    foreach($towns as $districts => $places){
        for($i=0; $i<=count($places); $i++){
            echo "В области $districts есть города $places[$i] <br>";
        }
        
    }
?>