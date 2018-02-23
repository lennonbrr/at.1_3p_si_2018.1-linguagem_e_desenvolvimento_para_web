<?php
	$a = filter_input(input_GET, 'valor_a');
	$b = filter_input(input_GET, 'valor_b');
	$c = filter_input(input_GET, 'valor_c');


  $result = calcEquac(5, 4 ,3);

  function calcEquac($a, $b, $c){
      $delta = calcDelta($a, $b, $c);
        if($delta == 0){
          echo "Delta = $delta, portando valor de X1=X2 <br>";
          $x1 = calcx1($delta, $a, $b);
          echo "X = $x1";
        }elseif ($delta > 0) {
          $x1 = calcx1($delta, $a, $b);
          $x2 = calcx2($delta, $a, $b);
          echo "Valores:<br> X1=$x1<br>X2=$x2";
        }else {
          echo "Delta = $delta, portando não tem valores reais.";
        }
  }

  function calcx1($delta, $a, $b){
    $x = ((-1)*b)+(sqrt($delta))/(2*$a)
    return $x;
  }

  function calcx2($delta, $a, $b){
    $x = ((-1)*b)-(sqrt($delta))/(2*$a)
    return $x;
  }
  function calcDelta($a, $b, $c){
    $delta = (pow($b, 2)) - (4*$a*$c );
  }
>
