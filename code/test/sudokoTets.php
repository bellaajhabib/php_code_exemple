<?php
use App\recursive\SudokuSolution;

class sudokoTets extends \PHPUnit\Framework\TestCase
{
    public function testAdding(){

$board = [
    ["5", "3", ".", ".", "7", ".", ".", ".", "."],
    ["6", ".", ".", "1", "9", "5", ".", ".", "."],
    [".", "9", "8", ".", ".", ".", ".", "6", "."],
    ["8", ".", ".", ".", "6", ".", ".", ".", "3"],
    ["4", ".", ".", "8", ".", "3", ".", ".", "1"],
    ["7", ".", ".", ".", "2", ".", ".", ".", "6"],
    [".", "6", ".", ".", ".", ".", "2", "8", "."],
    [".", ".", ".", "4", "1", "9", ".", ".", "5"],
    [".", ".", ".", ".", "8", ".", ".", "7", "9"]];
        $sudoko = new SudokuSolution;
        $sudoko->solveSudoku($board);
             for ($rowCount =0; $rowCount < 9 ; $rowCount++) {
                 for($rowColCount =0; $rowColCount < 9 ;$rowColCount++){
                     $p[]= $board[$rowCount][$rowColCount];
                 }


             }

             // sort($p);
            //  $p =array_map('intval',$p);

               $lo=array_fill(0,9,range(1,9));
                for($i=0;$i< count($board);$i++){
                    sort($board[$i]);

                }


            $this->assertSame( array_map('intval', $board[0]),$lo[0]);
            $this->assertSame( array_map('intval', $board[4]),$lo[4]);
            $this->assertSame( array_map('intval', $board[2]),$lo[2]);
            $this->assertSame( array_map('intval', $board[1]),$lo[1]);
             //die();
    }

}