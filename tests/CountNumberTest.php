<?php
require './src/function.php';

class CountNumberTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @return array
     */
    public function countNumberPositiveDataProvider()
    {
        return [
            [[1,2,3], 1],
            [[1,2,33], 2],
            [[1,2,'3'], 1],
            [[1,2,'333'], 3],
        ];
    }

    /**
     * @return array
     */
    public function countNumberNegativeDataProvider()
    {
        return [
            [[], 'Array is empty'],
            ['3', 'Argument is\'t array'],
        ];
    }

    /**
     * @dataProvider countNumberPositiveDataProvider
     */
    public function testCountNumberPositive($a, $expected)
    {
        $result = countNumber($a);
        $this->assertEquals($expected, $result);
    }

    /**
     * @dataProvider countNumberNegativeDataProvider
     */
    public function testCountNumberNegative($a, $expected)
    {
        $this->expectExceptionMessage($expected);
        countNumber($a);
    }
}
