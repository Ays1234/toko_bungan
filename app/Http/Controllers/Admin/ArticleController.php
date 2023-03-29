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
            'id_staff' => auth()->user()->id,
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
            'thumbnail' => 'required|image|file',
            'photo_banner_article' => 'required|image|file',
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
                200,
            );
        }
        $updatearticle = Article::find($id);
        if ($request->file('thumbnail')) {
            if ($request->thumbnail) {
                Storage::delete($updatearticle->thumbnail);
            }
            $path1 = $request->file('thumbnail')->store('thumbnail');
        }

        if ($request->file('photo_banner_article')) {
            if ($request->photo_banner_article) {
                Storage::delete($updatearticle->photo_banner_article);
            }
            $path2 = $request->file('photo_banner_article')->store('photo_banner_article');
        }

        $article = $updatearticle->update([
            'judul' => request('judul'),
            'thumbnail' => $path1,
            'photo_banner_article' => $path2,
            'deskripsi' => request('deskripsi'),
            'id_staff' => auth()->user()->id,
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $deletecarrousel = Carrousel::find($id);
        if ($deletecarrousel->banner_image) {
            Storage::delete($deletecarrousel->banner_image);
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
