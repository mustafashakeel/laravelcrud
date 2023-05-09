<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Crud Application </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="css/app.css">

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12">
                <h2>Laravel Crud Application </h2>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <a href="{{ route('companies.create') }}" class="btn btn-info">Add New Company</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Company Name</th>
                            <th>Company Email</th>
                            <th>Company Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($companies as $company)
                            <tr>
                                <td>{{ $company->name }}</td>
                                <td>{{ $company->email }}</td>
                                <td>{{ $company->address }}</td>
                                <td>
                                    <form action="{{ route('companies.destroy', $company->id) }}">

                                        <a href="{{ route('companies.edit', $company->id) }}"
                                            class="btn btn-info">Edit</a>

                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</body>

</html>
