<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Citizen;
use App\Card;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class AdminController extends Controller
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
        $citizens = Citizen::all();
        return view('admin/landing', ['citizens' => $citizens]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPenduduk()
    {
        return view('admin/form_penduduk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePenduduk(Request $request)
    {
        $request->validate([
            'nama_penduduk' => ['required'],
            'no_kk' => ['required', 'size:14', 'unique:citizens'],
            'nik' => ['required', 'size:14', 'unique:citizens'],
            'alamat' => ['required'],
        ]);

        Citizen::create($request->all());
        return redirect('/admin-page')->with('status_penduduk', 'Data Penduduk Berhasil Ditambahkan');;
    }

    public function showPenduduk(Citizen $citizen)
    {
        return view('admin/detail_penduduk', ['citizen' => $citizen]);
    }

    public function destroyPenduduk(Citizen $citizen)
    {
        Citizen::destroy($citizen->id);
        return redirect('/admin-page')->with('status_penduduk', 'Data Penduduk Berhasil Dihapus');
    }

    public function editPenduduk(Citizen $citizen)
    {
        return view('admin/edit_pdk', ['citizen' => $citizen]);
    }

    public function updatePenduduk(Request $request, Citizen $citizen)
    {
        // $request->validate([
        //     'nama_penduduk' => ['required'],
        //     'no_kk' => ['required', 'size:14', 'unique:citizens'],
        //     'nik' => ['required', 'size:14', 'unique:citizens'],
        //     'alamat' => ['required'],
        // ]);
        Validator::make($request->all(), [
            'nama_penduduk' => 'required',
            'no_kk' => [
                'required',
                Rule::unique('citizens')->ignore($citizen->id),
                'size:14',
            ],
            'nik' => [
                'required',
                Rule::unique('citizens')->ignore($citizen->id),
                'size:14',
            ],
            'alamat' => 'required',
        ])->validate();


        Citizen::where('id', $citizen->id)
            ->update([
                'nama_penduduk' => $request->nama_penduduk,
                'no_kk' => $request->no_kk,
                'nik' => $request->nik,
                'alamat' => $request->alamat,
            ]);

        return redirect('/admin-page')->with('status_penduduk', 'Data Penduduk Berhasil Diubah');
    }

    /* KTP Section*/
    public function regKTP()
    {
        $card = Citizen::all();
        return view('admin/form_ktp', ['card' => $card]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeKTP(Request $card_req)
    {
        $card_req->validate([
            'cards_id' => ['required'],
            'jenis_kelamin' => ['required'],
            'agama' => ['required'],
            'status_kawin' => ['required'],
            'status_kerja' => ['required'],
            'kewarganegaraan' => ['required'],
            'city-created_at' => ['required'],
            'alamat' => ['required'],
        ]);

        Card::create($card_req->all());
        return redirect('/admin-page')->with('status_ktp', 'Data KTP Berhasil Ditambahkan');;
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
        //
    }
}
