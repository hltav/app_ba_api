<?php

namespace App\Http\Controllers;

use App\Models\GithubUser;
use Illuminate\Http\Request;

class GithubUserController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
            $user = GithubUser::find($id);
            if (!$user) {
                return response()->json(['message' => 'Usuário não encontrado'], 404);
            }
            return response()->json($user);
        }

        $users = GithubUser::all();
        return response()->json($users);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'nullable|email',
            'login' => 'required|string',
            'location' => 'nullable|string',
        ]);
           
        $existingUser = GithubUser::where('login', $validated['login'])->first();
    
        if ($existingUser) {
            return response()->json(['message' => 'Usuário já cadastrado'], 409);
        }
    
        $user = GithubUser::create($validated);
    
        return response()->json(['message' => 'Usuário cadastrado com sucesso!', 'user' => $user], 201);
    }

    public function update(Request $request, GithubUser $user)
    {
        $validated = $request->validate([
            'name' => 'nullable|string',
            'email' => 'nullable|email',
            'login' => 'nullable|string',
            'location' => 'nullable|string',
        ]);

        $user->update($validated);

        return response()->json(['message' => 'Dados atualizados com êxito!']);
    }

    public function destroy(GithubUser $user)
    {
        $user->delete();
        return response()->json(['message' => 'Usuário excluído com sucesso!']);
    }
}
