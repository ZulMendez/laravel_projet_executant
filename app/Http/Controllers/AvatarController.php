<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avatars = Avatar::all()->slice(1);
        return view('admin.avatar.main', compact('avatars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.avatar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $avatar = Avatar::all()->slice(1);
        // request()->validate([
        //     "nom" => ["required"],
        // ]);

        if (count($avatar) > 5) {
            return redirect()->route('avatar.index')->with('warning', "Demande refusé, la limite est atteinte");
        }
        $avatar = new Avatar();
        
        if ($request->imgAava) {
            $request->file('imgAva')->storePublicly('img/', 'public');
            $avatar->imgAva = $request->file('imgAva')->hashName();
        } else {
            $fichierURL = file_get_contents($request->srcURL);
            $lien = $request->srcURL;
            $token = substr($lien, strrpos($lien, '/') + 1);
            Storage::disk('public')->put('img/'.$token ,$fichierURL);
            $avatar->imgAva = $token;
        }
        $avatar->save();
        return redirect()->route('avatar.index')->with('success', 'Avatar bien ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function show(Avatar $avatar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function edit(Avatar $avatar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Avatar $avatar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avatar $avatar)
    {
        $users = User::all()->where('avatar_id', $avatar->id);
        foreach ($users as $user) {
            $user->avatar_id = 1;
            $user->save();
        }
        $avatar->delete();
        return redirect()->route('avatar.index')->with('warning', 'Avatar bien supprimé');
    }
}
