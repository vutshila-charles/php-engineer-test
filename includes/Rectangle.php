<?php
/*
 * The Shape Class
 */

namespace FlickerLeap;

use FlickerLeap\Shape;

/**
 *
 */
class Rectangle extends Shape
{
    /**
     *
     * @param int $length
     */
    public function __construct($length = 7) {
        $this->name = 'Rectangle';
        $this->sides = 4;
        $this->sideLength = $length;
        $this->pixel = "*";
    }

    /**
     *
     */
    public function displayName()
    {
        echo $this->name;

    }

    /**
     * Draws the square.
     */
    public function draw()
    {
        for ($i = 0; $i <= $this->sideLength; $i++)
        {
            for ($j = 0; $j <= $this->sideLength; $j++) {
                if ( $j == 0 || $j == $this->sideLength) {
                    echo $this->pixel; // TODO: Fix alignment at some point
                } else {
                    if($i == 0 || $i == $this->sideLength) {
                        echo $this->pixel;
                    } else {
                        echo $this->padding(2);
                    }
                }
            }
            $this->newLine();
        }
    }
}
