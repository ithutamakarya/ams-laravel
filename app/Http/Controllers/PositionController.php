<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function main()
    {
        return view('param.auditor.index');
    }

    public function index()
    {
        $positions = Position::all();
        
        return view('position.index', compact('positions'));
    }

    public function create()
    {
        return view('position.create');
    }

    public function store(Request $request)
    {
        Position::create($request->all());

        return redirect(route('position.index'))->with('success', 'Data telah disimpan');
    }

    public function edit($id)
    {
        $position = Position::where('id', $id)->first();

        return view('position.edit', compact('position'));
    }

    public function update(Request $request, $id)
    {
        $position = Position::where('id', $id)->first();

        $position->update($request->all());

        return redirect(route('position.index'))->with('success', 'Data telah diubah');
    }

    public function destroy($id)
    {
        $position = Position::findOrFail($id);
        $position->delete();

        return redirect()->back()->with('success', 'Data telah dihapus');
    }
}
