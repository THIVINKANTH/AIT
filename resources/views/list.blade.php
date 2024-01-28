<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>

<div class="row justify-content-center" style="font-size:30px; color: purple;font-style: italic">
    {{ session('message') }}
</div>

    <div class="row justify-content-end mt-3" style="margin-right: 15px">
        <a href="{{ url('insert')}}" type="button" class="btn btn-outline-info" >Add more</a>
    </div>
    <table class="table-responsive-md table table-striped shadow rounded mt-3">
        <thead >
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Password</th>
                <th>Email</th>
                <th>photo</th>
                <th>Action</th>
            </tr>
        </thead>

       <tbody>
        @foreach ($list as $lists)
        <tr>
            <td>{{ $lists->id }}</td>
            <td>{{ $lists->name }}</td>
            <td>{{ $lists->password }}</td>
            <td>{{ $lists->email }}</td>
            <td>{{ $lists->photo }}</td>

                <td><a href="update/{{ $lists->id }}" type="button" class="btn btn-outline-warning">Edit</a>
                    <a href="delete/{{ $lists->id }}" type="button" class="btn btn-outline-danger">Delete</a>
                </td>
        </tr>

        @endforeach
       </tbody>
    </table>

</body>
</html>
