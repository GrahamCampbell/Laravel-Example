<?php declare(strict_types=1);

namespace Foo\Bar\Example;

class Cats
{
    protected $names;

    public function __construct(array $names)
    {
        if (count($names) === 0) {
            throw new \InvalidArgumentException('There must be a choice of at least 1 cat.');
        }

        $this->names = array_values($names);
    }

    public function generate()
    {
        $choice = random_int(0, count($this->names) - 1);

        return $this->names[$choice];
    }
}
