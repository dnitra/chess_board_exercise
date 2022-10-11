<?php

class Square
{

    public string $mode = '';

    public function __construct(int $x_cord, int $y_cord, ?Piece $piece)
    {

        $this->x_cord = $x_cord;
        $this->y_cord = $y_cord;
        $this->piece = $piece;

        $this->mode = (($this->x_cord % 2) !== ($this->y_cord % 2))
            ? "light" : "dark";
    }



    public function __toString()
    {
        return "<div class=' board__square {$this->mode}'>{$this->piece} </div>";
    }
}
