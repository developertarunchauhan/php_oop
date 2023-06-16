<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>AJAX</title>
</head>

<body>
    <!-- Main Navigation Begin -->

    <!-- Main Navigation Ends -->
    <!-- Main Container Begin-->
    <div class="container-fluid d-flex justify-content-center flex-column">
        <h1 class="text-center">
            AJAX + PHP
        </h1>
        <div class="card mb-3">
            <div class="card-header">
                Save Data to Database
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="first_name" aria-describedby="first_nameHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="last_name" aria-describedby="last_nameHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" aria-describedby="phoneHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="company_name" class="form-label">Company Name</label>
                        <input type="text" class="form-control" id="company_name" aria-describedby="compant_nameHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="first_name" class="form-label">Owner</label>
                        <select class="form-select" aria-label="Default select example" required>
                            <option selected>Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" id="save-data">Save</button>
                </form>
            </div>
        </div>
        <div class="btn-group mb-3">
            <button class="btn btn-success" id="load-data">Load Data</button>
        </div>
        <table class="table table-sm">

            <head>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                </tr>
                </thead>
                <tbody id="data-table">
                </tbody>
        </table>

    </div>
    <!-- Main Container Ends-->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- jQuery CDN-->
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <!-- AJAX -->
    <script src="script/ajax.js"></script>
</body>

</html>