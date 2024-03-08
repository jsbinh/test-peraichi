<?php
namespace App\Test\TestCase\Utility;

use App\Utility\MatrixHelper;
use Cake\TestSuite\TestCase;

/**
 * MatrixHelperTest class.
 */
class MatrixHelperTest extends TestCase
{
    /**
     * Test rotate matrix.
     * @return void
     */
    public function testRotateMatrix(): void
    {
        $matrix = [
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9]
        ];

        $expectedMatrix = [
            [1, 4, 7],
            [2, 5, 8],
            [3, 6, 9]
        ];

        $matrixHelper = new MatrixHelper();
        $result = $matrixHelper->rotateMatrix($matrix);

        $this->assertEquals($expectedMatrix, $result);
    }
}
