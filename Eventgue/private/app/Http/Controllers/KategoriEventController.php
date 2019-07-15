<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\KategoriRequest;

use App\Kategori;

class KategoriEventController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    public function index()
    {
        $list_kategori = Kategori::orderBy('created_at', 'desc')->get();
        return view('admin.pages.kategori_event.kategori_event', compact('list_kategori'));
    }

    public function create()
    {
        //
    }

    public function store(KategoriRequest $request)
    {
        $input = $request->all();

        Kategori::create($input);
        return redirect('admin/kategori');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();
        return redirect('admin/kategori');
    }
}
