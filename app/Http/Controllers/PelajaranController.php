<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal;
use App\Pelajaran;

class PelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $pelajarans = Pelajaran::all();
        return view('pelajaran.index', compact('pelajarans')) ->with('i', (request()->input('page',1) -1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelajaran = new Pelajaran();
        return view('pelajaran.create', compact('pelajaran'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'guru' => 'required',
            'hari' => 'required',
            'mapel' => 'required',
            'tanggal' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',

        ]);
        $data = new Pelajaran();
        $data->guru = $request->input('guru');
        $data->hari = $request->input('hari');
        $data->mapel = $request->input('mapel');
        $data->tanggal = $request->input('tanggal');
        $data->kelas = $request->input('kelas');
        $data->jurusan = $request->input('jurusan');
        $data->save();

            $request->session()->flash('msg', 'Pelajaran Telah ditambahkan');
            return redirect('/pelajaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pelajaran = Pelajaran::find($id);
        return view('pelajaran.detail', compact('pelajaran'));
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
        $pelajaran = Pelajaran::find($id);
        $pelajaran->delete();
        return redirect()->route('pelajaran.index')
                        ->with('success', 'Biodata berhasil dihapus');    }
}
