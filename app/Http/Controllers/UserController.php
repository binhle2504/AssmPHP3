<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\FormAuthRequest;
use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        \App\Helpers\Helper::showAlert();
        $title = 'Danh sách người dùng';
        $data = User::get();
        return view('admin.user.index', compact('title', 'data'));
    }
    public function add()
    {
        $title = 'Thêm người dùng';
        \App\Helpers\Helper::showAlert();
        return view('admin.user.add', compact('title'));
    }

    public function postAdd(FormAuthRequest $request)
    {
        Users::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'role' => $request->role,
            'email' => $request->email,
            'banned' => $request->banned,
        ]);
        return redirect(route('admin.user'))->withSuccessMessage('Thêm thành công!');
    }
    public function edit()
    {
        \App\Helpers\Helper::showAlert();
        $id = request()->id;
        if (Users::find($id) == NULL) {
            return redirect(route('admin.user'))->withErrorMessage('Không tìm thấy.');
        }
        $title = 'Sửa người dùng';
        $data = Users::where('id', $id)->first();
        //dùng sesssion lưu
        request()->session()->put('user', [
            'id' => encrypt($id),
        ]);
        return view('admin.user.edit', compact('title', 'data'));
    }
    public function postedit(FormAuthRequest $request)
    {
        $id = decrypt(session('user.id'));
        if (User::find($id) == NULL) {
            return redirect(route('admin.user'))->withErrorMessage('Không tìm thấy.');
        } else {
            $user = Users::where('id',$id)->first();
            if($request->password == $user->password){
                $password = $user->password;
            }else{
                $password = Hash::make($request->password);
            }
            Users::where('id', $id)->update([
                'name' => $request->name,
                'username' => $request->username,
                'password' => $password,
                'phone' => $request->phone,
                'role' => $request->role,
                'email' => $request->email,
                'banned' => $request->banned,
            ]);
            $request->session()->forget('user'); // xóa session
            return redirect(route('admin.user'))->withSuccessMessage('Sửa thành công!');

        }
    }

}
