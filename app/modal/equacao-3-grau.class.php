<?php


  /**
   * Criando uma equação de 3º grau em PHP
   */

  class EquacaoTerceiroGrau
  {
    function __construct($a, $b, $c, $d)
    {
      $this->valo_a = $a;
      $this->valor_b = $b;
      $this->valor_c = $c;
      $this->valor_d = $d;
      /*Para 3 valores de Delta*/
      if ($d < 0) {
        $delta0 = pow($b,2)-(3*$a*$c);
        $delta1 = (2*(pow($b,3))) - (9*$a*$b*$c) + (27*(pow($a,2))*$d);
        $delta = pow($delta1,2) - (4*(pow($delta0,3)))/ (-27)*pow($a,2);
        $const = 3*((sqrt(pow($delta1,2))-(4*pow($delta0,3))+$delta1)/2);
        $u = ((-1)+(sqrt(-3)))/2;
        $x1 = ($b+pow($u,1)*$const + ($delta0/(pow(u,1))))/3*$a;
        $x2 = ($b+pow($u,2)*$const + ($delta0/(pow(u,2))))/3*$a;
        $x3 = ($b+pow($u,3)*$const + ($delta0/(pow(u,3))))/3*$a;
        //Retorna um Array de x, apresentado 3 valores;
        $res = array('x1' => $x1,'x2' => $x2,'x3' => $x3);
        echo "$res";
      } elseif ($d > 0) {

      } else {
        /*Constante d = 0 colocar o x em evidência e resolver a equação de 2º grau, sendo uma raiz de x = 0*/
        $delta = pow((-$b),2)-(4*$a*$c);
        $x1 = (-$b+sqrt($delta))/2*$a;
        $x2 = (-$b-sqrt($delta))/2*$a;
        $res = array('x1' => $x1,'x2' => $x2,'x3' => 0);
      }
      return $res;
    }
    private function equac3grauMOD3($a,$b,$c)
    {
      return $res;
    }
  }

$class = new EquacaoTerceiroGrau(1,3,3,0);
?>
