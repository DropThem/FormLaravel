<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/poko" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nom</label>
          <input type="text" class="form-control" name="nom">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Type</label>
          <input type="text" class="form-control" name="type">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Lvl</label>
            <input type="text" class="form-control" name="lvl">
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
</html>