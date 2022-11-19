<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD assignment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <h2 class="text-center text-primary">Md. Shahriar Rahman - 191-15-12803</h2>
        <h2>List of Users</h2>
        <a class="btn btn-primary" href="/CRUD/create.php" role="button">New USER</a>
        <br>

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "crud_operation";

                //creating connection
                $connection = new mysqli($servername, $username, $password, $database);

                //checking connection
                if ($connection->connect_error) {
                    die("Connection Failed: " . $connection->connect_error);
                }

                //read all row from database table
                $sql = "SELECT * FROM clients";
                $result = $connection->query($sql);

                if (!$result) {
                    die("Inavlid query: " . $connection->connect_error);
                }

                //read data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                    <th scope='row'>$row[id]</th>
                    <td>$row[name]</td>
                    <td>$row[email]</td>
                    <td>$row[phone]</td>
                    <td>$row[address]</td>
                    <td>$row[created_at]</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='/CRUD/edit.php?id=$row[id]'>Edit</a>
                        <a class='btn btn-danger btn-sm' href='/CRUD/delete.php?id=$row[id]'>delete</a>
                    </td>
                </tr>

                    ";
                }
                ?>

            </tbody>
        </table>



    </div>


</body>

</html>