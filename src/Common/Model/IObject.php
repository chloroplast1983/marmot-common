<?php
namespace Marmot\Common\Model;

/**
 * Object 接口
 */
interface IObject extends IObjectTime, IObjectStatus
{
    /**
     * 设置id
     * @param $id
     */
    public function setId($id);

    /**
     * 获取 id
     * @return $id
     */
    public function getId();
}
