<?php
namespace Marmot\Common\Command;

use PHPUnit\Framework\TestCase;

class AddCommandTest extends TestCase
{
    private $command;

    /**
     * 初始化测试场景
     */
    public function setUp()
    {
        $this->command = new MockAddCommand();
    }

    public function tearDown()
    {
        unset($this->commaond);
    }

    /**
     * 1. 测试是否实现 ICommand
     */
    public function testImplementsCommand()
    {
        $this->assertInstanceOf('Marmot\Interfaces\ICommand', $this->command);
    }

    /**
     * 1. 测试初始化赋值id
     * 2. 测试初始化赋值id是否正确
     */
    public function testConstructWithId()
    {
        $id = 2;

        $this->command = new MockAddCommand($id);
        $this->assertEquals($id, $this->command->id);
    }

    /**
     * 1. 测试默认构造函数的赋值
     */
    public function testConstructWithDefault()
    {
        $this->assertEquals(0, $this->command->id);
    }
}
