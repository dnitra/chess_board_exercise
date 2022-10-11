<?php
require "./Piece.php";
require "./Square.php";



class Board
{

    public function __construct(array $positions)
    {

        $this->positions = $positions;
        $this->types = ["K", "Q", "B", "N", "R", "P", "k", "q", "b", "n", "r", "p"];
        $this->images = [
            'K' => 'https://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/king.png',
            'Q' => 'https://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/queen.png',
            'B' => 'https://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/bishop.png',
            'N' => 'https://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/knight.png',
            'R' => 'https://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/rook.png',
            'P' => 'https://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/pawn.png',
            'k' => 'https://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/king.png',
            'q' => 'https://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/queen.png',
            'b' => 'https://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/bishop.png',
            'n' => 'https://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/knight.png',
            'r' => 'https://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/rook.png',
            'p' => 'https://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/pawn.png'
        ];
        $this->board = [];
        $this->pieces = [];
        $this->createSquares();
        $this->createPieces();
        $this->insertPieces();
    }




    private function createSquares()
    {
        for ($y = 1; $y <= 8; $y++) {
            for ($x = 1; $x <= 8; $x++) {
                $this->board[$y][$x] = new Square($x, $y, null);
            }
        }
    }

    private function createPieces()
    {
        foreach ($this->types as $type) {

            $this->pieces[$type] =  new Piece($type, $this->images[$type]);
        }
    }

    private function insertPieces()
    {
        foreach ($this->positions as $y_cord => $x_cords) {

            foreach ($x_cords as $x_cord => $piece) {

                $this->board[$y_cord][$x_cord] = new Square($x_cord, $y_cord, $this->pieces[$piece]);
            }
        }
    }
    public function inicialize()
    {

        foreach ($this->board as $columnIndex => $columnSquares) {

            foreach ($columnSquares as $rowIndex => $sqaure) {

                echo $this->board[$rowIndex][$columnIndex];
            }
        }
    }
}
