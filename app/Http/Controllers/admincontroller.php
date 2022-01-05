<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Story;
use DataTables;
use DB;


class admincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.login');
    }
    public function login(Request $request){

        $username = $request->username;
        $password = $request->password;
        $checkadmin = Admin::where('username','=',$username)->where('password','=',$password)->get();
        if(($checkadmin->count()) > 0)
        {
            return "sukses";
        }
        else
        {
            return "error";
        }

    }
    public function indexliststory(){
        return view('admin.storymanage');
    }
    public function getliststory(){
        $mystory = Story::orderBy("id","desc");

        return DataTables::of($mystory)
        ->editColumn('id', function($query) {
            return '<label id = "idstory_'.$query->id.'">'.$query->id.'</label>';
        })
        ->editColumn('number', function($query) {
            return '<label id = "number">1</label>';
        })
        ->editColumn('title', function($query) {
            return '<label id = "titlestory_'.$query->id.'">'.$query->title.'</label>';
        })
        ->editColumn('image', function($query) {
            return '<label id = "image_'.$query->id.'">'.$query->image.'</label>';
        })
        ->editColumn('quotes', function($query) {
            return '<label id = "quotes_'.$query->id.'">'.$query->quotes.'</label>';
        })
        ->editColumn('date', function($query) {
            return '<label id = "date_'.$query->id.'">'.date('d F Y', strtotime($query->created_at)).'</label><label style="display:none" id = "desc_'.$query->id.'">'.$query->description.'</label>';
        })
        ->editColumn('location', function($query) {
            return '<label id = "location_'.$query->id.'" style  = "color:green;"><b><label id = "city_'.$query->id.'">'.$query->city.'</label></b><br><b><label id = "country_'.$query->id.'">'.$query->country.'</label></b></label>';
        })
        ->editColumn('action', function($query) {
            $mybutton = '
            <button type="button" id = "'.$query->id.'" onclick = openmodal(this)  class="btn waves-effect waves-light btn-sm btn-warning pr-2" data-toggle="modal"
            data-target="#modaledit" >Edit</button><br>
            <br><button type="button" id = "'.$query->id.'" onclick = deletedata(this)  class="btn waves-effect waves-light btn-sm btn-danger pr-2" >Delete</button>';
          
            return $mybutton;
        })
               ->rawColumns(['id', 'number', 'title', 'image', 'quotes', 'date','location', 'action'])
               ->make(true);
    }
    public function indexdashboard(){
        return view('admin.dashboard');
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
