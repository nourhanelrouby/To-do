<?php
namespace MVC\Controllers;
use MVC\Core\controller;
use MVC\Models\home;
class homecontroller extends controller
{
    public function index()
    {
        $db = new home();
        $data = $db->getAllData('task');
        $this->View("/home/index", ['title' => 'To Do', 'data' => $data]);
    }

    public function InsertData()
    {
        if (isset($_POST['sub'])) {
            $task = [
                'content' => $_POST['task']
            ];
            try {
                $db = new home();
                $db->insertTask('task', $task);
                $this->View('/task/add', ['title' => 'Added successfully']);
            } catch (PDOException $e) {
                echo 'Operation failed ' . $e->getMessage();
            }

        }
    }

    public function deleteItem($id)
    {
        $db = new home();
        $db->deleteTask('task', $id);
        $this->View('/task/delete', ['title' => 'Deleted successfully']);
    }

    public function updateTask($id)
    {
        $this->View('/task/update', ['id' => $id, 'title' => 'Updated successfully']);
        if (isset($_POST['sub'])) {
            $data = [
                'content' => $_POST['task']
            ];
            $where = ['id' => $id];
            $db = new home();
            $db->updateItem('task', $data, $where);

        }
    }
}