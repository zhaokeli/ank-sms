<?php
namespace ank\sms;

class InitScript extends \utils\admin\InitScript
{
    public function install(): bool
    {
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

        return true;
    }

    public function unInstall(): bool
    {
        # code...
        return true;
    }

    public function update(): bool
    {
        # code...
        return true;
    }
}
