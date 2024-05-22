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
    <p><h2>Hello Admin - <span>List of users who used coupons </span></h2></p>
    <div class="card">
    <div class="card-header">
    <a href="/exporttocsv" class="btn btn-success  btns addtask addtaskpm mr-2" onclick="exportTableToCSV('usercoupons.csv')">export to csv<i class="fas fa-plus ml-2"></i></a>
    <a href="/excel" class="btn btn-success  btns addtask addtaskpm mr-2" onclick="exportTableToExcel('usercoupons.xlsx')">export to excel<i class="fas fa-plus ml-2"></i></a>
    </div>
    <div class="card-body">

    <table class="table" id="usercouponsTable">
        <thead>
          <tr>
            {{-- <th scope="col">#</th> --}}
            <th scope="col">user name</th>
            <th scope="col">coupon_code</th>
            <th scope="col">product_name</th>
            <th scope="col">product_price</th>
            <th scope="col">total_price</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
          @foreach( $cartitem as $item)
          <tr>
            {{-- <th scope="row">1</th> --}}
            <td>{{$item->user_name}}</td>
            <td>{{$item->coupon_code}}</td>
            <td>{{$item->product_name}}</td>
            <td>{{$item->product_price}}</td>
            <td>{{$item->total_price}}</td>
            <td>
                <a href="#" class="btn btn-warning p-0 btn-sm" data-toggle="tooltip" title="Edit">Edit</a>
                <a href="#" class="btn btn-danger p-0 btn-sm" data-toggle="tooltip" title="Delete">Delete</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

    <script>
     
      function downloadCSV(csv, filename) {
          const csvFile = new Blob([csv], { type: 'text/csv' });
          const downloadLink = document.createElement('a');
          downloadLink.download = filename;
          downloadLink.href = window.URL.createObjectURL(csvFile);
          downloadLink.style.display = 'none';
          document.body.appendChild(downloadLink);
          downloadLink.click();
      }
      
      function exportTableToCSV(filename) {
          const table = document.getElementById('usercouponsTable');
          const rows = table.querySelectorAll('tr');
          let csv = [];
      
          rows.forEach(row => {
              const cols = row.querySelectorAll('td, th');
              const rowArray = Array.from(cols).map(col => col.innerText.trim());
              csv.push(rowArray.join(','));
          });
      
          downloadCSV(csv.join('\n'), filename);
      }

      function exportTableToExcel(filename) {
            const table = document.getElementById('usercouponsTable');
            const workbook = XLSX.utils.table_to_book(table, {sheet: "Sheet1"});
            XLSX.writeFile(workbook, filename);
        }
      </script>
</body>
</html>