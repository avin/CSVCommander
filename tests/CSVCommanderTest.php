<?php

use Avin\CSVCommander\CSVCommander;

class CSVCommanderTest extends PHPUnit_Framework_TestCase {

    public function testSaveGet()
    {
        $csvCommander = new CSVCommander();
        $fileName = __DIR__.'/test.csv';
        $data = [
            ['foo1', 'foo2', 'foo3'],
            ['bar1', 'bar2', 'bar3'],
        ];

        //Test write
        $result = $csvCommander->saveData($fileName, $data);
        $this->assertTrue($result);

        //Test read
        $resultData = $csvCommander->getData($fileName);
        $this->assertEquals(2, sizeof($resultData));
        $this->assertEquals(3, sizeof($resultData[0]));
    }

    protected function tearDown()
    {
        unlink(__DIR__.'/test.csv');
    }

}