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
    <div class="row mt-5 mb-5 p-5">
      <div>
    <p><h2>Hello Admin</h2></p>
    <a class="btn btn-primary btn-small " width="200px" href="/listusercoupons" role="button">See Applied Coupons Users </a> </div>
    <div class="card">
    <div class="card-header">
    <a href="/addcoupon" class="btn btn-success  btns addtask addtaskpm mr-2">Add Coupon<i class="fas fa-plus ml-2"></i></a>
    </div>
    <div class="card-body">

    <table class="table">
        <thead>
          <tr>
            <th scope="col">coupon_name</th>
            <th scope="col">coupon_code</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
         
            @foreach($coupons as $coupon)
            <tr>
            <td>{{$coupon->coupon_name}}</td>
            <td>{{$coupon->coupon_code}}</td>
            <td>
                <a href="/editcoupon/{{$coupon->id}}" class="btn btn-warning p-0 btn-sm" data-toggle="tooltip" title="Edit">Edit</a>
                <a href="/delete/{{$coupon->id}}" class="btn btn-danger p-0 btn-sm" data-toggle="tooltip" title="Delete">Delete</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    </div>
    <div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>