<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use App\Product;

class clientcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
      return view("client.about");
    }

     public function Company()
    {
      return view("client.Company");
    }

 public function Statistics()
    {
      return view("client.Statistics");
    }



     public function blog()
    {
      return view("client.blog");
    }


    public function contact()
    {
       return view("client.contact");
    }


      public function gallery()
    {
      return view("client.gallery");
    }

    public function icons()
    {
      return view("client.icons");
    }

     public function index()
     {

      
        $params=[
     

        ];
       
        return view("client.index")->with($params);
     }


     public function products()
    {


       $params=[];

         
      return view("client.products")->with($params);
    }

    public function services()
    {
      return view("client.services");
    }

   
  public function typography()
    {
      return view("client.typography");
    }

public function News()
    {
      return view("client.News");
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
        //
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
        //
    }

      public function languageChooser($lang)
    {
        Session::set('locale', $lang);
        return redirect()->back();
    }

}
