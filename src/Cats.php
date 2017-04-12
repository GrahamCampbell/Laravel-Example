<?php declare(strict_types=1);

namespace Foo\Bar\Example;

class Cats
{
    protected $names = ['Molly', 'Bella', 'Jack', 'Kitty'];

    public function generate()
    {
        $choice = random_int(0, count($this->names) - 1);

        return $this->names[$choice];
    }
}
