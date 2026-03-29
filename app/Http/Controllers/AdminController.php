<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
<<<<<<< HEAD

=======
>>>>>>> bd7d43d (commit)
    // Hiển thị danh sách user
    public function index()
    {
        $users = User::all();
<<<<<<< HEAD

        return view('admin.users', compact('users'));
    }


=======
        return view('admin.users', compact('users'));
    }
>>>>>>> bd7d43d (commit)
    // Cấm user
    public function ban($id)
    {
        $user = User::findOrFail($id);
<<<<<<< HEAD

        $user->isActived = false;

        $user->save();

        return redirect()->back()->with('success','User banned');
    }


=======
        $user->isActived = false;
        $user->save();
        return redirect()->back()->with('success','User banned');
    }
>>>>>>> bd7d43d (commit)
    // Bỏ cấm user
    public function unban($id)
    {
        $user = User::findOrFail($id);
<<<<<<< HEAD

        $user->isActived = true;

        $user->save();

        return redirect()->back()->with('success','User unbanned');
    }


=======
        $user->isActived = true;
        $user->save();
        return redirect()->back()->with('success','User unbanned');
    }
>>>>>>> bd7d43d (commit)
    // Xóa user (tùy chọn nếu muốn)
    public function destroy($id)
    {
        $user = User::findOrFail($id);
<<<<<<< HEAD

        $user->delete();

        return redirect()->back()->with('success','User deleted');
    }

=======
        $user->delete();
        return redirect()->back()->with('success','User deleted');
    }
>>>>>>> bd7d43d (commit)
}