<?php

ini_set('display_errors', 0);
error_reporting(E_ERROR | E_PARSE);

$URL = explode("/",$_SERVER['QUERY_STRING']);

echo "<pre>";
if($URL[1]=="plus"){
    if($URL[3]=="plus"){
        if($URL[5]=="plus"){
            print_r((($URL[0]+$URL[2])+$URL[4])+$URL[6]);
        }
        else if($URL[5]=="minus"){
            print_r((($URL[0]+$URL[2])+$URL[4])-$URL[6]);
        }
        else if($URL[5]=="into"){
            print_r($URL[0]+$URL[2]+($URL[4]*$URL[6]));
        }
        else{
            print_r(($URL[0]+$URL[2])+$URL[4]);
        }
    }
    else if($URL[3]=="minus"){
        if($URL[5]=="plus"){
            print_r((($URL[0]+$URL[2])-$URL[4])+$URL[6]);
        }
        else if($URL[5]=="minus"){
            print_r((($URL[0]+$URL[2])-$URL[4])-$URL[6]);
        }
        else if($URL[5]=="into"){
            print_r($URL[0]+$URL[2]-($URL[4]*$URL[6]));
        }
        else{
            print_r(($URL[0]+$URL[2])-$URL[4]);
        }
    }
    else if($URL[3]=="into"){
        if($URL[5]=="plus"){
            print_r($URL[0]+($URL[2]*$URL[4])+$URL[6]);
        }
        else if($URL[5]=="minus"){
            print_r($URL[0]+($URL[2]*$URL[4])-$URL[6]);
        }
        else if($URL[5]=="into"){
            print_r($URL[0]+($URL[2]*$URL[4]*$URL[6]));
        }
        else{
            print_r($URL[0]+($URL[2]*$URL[4]));
        }
    }
    else{
        print_r($URL[0]+$URL[2]);
    }
}

else if($URL[1]=="minus"){
    if($URL[3]=="plus"){
        if($URL[5]=="plus"){
            print_r((($URL[0]-$URL[2])+$URL[4])+$URL[6]);
        }
        else if($URL[5]=="minus"){
            print_r((($URL[0]-$URL[2])+$URL[4])-$URL[6]);
        }
        else if($URL[5]=="into"){
            print_r($URL[0]-$URL[2]+($URL[4]*$URL[6]));
        }
        else{
            print_r(($URL[0]-$URL[2])+$URL[4]);
        }
    }
    else if($URL[3]=="minus"){
        if($URL[5]=="plus"){
            print_r((($URL[0]-$URL[2])-$URL[4])+$URL[6]);
        }
        else if($URL[5]=="minus"){
            print_r((($URL[0]-$URL[2])-$URL[4])-$URL[6]);
        }
        else if($URL[5]=="into"){
            print_r($URL[0]-$URL[2]-($URL[4]*$URL[6]));
        }
        else{
            print_r(($URL[0]-$URL[2])-$URL[4]);
        }
    }
    else if($URL[3]=="into"){
        if($URL[5]=="plus"){
            print_r($URL[0]-($URL[2]*$URL[4])+$URL[6]);
        }
        else if($URL[5]=="minus"){
            print_r($URL[0]-($URL[2]*$URL[4])-$URL[6]);
        }
        else if($URL[5]=="into"){
            print_r($URL[0]-($URL[2]*$URL[4]*$URL[6]));
        }
        else{
            print_r($URL[0]-($URL[2]*$URL[4]));
        }
    }
    else{
        print_r($URL[0]-$URL[2]);
    }
}

else if($URL[1]=="into"){
    if($URL[3]=="plus"){
        if($URL[5]=="plus"){
            print_r((($URL[0]*$URL[2])+$URL[4])+$URL[6]);
        }
        else if($URL[5]=="minus"){
            print_r((($URL[0]*$URL[2])+$URL[4])-$URL[6]);
        }
        else if($URL[5]=="into"){
            print_r(($URL[0]*$URL[2])+($URL[4]*$URL[6]));
        }
        else{
            print_r(($URL[0]*$URL[2])+$URL[4]);
        }
    }
    else if($URL[3]=="minus"){
        if($URL[5]=="plus"){
            print_r(($URL[0]*$URL[2])-($URL[4]+$URL[6]));
        }
        else if($URL[5]=="minus"){
            print_r((($URL[0]*$URL[2])-$URL[4])-$URL[6]);
        }
        else if($URL[5]=="into"){
            print_r(($URL[0]*$URL[2])-($URL[4]*$URL[6]));
        }
        else{
            print_r(($URL[0]*$URL[2])-$URL[4]);
        }
    }
    else if($URL[3]=="into"){
        if($URL[5]=="plus"){
            print_r((($URL[0]*$URL[2])*$URL[4])+$URL[6]);
        }
        else if($URL[5]=="minus"){
            print_r((($URL[0]*$URL[2])*$URL[4])-$URL[6]);
        }
        else if($URL[5]=="into"){
            print_r((($URL[0]*$URL[2])*$URL[4])*$URL[6]);
        }
        else{
            print_r(($URL[0]*$URL[2])*$URL[4]);
        }
    }
    else{
        print_r($URL[0]*$URL[2]);
    }
}



echo "</pre>";

require_once($URL[0].".php");

?>