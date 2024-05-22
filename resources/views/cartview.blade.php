<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="row mt-5 mb-5 p-5" >
    <p><h2>Hello Admin</h2></p>
    <div class="card">
    <div class="card-header">
    <a href="/addcoupon" class="btn btn-success  btns addtask addtaskpm mr-2">Add Coupon<i class="fas fa-plus ml-2"></i></a>
    </div>
    <div class="card-body">

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">coupon_name</th>
            <th scope="col">coupon_code</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>coupon name</td>
            <td>coupon code</td>
            <td>
                <a href="/edit_admin_user/" class="btn btn-warning p-0 btn-sm" data-toggle="tooltip" title="Edit"><i class="fas fa-edit p-1"></i></a>
                <a href="/delete_admin_user/" class="btn btn-danger p-0 btn-sm" data-toggle="tooltip" title="Delete"><i class="fas fa-trash p-1"></i></a>
            </td>
          </tr>
        
        </tbody>
      </table>
    </div>
    </div>
</body>
</html>