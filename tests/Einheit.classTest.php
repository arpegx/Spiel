<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
require_once('./src/classes/Einheit.class.php');

final class EinheitTest extends TestCase
{
    /**
     * @covers Corsair::__construct
     */
    public function test__construct(): void {
        $corsair = new Corsair();
        $this->assertInstanceOf(Corsair::class,$corsair);
        $this->assertEquals(150,$corsair->getHealth());
        $this->assertEquals(20, $corsair->getShield());
    }
}