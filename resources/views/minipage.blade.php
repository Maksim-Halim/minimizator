<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
@if(session()->has('success'))
    <p>Новая ссылка <a href={{session ()->get('success')}}>{{session ()->get('success')}}</a></p>
@endif
<form method="POST" action="" >
    @csrf
    <div class="form-group">
        <label for="url">URL address</label>
        <br>
        <input type="url" name="url" class="form-control w-50" id="example_url" placeholder="Enter URL">
        </div>
    <br>
    <button type="submit" class="btn btn-primary">Create</button>
</form>


</body>
</html>
