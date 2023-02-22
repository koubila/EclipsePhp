<?php
require_once __DIR__ . '/';
use PHPUnit\Framework\TestCase;


class TestCalculSomme extends TestCase
{
    public function testCalculSomme()
    {
        // Données d'entrée pour tester la somme de deux nombres
        $num1 = 2;
        $num2 = 3;
        $expectedResult = 5;
        
        // Exécution de la fonction de calcul de somme
        $result = calculerSomme($num1, $num2);
        
        // Vérification du résultat attendu
        $this->assertEquals($expectedResult, $result);
    }
}