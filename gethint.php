<?php
// Array with names
$a[] = "thane";
$a[] = "malad";
$a[] = "andheri";
$a[] = "colaba";
$a[] = "airoli";
$a[] = "mulund";
$a[] = "mumbai";
$a[] = "goregaon";
$a[] = "ghatkopar";
$a[] = "mira-road";
$a[] = "bandra";
$a[] = "titwala";
$a[] = "ulhasnagar";
$a[] = "kalwa";
$a[] = "churchgate";
$a[] = "churni-road";
$a[] = "vasai";
$a[] = "villeparle";
$a[] = "Borivali";
$a[] = "Shahad";
$a[] = "kalyan";
$a[] = "Dadar";
$a[] = "Kurla";
$a[] = "Chinchpokli";
$a[] = "Lower-parel";
$a[] = "Chunnabati";
$a[] = "Karjat";
$a[] = "Kandivali";
$a[] = "Pune";
$a[] = "Panvel";
$a[] = "Sanatacruz";
$a[] = "Fort";
$a[] = "Coloaba";
$a[] = "Khar";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>