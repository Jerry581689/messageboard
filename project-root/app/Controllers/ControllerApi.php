<?php namespace App\Controllers;

use App\Models\MessageBoardModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controller;

class ControllerApi extends Controller
{
    use ResponseTrait;

    public function index()
    {
        $MessageBoardModel = new MessageBoardModel();
        $messages = $MessageBoardModel->findAll();
        return $this->response->setJSON($messages);
    }
    public function create()
    {
        $MessageBoardModel = new MessageBoardModel();

        $author = $this->request->getPost('name');
        $content = $this->request->getPost('content');

        $result = $MessageBoardModel->create($author, $content);
        if ($result == false) {
            return $this->response->setJSON((object) [
                'states' => '新增成功',
            ]);
        } else {
            return $this->response->setJSON((object) [
                'states' => '新增失敗',
            ]);
        }
    }
    public function remove($id)
    {
        $MessageBoardModel = new MessageBoardModel();

        $result = $MessageBoardModel->delete($id);
        if ($result == true) {
            return $this->response->setJSON((object) [
                'status' => 'success',
                'message' => 'Successfully deleted ',
            ]);
        } else {
            return $this->response->setJSON((object) [
                'status' => '刪除失敗',
                'message' => 'failed deleted ',
            ]);
        }
    }
    public function edit()
    {
        $MessageBoardModel = new MessageBoardModel();

        $id = $this->request->getPost('id');
        $message = array(
            'liuyan' => $this->request->getPost('changemessage'),
            'time' => date("Y-m-d H:i:s"),
        );
        $result = $MessageBoardModel->update($id, $message);

        if ($result == 1) {
            return $this->response->setJSON((object) [
                'message' => '修改成功',
            ]);
        } else {
            return $this->response->setJSON((object) [
                'message' => '修改失敗',
            ]);
        }
    }
}
