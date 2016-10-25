<?php

class Player
{
    protected $code = [
        0 => "0",
        1 => "15",
        2 => "30",
        3 => "40"
    ];

    protected $points;

    protected $name;

    /**
     * Player constructor.
     * @param $score
     * @param $name
     */
    public function __construct($points, $name)
    {
        $this->points = $points;
        $this->name = $name;
    }

    public function winpoint()
    {
        $this->points += 1;
    }

    public function points() {
        return $this->points;
    }

    public function score() {
        return $this->code[$this->points];
    }

    public function name() {
        return $this->name;
    }

}