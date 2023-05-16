<?php

namespace App\Http\Controllers;

use App\Models\Perdagangan;
use Illuminate\Http\Request;

class PerdaganganController extends Controller
{
    //
    public function index(){
        $perdagangans = Perdagangan::all();
        return view('perdagangans.index', compact('perdagangans'));

    }
    public function create()
    {
        return view('perdagangans.create');
    }
    
    public function store(Request $request)
    {
        // dd($request);    
        $this->validate($request, [
            'no' => 'required|string|max:50',
            'nama_barang' => 'required|string|max:100',
            'harga' => 'required|string|max:100',
            'stok' => 'required|string|max:100'
        ]);

        $perdagangans = Perdagangan::create([
            'no' => $request->no,
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'stok' => $request->stok
        ]);

        if ($perdagangans) {
            return redirect()
                ->route('perdagangans.index')
                ->with([
                    'success' => 'New post has been created successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
    }
    public function edit($id)
    {
        $perdagangans = Perdagangan::findOrFail($id);
        return view('perdagangans.edit', compact('perdagangans'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'no' => 'required|string|max:50',
            'nama_barang' => 'required|string|max:100',
            'harga' => 'required|string|max:100',
            'stok' => 'required|string|max:100',
        ]);

        $perdagangans = Perdagangan::findOrFail($id);

        $perdagangans->update([
            'no' => $request->no,
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'stok' =>  $request->stok
        ]);

        if ($perdagangans) {
            return redirect()
                ->route('perdagangans.index')
                ->with([
                    'success' => 'Post has been updated successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again'
                ]);
        }
    }

    public function destroy($id)
    {
        $perdagangans = Perdagangan::findOrFail($id);
        $perdagangans->delete();

        if ($perdagangans) {
            return redirect()
                ->route('perdagangans.index')
                ->with([
                    'success' => 'Post has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('perdagangans.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }

}

