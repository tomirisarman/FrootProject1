<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
  <body>
    @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <form action="{{route('publish')}}" method="post">
      @csrf
      <div class="form-group">
        <label for="no">Number</label>
        <input type="text" pattern="INV-[0-9]{6}" placeholder="INV-000000" name="no">
      </div>
      <div class="form-group">
        <label for="create_date">Invoice Date</label>
        <input type="date" name="create_date">
      </div>
      <div class="form-group">
        <label for="supply_date">Supply Date</label>
        <input type="date" name="supply_date">
      </div>
      <div class="form-group">
        <label for="comment">Текст</label>
        <textarea name="comment" class="form-control"></textarea>
      </div>
      <button type="submit" class="btn btn-success">Create</button>
    </form>
  </body>
</html>
