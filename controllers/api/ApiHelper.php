<?php

/**
 * Created by PhpStorm.
 * Author: ����[QQ:1032694760]
 * Date: 2015-10-02 18:06
 */
class ApiHelper
{

    /**
     * ���access_token�Ƿ���Ч
     *
     * @param $token
     * @return array|bool
     */
    public static function accessTokenValid($token)
    {
        if (empty($token)) {
            Logger::getInstance()->warn("TokenΪ��");
            return false;
        }
        $model = new AppTokenModel();
        $res = $model->read($token);
        if ($res) {
            return $res;
        } else {
            Logger::getInstance()->warn("δ��Ȩ���ѹ���");
            return false;
        }
    }

}