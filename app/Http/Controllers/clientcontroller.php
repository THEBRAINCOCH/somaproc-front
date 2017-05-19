<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use App\Product;
use App\Contact;
use App\Gallerie;
use App\Topic;
use Mail;

class clientcontroller extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

         public function index()
     {
        $topics=Topic::where('language_id','=',config('languages.'.session()->get('locale')))->orderBy('created_at','desc')->limit(3)->get();
        
       
        $products=Product::where('language_id','=',config('languages.'.session()->get('locale')))->inRandomOrder()->get();
     
        $params=[
        'products'=>$products,
        'topics'=>$topics
     
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

     public function Usefulllink()
    {
      return view("client.Usefulllink");
    }


    public function contact()
    {
        
       return view("client.contact");
    }


      public function gallery()
    {
        $params=[
        'galleries'=>Gallerie::all()
        ];
      return view("client.gallery")->with($params);
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
        $topics=Topic::where('language_id','=',config('languages.'.session()->get('locale')))->orderBy('created_at','desc')->paginate(6);
        $params=[
        'topics'=>$topics];
      return view("client.News")->with($params);
    }

    public function topic($id)
    {
        $params=['topic'=>$topic=Topic::find($id)];
      return view("client.New")->with($params);
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
        //Store contact message
        $this->validate($request,[
            'Name' => 'required|max:255',
            'Lname'=>'required|max:255',
            'Email' => 'required|email|max:255',
            'Subject' => 'required|max:255',
            'Message' => 'required',
        ]);

        $contact=new Contact;
        $contact->first_name=$request->Name;
        $contact->last_name=$request->Lname;
        $contact->subject=$request->Subject; 
        $contact->email=$request->Email;
        $contact->message=$request->Message;
        $contact->save();
        Mail::raw($contact->message, function ($m) use ($contact) {
            $m->from($contact->email, $contact->first_name.' '.$contact->last_name);

            $m->to('info@somaproc.com.tn')->subject($contact->subject);
        });

      return redirect()->route('client.getContact')->withSuccess(trans('contact.success'));
        
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function landing()
    {
        //
        return view('home');
    }

   
    
      public function languageChooser($lang)
    {
        Session::set('locale', $lang);
        return redirect()->back();
    }

  public function languageChooser1($lang)
    {
        Session::set('locale', $lang);
        return redirect()->route('client.home');
    }
}
