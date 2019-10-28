<?php
/**
 * Created by PhpStorm.
 * User: zhangyajie
 * Date: 2019/10/28
 * Time: 21:26
 */


function test_helper() {
    return 'OK';
}

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
