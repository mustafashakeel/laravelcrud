<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Companies</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <h2>Create Companies</h2>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-10">
            <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <label for="name">Company Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="col-lg-12">
                        <label for="email">Company Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="col-lg-12">
                        <label for="address">Company Address</label>
                        <input type="text" name="address" id="address" class="form-control">
                    </div>

                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

</body>

</html>
