<?php
/**
 * Created by PhpStorm.
 * User: zhangmengfei
 * Date: 2017/11/1
 * Time: 9:02
 */
namespace driver\session;
use app\common\model\Thinksession;

class Db1 extends \SessionHandler
{
    protected $db = null;
    //开启session会话  session_start  只有启动调用
//    public function __construct()
//    {
//        $this->db =Db::table('think_session');
//    }

    public function open($save_path, $session_name)
    {
        return true;
    }
    //关闭session
    public function close()
    {
        return true;
    }
    public function destroy($session_id)
    {
        return true;
    }
    public function gc($maxlifetime)
    {
        return true;
    }

    //读取session数据
    public function read($session_id)
    {
//       //PHP什么时候会读取数据？
//        //获取到Http请求消息后，从请求消息头中获取  session_id（是由cookie传递），
//        //立即读取session数据到$_SESSION[]数据中
//        $result = $this->db->where('session_id',$session_id)->find();
//        return $result['session_data'];
        $result = Thinksession::where('session_id',$session_id)->find();
        if(!$result){
            return '';
        }else{
            if(!$result->session_data){
                return $result->session_data;
            }else{
                return '';
            }
        }
    }
    //写入session数据
    public function write($session_id, $session_data)
    {
//        if($this->read($session_id)){
//            //如果session_data 存在的话  需要更新session_data
//            return $this->db->update([
//                    'session_id'  =>  $session_id,
//                    'seesion_data'  =>  $session_data
//                ]
//            );
//        }else{
//            //记录不存在
//            $result = $this->db->insert([
//                    'session_id'  =>  $session_id,
//                    'seesion_data'  =>  $session_data
//                ]
//            );
//        }
        $data = Thinksession::where('session_id',$session_id)->find();
        if(!$data){
            $data = new Thinksession();
            $data->session_id = $session_id;
        }
        $data->session_data = $session_data;
        $data->save();
        return true;
    }
}