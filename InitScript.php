<?php
namespace ank\sms;

defined('SCRIPT_ENTRY') or die();

class InitScript extends \utils\admin\InitScript
{
    public function run()
    {
        $action = $this->action;

        // $data = [
        //     'url'        => 'Category/lis?category_type=article',
        //     'title'      => '分类管理',
        //     'icon_class' => 'ank-icon ank-icon-shuxing',
        // ];
        if (in_array($action, ['initScript'])) {

            $this->addConfig([
                'title' => '阿里AccessKeyId',
                'name'  => 'aliyun_access_key_id',
                'group' => '短信',
                'note'  => '',
            ]);
            $this->addConfig([
                'title' => '阿里AccessKeySecret',
                'name'  => 'aliyun_access_key_secret',
                'note'  => '',
                'group' => '短信',
            ]);
            $this->addConfig([
                'title' => '阿里云短信签名',
                'name'  => 'aliyun_sms_qianming',
                'note'  => '',
                'group' => '短信',
            ]);
            $this->addConfig([
                'title' => '阿里云短信模板CODE',
                'name'  => 'aliyun_sms_tplcode',
                'note'  => '',
                'group' => '短信',
            ]);
        } else if ($action == 'uninstall') {
            // $this->deleteMenu($data);
            // $this->showlog('The database table needs to be deleted by yourself');
        }

    }
}
