<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $books = \App\Books::all();
        

        return view('books', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        \App\Books::create($data);
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = \Auth::id();
        $name = \Auth::user()->name;
        $data = $request->all();
        unset($data['_token']);
        unset($data['_method']);
        $data['user_id'] = $id;
        $data['user_name'] = $name;
        $data['avaliable'] = true;
        
        
       
        
        \App\Books::create($data);
        

        return redirect('books');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $books = \App\Books::where('id',$id)->first();
        return view('edit', ["books"=>$books]);
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
        $data = $request->all();
        
        unset($data['_token']);
        unset($data['_method']);

         \App\Books::where('id',$id)->update($data);


        return redirect('books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request,$id)
    {
        $data = $request->all();

        unset($data['_token']);
        unset($data['_method']);

        \App\Books::where('id',$id)->delete();


        return redirect('/books');

    }

    public function reserve($id)
    {
        
        $books = \App\Books::where('id',$id)->first();
        return view('reserve', ["books"=>$books]);
    }

  public function val(Request $request,$id)
  {
    
    $data = $request->all();
    $data['avaliable'] = false;
        unset($data['_token']);
        unset($data['_method']);

      
        
         \App\Books::where('id',$id)->update($data);

         return redirect('books');
        
  }
  public function return(Request $request,$id)
  {
    
    $data = $request->all();
    $data['avaliable'] = true;
        unset($data['_token']);
        unset($data['_method']);

      
        
         \App\Books::where('id',$id)->update($data);

         return redirect('books');
        
  }
  
}
