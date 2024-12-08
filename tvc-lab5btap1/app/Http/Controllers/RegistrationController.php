<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    // Hiển thị form
    public function showForm()
    {
        return view('registration_form'); // Trả về view chứa form
    }

    // Xử lý và kiểm tra form
    public function validateForm(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|alpha_num|min:5|max:12',
            'password' => 'required|min:7|max:12',
            'name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'address' => 'nullable',
            'country' => 'required',
            'zip_code' => 'required|numeric',
            'email' => 'required|email',
            'sex' => 'required|in:Male,Female',
            'language' => 'required|in:English,Non-English',
            'about' => 'nullable|string',
        ], [
            'user_id.required' => 'User ID là bắt buộc và phải từ 5-12 ký tự.',
            'password.required' => 'Mật khẩu là bắt buộc và phải từ 7-12 ký tự.',
            'name.required' => 'Tên là bắt buộc và chỉ chứa chữ cái.',
            'country.required' => 'Vui lòng chọn một quốc gia.',
            'zip_code.required' => 'ZIP Code là bắt buộc và phải là số.',
            'email.required' => 'Email là bắt buộc và phải đúng định dạng.',
            'sex.required' => 'Vui lòng chọn giới tính.',
            'language.required' => 'Vui lòng chọn ngôn ngữ.',
        ]);

        // Nếu hợp lệ, trả về thông báo thành công
        return back()->with('success', 'Form đã được gửi thành công!');
    }
}
