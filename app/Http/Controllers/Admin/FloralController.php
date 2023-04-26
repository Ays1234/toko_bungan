<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Floral;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Uuid;
use Illuminate\Support\Facades\Storage;
use File;

class FloralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('backend/project/floral/index', [
            'floral' => Floral::all(),
           ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $validation = Validator::make(request()->all(), [
            'name'=>'required',
            //  'image_floral' => 'required|image|file|dimensions:min_width=1920,min_height=1080|max:3073',
            'image_floral' => 'required|image|file',
         ]);
 
         if ($validation->fails()) {
             return response()->json(
                 [
                     'status' => false,
                     'error' => false,
                     'message' => 'Error',
                     'data' => null,
                 ],
                 200
             );
         }
         if($request->file('image_floral')){
       $image = $request->file('image_floral');
       $extension=$image->getClientOriginalExtension();
       $file_name = 'File-image_floral-'.date('Y-m-d-h-i-s').'.'.$extension;
       $destination_path = public_path('/core/uploads/image_floral/');
       $result=$image->move($destination_path,$file_name);
       
         $floral = Floral::create([
             'name'=>request('name'),
             'image_floral' => $file_name,
             'id_staff' => auth()->guard('staff')->user()->id, 
         ]);
 
         if ($floral) {
             return redirect()->route('floral_cms.index')->with(['success' => 'Data Berhasil Disimpan!']);
             return response()->json(
                 [
                     'status' => true,
                     'error' => false,
                     'message' => 'success',
                     'data' => $floral,
                 ],
                 200
             );
         } else {
             return response()->json([
                 'status' => false,
                 'error' => false,
                 'message' => 'success',
                 'data' => $floral,
             ]);
         }
    }
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
        $floral = Floral::select('*')
            ->where('id', $id)
            ->get();
        return view('backend/project/floral/edit', ['id' => $floral]);
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
        $validator = Validator::make(request()->all(), [
            'name'=>'required',
            'image_floral' => 'required|image|file',
        ]);
        if ($validator->fails()) {
            // return response()->json($validator->messages());

            return response()->json(
                [
                    'status' => false,
                    'error' => false,
                    'message' => 'Error',
                    'data' => null,
                ],
                200
            );
        }
        $updatefloral= Floral::find($id);
         $path = public_path().'/core/uploads/image_floral/';
        if ($request->file('image_floral')) {
            if ($request->image_floral) {
               $file_old = $path.$updatefloral->image_floral;
                 unlink($file_old);
            }
           
        }
        
        $image = $request->file('image_floral');
       $extension=$image->getClientOriginalExtension();
       $file_name = 'File-image_floral-'.date('Y-m-d-h-i-s').'.'.$extension;
       $destination_path = public_path('/core/uploads/image_floral/');
       $result=$image->move($destination_path,$file_name);

        $floral= $updatefloral->update([
            'name'=>request('name'),
            'image_floral' => $file_name,
            'id_staff' => auth()->guard('staff')->user()->id, 
        ]);

        if ($floral) {
            // return response()->json(['message' => 'Pendaftaran']);
            return redirect()->route('floral_cms.index')->with(['success' => 'Data Berhasil Disimpan!']);
           
            return response()->json(
                [
                    'status' => true,
                    'error' => false,
                    'message' => 'success',
                    'data' => $floral,
                ],
                200
            );
        } else {
            return response()->json(
                [
                    'status' => false,
                    'error' => false,
                    'message' => 'Error',
                    'data' => null,
                ],
                200
            );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        //
        $deletefloar = Floral::find($id);
         $path = public_path().'/core/uploads/image_floral/';
        if ($deletefloar->image_floar) {
            $file_old = $path.$deletefloar->image_floral;
                 unlink($file_old);
        }
    $floar = $deletefloar->delete();

    if ($floar) {
        // return response()->json(['message' => 'Pendaftaran']);
        return redirect()->route('floral_cms.index')->with(['success' => 'Data Berhasil Disimpan!']);
           
        return response()->json(
            [
                'status' => true,
                'error' => false,
                'message' => 'success',
                'data' => $floar,
            ],
            200,
        );
    } else {
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
   }
}
