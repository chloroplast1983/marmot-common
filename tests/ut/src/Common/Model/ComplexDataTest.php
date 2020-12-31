<?php
namespace Marmot\Common\Model;

use PHPUnit\Framework\TestCase;

class ComplexDataTest extends TestCase
{
    private $complexData;

    public function setUp()
    {
        $this->complexData = $this->getMockBuilder('Marmot\Common\Model\ComplexData')->getMockForAbstractClass();
    }

    public function tearDown()
    {
        unset($this->complexData);
    }

    public function testComplexDataConstructor()
    {
        $this->assertEmpty($this->complexData->getId());
        $this->assertEquals(array(), $this->complexData->getComplexData());
    }

    //id 测试 ---------------------------------------------------------- start
    /**
     * 设置 ComplexData setId() 正确的传参类型,期望传值正确
     */
    public function testSetIdCorrectType()
    {
        $this->complexData->setId('string');
        $this->assertEquals('string', $this->complexData->getId());
    }

    /**
     * 设置 ComplexData setId() 错误的传参类型,期望期望抛出TypeError exception
     *
     * @expectedException TypeError
     */
    public function testSetIdWrongType()
    {
        $this->complexData->setId(array(1,2,3));
    }
    //id 测试 ----------------------------------------------------------   end

    //complexData 测试 -------------------------------------------------------- start
    /**
     * 设置 ComplexData setComplexData() 正确的传参类型,期望传值正确
     */
    public function testSetComplexDataCorrectType()
    {
        $this->complexData->setComplexData(array(1,2,3));
        $this->assertEquals(array(1,2,3), $this->complexData->getComplexData());
    }

    /**
     * 设置 ComplexData setComplexData() 错误的传参类型,期望期望抛出TypeError exception
     *
     * @expectedException TypeError
     */
    public function testSetComplexDataWrongType()
    {
        $this->complexData->setComplexData('string');
    }
    //complexData 测试 --------------------------------------------------------   end
}
