<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CrudController extends Controller
{

    public function index()
    {
        return view('crud.index', [
            'users' => User::all()
        ]);
    }

    public function create()
    {
        return view('crud.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $userData = $request->only(['name', 'email', 'password']);
        User::create($userData);

        return redirect()->route('crud.index');
    }

    public function edit($id)
    {
        return view('crud.edit', [
            'user'  => User::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        User::destroy($id);

        return redirect()->route('crud.index');
    }
}
