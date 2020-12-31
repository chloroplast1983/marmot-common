<?php
namespace Marmot\Controller\Model;

interface IFetchAbleController
{
    public function fetchOne(int $id);

    public function fetchList(string $ids);
    
    public function filter();
}
