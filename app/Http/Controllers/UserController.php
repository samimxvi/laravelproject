<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list()
    {
        $users = User::all();

        $isCreated = session()->get('isCreated');
        $isDeleted = session()->get('isDeleted');

        return view('users.list', compact('users', 'isCreated', 'isDeleted'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'password' => 'required',
            'is_admin' => 'required',
        ]);

        \App\User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            'is_admin' => $data['is_admin']
        ]);

        request()->session()->flash('isCreated', true);

        return redirect()->route('user.list');
    }

    public function edit()
    {
        $user = auth()->user();

        $isUpdated = session()->get('isUpdated');

        return view('users.edit', compact('user', 'isUpdated'));
    }

    public function update()
    {
        $user = auth()->user();

        $user->name = request('name');
        $user->email = request('email');
        $user->address = request('address');
        $user->phone = request('phone');

        $user->save();

        request()->session()->flash('isUpdated', true);

        return redirect()->route('user.edit');
    }

    public function destroy(\App\User $user)
    {
        $user->delete();

        request()->session()->flash('isDeleted', true);

        return redirect('/admin/user')->with(['success' => true]);
    }

    public function orders()
    {
        $user = auth()->user();
        $orders = $user->orders;

        $isCreated = session()->get('isCreated');

        return view('users.orders', compact('orders', 'isCreated'));
    }
}