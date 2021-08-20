<?php
use Carbon\Carbon;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>show category</title>
</head>
<body>

    <div class="container mt-5">
        <a href="{{ route('category.add') }}" class="btn btn-success mb-2">Add New Category</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Status</th>
                <th scope="col">Create At</th>
            </tr>
            </thead>
            <tbody>

                <?php $i=1; ?>
                @if(session()->has('message'))
                    <div class="alert alert-success" id="btn_close">
                        {{ session()->get('message') }}
                    </div>
                @endif

                @if(isset($showCategory))
               @foreach($showCategory as $category)
                   <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ strtoupper($category->name) }}</td>
                        <td>{{ $category->image }}</td>
                        <td>{{ $category->status }}</td>
                       <td>{{ $category->created_at->diffForHumans() }}</td>
                   </tr>
               @endforeach
            </tbody>

        </table>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="custom.js"></script>
</body>
</html>

