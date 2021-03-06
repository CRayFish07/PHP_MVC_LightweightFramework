﻿<?php

/**
 *
 * @author 李玉江<liyujiang_tk@yeah.net>
 * @copyright Li YuJiang, All Rights Reserved
 * @version 2015/4/14
 * Created by IntelliJ IDEA
 */
class AnnounceController extends ApiController
{

    /**
     * 返回的参数说明：
     * random——和客户端比较，用于强制更新
     * type——公告类型：0-文本、1-动画、2-网页、3-下载文件、4-打开第三方应用
     * icon——图标，png、jpg或gif，为空的话客户端将默认为APP图标
     * position——图标位置：0-5，依次为左上、左中、左下、右上、右中、右下
     * title——标题
     * content——内容
     * url——type为动画时代表客户端对应的动画方法，如：multi、shake、flash、wave、path、svg等，
            否则代表http、intent、mqqwpa、tel、mailto等地址
     * expire——有效期，单位为小时
     */
    public function get()
    {
        $base_url = Flight::getInstance()->get('base_url');
        $mouth = intval(date('m'));
        $day = intval(date('d'));
        $random = 1234567000;
        $type = 1;
        $icon = $base_url . '/data/announce/default.gif';
        $position = 4;
        $title = '温馨提示';
        $content = '在使用过程中，如果出现奔溃，建议点击发送日志给开发者以便帮助改善软件……';
        $url = 'multi://name=bubble:fall:pulse&duration=3000&startDelay=0&repeatCount=-1&repeatMode=restart&interpolator=LinearInterpolator&action=http://wap.qqtheme.cn';
        $expire = 7 * 24;
        $data = array(
            'random' => $random,
            'type' => $type,
            'icon' => $icon,
            'position' => $position,
            'title' => $title,
            'content' => $content,
            'url' => $url,
            'expire' => $expire,
        );
        $this->responseJson(1, "获取数据成功", $data);
    }

}

