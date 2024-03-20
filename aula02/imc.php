
<?php  
$altura = 1.80;
$peso = 120;

echo "Altura: $altura cm <br> <br>" ;
echo "Peso: $peso kg <br> <br>";
$imc = $peso / ($altura ** 2);
echo "IMC: $imc <br> <br>";  
    if($imc <= 18.5){
        echo "Abaixo do peso";
        }
        if($imc <= 24.9 ){
            echo "peso normal";
            }
           elseif($imc <= 29.9){
                echo "sobrepeso";
                }
                elseif($imc <= 34.9){
                    echo "obesidade grau 1";
                    }
                    elseif($imc <= 39.9){
                        echo "obesidade grau 2";
                        }
                        else{
                            echo "obesidade grau 3";
                            }
?>