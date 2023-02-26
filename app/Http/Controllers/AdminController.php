<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

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

}
