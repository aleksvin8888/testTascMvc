<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use DB;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $users = User::with('department')->get();

        return view('user.index', compact('users'));
    }


    public function create()
    {
        //
    }


    public function store(CreateUserRequest $request)
    {
            $data = $request->validated();
            $data['password'] = Hash::make(123456789);

            $user = User::make($data);
            $user->department_id = $data['department_id'];
            $user->save();

        if($user) {
            return redirect()->route('users.index')
                ->with('success', 'Користувач ' . $user->first_name . ' створено успішно.');
        } else {
            return back()->withErrors(['msd' => 'Помилка збереження.'])
                ->withInput();
        }

    }


    public function show(User $user)
    {
        $user->load('department');
        return view('user.show', compact('user'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
