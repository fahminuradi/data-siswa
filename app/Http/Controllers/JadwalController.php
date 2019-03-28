<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal;
use App\Profile;
use App\Pelajaran;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index()
    {
        $jadwals = Jadwal::all();
        return view('jadwal.index', compact('jadwals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jadwal = new Jadwal();
        $profiles = Profile::all();
        $pelajarans = Pelajaran::where('status',1)->get();
        return view('jadwal.create', compact('profiles', 'pelajarans', 'jadwal'));
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
            'profile_id' => 'required',
            'pelajaran_id' => 'required'
        ]);
        Jadwal::create([
            'profile_id' => 'required',
            'pelajaran_id' => 'required',
        ]);
        $pelajaran = Pelajaran::find($request->pelajaran_id);
        $pelajaran->save();
        session()->flash('msg', 'pelajaran tlah terbuat');
        return redirect('/jadwal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jadwal = Jadwal::find($id);
        return view('jadwal.detail', compact('jadwal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jadwal = Jadwal::find($jadwal->id);
        $pelajarans = Pelajaran::all();
        $profiles = Profile::all();
        return view('jadwal.edit', compact('jadwal', 'pelajarans', 'profiles'));
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
        $jadwal = Jadwal::find($id);
        $jadwal->update($request->all());
        $request->session()->flash('msg', 'data telah diubah telah di ubah');
        return redirect('jadwal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jadwal::destroy($jadwal->id);
        $request->session()->flash('msg', 'Jadwal has been deleted');
        return redirect('jadwal');
    }
}
