<?php

namespace App\Http\Controllers;
use Request;
use App\NewsArticle;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use DB;

class NewsArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $newsarticles = DB::table('news_articles')->paginate(15);
        return view('newsarticles.index',compact('newsarticles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function create()
    {
       return view('newsarticles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $newsarticle=Request::all();
		if($newsarticle->hasFile('photo_url')) {
            $file = Input::file('photo_url');
            $name = time(). '-' .$file->getClientOriginalName();
            $photo_url->filePath = $name;

            $file->move(public_path().'/images/', $name);
        }
        $photo_url->save();
   NewsArticle::create($newsarticle);
   return redirect('newsarticles');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id);
   return view('newsarticles.edit',compact('newsarticle'));
   
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $newsarticleUpdate=Request::all();
   $newsarticle=User::find($id);
   $newsarticle->update($newsarticleUpdate);
   return redirect('newsarticles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        NewsArticle::find($id)->delete();
   return redirect('newsarticles');
    }
}