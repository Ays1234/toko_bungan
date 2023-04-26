<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carrousel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Uuid;
use Illuminate\Support\Facades\Storage;
use File;
use Intervention\Image\ImageManagerStatic as Image;
use Path\To\DomDocument;

class CarrouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('backend/content/carrousel_home/index', [
            'carrousels' => Carrousel::all(),
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
        if (request('type_device') == 'desktop') {
            $validation = Validator::make(request()->all(), [
                'name' => 'required',
                'banner_image' => 'required|dimensions:min_width=1920,min_height=1080|max:3073|image|file',
                'type_device' => '',
            ]);

            if ($validation->fails()) {
                return redirect('carrousel/form')
                    ->withErrors($validation)
                    ->withInput();

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
            // if ($request->file('banner_image')) {
            //     $path = $request->file('banner_image')->store('banner_image');
            // }
            
            if($request->file('banner_image')){
       $image = $request->file('banner_image');
       $extension=$image->getClientOriginalExtension();
       $file_name = 'File-banner_image-'.date('Y-m-d-h-i-s').'.'.$extension;
       $destination_path = public_path('/core/uploads/banner_image/');
       $result=$image->move($destination_path,$file_name);
       if($result){
        //   $data['photo']=$file_name;
        
            $carrousel = Carrousel::create([
                'name' => request('name'),
                'banner_image' => $file_name,
                'type_device' => request('type_device'),
                'id_staff' => auth()
                    ->guard('staff')
                    ->user()->id,
            ]);

            if ($carrousel) {
                return redirect()
                    ->route('carrousel.index')
                    ->with(['success' => 'Data Berhasil Disimpan!']);
                return response()->json(
                    [
                        'status' => true,
                        'error' => false,
                        'message' => 'success',
                        'data' => $carrousel,
                    ],
                    200
                );
            } else {
                return redirect()
                    ->route('carrousel/form')
                    ->with(['error' => 'Data Gagal Isimpan Disimpan!']);
                return response()->json([
                    'status' => false,
                    'error' => false,
                    'message' => 'success',
                    'data' => $carrousel,
                ]);
            }
            //
            
       }
            }
            //
        } elseif (request('type_device') == 'mobile') {
            $validation = Validator::make(request()->all(), [
                'name' => 'required',
                'banner_image' => 'required|dimensions:max_width=426,max_height=893|max:3073|image|file',
                'type_device' => '',
            ]);
          
                if ($validation->fails()) {
                    return redirect('carrousel/form')
                        ->withErrors($validation)
                        ->withInput();

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
           
           if($request->file('banner_image')){
       $image = $request->file('banner_image');
       $extension=$image->getClientOriginalExtension();
       $file_name = 'File-banner_image-'.date('Y-m-d-h-i-s').'.'.$extension;
       $destination_path = public_path('/core/uploads/banner_image/');
       $result=$image->move($destination_path,$file_name);
       if($result){
           
                     $carrousel = Carrousel::create([
                'name' => request('name'),
                'banner_image' => $file_name,
                'type_device' => request('type_device'),
                'id_staff' => auth()
                    ->guard('staff')
                    ->user()->id,
            ]);

                if ($carrousel) {
                    return redirect()
                        ->route('carrousel.index')
                        ->with(['success' => 'Data Berhasil Disimpan!']);
                    return response()->json(
                        [
                            'status' => true,
                            'error' => false,
                            'message' => 'success',
                            'data' => $carrousel,
                        ],
                        200
                    );
                    
      
           
                } else {
                    return redirect()
                        ->route('carrousel/form')
                        ->with(['error' => 'Data Gagal Isimpan Disimpan!']);
                    return response()->json([
                        'status' => false,
                        'error' => false,
                        'message' => 'success',
                        'data' => $carrousel,
                    ]);
                }
                
                                      //
       }
           }
           //
            
        
            } else {
                return redirect()
                    ->route('carrousel.index')
                    ->with(['error' => 'Data Gagal Isimpan Disimpan!']);
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
        $carrousel = Carrousel::select('*')
            ->where('id', $id)
            ->get();
        return view('backend/content/carrousel_home/edit', ['id' => $carrousel]);
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
        $ids=$id;
         if (request('type_device') == 'desktop') {
        $validator = Validator::make(request()->all(), [
            'name' => 'required',
            'banner_image' => 'required|image|file',
            'type_device' => '',
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
        $updatecarrousel = Carrousel::find($id);
         $path = public_path().'/core/uploads/banner_image/';
        if ($request->file('banner_image')) {
            if ($request->banner_image) {
                 $file_old = $path.$updatecarrousel->banner_image;
                 unlink($file_old);
            }
            
         $image = $request->file('banner_image');
       $extension=$image->getClientOriginalExtension();
       $file_name = 'File-'.date('Y-m-d-h-i-s').'.'.$extension;
       $destination_path = public_path('/core/uploads/banner_image/');
       $result=$image->move($destination_path,$file_name);
       if($result){
        //   $data['photo']=$file_name;
            
        $carrousel = $updatecarrousel->update([
            'name' => request('name'),
            'banner_image' => $file_name,
            'type_device' => request('type_device'),
            'id_staff' => auth()
                    ->guard('staff')
                    ->user()->id,
        ]);

        if ($carrousel) {
            // return response()->json(['message' => 'Pendaftaran']);
            return redirect()
                ->route('carrousel.index')
                ->with(['success' => 'Data Berhasil Disimpan!']);

            return response()->json(
                [
                    'status' => true,
                    'error' => false,
                    'message' => 'success',
                    'data' => $carrousel,
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
            //
           
        } elseif (request('type_device') == 'mobile') {
            $validation = Validator::make(request()->all(), [
                'name' => 'required',
                'banner_image' => 'required|dimensions:max_width=426,max_height=893|max:3073|image|file',
                'type_device' => '',
            ]);
          
          
                if ($validation->fails()) {
                    // return redirect('carrousel/edit/$id')
                    //     ->withErrors($validation)
                    //     ->withInput();
                         return redirect()
                ->back()
                ->withInput()
               ->withErrors($validation);

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
           
       $updatecarrousel = Carrousel::find($id);
         $path = public_path().'/core/uploads/banner_image/';
        if ($request->file('banner_image')) {
            if ($request->banner_image) {
                 $file_old = $path.$updatecarrousel->banner_image;
                 unlink($file_old);
            }
            
         $image = $request->file('banner_image');
       $extension=$image->getClientOriginalExtension();
       $file_name = 'File-'.date('Y-m-d-h-i-s').'.'.$extension;
       $destination_path = public_path('/core/uploads/banner_image/');
       $result=$image->move($destination_path,$file_name);
       if($result){
        //   $data['photo']=$file_name;
            
        $carrousel = $updatecarrousel->update([
            'name' => request('name'),
            'banner_image' => $file_name,
            'type_device' => request('type_device'),
            'id_staff' => auth()
                    ->guard('staff')
                    ->user()->id,
        ]);


                if ($carrousel) {
                    return redirect()
                        ->route('carrousel.index')
                        ->with(['success' => 'Data Berhasil Disimpan!']);
                    return response()->json(
                        [
                            'status' => true,
                            'error' => false,
                            'message' => 'success',
                            'data' => $carrousel,
                        ],
                        200
                    );
                    
      
           
                } else {
                    return redirect()
                ->back()
                ->withInput()
               ->withErrors($validation);
                    return response()->json([
                        'status' => false,
                        'error' => false,
                        'message' => 'success',
                        'data' => $carrousel,
                    ]);
                }
                
                                      //
       }
           }
           //
            
        
            } else {
                return redirect()
                    ->route('carrousel.index')
                    ->with(['error' => 'Data Gagal Isimpan Disimpan!']);
            }
           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //
        $deletecarrousel = Carrousel::find($id);
        
            $path = public_path().'/core/uploads/banner_image/';
        if ($deletecarrousel->banner_image) {
           $file_old = $path.$deletecarrousel->banner_image;
                 unlink($file_old);
        }
        
        $carrousel = $deletecarrousel->delete();

        if ($carrousel) {
            // return response()->json(['message' => 'Pendaftaran']);
            return redirect()
                ->route('carrousel.index')
                ->with(['success' => 'Data Berhasil Disimpan!']);

            return response()->json(
                [
                    'status' => true,
                    'error' => false,
                    'message' => 'success',
                    'data' => $carrousel,
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
