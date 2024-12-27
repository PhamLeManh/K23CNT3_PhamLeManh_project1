<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PLM-Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <style>
    .rgb-text {
      font-size: 2rem;
      font-weight: bold;
      animation: rgb-effect 3s infinite; /* Hiệu ứng đổi màu chữ mỗi 3 giây */
    }

    @keyframes rgb-effect {
      0% { color: red; }
      14% { color: orange; }
      28% { color: yellow; }
      42% { color: green; }
      57% { color: blue; }
      71% { color: indigo; }
      85% { color: violet; }
      100% { color: red; }
    }
  </style>
</head>
<body>
  <section class="container my-5 d-flex justify-content-center">
    <form action="{{ route('plmAdmins.login') }}" method="POST" class="card shadow w-25">
      @csrf
      <div class="card-header text-center bg-light">
        <h1 class="rgb-text mb-0">Admin Account Thế Giới Laptop</h1>
      </div>
      <div class="card-body">
        <div class="mb-3">
          <label for="plmEmail" class="form-label">Email</label>
          <input type="email" class="form-control" id="plmEmail" name="plmEmail" placeholder="Nhập địa chỉ email" required>
          @error('plmEmail')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>
        <div class="mb-3">
          <label for="plmMatKhau" class="form-label">Mật khẩu</label>
          <input type="password" class="form-control" id="plmMatKhau" name="plmMatKhau" placeholder="Nhập mật khẩu" required>
          @error('plmMatKhau')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary w-100">Đăng nhập</button>
      </div>
    </form>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>