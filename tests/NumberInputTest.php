<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class NumberInputTest extends TestCase
{
    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf(
            NumberInput::class,
            new NumberInput([])
        );
    }
    
    public function testCannotAcceptInvalidArgument(): void
    {
        $this->expectException(InvalidArgumentException::class);

        new NumberInput([3.5, "example", 5]);
    }

    public function testCanAddNumbers() : void 
    {
        $input = new NumberInput([]);
        $this->assertSame([3,1,2,5], $input->addNumbers([3,1,2,5]));
    }

    public function testCanAddNumber() : void 
    {
        $input = new NumberInput([2,5,6]);
        $this->assertContains(9,$input->addNumber(9));
    }

    public function testThreeTimesEvenIsGreater(): void
    {
        $input = new NumberInput([2,4,3,5]);
        $this->assertTrue($input->threeTimesEven());
    }
}


