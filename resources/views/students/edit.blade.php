<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student Info</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        a:hover{
            background: #E52B50;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card rounded shadow mt-4">
            <div class="card-title text-white py-2 px-2" style="background:#1560bd;">
                <h1>Edit Student</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('students.update', $student->id) }} " method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($student->name) ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($student->email) ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="number" name="age" class="form-control" value="<?= htmlspecialchars($student->age) ?>" required min="1">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2 mt-2">Update Student</button>
                    <a href="{{ route('students.index') }}" class="btn btn mt-2">Cancel</a>
                </form>
            </div>
        </div>  
    </div>
</body>
</html>