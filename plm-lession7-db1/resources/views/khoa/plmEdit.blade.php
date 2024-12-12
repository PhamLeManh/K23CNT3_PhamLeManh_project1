<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Thông tin chi tiết khoa can edit</title>
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
<section class="container my-3">
    <form action="" method="post">
        <div class="card">
        <div class="card-header">
        <h3>Thông tin chi tiết khoa can edit</h3>
        </div>
        <div class="card-body">
        <p class="card-text">
            <div class="mb-3 row">
                <label for="PLMMAKHOA" class="col-sm-2 col-form-label">Ma Khoa</label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control" 
                  id="PLMMAKHOA" 
                  name="PLMMAKHOA"
                  value="{{$khoa->PLMMAKHOA}}">
                </div>

        <p class="card-text">
                <div class="mb-3 row">
                    <label for="PLMTENKH" class="col-sm-2 col-form-label">Ten Khoa</label>
                     <div class="col-sm-10">
                        <input type="text" readonly class="form-control" 
                        id="PLMTENKH" 
                        name="PLMTENKH"
                        value="{{$khoa->PLMTENKH}}">
                    </div>        
        </div>
        <div class="card-footer">
        <a href="/khoa" class="btn btn-primary">Back</a>
        </div>
        </div>
    </form>
</section>
</body>
</html>