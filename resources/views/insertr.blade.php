<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('insertr') }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            <input type="file" name="image" placeholder="фото">
            <input type="text" name="name" placeholder="название">
            <input type="text" name="price" placeholder="цена">
            <button class="btn btn-default" type="submit"></button>
    </form>

    
    @isset ($path2)
{{$path2}}
@endisset

@isset ($path)
<img src="{{ asset('/storage/'.$path) }}">
@endisset
@isset ($path3)
{{$path3}}
@endisset

</body>
</html>