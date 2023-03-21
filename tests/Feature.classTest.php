<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

require_once('./src/classes/Feature.class.php');
final class FeatureTest extends TestCase
{
    /**
     * @covers Feature::getInstance
     */
    public function testgetInstance(): void {
        $feature_1 = Feature::getInstance();
        $feature_2 = Feature::getInstance();
        $this->assertInstanceOf(Feature::class,$feature_1);
        $this->assertEquals($feature_1, $feature_2);
    }
}