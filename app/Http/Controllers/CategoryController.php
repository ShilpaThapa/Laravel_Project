<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        dd('index');
    }

    public function create()
    {
        dd('create');
    }

    public function store(Request $request)
    {
        dd('store');
    }

    public function show($id)
    {
        dd('show');
    }

    public function edit($id)
    {
        dd('edit');
    }

    public function update(Request $request, $id)
    {
        dd('update');
    }

    public function destroy($id)
    {
        dd('destroy');
    }
}
