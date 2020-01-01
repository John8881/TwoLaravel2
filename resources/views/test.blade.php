<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('testw') }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            <input type="text" name="title" placeholder="название">
            <input type="text" name="price" placeholder="цена">
            <button class="btn btn-default" type="submit"></button>
    </form>


    {{-- Валидация введённых в input данных --}}
    @if (count($errors) > 0)
      @foreach ($errors->all() as $error)
        {{ $error }}
      @endforeach
    @endif
    
    @isset ($value)
{{$value}}
@endisset


@isset ($path)
<img src="{{ asset('/storage/'.$path) }}">
@endisset
@isset ($path3)
{{$path3}}
@endisset

</body>
</html>