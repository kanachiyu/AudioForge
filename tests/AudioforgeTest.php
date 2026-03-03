<?php
/**
 * Tests for AudioForge
 */

use PHPUnit\Framework\TestCase;
use Audioforge\Audioforge;

class AudioforgeTest extends TestCase {
    private Audioforge $instance;

    protected function setUp(): void {
        $this->instance = new Audioforge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Audioforge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
