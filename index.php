<?php
    
    $name = ["Steve doesn't like cats.", 'Jackie wishes she could fly.', 'Adam goes to the zoo to kiss the bear.', 
    'Mark watches football in his underwear!', 'Steph Ubers everywhere!', 'Nicole washes her hair every other day!'];
    $arrlength = count($name);
    
    for ($x = 0; $x < $arrlength; $x++) {
        echo $name[$x];
        echo "<br>";
    }
    
    echo "<br>";
    
    $valencia = array("cost" => "Valencia is reasonably priced.", "teachers" => "Valencia has wonderful teachers", "advisors" => "Valencia has advisors who work to make sure you're getting the most out of your expirence",
                        "location" => "Valencia has many locations in Florida", "online" => "Valencia offers distance learning along with in person classes.");
                        
    foreach ($valencia as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
