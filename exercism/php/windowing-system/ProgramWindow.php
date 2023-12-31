<?php

class ProgramWindow
{
    public $x;
    public $y;
    public $width;
    public $height;

    public function __construct()
    {
        $this->x = 0;
        $this->y = 0;
        $this->width = 800;
        $this->height = 600;
    }

    function resize(Size $new_size)
    {
        $this->width = $new_size->width;
        $this->height = $new_size->height;
    }

    function move(Position $position)
    {
        $this->x = $position->x;
        $this->y = $position->y;
    }
}
