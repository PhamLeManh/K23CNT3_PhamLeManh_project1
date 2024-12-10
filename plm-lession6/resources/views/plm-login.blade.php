<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>plm-login</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>
<body>
    <section class="contianer my-3">
        <form action="{{route(plmaccount.plmLoginsubmit)}}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h1>PLM-Login</h1>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="plmEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" 
                        id="plmEmail" name="plmEmail"
                        placeholder="plm@example.com">
                        @error('email')
                        <span class="text-danger">{{}}</span>
                            
                        @enderror
                        
                      </div>
                </div>
                        <div class="mb-3">
                            <label for="plmPass" class="form-label">PassWord</label>
                            <input type="password" class="form-control" 
                            id="plmPass" name="plmPass"
                            placeholder="">
                            <span id="email-error"></span>
                         </div>
                <div class="card-footer">
                    <button class="btn btn-primary">DangNhap</button>
                    @if (Session::has('plm-error'))
                        <div class="alert alert-info">
                            
                                {{ Session::get('plm-error') }} 
                             
                        </div>
                    @endif
                </div>

            </div>
</body>
</html>