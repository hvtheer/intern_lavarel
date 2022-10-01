<!doctype html>
<html lang="en">
<head>
<title> {{ env('APP_NAME') }} </title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS v5.2.0-beta1 -->   
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 ">
            @if(!empty($user))
                <h2 style="padding-left: 20px">Hi, {{ $user['name'] }}</h2>
                <br>
                <span style="padding-left: 30px">This email send from system</span><br>
                <span  style="padding-left: 20px">Please check your infomation. Is it correctly</span>
                <br><br>
                <span>
                <strong style="display: inline-block; width: 48%; padding: 20px;"> Name </strong>
                <emphasis style="display: inline-block; width: 48%; text-align: right;"> {{ $user['name'] }} </emphasis>
                </span>
                <hr>
                <span>
                <strong style="display: inline-block; width: 48%; padding: 20px;"> Email </strong>
                <emphasis style="display: inline-block; width: 48%; text-align: right;"> {{ $user['email'] }} </emphasis>
                </span>
                <hr>
                <span>
                <strong style="display: inline-block; width: 48%; padding: 20px;"> Phone </strong>
                <emphasis style="display: inline-block; width: 48%; text-align: right;"> {{ $user['phone']}} </emphasis>
                </span>
                <hr>
                <span>
                <strong style="display: inline-block; width: 48%; padding: 20px;"> Address </strong>
                <emphasis style="display: inline-block; width: 48%; text-align: right;"> {{ $user['address'] }} </emphasis>
                </span>
                <br>      
            </div>
                <div class="col-md-12 ">
                <button href="{{ route('admin.user.index') }}"  style="align-text: right; text-decoration: none; border: 1px solid blue; background: blue; color: white; padding: 10px; margin-left: 500px;" type="button" class="btn btn-primary btn-lg">User Profile</button>
                </div>
        </div>
    </div>
    @endif     
</body>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/b33177e463.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</html>