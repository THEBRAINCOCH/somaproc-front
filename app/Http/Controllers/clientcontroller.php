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

         public function index()
     {
       
        $products=Product::where('language_id','=',config('languages.'.session()->get('locale')))->inRandomOrder()->get();
     
        $params=[
        'products'=>$products
     
        ];
       
        return view("client.index")->with($params);
     }
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

     public function products($id)
    {
  $products=Product::where('language_id','=',config('languages.'.session()->get('locale')))->where('category_id','=',$id)->get();

       $params=[
       'products'=>$products
     ];

         
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

      public function languageChooser($lang)
    {
        Session::set('locale', $lang);
        return redirect()->back();
    }

}
