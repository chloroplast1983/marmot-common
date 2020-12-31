<?php
namespace Marmot\Common\Model;

class MockEnableObject implements IEnableAble
{
    use EnableTrait;

    public function __construct()
    {
        $this->enableStatus = self::ENABLE_STATUS['ENABLED'];
    }

    public function __destruct()
    {
        unset($this->enableStatus);
    }

    public function setEnableStatus(int $enableStatus) : void
    {
        $this->enableStatus = in_array($enableStatus, self::ENABLE_STATUS)
        ? $enableStatus
        : self::ENABLE_STATUS['ENABLED'];
    }

    protected function enableAction() : bool
    {
        return true;
    }

    protected function disableAction() : bool
    {
        return true;
    }
}
