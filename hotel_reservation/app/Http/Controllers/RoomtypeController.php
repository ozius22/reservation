<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomType;
class RoomtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=RoomType::all();
        return view('roomtype.index', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('roomtype.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new RoomType;
        $data->type_name=$request->type;
        $data->description=$request->description;
        $data->save();

        return redirect('admin/roomtype/create')->with('success', 'Successfully Saved.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=RoomType::find($id);
        return view('roomtype.show', ['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=RoomType::find($id);
        return view('roomtype.edit', ['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=RoomType::find($id);
        $data->type_name=$request->type;
        $data->description=$request->description;
        $data->save();

        return redirect('admin/roomtype/' .$id. '/edit')->with('success', 'Changes Saved.'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        RoomType::where('id', $id)->delete();

        return redirect('admin/roomtype')->with('success', 'Deleted Successfully.'); 

    }
}
