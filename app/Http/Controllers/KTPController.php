<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use App\Citizen;

class KTPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
