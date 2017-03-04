<?php
namespace Marmot\Common\Model;

/**
 * 时间性状,包括 创建时间 和 更新时间.
 * @author chloroplast
 * @version 2.0.0:2017.03.04
 */

trait ObjectTime
{
    /**
     * @var int $createTime 发布时间
     */
    protected $createTime;
    /**
     * @var int $updateTime 更新时间
     */
    protected $updateTime;

    /**
     * 设置发布时间
     * @param int $createTime 发布时间
     */
    public function setCreateTime(int $createTime)
    {
        $this->createTime = $createTime;
    }

    /**
     * 获取发布时间
     * @return int $createTime 发布时间
     */
    public function getCreateTime() : int
    {
        return $this->createTime;
    }
    /**
     * 设置更新时间
     * @param int $updateTime 更新时间
     */
    public function setUpdateTime(int $updateTime)
    {
        $this->updateTime = $updateTime;
    }

    /**
     * 获取更新时间
     * @return int $updateTime 更新时间
     */
    public function getUpdateTime() : int
    {
        return $this->updateTime;
    }
}
