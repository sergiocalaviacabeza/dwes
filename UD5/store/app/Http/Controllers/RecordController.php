<?php

namespace App\Http\Controllers;

use App\Models\Record;
use App\Models\Band;
use Illuminate\Http\Request;
use Session;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Record::all();

        return view('record.index',['records'=>$records]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $bands = Band::all();
        return view('record.create', ["bands" => $bands]);
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

    public function add(Record $record)
    {
        $bands = Band::all();
        echo "voy a guardar un dato en la sesión";
        echo($record->id);
        session(['record'=>$record]); //guardar un objeto en la sesión
        echo"voy a recuperarlo para ver que se ha guardado bien";
        $recordRec = session('record');
        echo($recordRec->code);
        return view('record.add',["bands" => $bands], ['record'=> $record]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Record $record)
    {
        $bands = Band::all();
        $record->delete();
        return redirect('/records');
    }

    public function filter (Request $request){
        $filter = $request->filtro;
        $records = Record::where('title','LIKE',"%$filter%")->get();

        return view('record.index',['records'=>$records]);
    }

}
