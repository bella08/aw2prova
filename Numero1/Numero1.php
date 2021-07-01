<?php 

$num1 = $_GET['txtN'];
$num2 = $_GET['txtb'];

if ($num1 % 2 == 0)
{
    echo "Numero1 = Par";
    echo "<br/>";
}else
{
    echo "Numero1 = Impar";
    echo "<br/>";
}

if ($num2 % 2 == 0)
{

    echo "Numero2 = Par";
    echo "<br/>";
}

else
{

    echo "Numero2 = Impar";
    echo "<br/>";
}

if ($num1 < 0)
{
    echo "Numero1 = Negativo";
    echo "<br/>";
}

else
{
    echo "Numero1 = Positivo";
    echo "<br/>";
}

if ($num2 < 0)
{
    echo "Numero2 = Negativo";
    echo "<br/>";
}

else
{
    echo "Numero2 = Positivo";
    echo "<br/>";
}

?>
