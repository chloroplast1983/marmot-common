<?php
namespace Marmot\Common\Model;

use PHPUnit\Framework\TestCase;

/**
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class ObjectTest extends TestCase
{
    private $object;

    public function setUp()
    {
        $this->object = new MockObject();
    }

    public function tearDown()
    {
        unset($this->object);
    }

    public function testConstructor()
    {
        $this->assertEquals(0, $this->object->getId());
        $this->assertEquals(0, $this->object->getStatus());
        $this->assertEquals(0, $this->object->getStatusTime());
        $this->assertEquals(0, $this->object->getCreateTime());
        $this->assertEquals(0, $this->object->getUpdateTime());
    }

    //id 测试 ---------------------------------------------------------- start
    /**
     * 设置 Object setId() 正确的传参类型,期望传值正确
     */
    public function testSetIdCorrectType()
    {
        $this->object->setId(1);
        $this->assertEquals(1, $this->object->getId());
    }
    //id 测试 ----------------------------------------------------------   end

    //status 测试 -------------------------------------------------------- start
    /**
     * 设置 Object setStatus() 正确的传参类型,期望传值正确
     */
    public function testSetStatusCorrectType()
    {
        $this->object->setStatus(0);
        $this->assertEquals(0, $this->object->getStatus());
    }

    /**
     * 设置 Object setStatus() 错误的传参类型,期望期望抛出TypeError exception
     *
     * @expectedException TypeError
     */
    public function testSetStatusWrongType()
    {
        $this->object->setStatus('string');
    }
    //status 测试 --------------------------------------------------------   end

    //statusTime 测试 -------------------------------------------------------- start
    /**
     * 设置 Object setStatusTime() 正确的传参类型,期望传值正确
     */
    public function testSetStatusTimeCorrectType()
    {
        $this->object->setStatusTime(0);
        $this->assertEquals(0, $this->object->getStatusTime());
    }

    /**
     * 设置 Object setStatusTime() 错误的传参类型,期望期望抛出TypeError exception
     *
     * @expectedException TypeError
     */
    public function testSetStatusTimeWrongType()
    {
        $this->object->setStatusTime('string');
    }
    //statusTime 测试 --------------------------------------------------------   end

    //createTime 测试 -------------------------------------------------------- start
    /**
     * 设置 Object setCreateTime() 正确的传参类型,期望传值正确
     */
    public function testSetCreateTimeCorrectType()
    {
        $this->object->setCreateTime(0);
        $this->assertEquals(0, $this->object->getCreateTime());
    }

    /**
     * 设置 Object setCreateTime() 错误的传参类型,期望期望抛出TypeError exception
     *
     * @expectedException TypeError
     */
    public function testSetCreateTimeWrongType()
    {
        $this->object->setCreateTime('string');
    }
    //createTime 测试 --------------------------------------------------------   end

    //updateTime 测试 -------------------------------------------------------- start
    /**
     * 设置 Object setUpdateTime() 正确的传参类型,期望传值正确
     */
    public function testSetUpdateTimeCorrectType()
    {
        $this->object->setUpdateTime(0);
        $this->assertEquals(0, $this->object->getUpdateTime());
    }

    /**
     * 设置 Object setUpdateTime() 错误的传参类型,期望期望抛出TypeError exception
     *
     * @expectedException TypeError
     */
    public function testSetUpdateTimeWrongType()
    {
        $this->object->setUpdateTime('string');
    }
    //updateTime 测试 --------------------------------------------------------   end
}
