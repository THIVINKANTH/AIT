<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
        .table
        {
           padding: 200px  500px;
        }
        button
        {
            text-align: center;
            background-color: green;
            color: white;
            font-size: bolder;
            width: 100px;
            height: 28px;
            border-radius: 5px;


        }
    </style>
    <form action="{{ url('/update',$edits->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
       <table class="table">
        <tr>
            <td>Name</td>
            <td><input type="text" name="uname" value="{{ $edits->name }}"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="upassword" value="{{ $edits->password}}"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="uemail" value="{{ $edits->email }}"></td>
        </tr>
        <tr>
            <td>photo</td>
            <td><input type="file" name="photo" value="{{ $edits->photo }}"><img src="{{ $edits->photo }}" alt="png" id="photo" style="width: 200px;height: 200px;"></td>
        </tr>
        <tr>
            <td><button type="submit">Submit</button></td>
        </tr>
       </table>

    </form>
</body>
</html>
