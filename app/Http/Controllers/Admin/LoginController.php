<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;

class LoginController extends Controller
{
    //返回后台登录页面

    public function login()
    {
        return view('admin.login');
    }


    //验证码
    public function captcha(Request $request)
    {
        $builder = new CaptchaBuilder();
        $builder->build('150', '50');
        $phrase = $builder->getPhrase();
        $request->session()->put('code', $phrase);
        header('Content-type: image/jpeg');
        $builder->output();
    }


}
