<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Obat;
=======
>>>>>>> b41c6c041eaf98c93b1d1f1ef13d38bff0ae2409
use Illuminate\Http\Request;

class ObatController extends Controller
{
<<<<<<< HEAD
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obat = Obat::all();
        return view('dokter/obat.index', compact('obat'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dokter/obat.create');
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
        return redirect()->route('obat.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(Obat $obat)
    {
        return view('dokter/obat.edit', compact('obat'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Obat $obat)
    {
        return view('dokter.obat.edit', compact('obat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Obat $obat)
    {
        $request->validate([
            'name_obat' => 'required',
            'kemasan' => 'required',
            'harga' => 'required'
        ]);
        $obat->update($request->all());
        return redirect()->route('obat.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Obat $obat)
    {
        $obat->delete();
        return redirect()->route('obat.index');

=======
    //
    public function index()
    {
        return view('dokter/obat.index');
>>>>>>> b41c6c041eaf98c93b1d1f1ef13d38bff0ae2409
    }
}
