<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
        public function index()
    {
        $admins = Admin::where('admin', true)->get();
        return view('admins.index', ['admins'=>$admins]);
    }

    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();

        return redirect()->route('admins.index')
            ->with('success', __('Admin deleted'));
    }

    public function edit($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admins.edit', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);


        //TODO validation
//        $request->validate([
//            'name' => 'required',
//            'email' => 'required|email' . $admin->id,
//            'phone' => 'required',
//        ]);

        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->phone = $request->input('phone');
        $admin->save();

        return redirect()->route('admins.index')->with('success', __('Admin updated'));
    }

    public function add()
    {
        return view('admins.add_new_admin');
    }

    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . Admin::class],
        ],
            [
                'unique' => 'Коричтувач з таким :attribute вже зареєстрований',
            ]);

        $password = explode('@', $request->email)[0];
        $user = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'admin' => true,
            'password' => Hash::make($password),
            'phone' => $request->phone,
        ]);

        event(new Registered($user));

        return redirect()->route('admins.index');
    }



}
