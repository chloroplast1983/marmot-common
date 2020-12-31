<?php
namespace Marmot\Common\Model;

trait EnableTrait
{
    /**
     * @var int $enableStatus 状态
     */
    protected $enableStatus;

    public function getEnableStatus() : int
    {
        return $this->enableStatus;
    }

    public function enable() : bool
    {
        return $this->enableAction();
    }

    public function disable() : bool
    {
        return $this->disableAction();
    }

    abstract protected function enableAction() : bool;

    abstract protected function disableAction() : bool;
}
