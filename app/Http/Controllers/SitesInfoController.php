<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitesInfoController extends Controller
{
    /**
     * 模版变量定义和传递
     *
     * with形式：
        $first = 'Packy';
        $last = 'Xu';

        return view('sites.about')->with('first' => $first); 单个参数
     * 以数组形式传递多个参数：
        return view('sites.about')->with([
            'first' => $first,
            'last'  => $last,
        ]);
     *
     *  data 形式：
     *
            $data['first'] = 'Packy';
            $data['last'] = 'Xu';

            return view('sites.about',$data);
     *
     * compact形式：
     *
        $data = [
            'first' => 'Packy',
            'last' => 'Xu',
        ];

        return view('sites.about',compact('data'));
     *
     * 直接传递以string形式将 变量名传递进去：
        $first = 'Packy';
        $last = 'Xu';

        return view('sites.about',compact('first','last'));
     *
    */

    public function about()
    {


        $first = 'Packy';
        $last = 'Xu';

        return view('sites.about',compact('first','last'));
    }

    public function contact()
    {
        $people = ['Taylor Otwell','Jeffray Way','Happy Peter'];
        return view('sites.contact',compact('people'));
    }
}
