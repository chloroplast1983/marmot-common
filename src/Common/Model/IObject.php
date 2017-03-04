<?php
namespace Marmot\Common\Model;

/**
 * Object 接口
 */
interface IObject
{
    /**
     * 设置id
     * @param int $id
     */
    public function setId(int $id);

    /**
     * 获取 id
     * @return int $id
     */
    public function getId() : int;

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

    /**
     * 设置新闻发布时间
     * @param int $createTime 新闻发布时间
     */
    public function setCreateTime(int $createTime);

    /**
     * 获取新闻发布时间
     * @return int $createTime 新闻发布时间
     */
    public function getCreateTime() : int;

    /**
     * 设置新闻更新时间
     * @param int $updateTime 新闻更新时间
     */
    public function setUpdateTime(int $updateTime);

    /**
     * 获取新闻更新时间
     * @return int $updateTime 新闻更新时间
     */
    public function getUpdateTime() : int;
}