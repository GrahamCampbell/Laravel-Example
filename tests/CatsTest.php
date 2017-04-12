<?php declare(strict_types=1);

use Foo\Bar\Example\Cats;
use PHPUnit\Framework\TestCase;

class CatsTest extends TestCase
{
    public function testCanGenerateOneName()
    {
        $cats = (new Cats(['Bob']));

        $this->assertSame('Bob', $cats->generate());
    }

    public function testFailsWithNoNames()
    {
        $this->expectException(InvalidArgumentException::class);

        new Cats([]);
    }
}
