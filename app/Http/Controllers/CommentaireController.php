<?php

namespace App\Http\Controllers;

use App\Models\Commentaires;
use App\Models\Post;
use App\Http\Requests\StoreCommentaireRequest;
use App\Http\Requests\UpdateCommentaireRequest;

class CommentaireController extends Controller
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
    public function create()
    {
     
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommentaireRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Commentaires $commentaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Commentaires $commentaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentaireRequest $request, Commentaires $commentaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commentaires $commentaire)
    {
        //
    }
}
