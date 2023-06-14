<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Mapel;
use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreNilaiRequest;
use App\Http\Requests\UpdateNilaiRequest;
use App\Models\Kelas;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Guru::all()->where('username', Auth::user()->username)->first();
        return (view("guru.lihat-nilai.daftarMapel", [
            'title' => "Guru",
            'daftarMapel' => Mapel::all()->where('idGuru', $user->id),
            'role' => 'guru',
            "grant" => [
                [
                    'Name' => 'Input Nilai',
                    "role" => "guru",
                    'slug' => 'inputNilai',
                    'Icon' => '<path fillRule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clipRule="evenodd" />',
                ],
                [
                    'Name' => 'Lihat Nilai',
                    'slug' => 'lihat-nilai',
                    'role' => 'guru',
                    'Icon' => '<path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                    <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />'
                ],
            ],
        ]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $idMapel)//1
    {
        // $user = Guru::all()->where('username', Auth::user()->username)->first();
        $mapels = Mapel::all()->where('id', $idMapel)->first();
        return view("guru.olahNilai.create", [
            'title'=>"Nilai",
            'mapel' => Mapel::all()->where('id', $idMapel)->first(),
            'siswas'=> Siswa::all()->where('idClass', $mapels->idClass),
            'role'=>'guru',
            "grant" => [
                [
                    'Name' => 'Input Nilai',
                    "role" => "guru",
                    'slug' => 'inputNilai',
                    'Icon' => '<path fillRule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clipRule="evenodd" />',
                ],
                [
                    'Name' => 'Lihat Nilai',
                    'slug' => 'lihat-nilai',
                    'role' => 'guru',
                    'Icon' => '<path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                    <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />'
                ],
            ],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        for ($x=0; $x < $request->jumlahSiswa ; $x++) { 
            $data = [
                'taskName' => $request->taskName,
                'idSiswa' => $request->idSiswa[$x],
                'idMapel' => $request->idMapel,
                'idKelas' => $request->idKelas,
                'value' => $request->valueSiswa[$x],
            ];
            
            Nilai::create($data);
       }
       return redirect('/guru/inputNilai')->with('message', 'Nilai baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Nilai $nilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nilai $nilai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNilaiRequest $request, Nilai $nilai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nilai $nilai)
    {
        //
    }
}
