<?php
namespace Marmot\Common\Model;

use PHPUnit\Framework\TestCase;

/**
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class OperateObjectTest extends TestCase
{
    public function testAdd()
    {
        $object = $this->getMockBuilder(MockOperateObject::class)
                      ->setMethods(['addAction'])
                      ->getMock();

        $object->expects($this->any())
             ->method('addAction')
             ->willReturn(true);
             
        $this->assertTrue($object->add($object));
    }

    public function testEdit()
    {
        $object = $this->getMockBuilder(MockOperateObject::class)
                      ->setMethods(['editAction'])
                      ->getMock();

        $object->expects($this->any())
             ->method('editAction')
             ->willReturn(true);
             
        $this->assertTrue($object->edit($object));
    }
}
