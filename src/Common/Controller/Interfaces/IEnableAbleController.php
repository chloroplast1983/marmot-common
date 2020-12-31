<?php
namespace Marmot\Controller\Model;

interface IEnableAbleController
{
    public function enable(int $id);
    
    public function disable(int $id);
}
