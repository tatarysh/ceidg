<?php

namespace TataRysh\Ceidg\Type;

/**
 * Class ArrayOfInt
 */
class ArrayOfInt
{
    /**
     * @var int
     */
    private $int;

    /**
     * @return int
     */
    public function getInt()
    {
        return $this->int;
    }

    /**
     * @param  int $int
     * @return ArrayOfInt
     */
    public function withInt($int)
    {
        $new = clone $this;
        $new->int = $int;

        return $new;
    }
}
