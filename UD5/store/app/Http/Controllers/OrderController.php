<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Record;
use App\Models\Band;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Record::all();

        return view('order.index',['records'=>$records]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $bands = Band::all();
        return view('order.create', ["bands" => $bands]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $rules = [
            'title'=>'required',
            'code'=> 'required|max:20',
            'year'=>'required',
            'format'=>'required',
            'condition'=>'required',
            'price'=>'required'
        ];
        $request->validate($rules);
        $record = Record::create($request->all());

        return redirect ('/records');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Record $record)
    {
        $bands = Band::all();
        return view('record.show',["bands" => $bands],['record'=>$record]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Record $record)
    {
        $bands = Band::all();
        return view('record.edit',["bands" => $bands], ['record'=> $record]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Record $record)
    {
        $record->fill($request->all());
        $record->save();
        return redirect('/records');
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
