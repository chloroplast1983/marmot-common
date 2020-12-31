<?php
namespace Marmot\Common\Model;

use PHPUnit\Framework\TestCase;

/**
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class EnableObjectTest extends TestCase
{
    private $object;

    public function setUp()
    {
        $this->object = new MockEnableObject();
    }

    public function tearDown()
    {
        unset($this->object);
    }

    public function testConstructor()
    {
        $this->assertEquals(MockEnableObject::ENABLE_STATUS['ENABLED'], $this->object->getEnableStatus());
    }

    //enableStatus 测试 ------------------------------------------------------ start
    /**
     * 循环测试 EnableObject setEnableStatus() 是否符合预定范围
     *
     * @dataProvider enableStatusProvider
     */
    public function testSetCategory($actual, $expected)
    {
        $this->object->setEnableStatus($actual);
        $this->assertEquals($expected, $this->object->getEnableStatus());
    }

    /**
     * 循环测试 EnableObject setEnableStatus() 数据构建器
     */
    public function enableStatusProvider()
    {
        return array(
            array(MockEnableObject::ENABLE_STATUS['ENABLED'], MockEnableObject::ENABLE_STATUS['ENABLED']),
            array(MockEnableObject::ENABLE_STATUS['DISABLED'], MockEnableObject::ENABLE_STATUS['DISABLED']),
            array(999, MockEnableObject::ENABLE_STATUS['ENABLED']),
        );
    }

    /**
     * 设置 EnableObject setEnableStatus() 错误的传参类型,期望期望抛出TypeError exception
     *
     * @expectedException TypeError
     */
    public function testSetCategoryWrongType()
    {
        $this->object->setEnableStatus('string');
    }
    //enableStatus 测试 ------------------------------------------------------   end

    public function testEnable()
    {
        $object = $this->getMockBuilder(MockEnableObject::class)
                      ->setMethods(['enableAction'])
                      ->getMock();

        $object->expects($this->any())
             ->method('enableAction')
             ->willReturn(true);
             
        $this->assertTrue($object->enable($object));
    }

    public function testDisable()
    {
        $object = $this->getMockBuilder(MockEnableObject::class)
                      ->setMethods(['disableAction'])
                      ->getMock();

        $object->expects($this->any())
             ->method('disableAction')
             ->willReturn(true);
             
        $this->assertTrue($object->disable($object));
    }
}
