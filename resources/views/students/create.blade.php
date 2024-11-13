<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        a:hover{
            background: #E52B50;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="card rounded shadow">
            <div class="card-title text-white py-2 px-2" style="background:#1560bd;">
                <h1>Add New Student</h1>
            </div>
            <div class="card-body">
                <form action=" {{ route('students.store') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="number" name="age" class="form-control" required min="1">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2 mt-2">Add Student</button>
                    <a href="{{ route('students.index') }}" class="btn mt-2">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>