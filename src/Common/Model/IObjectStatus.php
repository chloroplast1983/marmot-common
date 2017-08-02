<?php
namespace Marmot\Common\Model;

/**
 * IObjectStatus 状态接口
 */
interface IObjectStatus {

    /**
     * 设置对象状态更新时间
     * @param int $statusTime 对象状态更新时间
     */
    public function setStatusTime(int $statusTime);

    /**
     * 获取对象状态更新时间
     * @return int $statusTime 对象状态更新时间
     */
    public function getStatusTime() : int;

    /**
     * 设置对象状态
     * @return int $status 对象状态
     */
    public function setStatus(int $status);
    
    /**
     * 获取对象状态
     * @return int $status 对象状态
     */
    public function getStatus() : int;
}
