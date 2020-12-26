<?php
namespace App\Models;

use CodeIgniter\Model;
use ReflectionException;

/**
 * 留言板模組
 *
 * 提供取得、新增、修改、刪除
 */
class MessageBoardModel extends Model
{
    protected $table      = 'comment';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'content','id','changemessage','time','liuyan','author'];

    /**
     * 新增留言
     *
     * @param $author
     * @param $content
     * @return bool
     */
    public function create($author, $content)
    {
        $messages = [
            'author' => $author,
            'liuyan' => $content,
            'time' => date("Y-m-d H:i:s"),
        ];
        $this->insert($messages);

    }

    /**
     * 取得id
     *
     * @param int $id 取得id
     *
     * @return object
     */
    public function get($id)
    {
        $this->where('id', $id);

        return $this->find($id);
    }

}
