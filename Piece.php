<?php

class Piece
{
    public function __construct($type, $url)
    {
        $this->type = $type;
        $this->url = $url;
    }


    public function __toString()
    {
        return "<img class=board__piece src=$this->url alt=$this->type />";
    }
}
