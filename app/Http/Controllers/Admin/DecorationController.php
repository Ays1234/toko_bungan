<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Decoration;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Uuid;

class DecorationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //te
        return view('backend/project/decoration/index', [
            'decoration' => Decoration::all(),
           ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $validation = Validator::make(request()->all(), [
            'name'=>'required',
             'banner_image' => 'required|image|file|dimensions:min_width=1920,min_height=1080|max:3073',
             'type_device' => '',
         ]);
 
         if ($validation->fails()) {
             return response()->json(
                 [
                     'status' => false,
                     'error' => false,
                     'message' => 'Error',
                     'data' => null,
                 ],
                 200,
             );
         }
         if ($request->file('banner_image')) {
             $path = $request->file('banner_image')->store('banner_image');
         }
         $carrousel = Carrousel::create([
             'name'=>request('name'),
             'banner_image' => $path,
             'type_device' => request('type_device'),
             'id_staff' => auth()->user()->id,
         ]);
 
         if ($carrousel) {
             return redirect()->route('carrousel.index')->with(['success' => 'Data Berhasil Disimpan!']);
             return response()->json(
                 [
                     'status' => true,
                     'error' => false,
                     'message' => 'success',
                     'data' => $carrousel,
                 ],
                 200,
             );
         } else {
             return response()->json([
                 'status' => false,
                 'error' => false,
                 'message' => 'success',
                 'data' => $carrousel,
             ]);
         }
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
