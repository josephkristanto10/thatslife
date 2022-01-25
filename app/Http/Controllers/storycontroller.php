<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;
use DataTables;
use DB;
use Illuminate\Support\Facades\File;

class storycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $allstory = Story::orderBy('id', 'desc')->paginate(9);
        $kota = DB::select("select distinct city from story");
        $negara = DB::select("select distinct country from story");
        return view('storylist', compact('allstory', 'kota', 'negara') );
    }
    public function filterstory(Request $request)
    {
        // $allstory = DB::table("story");
        $searchquery ="";
        $tahun = $request->pilihantahun;
        $kota = $request->pilihankota;
        $jumlahstring = 0;
        $wherestring = " where ";
        if($tahun == "nofilter"){
            $tahun ="";
        }
  
  
        if($kota == "nofilter"){
            $kota ="";
        }
       
        $negara = $request->pilihannegara;
        if($negara == "nofilter"){
            $negara ="";
        }
    
        if($jumlahstring == 0)
        {
            $wherestring = "  ";
        }
   
        
      
        // $allstory = DB::select("select * from story ".$wherestring.substr($searchquery, 0, -3));
        $allstory = DB::table("story")->whereYear('created_at','LIKE',"%$tahun%")->where('city','LIKE',"%$kota%")->where('country','LIKE',"%$negara%")->paginate(9);

        // $allstory->paginate(9);
        $kota = DB::select("select distinct city from story");
        $negara = DB::select("select distinct country from story");
        if ($request->ajax()) {
            return view('storylistajax', compact('allstory', 'kota', 'negara'))->render();  
        }
        return view('storylist', compact('allstory', 'kota', 'negara') );
    }
    public function indexmain(){
        $allstory = Story::orderBy('id', 'desc')->limit(3)->get();
        return view('index', compact('allstory'));
    }
    public function addcommment(){
        $story = Story::find(2);
        $comment = $story->comment('This is a comment from a user.');
        $comment->approve();
    }
    public function indexdetail($id)
    {
        // $idpost = $request->id_post;
        $story = Story::find($id);
        $comments = $story->comments;
        return view('detailstory', compact('comments', 'story'));
    }
    public function addstory(Request $request)
    {
        $fileimage = $request->file('imagestory');
        $fileimage->move(public_path()."/gambarstory/", $fileimage->getClientOriginalName());
        $filequotes = $request->file('quotesstory');
        $filequotes->move(public_path()."/gambarstory/", $filequotes->getClientOriginalName());
        $title = $request->titlestory;
        $country = $request->countrystory;
        $city = $request->citystory;
        $image = $fileimage->getClientOriginalName();
        $quotes = $filequotes->getClientOriginalName();
        $description = $request->descriptionstory;
        $addstory = new Story;
        $addstory->title = $title;
        $addstory->image = $image;
        $addstory->country = $country;
        $addstory->caption = " ";
        $addstory->city = $city;
        $addstory->description = $description;
        $addstory->quotes = $quotes;
        $addstory->save();
    }
    public function editstory(Request $request)
    {  
        $editstory = Story::find($request->myidedit);
        if($request->file('imagestoryedit'))
        {   $fileimage = $request->file('imagestoryedit');
            $image = $fileimage->getClientOriginalName();
            $fileimage->move(public_path()."/gambarstory/", $fileimage->getClientOriginalName());
            $editstory->image = $image;
        }
        if($request->file('quotesstoryedit'))
        {
            $filequotes = $request->file('quotesstoryedit');
             $filequotes->move(public_path()."/gambarstory/", $filequotes->getClientOriginalName());
             $quotes = $filequotes->getClientOriginalName();
             $editstory->quotes = $quotes;
        }
        
     
        
        $title = $request->titlestoryedit;
        $country = $request->countrystoryedit;
        $city = $request->citystoryedit;
       
    
        $description = $request->descriptionstoryedit;
      
        $editstory->title = $title;

        $fotolama =  $editstory->title;
      
        
        $editstory->country = $country;
        $editstory->caption = " ";
        $editstory->city = $city;
        $editstory->description = $description;

        $editstory->save();
        // $path = parse_url($post->featured);
        $test = File::delete("/gambarstory/".$fotolama);
        return $test;
    }
    public function getallinfostory(Request $request)
    {

    }
    public function deletestory(Request $request)
    {
        $myid = $request->idbaris;
        $story = Story::find($myid);
        $story->delete();
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
}
