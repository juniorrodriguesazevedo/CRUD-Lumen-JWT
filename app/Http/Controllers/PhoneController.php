<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Phone::all();

        return response()->json(['data' => $data], 200);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'min:3', 'max:100'],
            'phone' => ['required', 'string', 'unique:phones,phone']
        ]);

        $data = Phone::create($request->all());

        return response()->json(['data' => $data, 'message' => 'Telefone cadastrado!'], 200);
    }

    public function show($id)
    {
        $data = Phone::findOrFail($id);

        try {
            return response()->json(['data' => $data], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Usuário não encontrado'], 204);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $data = Phone::findOrFail($id);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Usuário não encontrado'], 204);
        }
        
        $this->validate($request, [
            'name' => ['required', 'string', 'min:3', 'max:100'],
            'phone' => ['required', 'string', 'unique:phones,phone']
        ]);

        $data->update($request->all());

        return response()->json(['message' => 'Telefone atualizado!'], 200);
    }

    public function destroy($id)
    {
        try {
            $data = Phone::findOrFail($id);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Usuário não encontrado'], 204);
        }

        $data->delete();

        return response()->json(['message' => 'Telefone deletado!'], 200);
    }
}
