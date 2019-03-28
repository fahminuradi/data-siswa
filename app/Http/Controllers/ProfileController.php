<?php

namespace App\Http\Controllers;

use App\Jadwal;
use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
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
        $profiles = Profile::all();
        return view('profile.index', compact('profiles')) ->with('i', (request()->input('page',1) -1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profile = new Profile();
        return view('profile.create', compact('profile'));
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
            'avatar' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'nomor_telepon' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required'
        ]);
        $data = new Profile();
        $data->nama = $request->input('nama');
        $data->tempat_lahir = $request->input('tempat_lahir');
        $data->tanggal_lahir = $request->input('tanggal_lahir');
        $data->nomor_telepon = $request->input('nomor_telepon');
        $data->jenis_kelamin = $request->input('jenis_kelamin');
        $data->alamat = $request->input('alamat');
        $path = $request->file('avatar')->store('avatars');
        $data->avatar=$path;
        $data->save();
        $request->session()->flash('msg', 'Profile Telah ditambahkan');
            return redirect('/profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile = Profile::find($id);
        return view('profile.detail', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Profile::find($id);
        return view('profile.edit', compact('profile'));
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
        $request->validate([
            'avatar' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'nomor_telepon' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required'
        ]);
        $data = Profile::find($id);
        $data->nama = $request->get('nama');
        $data->tempat_lahir = $request->get('tempat_lahir');
        $data->tanggal_lahir = $request->get('tanggal_lahir');
        $data->nomor_telepon = $request->get('nomor_telepon');
        $data->jenis_kelamin = $request->get('jenis_kelamin');
        $data->alamat = $request->get('alamat');
        $path = $request->file('avatar')->store('avatars');
        $data->avatar=$path;
        $data->save();
        $request->session()->flash('msg', 'Profile Telah ditambahkan');
            return redirect('/profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile = Profile::find($id);
        $profile->delete();
        return redirect()->route('profile.index')
                        ->with('success', 'sebuah data berhasil dihapus');
    }
}
