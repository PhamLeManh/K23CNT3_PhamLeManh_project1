<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function processForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'gender' => 'required',
            'dob' => 'required|date',
            'mobile' => 'required|digits:10',
            'address' => 'required|string',
            'city' => 'required',
            'country' => 'required|string',
            'expertise' => 'required|array|min:1',
            'group' => 'required|array|min:1',
        ]);

        // Lưu dữ liệu vào cơ sở dữ liệu hoặc xử lý
        return back()->with('success', 'Form submitted successfully!');
    }
}
