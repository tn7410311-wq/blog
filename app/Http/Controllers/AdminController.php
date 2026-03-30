<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Hiển thị danh sách user
    public function index()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    // Cấm user
    public function ban($id)
    {
        $user = User::findOrFail($id);
        $user->isActived = false;
        $user->save();

        return redirect()->back()->with('success', 'User banned');
    }

    // Bỏ cấm user
    public function unban($id)
    {
        $user = User::findOrFail($id);
        $user->isActived = true;
        $user->save();

        return redirect()->back()->with('success', 'User unbanned');
    }

    // Xóa user (tùy chọn nếu muốn)
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'User deleted');
    }
}