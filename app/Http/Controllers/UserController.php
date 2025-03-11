<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index()
    {
        return response()->json(['message' => 'Barcha foydalanuvchilar']);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        return response()->json([
            'message' => "Foydalanuvchi qo'shildi!",
            'data' => $request->all()
        ]);
    }

    public function update(Request $request, $id)
    {
        return response()->json([
            'message' => "Foydalanuvchi yangilandi!",
            'id' => $id,
            'data' => $request->all()
        ]);
    }

    public function patch(Request $request, $id)
    {
        return response()->json([
            'message' => "Foydalanuvchi qisman yangilandi!",
            'id' => $id,
            'data' => $request->all()
        ]);
    }

    public function destroy($id)
    {
        return response()->json([
            'message' => "Foydalanuvchi o'chirildi!",
            'id' => $id
        ]);
    }
}
