<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>A simple CRUD system in Laravel</title>
  </head>
  <body>
  <div class="container">
        <div class="row">
            <div class="  col-md-12 mt-5">
            <h4 style="text-align:center;">
             A simple CRUD System in Laravel</h4>
                <div class="card">
                   
                    <div class="card-header">
                        <span class="h4">user
                        <a href="{{ url('/add-user') }}" class="btn btn-primary float-right"> Add</a></span>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-stripped">
                            <thead>
                                <tr>
                                    <th scope="col">S/N</th>
                                    <th scope="col">first Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                     <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $users )
                                 <tr>
                                    <th scope="row"> 1</th>
                                    <td>{{ $users->first_name }}</td>
                                    <td>{{ $users->last_name }}</td>
                                    <td>{{ $users->email_patient}}</td>
                                    <td>{{ $users->mobile_number }}</td>
                                    <td>
                                        <a href="{{ url('user/edit/'.$users->id) }}">edit</a>
                                        <a href="{{ url('user/delete/'.$users->id) }}">delete</a>
                                    </td>
                                </tr>
                                
                            @endforeach
                               
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>