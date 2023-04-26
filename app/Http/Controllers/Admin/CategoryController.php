<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Uuid;
use Illuminate\Support\Facades\Storage;
use File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('backend/master/category_press/index', [
            'category' => Category::all(),
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
            'judul'=>'required',
             'photo' => 'required|image|file',
             'deskripsi' => 'required',
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
        //  if ($request->file('photo')) {
        //      $path = $request->file('photo')->store('photo');
        //  }
         
           if($request->file('photo')){
       $image = $request->file('photo');
       $extension=$image->getClientOriginalExtension();
       $file_name = 'File-category-'.date('Y-m-d-h-i-s').'.'.$extension;
       $destination_path = public_path('/core/uploads/category/');
       $result=$image->move($destination_path,$file_name);
       if($result){
        //   $data['photo']=$file_name;
  
    
         $category = Category::create([
             'judul'=>request('judul'),
             'photo' => $file_name,
             'deskripsi' => request('deskripsi'),
             'id_staff' => auth()->guard('staff')->user()->id, 
         ]);
 
         if ($category) {
             return redirect()->route('category.index')->with(['success' => 'Data Berhasil Disimpan!']);
             return response()->json(
                 [
                     'status' => true,
                     'error' => false,
                     'message' => 'success',
                     'data' => $category,
                 ],
                 200
             );
         } else {
             return response()->json([
                 'status' => false,
                 'error' => false,
                 'message' => 'success',
                 'data' => $category,
             ]);
         }
         //
         
       }
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
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $category = Category::select('*')
        ->where('id', $id)
        ->get();
    return view('backend/master/category_press/edit', ['id' => $category]);

//     $category = Category::select('*')
//     ->where('id', $id)
//     ->get();
// return view('backend/master/category_press/edit', ['id' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //

        $validator = Validator::make(request()->all(), [
            'judul'=>'required',
             'photo' => 'required|image|file',
             'deskripsi' => 'required',
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
        $updatecategory = Category::find($id);
         $path = public_path().'/core/uploads/category/';

        if ($request->file('photo')) {
            if ($request->photo) {
                // File::delete('/core/uploads/'.$updatecategory->photo);
                $file_old = $path.$updatecategory->photo;
                 unlink($file_old);
            }
       $image = $request->file('photo');
       $extension=$image->getClientOriginalExtension();
       $file_name = 'File-category-'.date('Y-m-d-h-i-s').'.'.$extension;
       $destination_path = public_path('/core/uploads/category/');
       $result=$image->move($destination_path,$file_name);
       if($result){
        //   $data['photo']=$file_name;
            
        }

        $category = $updatecategory->update([
            'judul'=>request('judul'),
            'photo' => $file_name,
            'deskripsi' => request('deskripsi'),
            'id_staff' => auth()->guard('staff')->user()->id, 
        ]);

        if ($category) {
            // return response()->json(['message' => 'Pendaftaran']);
            return redirect()->route('category.index')->with(['success' => 'Data Berhasil Disimpan!']);
           
            return response()->json(
                [
                    'status' => true,
                    'error' => false,
                    'message' => 'success',
                    'data' => $category,
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
        //
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        
        $deletecategory = Category::find($id);
         $path = public_path().'/core/uploads/category/';
        if ($deletecategory->photo) {
           $file_old = $path.$deletecategory->photo;
                 unlink($file_old);
        }
    $category = $deletecategory->delete();

    if ($category) {
        // return response()->json(['message' => 'Pendaftaran']);
        return redirect()->route('category.index')->with(['success' => 'Data Berhasil Disimpan!']);
           
        return response()->json(
            [
                'status' => true,
                'error' => false,
                'message' => 'success',
                'data' => $category,
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
}
