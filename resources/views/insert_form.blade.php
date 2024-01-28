
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
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
    <form action="{{ url('/insert')}}" method="POST" enctype="multipart/form-data">
        @csrf
       <table class="table">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" ></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" ></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" ></td>
        </tr>
        <tr>
            <td>Photo</td>
            <td><input type="file" name="photo" ></td>
        </tr>
        <tr>
            <td><button type="submit">Submit</button></td>
        </tr>
       </table>
    </form>
</body>
</html>
