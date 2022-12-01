<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class FullTest extends TestCase
{
    public function testHelloWorld(): void
    {
        $this->assertEquals(
            'Hello World',
            'Hello World'
        );
    }

}
