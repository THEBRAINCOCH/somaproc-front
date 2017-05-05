<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use App\Product;
use App\Contact;

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

<<<<<<< HEAD


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
        //Store contact message
        $this->validate($request,[
            'Name' => 'required|min:3|max:255',
            'Lname'=>'required|min:3|max:255',
            'Email' => 'required|email|max:255',
            'Subject' => 'required|min:6|max:255',
            'Message' => 'required|min:10',
        ]);

        $contact=new Contact;
        $contact->first_name=$request->Name;
        $contact->last_name=$request->Lname;
        $contact->subject=$request->Subject; 
        $contact->email=$request->Email;
        $contact->message=$request->Message;
        $contact->save();

      return view("client.contact")->with('success', "message envoyé avec succès.");
        
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

=======
>>>>>>> 8c0c0ddf5dc3905576d3f25a5db12eab882cae74
      public function languageChooser($lang)
    {
        Session::set('locale', $lang);
        return redirect()->back();
    }

}
