<?php

$fietsmerken = ["giant","batavus","gazelle"];

print_r($fietsmerken);
echo "<br/>";
echo "<br/>";

function fietsmerken($fietsen){
    foreach ($fietsen as $key=>$value){
        echo $value."<br/>";
    }
}

fietsmerken($fietsmerken);

echo "<hr>";

$diersoorten = ["koe",
                "kat",
                "apen"=>["neusaap","gorilla","baviaan","orangoetan"],
                "honden"=>["sint bernard", "jack russell", "chihuahua"],
                "kip",
                "krokodil"
];
print_r($diersoorten);
echo "<br/>";
echo "<br/>";

function recursief($dier){
    foreach ($dier as $key=>$value){
        if (is_array($value)){
            recursief($value);
            continue;
        }
        echo $value."<br/>";
    }
}

recursief($diersoorten);

//function resursie($array){
//    
//}
