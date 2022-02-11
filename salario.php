<?php
                
    $horas= $_GET['horas'];
    $valor= $_GET['valor'];
                        
    $salario=$horas*$valor;
                        
    if($salario<=900)
    {
        echo"Isento do imposto de renda<br>";
    }
                        
        else if(($salario>=901)&&($salario<=1500))
        {
            $ir=$salario*0.05;
            $sin=$salario*0.03;
            $total=$ir+$sin;
                                        
            $salarioliq=$salario-$total;  
                                        
            echo"Salário bruto= $salario<br>Imposto de renda= $ir<br>Valor do salario para o sindicato= $sin<br>Total de descontos= $total<br>Sálario Liquido= $salarioliq<br>";
        }
                                
            else if(($salario>=1501)&&($salario<=2500))
            {
                $ir=$salario*0.1;
                $sin=$salario*0.03;
                $total=$ir+$sin;
                                        
                $salarioliq=$salario-$total;
                                                        
                echo"Salário bruto= $salario<br>Imposto de renda= $ir<br>Valor do salario para o sindicato= $sin<br>Total de descontos= $total<br>Sálario Liquido= $salarioliq<br>";
            }
                                        
                else if($salario>=2501)
                {
                    $ir=$salario*0.2;
                    $sin=$salario*0.03;
                    $total=$ir+$sin;
                                        
                    $salarioliq=$salario-$total;
                    echo"Salário bruto= $salario<br>Imposto de renda= $ir<br>Valor do salario para o sindicato= $sin<br>Total de descontos= $total<br>Sálario Liquido= $salarioliq<br>";
                }                                                       
                
?>
