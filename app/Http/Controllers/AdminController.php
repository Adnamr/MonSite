<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Blog;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs=Blog::all();
        return view('home2.index',compact('blogs'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home2.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['titre'=>'required',
                                    'datep'=>'required',
                                        'categorie'=>'required',
                                           'bodyb'=>'required|min:20',
                                                'imageb'=>'required',
            ]);

        

       
        $blogs=new Blog();

        $file=$request->file('imageb');
        $distinationPath='images/blogs/';
        $filename=$file->getClientOriginalName();
        $file->move($distinationPath,$filename);


        $blogs->titre=$request->titre;
        $blogs->datep=$request->datep;
        $blogs->categorie=$request->categorie;
        $blogs->bodyb=$request->bodyb;
        $blogs->imageb=$filename;
       
       
   
        $blogs->save();
        return redirect()->route('home2.index')->with('success','bien Ajouter');
       


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blogs=Blog::find($id);
        return view('home2.show',compact('blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $blogs=Blog::find($id);
        return view('home2.edit',compact('blogs'));
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
        $this->validate($request,['titre'=>'required',
                                        'datep'=>'required',
                                              'categorie'=>'required',
                                                    'bodyb'=>'required',
                                                         'imageb'=>'required',   
            ]);
       $blogs=Blog::findorfail($id);
       if ($request->hasFile('image')) {
           
           $file=$request->file('imageb');
           $distinationPath='images';
           $filename=$file->getClientOriginalName();
           $file->move($distinationPath,$filename);

            $blogs->imageb=$filename;
       }    
            $blogs->titre=$request->titre;
            $blogs->datep=$request->datep;
            $blogs->categorie=$request->categorie;
            $blogs->bodyb=$request->bodyb;
            
       $blogs->save();
        return redirect()->route('home2.index')->with('success','bien Ajouter');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogs=Blog::find($id);
        $blogs->delete();
        return redirect()->route('home2.index')->with('success','bien Supprimer');
    }
}
