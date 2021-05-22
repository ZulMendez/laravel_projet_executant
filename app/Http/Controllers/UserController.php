<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        $users = User::paginate(5);
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
        $avatars = Avatar::all()->slice(1);
        $roles = Role::all();
        return view('admin.user.edit', compact('user', 'avatars', 'roles'));
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
            'email' => ['required|string'],
            'age' => ['required', 'numeric'],
            'avatar_id' => ['required'],
            // 'role_id' => ['required', 'numeric'],
        ]);
        $user = $id;
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->email = $request->email;
        $user->age = $request->age;
        $user->avatar_id = $request->avatar_id;
        if (Auth::user()->role_id == 1) {
            $user->role_id = $request->role_id;
        }
        $user->save();
        return redirect()->back()->with('success', 'Utilisateur ' . $user->id .' bien modifié !');
    }
    public function updateMembre(User $user, Request $request)
    {
        // $this->authorize('isRealUser', $user);
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'age' => 'required|numeric',
            'email' => 'required|string',
            'avatar_id' => 'required',
        ]);
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->avatar_id = $request->avatar_id;

        $user->save();
        return redirect()->back()->with('success', 'Profil a bien été modifié');
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
        return redirect()->route('user.index')->with('warning', 'Utilisateur supprimé !');
    }
}
