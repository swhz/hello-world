<?php
$a=array("Anna","Brittany","Cinderella","Dianna","Eva","Fiona","Gunda","Hege","Inga","Johanna",
"Kitty","Linda","Nina","Ophelia","Petunia","Amanda","Raquel","Cindy","Doris","Eve","Evita",
"Sunniva","Tove","Unni","Violet","liza","Elizabeth","Ellen","Wenche","Vicky");
$q=$_GET["q"];
if(strlen($q)>0) {
    $info="";
    for($i=0;$i<count($a);$i++) {
        if(strtolower($q)==strtolower(substr($a[$i],0,strlen($q)))) {
            if($info=="") {
                $info=$a[$i];
            } else {
                $info=$info." , ".$a[$i];
            }
        }
    }
}

if($info=="") {
    $response="no suggestion";
} else {
    $response=$info;
}
echo $response;
?>