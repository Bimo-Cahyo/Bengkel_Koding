<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Obat;
use App\Models\Periksa;
=======
>>>>>>> b41c6c041eaf98c93b1d1f1ef13d38bff0ae2409
use Illuminate\Http\Request;

class PeriksaController extends Controller
{
<<<<<<< HEAD
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obat = Obat::all();
        return view('dokter/periksa.index', compact('obat'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dokter/periksa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_obat' => 'required',
            'kemasan' => 'required',
            'harga' => 'required',
        ]);
        Obat::create($request->all());
        return redirect()->route('periksa.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(Periksa $periksa)
    {
        return view('dokter/periksa.edit', compact('periksa'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Periksa $periksa)
    {
        return view('dokter.periksa.edit', compact('obat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Obat $obat)
    {
        $request->validate([
            'name_periksa' => 'required',
            'kemasan' => 'required',
            'harga' => 'required'
        ]);
        $obat->update($request->all());
        return redirect()->route('periksa.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Obat $obat)
    {
        $obat->delete();
        return redirect()->route('periksa.index');

=======
    //
    public function index()
    {
        return view('dokter/periksa.index');
>>>>>>> b41c6c041eaf98c93b1d1f1ef13d38bff0ae2409
    }
}
