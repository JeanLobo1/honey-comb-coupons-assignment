<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
    <form  action="/register" method="post"> 
      @csrf
      {{-- class="mt-5 mx-auto p-2" style="width: 200px;" --}}
      <p><b>REGISTER</b></p>
      <div class="form-group">
      
        <label for="exampleInputEmail1">Name</label>
        <input type="name" name="name"class="form-control" required="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      <br>
        <div class="form-group">
      
          <label for="exampleInputEmail1">Email address</label>
          <input type="email"  name="email" class="form-control"  required="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      
        </div>
        <br>
        <div class="form-group">
      
          <label for="exampleInputEmail1">Contact No</label>
          <input type="contact" name="contact_no" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      
        </div>
        <br>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password"  class="form-control" required="exampleInputPassword1" placeholder="Password">
        </div>

        <br>
    
        <div class="form-group">
          <label for="role">Role</label>
          <select name="role" id="exampleInputEmail1">
            <option value="admin">Admin</option>
            <option value="user">User</option>
          </select>
        </div>
        
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

  </div>

  <div class="col-6">
      <form action="/userlogin" method="post">
        {{-- class="mt-5 mx-auto p-2" style="width: 200px;" --}}
        @csrf
        <p><b>Login</b></p>
        <div class="form-group">
        
          <label for="exampleInputEmail1">Email</label>
          <input type="name" name="email" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <br>
         
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" required id="exampleInputPassword1" placeholder="Password">
          </div>
  
          <br>
      
          <div class="form-group">
            <label for="role">Role</label>
            <select required name="role" id="exampleInputEmail1">
              <option value="admin">Admin</option>
              <option value="user">User</option>
            </select>
          </div>
          
          <br>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

      </div>

    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>