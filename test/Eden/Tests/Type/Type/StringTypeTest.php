<?php //-->
/*
 * This file is part of the Type package of the Eden PHP Library.
 * (c) 2013-2014 Openovate Labs
 *
 * Copyright and license information can be found at LICENSE
 * distributed with this package.
 */

class Eden_Tests_Type_Type_StringTypeTest extends \PHPUnit_Framework_TestCase
{
    public function testCamelize()
    {
        $string         = 'test-value';
        $resultString   = 'testValue';
        $class = eden('type')->type($string)->camelize('-');
        $this->assertInstanceOf('Eden\\Type\\Type\\StringType', $class);
        $newString = $class->get();
        $this->assertEquals($resultString, $newString);
    }

    public function testDasherize()
    {
        $string         = 'test Value';
        $resultString   = 'test-value';
        $class = eden('type')->type($string)->dasherize();
        $this->assertInstanceOf('Eden\\Type\\Type\\StringType', $class);
        $newString = $class->get();
        $this->assertEquals($resultString, $newString);
    }

    public function testSummarize()
    {
        $string         = 'the quick brown fox jumps over the lazy dog';
        $resultString   = 'the quick';
        $class = eden('type')->type($string)->summarize(3);
        $this->assertInstanceOf('Eden\\Type\\Type\\StringType', $class);
        $newString = $class->get();
        $this->assertEquals($resultString, $newString);
    }

    public function testTitlize()
    {
        $string         = 'test+Value';
        $resultString   = 'Test Value';
        $class = eden('type')->type($string)->titlize('+');
        $this->assertInstanceOf('Eden\\Type\\Type\\StringType', $class);
        $newString = $class->get();
        $this->assertEquals($resultString, $newString);
    }

    public function testUncamelize()
    {
        $string         = 'testValue';
        $resultString   = 'test-value';
        $class = eden('type')->type($string)->uncamelize('-');
        $this->assertInstanceOf('Eden\\Type\\Type\\StringType', $class);
        $newString = $class->get();
        $this->assertEquals($resultString, $newString);
    }
}