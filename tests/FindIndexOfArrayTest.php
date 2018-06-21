<?php


class FindIndexOfArrayTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @return array
     */
    public function findIndexOfArrayPositiveDataProvider()
    {
        return [
            [[1,2,3,4,3,2,1], 3],
            [[1,100,50,-51,1,1],1],
            [[20,10,-80,10,10,15,35],-1],
            [[10,-80,10,10,15,35],-1],
        ];
    }

    /**
     * @return array
     */
    public function findIndexOfArrayNegativeDataProvider()
    {
        return [
            ['a', "Argument is't array"],
			[[], "Array is empty"],
        ];
    }

    /**
     * @dataProvider findIndexOfArrayPositiveDataProvider
     */
    public function testFindIndexOfArrayPositive($arr, $expected)
    {
        $result = findIndexOfArray($arr);
        $this->assertEquals($expected,$result);
    }

    /**
     * @dataProvider findIndexOfArrayNegativeDataProvider
     */
    public function testFindIndexOfArrayNegative($arr, $expected)
    {
        $this->expectExceptionMessage($expected);
        findIndexOfArray($arr);
    }
}