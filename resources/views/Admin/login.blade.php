<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container pt-5">
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <form action="{{ route('admin.postLogin') }}" method="post">
            @csrf
                <div class="form-group">
                    <label for="username">username :</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
                </div>

                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col"></div>
    </div>
</div>
@include('Admin.assets.footer')
