<?php
    $number1 = $_GET["number1"];
    $number2 = $_GET["number2"];
    $op = $_GET["op"];


    function add($x, $y){
        return $x + $y;
    }
    function sub($x, $y){
        return $x - $y;
    }
    function mul($x, $y){
        return $x * $y;
    }
    function div($x, $y){
        return $x / $y;
    }

    if(empty($number1)){
        $RESULT = "الرقم الاول فارغ";
    }elseif(empty($number2)){
        $RESULT = "الرقم الثاني فارغ";
    }elseif(empty($op)){
        $RESULT = "الرجاء ادخال العملية";
    }else{
        if($op === "+"){
            $RESULT = add($number1, $number2);
            }elseif($op === "-"){
                $RESULT = sub($number1, $number2);
            }elseif($op === "*"){
                $RESULT = mul($number1, $number2);
            }elseif($op === "/"){
                $RESULT = div($number1, $number2);
            }
    }

    /*
    else{
        if($op === "+"){
            $RESULT = $_GET["number1"] + $_GET["number1"];
            }elseif($op === "-"){
                $RESULT = $_GET["number1"] - $_GET["number1"];
            }elseif($op === "*"){
                $RESULT = $_GET["number1"] * $_GET["number1"];
            }elseif($op === "/"){
                $RESULT = $_GET["number1"] / $_GET["number1"];
            }
    }
    */
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="calc.php" method="GET" class="form">
            <div>
                <label>:الرقم الاول</label>
                <input type="number" id="num1" name="number1" class="form-control">
            </div>
            <div>
                <label>:الرقم الثاني</label>
                <input type="number" id="num2" name="number2" class="form-control">
            </div>
            <br>
            <div>
                <label>العملية:</label>
                <input type="text" name="op" class="form-control">
            </div>
            <br>
            <div class="alert alert-success">
                <?php echo $RESULT ?> 
            </div>
            <br>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
</body>
</html>
