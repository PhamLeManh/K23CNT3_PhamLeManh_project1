<!DOCTYPE html>
<html>
<head>
    <title>Personal Details</title>
</head>
<body>
    <form action="/form" method="POST">
        @csrf
        <label>Your Name:</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name') <p>{{ $message }}</p> @enderror

        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}">
        @error('email') <p>{{ $message }}</p> @enderror

        <label>Gender:</label>
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
        @error('gender') <p>{{ $message }}</p> @enderror

        <label>Date of Birth:</label>
        <input type="date" name="dob" value="{{ old('dob') }}">
        @error('dob') <p>{{ $message }}</p> @enderror

        <label>Mobile:</label>
        <input type="text" name="mobile" value="{{ old('mobile') }}">
        @error('mobile') <p>{{ $message }}</p> @enderror

        <label>Address:</label>
        <textarea name="address">{{ old('address') }}</textarea>
        @error('address') <p>{{ $message }}</p> @enderror

        <label>City:</label>
        <select name="city">
            <option value="">Select</option>
            <option value="City1">City1</option>
            <option value="City2">City2</option>
        </select>
        @error('city') <p>{{ $message }}</p> @enderror

        <label>Country:</label>
        <input type="text" name="country" value="{{ old('country') }}">
        @error('country') <p>{{ $message }}</p> @enderror

        <label>Expertise:</label>
        <input type="checkbox" name="expertise[]" value="HTML"> HTML
        <input type="checkbox" name="expertise[]" value="CSS"> CSS
        <input type="checkbox" name="expertise[]" value="JavaScript"> JavaScript
        <input type="checkbox" name="expertise[]" value="jQuery"> jQuery
        @error('expertise') <p>{{ $message }}</p> @enderror

        <label>Group:</label>
        <input type="checkbox" name="group[]" value="Family"> Family
        <input type="checkbox" name="group[]" value="Friend"> Friend
        <input type="checkbox" name="group[]" value="Co-Worker"> Co-Worker
        <input type="checkbox" name="group[]" value="Neighbour"> Neighbour
        @error('group') <p>{{ $message }}</p> @enderror

        <button type="submit">Save</button>
    </form>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
</body>
</html>

