<?php declare(strict_types=1);

use PHPUNIT\Framework\TestCase;

final class DniEjemploTest extends TestCase{

    public function testDniInstanciadorCorrectamente(){

        $this->assertInstanceOf(
            DniEjemplo::class,
            DniEjemplo::fromString("46979561C")
        )
    }

    public function testDniLongitudMayor(){
        $this->expectException(lengthException::class);
        $this->expectedExceptionMessage("Demasiado largo");
        $dni = new DniEjemplo("0123456789");
    }

    public function testDniLongitudMenor(){
        $this->expectException(lengthException::class);
        $this->expectedExceptionMessage("Demasiado corto");
        $dni = new DniEjemplo("01234567");
    }

}