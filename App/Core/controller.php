<?php
namespace MVC\Core;
class controller
{
    public function View($path, $parms = [])
    {
        extract($parms);
        require(VIEW . $path . '.php');
    }
}