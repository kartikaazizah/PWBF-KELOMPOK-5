<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class role extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __index()
    {
        //dd('index')
    }
    public function create(): Response
    {
    dd ('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
    dd('store');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
    dd('show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
    dd('edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
    dd('update');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
    dd('store');
    }
}

