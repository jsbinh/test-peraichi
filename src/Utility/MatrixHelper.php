<?php
namespace App\Utility;

/**
 * MatrixHelper class.
 */
class MatrixHelper
{
    /**
     * Rotate an n-by-n matrix 90 degrees counter-clockwise.
     *
     * @param array $matrix The input matrix
     * @return array The rotated matrix
     */
    public function rotateMatrix(array $matrix): array
    {
        $n = count($matrix);

        // Check square matrix
        if ($n !== count($matrix[0])) {
            throw new \InvalidArgumentException("Input matrix must be a square matrix");
        }

        $rotated = [];
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                $rotated[$j][$n - 1 - $i] = $matrix[$i][$j];
            }
        }

        return $rotated;
    }
}
