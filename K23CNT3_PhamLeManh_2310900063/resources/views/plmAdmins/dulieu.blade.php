@extends('layout.admins.master')
@section('title', 'Quản Trị Nội Dung')

@section('content-body')
    <div class="container">
        <!-- Tiêu đề chính -->
        <div class="row border mb-4">
            <h2 class="rgb-text col-12 py-3 text-center font-weight-bold">Thống Kê Hệ Thống Top 3 LapTop Bán Chạy ✇</h2>
            <style>
                .rgb-text {
                    animation: rgb-animation 5s linear infinite;
                    background-image: linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    font-size: 2rem;
                }

                @keyframes rgb-animation {
                    0% { background-position: 0% 50%; }
                    50% { background-position: 100% 50%; }
                    100% { background-position: 0% 50%; }
                }
            </style>
        </div>

        <!-- Các thông tin thống kê cơ bản -->
        <div class="row">
            <!-- Số lượng người dùng -->
            <div class="col-md-4 mb-4">
                <div class="card text-white bg-primary shadow-lg border-0 rounded">
                    <div class="card-header text-center font-weight-bold">
                        <h5 class="mb-0">LapTop Acer</h5>
                    </div>
                    <div class="card-body text-center">
                        <h2 class="card-title display-4">1,250</h2>
                        <p class="card-text">Tổng số lượt mua Acer.</p>
                    </div>
                </div>
            </div>

            <!-- Số bài viết -->
            <div class="col-md-4 mb-4">
                <div class="card text-white bg-success shadow-lg border-0 rounded">
                    <div class="card-header text-center font-weight-bold">
                        <h5 class="mb-0">LapTop SamSung</h5>
                    </div>
                    <div class="card-body text-center">
                        <h2 class="card-title display-4">825</h2>
                        <p class="card-text">Tổng số lượt mua SamSung.</p>
                    </div>
                </div>
            </div>

            <!-- Số lượt truy cập -->
            <div class="col-md-4 mb-4">
                <div class="card text-white bg-warning shadow-lg border-0 rounded">
                    <div class="card-header text-center font-weight-bold">
                        <h5 class="mb-0">LapTop Asus</h5>
                    </div>
                    <div class="card-body text-center">
                        <h2 class="card-title display-4">32,540</h2>
                        <p class="card-text">Tổng số lượt mua Asus.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Biểu đồ thống kê -->
        <div class="row mb-4">
            <div class="col-12">
                <h4 class="mb-3 text-center font-weight-bold">Biểu đồ lượt mua Top 3 laptop bán chạy theo tháng</h4>
                <canvas id="trafficChart"></canvas>
            </div>
        </div>

        <!-- Bảng chi tiết hệ thống -->
        <div class="row">
            <div class="col-12">
                <h4 class="mb-3 text-center font-weight-bold">Chi Tiết Top 3 LapTop Có Lượt Mua Nhiều</h4>
                <table class="table table-bordered table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tên LapTop</th>
                            <th scope="col">Trạng Thái</th>
                            <th scope="col">Ngày Cập Nhật</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Acer</td>
                            <td><span class="badge bg-success">Tốt</span></td>
                            <td>20/12/2024</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>SamSung</td>
                            <td><span class="badge bg-warning">Trung Bình</span></td>
                            <td>15/12/2024</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Asus</td>
                            <td><span class="badge bg-danger">Yếu</span></td>
                            <td>18/12/2024</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Script để vẽ biểu đồ -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('trafficChart').getContext('2d');
    var trafficChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Lượt Mua LapTop',
                data: [1200, 1900, 1500, 2200, 1800, 2500, 2700, 2400, 2600, 2800, 3000, 3200],
                fill: true, // Make the area under the line fill
                borderColor: 'rgba(75, 192, 192, 1)', // Line color
                backgroundColor: 'rgba(75, 192, 192, 0.2)', // Light fill color under the line
                tension: 0.4, // Softens the line, making it more curved and smooth
                borderWidth: 3, // Thicker line for a bolder appearance
                pointRadius: 5, // Makes the points on the line larger
                pointBackgroundColor: 'rgba(75, 192, 192, 1)', // Color of the points
                pointBorderWidth: 2, // Thicker border for points
                pointHoverRadius: 7, // Increases the size of the point on hover
                pointHoverBackgroundColor: 'rgba(255, 255, 255, 1)', // Hover point color
                pointHoverBorderColor: 'rgba(75, 192, 192, 1)', // Border color on hover
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                    labels: {
                        font: {
                            size: 14
                        }
                    }
                },
                tooltip: {
                    enabled: true,
                    backgroundColor: 'rgba(0, 0, 0, 0.7)',
                    titleColor: '#fff',
                    bodyColor: '#fff'
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0, 0, 0, 0.1)'
                    }
                },
                x: {
                    grid: {
                        color: 'rgba(0, 0, 0, 0.1)'
                    }
                }
            }
        }
    });
</script>
@endsection
