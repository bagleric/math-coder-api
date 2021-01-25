<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Admin Login</h2>
    <form class="form-horizontal" action="{{route('admin.login')}}">
        <div class="form-group">
            <label class="control-label col-sm-2" for="username">User Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" value="{{ old('username') }}">
                @error('username')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" value="{{ old('pwd') }}">
                @error('pwd')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
{{--        <div class="form-group">--}}
{{--            <div class="col-sm-offset-2 col-sm-10">--}}
{{--                <div class="checkbox">--}}
{{--                    <label><input type="checkbox" name="remember"> Remember me</label>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>
