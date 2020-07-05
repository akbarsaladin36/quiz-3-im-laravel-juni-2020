<?php

namespace App\Http\Controllers;

use App\ArtikelModel;
use ArtikelSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = ArtikelModel::getData();
        return view('article.index', compact('articles'));
    }

    public function create()
    {
        return view('article/create');
    }

    public function store(Request $request)
    {
        $slug = Str::slug($request->judul,'-');
        $data = $request->all();
        unset($data['_token']);
        // dd($data);
        ArtikelModel::simpan([
            'judul' => $request->judul,
            'slug' => $slug,
            'isi' => $request->isi,
            'tag' => $request->tag,
            'user_id'   => 1,
        ]);

        return redirect('/article')->with('success', 'Data berhasil ditambahkan');
    }

    public function show($id)
    {
        $article = ArtikelModel::getDatabyId($id)->first();
        //dd($article);
        return view('article.detail', compact('article'));
    }

    public function edit($id)
    {
        $article = ArtikelModel::getDatabyId($id)->first();
        return view('article.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $slug = Str::slug($request->judul,'-');
        $data = $request->all();
        unset($data['_token']);

        ArtikelModel::updateData([
            'judul' => $request->judul,
            'slug' => $slug,
            'isi' => $request->isi,
            'tag' => $request->tag,
            'user_id'   => 1,
        ], $id);

        return redirect('/article')->with('success', 'Data berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $data = ArtikelModel::hapus($id);

        
        dd($data);
    }

}

