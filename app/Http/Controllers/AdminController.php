<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function changeAdminPassword(Request $request)
    {
        $request->validate([
            'old_password' => 'string|required',
            'new_password' => 'string|required|min:6',
        ]);

        if (Hash::check($request->old_password, auth()->user()->password)) {
            auth()->user()->update(['password' => Hash::make($request->new_password)]);

            return response()->json(['message' => 'Password changed successfully.']);
        }

        return response()->json(['message' => 'Wrong password provided.']);
    }

    public function updateAdminInfo(Request $request)
    {
        $validated = $request->validate([
            'name' => 'string',
            'email' => ['email', Rule::unique('admins')->ignore(auth()->id())]
        ]);

        auth()->user()->update($validated);

        return response()->json(['message' => 'Admin info updated successfully.']);
    }

    public function changeSubadminPassword(Request $request)
    {
        $request->validate([
            'old_password' => 'string|required',
            'new_password' => 'string|required|min:6',
        ]);

        $subadmin = Admin::where('type', 'sub')->first();

        if (Hash::check($request->old_password, $subadmin->password)) {
            $subadmin->update(['password' => Hash::make($request->new_password)]);

            return response()->json(['message' => 'Password changed successfully.']);
        }

        return response()->json(['message' => 'Wrong password provided.']);
    }

    public function updateSubadminInfo(Request $request)
    {
        $subadmin = Admin::where('type', 'sub')->first();

        $validated = $request->validate([
            'name' => 'string',
            'email' => ['email', Rule::unique('admins')->ignore($subadmin->id)]
        ]);

        $subadmin->update($validated);

        return response()->json(['message' => 'Subadmin info updated successfully.']);
    }
}
