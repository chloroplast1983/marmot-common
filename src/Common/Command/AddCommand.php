<?php
namespace Marmot\Common\Command;

use Marmot\Interfaces\ICommand;

abstract class AddCommand implements ICommand
{
    public $id;

    public function __construct(int $id = 0)
    {
        $this->id = $id;
    }
}
