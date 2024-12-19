<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PLM-Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <form action="{{ route('plmaccount.plmLoginsubmit') }}" method="POST">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h1>DangNhapHeThong</h1>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="plmEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" 
                        id="plmEmail" name="plmEmail" 
                        placeholder="Gmail" value="{{ old('plmEmail') }}">
                        
                        <!-- Hiển thị lỗi nếu có -->
                        @error('plmEmail')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="plmPass" class="form-label">Password</label>
                        <input type="password" class="form-control" 
                        id="plmPass" name="plmPass" 
                        placeholder="Password">
                        
                        <!-- Hiển thị lỗi nếu có -->
                        @error('plmPass')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Đăng nhập</button>
                    
                    <!-- Hiển thị thông báo lỗi nếu có từ Session -->
                    @if (Session::has('plm-error'))
                        <div class="alert alert-info">
                            {{ Session::get('plm-error') }}
                        </div>
                    @endif
                </div>
            </div>
        </form>
    </section>
</body>
</html>
