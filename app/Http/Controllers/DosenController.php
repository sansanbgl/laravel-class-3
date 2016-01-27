<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function testdosen()
    {
        $item = \App\Models\Dosen::get()->first();
        return view('dosen', compact('item'));
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store()
    {
        $item = Dosen::create(request()->all());

    }

    public function index()
    {
        $items = Dosen::withTrashed()->get();
        return view('dosen.index', compact('items'));
    }

    public function update($id)
    {
        $item = Dosen::findOrFail($id);
        return view('dosen.update', compact('item'));
    }

    public function patch($id)
    {
        $item = Dosen::findOrFail($id);
        $item->update(request()->all());
    }
    public function delete($id)
    {
        $item = Dosen::findOrFail($id);
        $item->delete();
    }

}
