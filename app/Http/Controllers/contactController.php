<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Blog;

use App\Contactform;


class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $contacts=Contactform::all();
        return view('/contacts',compact('contacts'));
        // 
        
    
    //     $blogs = DB::table('blogs')
    // ->join('contactform', 'blogs.idcontact', '=', 'contactform.id')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

 $this->validate($request,['nomcomplete'=>'required',
                                    'email'=>'required',
                                            'message'=>'required',

            ]);
        $contacts=new Contactform();
        $contacts->nomcomplete=$request->nomcomplete;
        $contacts->email=$request->email;
        $contacts->siteweb=$request->siteweb;
        $contacts->message=$request->message;
        $contacts->save();
        return redirect('/');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contacts=Contactform::find($id);
        return view('email.email',compact('contacts'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contacts=Contactform::find($id);
        $contacts->delete();
        return redirect('home')->with('danger','Le message est supprimer');

    }
}
