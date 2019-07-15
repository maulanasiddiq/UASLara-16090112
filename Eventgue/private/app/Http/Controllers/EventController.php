<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Kategori;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    public function index()
    {
        $data['events'] = Event::all();
        $data['kategories'] = Kategori::all();
        return view('admin/pages/event/event', compact('data'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'judul_event' => 'required|min:3|max:100',
        //     'kategori' => 'required',
        //     'lokasi' => 'required',
        //     'tanggal' => 'required',
        //     'gambar' => 'required|image',
        //     'deskripsi' => 'required',
        // ]);

        $upload_gambar = $request->file('gambar');
        $imgName = time() . str_random(22) . '.' . $upload_gambar->getClientOriginalExtension();
        $upload_gambar->move(public_path('frontend/img/events'), $imgName);

        $data = [
            'judul_event' => $request->judul_event,
            'kategori_id' => $request->kategori,
            'user_id'   => $request->user()->id,
            'deskripsi' => $request->deskripsi,
            'gambar' => $imgName,
            'tanggal_event' => date('Y-m-d', strtotime($request->tanggal)),
            'lokasi' => $request->lokasi,
        ];

        $event = Event::create($data);
        if($event)
            return redirect()->route('event.index')->withSuccess('Sukses menambahkan event');

        return redirect()->route('event.index')->withError('Gagal menambahkan event');
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
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect('admin/event');
    }
}
