<?php
namespace App\recursive;
class SudokuSolution
{

    /**
     * @param String[][] $board
     * @return NULL
     */

    function solveSudoku(&$board)
    {
        $gridSize = 9;

        $this->iterateGrid($board, 0, 0, $gridSize);
    }


    public function iterateGrid(&$board, $row, $col, $gridSize): bool
    {
        if ($col == $gridSize - 1 && $row == $gridSize ) {

            return true;
        }

        if ($row === $gridSize) {
            $row = 0;
            $col++;
        }

        if ($board[$row][$col] != '.') {
            return $this->iterateGrid($board, $row + 1, $col, $gridSize);
        }
        for ($num = 1 ; $num <10;$num++){
            if($this->checkBoxNumber($board, $row, $col, $num)){

                    $board[$row][$col] = $num;

                if($this->iterateGrid($board, $row + 1, $col, $gridSize)) return true;
            }
              $board[$row][$col] = '.';
        }



        return false;


    }

    function checkBoxNumber($board, $row, $col, $num)
    {
 // check same number in similar row
        for($counter = 0; $counter < 9; $counter++)
            if($board[$row][$counter] == $num)
                return false;

        // check same number in similar col
        for($counter = 0; $counter < 9; $counter++)
            if($board[$counter][$col] == $num)
                return false;
        $startCol = $col - $col%3;
        $starRow = $row - $row%3;
        for ($rowCount =0; $rowCount < 3 ; $rowCount++){
            for($rowColCount =0; $rowColCount < 3 ;$rowColCount++){
        if($board[$rowCount + $starRow ][ $rowColCount+$startCol]== $num) return false;
            }

        }

         return true;
    }
}

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

echo '<h2>Sudoku Box Unsolved</h2>
<table border="1" style="width:400px;" align="center">';
for ($row = 0; $row < 9; $row++) {

    $stRow = $row - $row % 3;
    echo '<tr ">';
    for ($col = 0; $col < 9; $col++) {

        $stcCol = $col - $col % 3;

        if (($stcCol != 3 || $stRow != 3) && ($stcCol == 3 || $stRow == 3)) {
            $border = '';
            if ($col % 3 === 0) $border = "border-left: 4px solid #eeeeee;";
            echo '<td align="center"style="background: rgba(125,83,255,0.67);' . $border . ' ">' . $board[$row][$col] . '</td>';
        } else {
            echo '<td align="center" style="background: #01acd0">' . $board[$row][$col] . '</td>';
        }

    }
    echo '</tr>';
}
echo '</table>';

//
$obj = new SudokuSolution;
$obj->solveSudoku($board);
echo '<pre/>'; print_r($board[0]);die;
//echo json_encode($board);

echo '<h2>Sudoku Box Solved</h2>
<table border="1" style="width:400px;" align="center">';
for ($row = 0; $row < 9; $row++) {

    $stRow = $row - $row % 3;
    echo '<tr ">';
    for ($col = 0; $col < 9; $col++) {

        $stcCol = $col - $col % 3;

        if (($stcCol != 3 || $stRow != 3) && ($stcCol == 3 || $stRow == 3)) {
            $border = '';
            if ($col % 3 === 0) $border = "border-left: 4px solid #eeeeee;";
            echo '<td align="center"style="background: #7d53ff;' . $border . ' ">' . $board[$row][$col] . '</td>';
        } else {
            echo '<td align="center" style="background: #01acd0">' . $board[$row][$col] . '</td>';
        }

    }
    echo '</tr>';
}
echo '</table>';
