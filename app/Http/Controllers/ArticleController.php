<?php

namespace App\Http\Controllers;



use App\Http\Requests\CreateArticleRequest;
use App\Models\Article;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class ArticleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         *    返回全部数据:   $articles = Article::all();
         *    查看登陆用户信息  dd(Auth::user());
         */
        //dd(Auth::user());
        //显示指定时间日期的文章
        $articles = Article::latest()->published()->paginate(5);
        /*
         * laravel会直接返回json格式
         * return $articles;
        */
        return view('articles.index',compact('articles'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('articles.create');
    }



    public function store(CreateArticleRequest $request)
    {
        /***
         * dd($request->all());
         *
         * 1.接受post数据
         * 2.验证表单数据
         * 3.存入数据库
         * 4.重定向
         */

        //dd($request->all());exit();
        //$request->get('content');
        $article = new Article;
        $article->title = $request->title;
        $article->intro = $request->intro;
        $article->content = $request->content;
        $article->published_at = $request->published_at;
        $article->user_id = Auth::user()->id;
        $article->save();

        //Article::create(array_merge(['user_id'=>Auth::user()->id]),$request->all());

        return redirect('/articles');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('articles.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);

        return view('articles.edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateArticleRequest $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());

        return redirect('/articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        if ($article->delete()){
            \session()->flash('success','删除成功');

            return redirect('/articles');
            //return response()->json(['status'=>1,'msg'=>'删除成功！']);
        }else{
            \session()->flash('error','删除失败!');

            return redirect('/articles/',$article->id);
            //return response()->json(['status'=>0,'msg'=>'删除失败！']);
        }

       //return redirect('/articles');
    }
}
