<div>
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever.
    - Mahatma Gandhi -->
    </div>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách môn học</title>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    </head>
    <body>
    <section class="container my-3">
    <div class="card">
    <div class="card-header">
    <h1>Danh sách môn học</h1>

    </div>
    <div class="card-body">
    <table class="table table-bordered">
    <thead>
    <tr>
    <th>#</th>
    <th>Mã môn học</th>
    <th>Tên môn học</th>
    <th>Số tiết</th>
    <th class="text-center">Chức năng</th>
    </tr>
    </thead>
    <tbody>
    @php
    $stt=0;
    @endphp
    @foreach ($monHocs as $item)
    @php
    $stt++;
    @endphp
    <tr>
    <th>{{$stt}}</th>
    <td>{{$item->MaMH}}</td>
    <td>{{$item->TenMH}}</td>
    <td>{{$item->Sotiet}}</td>
    <td class="text-center">
        <a href="/monhoc/detail/{{$item->MaMH}}" class="btn btn-success">
        Chi tiết
        </a>
        
    <a href="/monhoc/edit/{{$item->MaMH}}"
    class="btn btn-primary">
    Sửa</a>
    <a href="/monhoc/delete/{{$item->MaMH}}"
    class="btn btn-danger"
    onclick="return confirm('Bạn muốn xóa không?');">
    Xóa </a>
    </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
    </div>
    </section>
    </body>
    </html>