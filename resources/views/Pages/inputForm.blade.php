<!doctype html>
<html lang="en">
  <head>
    <title>input_form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <h1 class="bg-danger text-white p-2 text-center">Student Information Form</h1>
      <div class="container">
          {{-- For Error --}}
            @if ($errors->any())
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
            @endif


          <form action="submitForm" method="post">
              @csrf
              <div class="form-group">
                  <label for="name" class="text-warning">Name:</label>
                  <input type="text" name="name" class="form-control" placeholder="input your name" value="{{old('name')}}">
              </div>
              <div class="form-group">
                <label for="email" class="text-warning">Email:</label>
                <input type="text" name="email" class="form-control" placeholder="abcd@email.com" value="{{old('email')}}">
            </div>
            <div class="form-group">
                <label for="address" class="text-warning">Address:</label>
                <input type="text" name="address" class="form-control" placeholder="input your address" value="{{old('address')}}">
            </div>
            <input type="submit" value="Submit Form" class="btn btn-warning btn-large">
          </form>
      </div>















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>