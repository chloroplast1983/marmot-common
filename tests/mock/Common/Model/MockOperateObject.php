<?php
namespace Marmot\Common\Model;

class MockOperateObject implements IOperateAble
{
    use OperateTrait;

    protected function addAction() : bool
    {
        return true;
    }

    protected function editAction() : bool
    {
        return true;
    }
}
