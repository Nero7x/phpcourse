<form action="array.php" method="GET">
    <input type="text" name="xname">
    <input type="submit">

</form>



<?php
//$family = array("Father" ,"Mother", "Brother");

$xname = $_GET["xname"];

$score = [
    "Nour" => [
        "Score" => "90",
        "Grade" => "A" 
    ],
    "Ali" => [
        "Score" => "80",
        "Grade" => "C"
    ], 
    "Anas" => [
        "Score" => "40",
        "Grade" => "F"
    ],
];



echo "Score: " . $score[$xname]["Score"];
echo "<br>";
echo "Grade: " . $score[$xname]["Grade"];


/*
$family = [
    "Designer" => "Nour", 
    "Programmer" => "Ali", 
    "Gamer" => "Anas"
];
*/
//$family[1] = "Love";
//$family[3] = "Sister";

//echo count($family);


?>