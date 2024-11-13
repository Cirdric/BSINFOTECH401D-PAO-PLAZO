<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Table</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .table th, .table td {
            vertical-align: middle;
        }
        .table-hover tbody tr:hover {
            background-color: #f8f9fa;
        }
        .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Students</h1>
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('students.create') }}" class="btn btn-primary">Add New Student</a>
        </div>

        <?php if (session('success')): ?>
            <div class="alert alert-success"><?= htmlspecialchars(session('success')) ?></div>
        <?php endif; ?>
        <div class="card rounded shadow">
            <div class="card-body">
                <table class="table table-bordered table-hover text-center">
                <thead class="text-white" style="background:#1560bd;">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($students as $student): ?>
                        <tr>
                            <td><?= htmlspecialchars($student->name) ?></td>
                            <td><?= htmlspecialchars($student->email) ?></td>
                            <td><?= htmlspecialchars($student->age) ?></td>
                            <td class="d-flex justify-content-around">
                                <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            </div>
        </div>
        
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
