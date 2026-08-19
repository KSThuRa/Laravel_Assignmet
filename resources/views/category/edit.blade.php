<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
</head>
<body>
    {{-- <div>
            <h2>Category Edit</h2>
            @if ($errors->any)
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                    <li style="color:red">{{$error}}</li>
                    @endforeach

                </ul>
            </div>
            @endif

            <form action="{{route('categories.update', [$category->id])}}" method="POST">
                @csrf
                <label for="name">Category Name:</label>
                <input type="text" value="{{$category->name}}" name="name"  />
                <button type="submit">Update</button>
            </form>
    </div> --}}

    <div class="container">
         <h2 class="my-4">Category Edit</h2>
         <div class="card">
            <div class="card-body">
                 <form action="{{route('categories.update', [$category->id])}}" method="POST">
                    @csrf
                    <div class="mb-3">
                       <label for="name">Category Name:</label>
                       <input type="text" value="{{$category->name}}" name="name" class="form-control" />
                       @error('name')
                       <div class="invalid-feedback d-block">
                         {{ $message }}
                       </div>
                       @enderror
                       <button type="submit" class="btn btn-primary btn-sm mt-2">
                        Update
                       </button>
                       <a href="{{ route('category.index') }}" class="btn btn-secondary btn-sm mt-2">Back</a>
                    </div>
            </div>
         </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
        integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous">
    </script>
</body>
</html>
