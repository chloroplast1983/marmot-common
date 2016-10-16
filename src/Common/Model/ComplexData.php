<?php
namespace Marmot\Common\Model;

abstract class ComplexData
{
	use ObjectIdentify;

    /**
     * @var string id,存储id
     */
    private $id;
    /**
     * @var array $complexData 存储信息
     */
    private $complexData;

    public function __construct(array $complexData = array(), string $id = '')
    {
        global $_FWGLOBAL;
        $this->complexData = !empty($complexData) ? $complexData : array();
        $this->id = !empty($id) ? $id : '';
    }

    public function __destruct()
    {
        unset($this->id);
        unset($this->complexData);
    }

    /**
     * 设置存储 id
     * @param string $id 存储 id
     */
    public function setId(string $id)
    {
        $this->id = $id;
    }

    /**
     * 获取存储 id
     * @return string $id 存储 id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 设置存储信息
     * @param array $complexData 存储信息
     */
    public function setComplexData(array $complexData)
    {
        $this->complexData = $complexData;
    }

    /**
     * 获取存储信息
     * @return array $complexData 存储信息
     */
    public function getComplexData()
    {
        return $this->complexData;
    }

    /**
     * 保存
     */
    abstract public function save() : bool;

    /**
     * 获取
     */
    abstract public function fetch() : bool;
}