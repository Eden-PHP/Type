<?php //-->
/*
 * This file is part of the Type package of the Eden PHP Library.
 * (c) 2013-2014 Openovate Labs
 *
 * Copyright and license information can be found at LICENSE
 * distributed with this package.
 */
 
class Eden_Tests_Type_TypeTest extends \PHPUnit_Framework_TestCase
{
    public function testGetArray()
    {
        $class = eden('type')->type()->getArray(array('some data'));
        $this->assertInstanceOf('Eden\\Type\\Type\\ArrayType', $class);
    }

    public function testGetString()
    {
        $class = eden('type')->type()->getString('some data');
        $this->assertInstanceOf('Eden\\Type\\Type\\StringType', $class);
    }
}