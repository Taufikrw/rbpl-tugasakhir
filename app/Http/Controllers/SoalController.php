<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use App\Models\Mapel;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSoalRequest;
use App\Http\Requests\UpdateSoalRequest;

class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $idMapel)
    {
        return(view('guru.buatKuis.create', [
            'title'=>"Kuis",
            'role'=>'guru',
            'mapel' => Mapel::all()->where('id', $idMapel)->first(),
            "grant" => [
                [
                    'Name' => 'Pengolahan Nilai',
                    'slug' => 'pengolahanNilai',
                    "role" => "guru",
                    'Icon' => '<path fill-rule="evenodd" d="M7.502 6h7.128A3.375 3.375 0 0118 9.375v9.375a3 3 0 003-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 00-.673-.05A3 3 0 0015 1.5h-1.5a3 3 0 00-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6zM13.5 3A1.5 1.5 0 0012 4.5h4.5A1.5 1.5 0 0015 3h-1.5z" clip-rule="evenodd" />
                    <path fill-rule="evenodd" d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625V9.375zm9.586 4.594a.75.75 0 00-1.172-.938l-2.476 3.096-.908-.907a.75.75 0 00-1.06 1.06l1.5 1.5a.75.75 0 001.116-.062l3-3.75z" clip-rule="evenodd" />',
                ],
                [
                    'Name' => 'Membuat Kuis',
                    'slug' => 'membuatKuis',
                    "role" => "guru",
                    'Icon' => '<path fill-rule="evenodd" d="M7.502 6h7.128A3.375 3.375 0 0118 9.375v9.375a3 3 0 003-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 00-.673-.05A3 3 0 0015 1.5h-1.5a3 3 0 00-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6zM13.5 3A1.5 1.5 0 0012 4.5h4.5A1.5 1.5 0 0015 3h-1.5z" clip-rule="evenodd" />
                    <path fill-rule="evenodd" d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625V9.375zM6 12a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V12zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM6 15a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V15zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM6 18a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V18zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75z" clip-rule="evenodd" />',
                ],
            ],
        ]));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'kuisName' => 'required',
            'idClass' => 'required',
            'idMapel'=> 'required',
            'jumlahPilihanGanda' => 'required',
            'poinPilihanGanda' => 'required',
            'jumlahIsianSingkat' => 'required',
            'poinIsianSingkat' => 'required',
            'jumlahEssay' => 'required',
            'poinEssay' => 'required',
            'processingTime' => 'required',
            'duration' => 'required'
        ]);

        Soal::create($validate);
        return redirect('/guru/membuatKuis')->with('message', 'Soal berhasil ditambahkan');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Soal $soal)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Soal $soal)
    {
        //
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSoalRequest $request, Soal $soal)
    {
        //
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Soal $soal)
    {
        //
    }
}