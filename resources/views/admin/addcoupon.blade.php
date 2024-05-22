<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="row mt-5 mx-auto p-2" style="width: 800px;">
        @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
         @endif
    
      <div class="col-6">
          <form action="/addcoupon" method="post">
            {{-- class="mt-5 mx-auto p-2" style="width: 200px;" --}}
            @csrf
            <p><b>Add Coupon</b></p>
            <div class="form-group">
            
              <label for="exampleInputEmail1">coupon name</label>
              <input type="name" name="coupon_name" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="coupon name">
            </div>
            <br>
             
              <div class="form-group">
                <label for="exampleInputPassword1">coupon code</label>
                <input type="text" name="coupon_code" class="form-control" required id="exampleInputPassword1" placeholder="coupon code">
              </div>
              <br>
              <div class="form-group">
                <label for="exampleInputPassword1">percentage</label>
                <input type="percentage" name="percentage" class="form-control" required id="exampleInputPassword1" placeholder="percentage">
              </div>
              <br>

              <div class="form-group">
                <label for="exampleInputPassword1">from</label>
                <input type="date" name="from" class="form-control" required id="exampleInputPassword1" placeholder="from">
              </div>
              <br>

              <div class="form-group">
                <label for="exampleInputPassword1">from</label>
                <input type="date" name="to" class="form-control" required id="exampleInputPassword1" placeholder="to">
              </div>
              <br>

              {{-- <br>
          
              <div class="form-group">
                <label for="role">Role</label>
                <select required name="role" id="exampleInputEmail1">
                  <option value="admin">Admin</option>
                  <option value="user">User</option>
                </select>
              </div> --}}
              
              <br>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    
          </div>
    
        </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    
</body>
</html>