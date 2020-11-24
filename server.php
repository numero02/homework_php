<?php

    function reverseString(String $str){

        $rev = str_split($str);
        $reverse_word="";
        for ($i=sizeOf($rev)-1; $i >= 0 ; $i--) { 
            $reverse_word.=$rev[$i];
        }
       return $reverse_word;
    }       
    
    echo "<pre>";
        var_dump(reverseString("massilia"));
    echo "</pre>";


    function checkPrime(int $number){
        
        if($number <= 0){
            return false;
        }else if(($number % 2) !== 0){
            return "Not Prime";
        }else{
            return "Prime";
        }
        
    }

    // var_dump(checkPrime(12));

    function factoriel(int $arg){
        
        if($arg < 0){
            return false;
        }else if($arg == 0){
            
            return 1;
        }
        for ($i = $arg ; $i > 1 ; $i--) { 
            $arg = $arg * ($i-1);
        }

        return $arg;

    }

    

   

 


?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="analyze.php" method="get">
        firstName:<input type="text" name="firstName" id="firstName">
        lastName:<input type="text" name="lastName" id="lastName">
        age:<input type="text" name="age" id="age">
        <input type="submit" value="send">
    </form>
</body>
</html> -->

<?php

function computeClosestToZero(array $ts){
    $min = 0;
    if(sizeOf($ts) == 0){
        return false;
    }
    for($i=0;$i<sizeOf($ts);$i++){
        if($min == 0){
            $min = $ts[$i];
        }else if(abs($min) > abs($ts[$i])){
            $min = $ts[$i];
        }else if(abs($min) == abs($ts[$i])){
            $min = ($min > $ts[$i]) ? $min : $ts[$i];
        }
    }
    return $min;
}



function computeClosestToZero(array $ts) {
    $minimum=0;

    if(sizeof($ts) == 0){
        return false;
    }else{
        for($i=0;$i<sizeOf($ts);$i++){
            if($minimum == 0){
                $minimum = $ts[$i];
            }else if(abs($minimum) > abs($ts[$i])){
                $minimum = $ts[$i];
            }
        }
        return $minimum;
    }
}

function findTheSmallestWords(array $list){
    $word = null;
    foreach($list as $element){
        if($word == null){
            $word = $element;
        }else if(strlen($word) > strlen($element)){
            $word = $element;
        }
    }
    return $word;
}


function computeClosestToZero(array $ts) {
    // Write your code here
    // To debug (equivalent to var_dump): error_log(var_export($var, true));
    $pos=[];
    $neg=[];
    foreach($ts as $t){
      if($t > 0 ){
        array_push($pos,$t);
      }
    }
    foreach($ts as $t){
      if($t < 0 ){
        array_push($neg,$t);
      }
    }
    echo "<pre>";
    var_dump($pos);
    var_dump($neg);
    echo "</pre>";
    $res_max=min($pos);
    $res_min=max($neg);

    if(abs($res_min) < $res_max){
        echo "I am here";
      return $res_min;
    }else if(abs($res_min) > $res_max){
      return $res_max;
    }else if(abs($res_min) == $res_max){
      return $res_min;
    }
  }
  



    class Calculator{
        
        public $count;

        function __construct(){
            $this->count = 0;
        }

        function print(){
            echo "Compteur : ". $this->count;
        }
        
        function counter(){
            return $this->count++;
        }

    }
  
    // $init = new Calculator();
    // $init->counter();
    // $init->print();
    // echo "<br>";
    // echo "<span>Compteur : ".$init->count."</span>";
?>
    

