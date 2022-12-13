<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/dashboard.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>plant-dashboard</title>
</head>
<body>
    <div class="container">
       <div class="header-text">
            <h3>PLANTS REPORT</h3> <a href="create" class="btn btn-success">Create</a>
            <div class="small-text">
                <a>all of plants report<a/>
            </div>
       </div>
       <div class="header-text1">
            <h3>COUNT</h3>
                <div class="count">
                    <h2>-</h2>
                        </div> 
                    <div class="small-text1">
                <a>total plant<a/>
            </div>
       </div>
        <div class="penutup">
            <table class="table table-striped table-success">
                <tr>
                    <td>Code</td>
                        <td>Name</td>
                            <td>Type</td>
                        <td>Growth</td>
                    <td>Action</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>