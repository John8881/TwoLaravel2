<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="e-commerce site well design with responsive view." />
<meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>

    {{-- ФОРМА --}}
    <form action="{{ url('send-message') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="text" name="message" placeholder="название">
            {{-- <input type="text" name="price" placeholder="цена"> --}}
            <select name="mode" id="">
                <option value="1">qaz</option>
                <option value="2">wsx</option>
            </select>
            <button class="btn btn-default" type="submit"></button>
    </form>

{{-- ДАННЫЕ --}}
@isset ($product)
    {{ $product }}
@endisset
 
{{-- <?php var_dump($product ?? '');?> --}}

{{-- КАРТИНККА --}}
@isset ($path)
    <img src="{{ asset('/storage/'.$path) }}">
@endisset

{{ $qaz ?? 'sd'}}{{ $qaz1 ?? 'sd'}}{{ $qaz2 ?? 'sd'}}

</body>
</html>

