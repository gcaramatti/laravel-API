<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cachorro;

class CachorroController extends Controller
{
    public function index()
    {
        return Cachorro::all();
    }

    public function store(Request $request)
    {
        return Cachorro::create($request->all());
    }

    public function show($id)
    {
        return Cachorro::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $var = Cachorro::findOrFail($id);
        return $var->update($request->all());
    }

    public function destroy($id)
    {
        $var = Cachorro::findOrFail($id);
        return $var->delete();
    }
}
