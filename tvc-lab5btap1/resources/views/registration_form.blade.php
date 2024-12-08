<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <!-- Hiển thị lỗi nếu có -->
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Hiển thị thông báo thành công -->
    @if (session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <!-- Form -->
    <form action="{{ route('validate.registration') }}" method="POST">
        @csrf
        <label>User ID:</label>
        <input type="text" name="user_id" value="{{ old('user_id') }}"><br>

        <label>Password:</label>
        <input type="password" name="password"><br>

        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name') }}"><br>

        <label>Address:</label>
        <input type="text" name="address" value="{{ old('address') }}"><br>

        <label>Country:</label>
        <select name="country">
            <option value="">(Please select a country)</option>
            <option value="USA">USA</option>
            <option value="India">India</option>
            <!-- Thêm quốc gia khác -->
        </select><br>

        <label>ZIP Code:</label>
        <input type="text" name="zip_code" value="{{ old('zip_code') }}"><br>

        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}"><br>

        <label>Sex:</label>
        <input type="radio" name="sex" value="Male" {{ old('sex') == 'Male' ? 'checked' : '' }}> Male
        <input type="radio" name="sex" value="Female" {{ old('sex') == 'Female' ? 'checked' : '' }}> Female<br>

        <label>Language:</label>
        <input type="checkbox" name="language" value="English" {{ old('language') == 'English' ? 'checked' : '' }}> English
        <input type="checkbox" name="language" value="Non-English" {{ old('language') == 'Non-English' ? 'checked' : '' }}> Non-English<br>

        <label>About:</label>
        <textarea name="about">{{ old('about') }}</textarea><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
