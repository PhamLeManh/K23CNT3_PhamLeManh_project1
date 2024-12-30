@extends('layout.admins.master')
@section('content-body')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <div class="profile-card p-4 rounded shadow-sm bg-light">
                    <h2 class="profile-title">
                        <span class="gradient-text">Admin : P h ạ m L ê M ạ n h</span>
                    </h2>
                    <p class="profile-info">
                        <strong>Ngày Sinh:</strong> 07 02 2005 <br>
                        <strong>Số Điện Thoại:</strong> 0799079636 <br>
                        <strong>Email:</strong> phamlemanh070205@gmail.com <br>
                        <strong>MSV:</strong> 2310900063
                    </p>
                    
                    <a 
                       class="btn btn-danger mt-3">Đăng Xuất</a>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Gradient Text Style */
        .gradient-text {
            background-image: linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet);
            -webkit-background-clip: text;
            color: transparent;
            font-size: 36px;
            font-weight: bold;
        }

        .profile-card {
            background-color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
        }

        .profile-title {
            font-size: 28px;
            margin-bottom: 15px;
        }

        .profile-info {
            font-size: 16px;
            line-height: 1.6;
            color: limegreen;
        }

        .profile-info strong {
            color: #333;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            color: white;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }
    </style>
@endsection

