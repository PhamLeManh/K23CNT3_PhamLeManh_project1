<!DOCTYPE html>
<html>
<head>
    <title>Đặt Phòng</title>
</head>
<body>
    <h1>Đặt Phòng</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('reservation.store') }}">
        @csrf
        <input type="date" name="arrival_date" placeholder="Ngày đến">
        @error('arrival_date')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <button type="submit">Đặt Phòng</button>
    </form>
</body>
</html>