<?php
namespace Marmot\Common\Model;

interface IEnableAble
{
    const ENABLE_STATUS = array(
        'ENABLED' => 2,
        'DISABLED' => -2
    );

    public function setEnableStatus(int $enableStatus) : void;
    
    public function getEnableStatus() : int;

    public function enable() : bool;

    public function disable() : bool;
}
