<?php
namespace Common\Model;

/**
 * 状态性状,包括 修改状态 和 状态修改的时间.
 * @author chloroplast
 * @version 1.0.0:2016.07.03
 */

trait ObjectStatus
{
    /**
     * @var int $statusTime 对象状态更新时间
     */
    protected $statusTime;
    /**
     * @var int $status 对象状态
     */
    protected $status;

    /**
     * 设置对象状态更新时间
     * @param int $statusTime 对象状态更新时间
     */
    public function setStatusTime(int $statusTime)
    {
        $this->statusTime = $statusTime;
    }

    /**
     * 获取对象状态更新时间
     * @return int $statusTime 对象状态更新时间
     */
    public function getStatusTime() : int
    {
        return $this->statusTime;
    }

    /**
     * 设置对象状态
     * @param int $status 对象状态
     */
    abstract public function setStatus(int $status);

    /**
     * 获取对象状态
     * @return int $status 对象状态
     */
    public function getStatus() : int
    {
        return $this->status;
    }
}
