<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Uuid;
use Illuminate\Support\Facades\Storage;
use File;
use Intervention\Image\ImageManagerStatic as Image;
use Path\To\DomDocument;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('backend/content/article/index', [
            'articles' => Article::all(),
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
            'judul' => 'required',
            'thumbnail' => 'required|image|file',
            'photo_banner_article' => 'required|image|file',
            'deskripsi' => 'required',
        ]);

        $storage = 'storage/content';
            $dom = new \DOMDocument();
            libxml_use_internal_errors(true);
            $dom->loadHTML($request->deskripsi, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
            libxml_get_errors();
            $images = $dom->getElementsByTagName('img');
            foreach ($images as $img) {
                $src = $img->getAttribute('src');
                if (preg_match('/data:image/', $src)) {
                    preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                    $mimetype = $groups['mime'];
                    $fileNameContent = uniqid();
                    $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                    $filepath=("$storage/$fileNameContentRand.$mimetype");
                    $image=Image::make($src)->resize(1200,1200)->encode($mimetype,100)->save(public_path($filepath));
                    $new_src=asset($filepath);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $new_src);
                    $img->setAttribute('class','img-responsive');
                }
            }

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
        if ($request->file('thumbnail')) {
            $path1 = $request->file('thumbnail')->store('thumbnail');
        }
        if ($request->file('photo_banner_article')) {
            $path2 = $request->file('photo_banner_article')->store('photo_banner_article');
        }
        $article = Article::create([
            'judul' => request('judul'),
            'thumbnail' => $path1,
            'photo_banner_article' => $path2,
            'deskripsi' => request('deskripsi'),
            'id_staff' =>  auth()->guard('staff')->user()->id, 
        ]);

        if ($article) {
            return redirect()
                ->route('article.index')
                ->with(['success' => 'Data Berhasil Disimpan!']);
            return response()->json(
                [
                    'status' => true,
                    'error' => false,
                    'message' => 'success',
                    'data' => $article,
                ],
                200,
            );
        } else {
            return response()->json([
                'status' => false,
                'error' => false,
                'message' => 'success',
                'data' => $article,
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
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $article = Article::select('*')
            ->where('id', $id)
            ->get();
        return view('backend/content/article/edit', ['id' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validator = Validator::make(request()->all(), [
            'judul' => 'required',
            'thumbnail' => 'image|file',
            'photo_banner_article' => 'image|file',
            'deskripsi' => '',
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
                200,
            );
        }
        $updatearticle = Article::find($id);
        if ($request->file('thumbnail')) {
            if ($request->thumbnail) {
                Storage::delete($updatearticle->thumbnail);
            } //
            if ($request->file('photo_banner_article')) {
                if ($request->photo_banner_article) {
                    Storage::delete($updatearticle->photo_banner_article);
                }
                $path1 = $request->file('thumbnail')->store('thumbnail');
                $path2 = $request->file('photo_banner_article')->store('photo_banner_article');

                $article = $updatearticle->update([
                    'judul' => request('judul'),
                    'thumbnail' => $path1,
                    'photo_banner_article' => $path2,
                    'deskripsi' => request('deskripsi'),
                    'id_staff' => auth()->guard('staff')->user()->id, 
                ]);
        
                if ($article) {
                    // return response()->json(['message' => 'Pendaftaran']);
                    return redirect()
                        ->route('article.index')
                        ->with(['success' => 'Data Berhasil Disimpan!']);
        
                    return response()->json(
                        [
                            'status' => true,
                            'error' => false,
                            'message' => 'success',
                            'data' => $article,
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
                // batas yang ada upload gambar by situs me: https://bit.ly/yogingoding
            }
        } else {
            $article = $updatearticle->update([
                'judul' => request('judul'),
                'deskripsi' => request('deskripsi'),
                'id_staff' => auth()->guard('staff')->user()->id, 
            ]);

            if ($article) {
                // return response()->json(['message' => 'Pendaftaran']);
                return redirect()
                    ->route('article.index')
                    ->with(['success' => 'Data Berhasil Disimpan!']);
    
                return response()->json(
                    [
                        'status' => true,
                        'error' => false,
                        'message' => 'success',
                        'data' => $article,
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
            // batas yang tidak ada upload gambar by situs me: https://bit.ly/yogingoding
        }

       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $deletearticle = Article::find($id);
        if ($deletearticle->thumbnail) {
            Storage::delete($deletearticle->thumbnail);
        }
        if ($deletearticle->photo_banner_article) {
            Storage::delete($deletearticle->photo_banner_article);
        }
        $article = $deletearticle->delete();

        if ($article) {
            // return response()->json(['message' => 'Pendaftaran']);
            return redirect()
                ->route('article.index')
                ->with(['success' => 'Data Berhasil Disimpan!']);

            return response()->json(
                [
                    'status' => true,
                    'error' => false,
                    'message' => 'success',
                    'data' => $article,
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

    public function uploadImage(){
        // $article = new Article();
        // $article->id=0;
        // $article->exists =true;

        // $images = $article->addMediaFromRequest('upload')->toMediaCollection('images');

        // return response()->json([
        //     'url'=>$images->getUrl()
        // ]);

        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
    
            $request->file('upload')->move(public_path('media'), $fileName);
    
            $url = asset('media/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
        
    }
}
