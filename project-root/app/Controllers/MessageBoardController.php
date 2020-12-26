<?php
      namespace App\Controllers;

      use CodeIgniter\Controller;
      use App\Models\MessageBoardModel;
      use CodeIgniter\Database\Exceptions\DatabaseException;
/**
 * 留言板控制器
 */
class MessageBoardController extends Controller
{
	/**
	 * 顯示所有留言
	 *
	 * @return object
	 */
    public function index()
    {
        return view('index');
    }

}
