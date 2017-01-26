<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ isset($title) ? $title : 'Тестовое задание'}}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <h1>Вывод информации из базы данных</h1>
          <table class="table table-hover table-striped table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Club</th>
                <th>Permission</th>
              </tr>
            </thead>
            <tbody>
        @foreach($customers as $customer)  
              <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->tel }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->club }}</td>
                <td>{{ $customer->perm }}</td>
              </tr>
        @endforeach
            <tbody>
          </table>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
