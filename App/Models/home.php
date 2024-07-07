<?php
namespace MVC\Models;
use MVC\Core\model;
class home extends model
{
    public function insertTask($tablename, $task)
    {
        return $this->DBconnection()->insert($tablename, $task);
    }

    public function getAllData($tablename)
    {
        $query = "SELECT * FROM task";
        return $this->DBconnection()->rows($query);
    }

    public function deleteTask($tablename, $id)
    {
        return $this->DBconnection()->deleteById($tablename, $id);
    }

    public function updateItem($tablename, $data, $id)
    {
        return $this->DBconnection()->update($tablename, $data, $id);
    }
}