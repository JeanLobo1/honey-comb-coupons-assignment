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
    <p><h2>Hello User</h2></p>
    <div class="card">
    <div class="card-header">
      <p>Products</p>
    {{-- <a href="/addcoupon" class="btn btn-success  btns addtask addtaskpm mr-2">Add Coupon<i class="fas fa-plus ml-2"></i></a> --}}
    </div>
    <div class="card-body">

    <table class="table">
        <thead>
          <tr>
            {{-- <th scope="col">#</th> --}}
            <th scope="col">product_name</th>
            <th scope="col">coupon_code</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $product)
          <tr>
            {{-- <th scope="row">1</th> --}}
            <td>{{$product}}</td>
            <td><select name="coupons" id="couponSelect" onchange="updateSelectedCoupon(this)">
              <option value="">No Coupon</option>
              @foreach ($coupons as $coupon)
              <option value="{{$coupon}}">{{$coupon}}</option>
              @endforeach
            </select>
          </td>
            {{-- <td>{{$coupons}}</td> --}}
            <td>
              <form action="/buy" method="post">
                @csrf
                <input type="text" hidden name="product_name" value="{{$product}}" class="form-control" required id="exampleInputPassword1" placeholder="Password">
                <input type="text" hidden name="selectedCoupon" class="form-control selectedCoupon" id="selectedCoupon" placeholder="Password">
                <button class="btn btn-warning p-0 btn-sm" type="submit">Buy</button>
                {{-- <a href="" class="btn btn-warning p-0 btn-sm" data-toggle="tooltip" title="Edit">Buy</a> --}}
                {{-- <a href="/delete_admin_user/" class="btn btn-danger p-0 btn-sm" data-toggle="tooltip" title="Delete">Delete</a> --}}
              </form>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    </div>

    <script>
      // document.getElementById('couponSelect').addEventListener('change', function() {
      //     document.getElementById('selectedCoupon').value = this.value;
      // });


//       document.querySelector('.table').addEventListener('change', function(e) {
//     if (e.target && e.target.matches('.couponSelect')) {
//         const selectElement = e.target;
//         const selectedCoupon = selectElement.value;
//         const form = selectElement.closest('tr').querySelector('form');
//         const hiddenInput = form.querySelector('.selectedCoupon');
//         hiddenInput.value = selectedCoupon;
//     }
// });



function updateSelectedCoupon(selectElement) {
    const selectedCoupon = selectElement.value;
    

    const form = selectElement.closest('tr').querySelector('form');
    console.log("Form found:", form); // For debugging

    if (form) {
        const hiddenInput = form.querySelector('.selectedCoupon');
        console.log("Hidden input found:", hiddenInput); // For debugging

        if (hiddenInput) {
            hiddenInput.value = selectedCoupon;
            console.log("Hidden input value set to:", hiddenInput.value); // For debugging
        } else {
            console.error("Hidden input not found");
        }
    } else {
        console.error("Form not found");
    }
 
}

  </script>
</body>
</html>