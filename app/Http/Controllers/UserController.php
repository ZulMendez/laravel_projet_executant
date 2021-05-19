<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all()->where('role_id', '!=', 1);
        return view('admin.user.main', compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $id)
    {
        $user = $id;
        $avatars = Avatar::all();
        return view('admin.user.edit', compact('user', 'avatars'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $id)
    {
        $request->validate([
            'nom' => ['required'],
            'prenom' => ['required'],
            'email' => ['required'],
            'age' => ['required', 'numeric'],
            'avatar_id' => ['required'],
            'role_id' => ['required', 'numeric'],
        ]);
        $user = $id;
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->email = $request->email;
        $user->age = $request->age;
        $user->avatar_id = $request->avatar_id;
        $user->role_id = $request->role_id;
        $user->save();
        return redirect()->route('user.index')->with('success', 'Utilisateur ' . $user->id .' bien modifié !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $id)
    {
        $id->delete();
        return redirect()->back()->with('warning', 'Utilisateur supprimé !');
    }
}
