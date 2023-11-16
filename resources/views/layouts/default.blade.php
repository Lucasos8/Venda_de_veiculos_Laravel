<!DOCTYPE html>
<html lang="pt_br">
<head>
    @include('includes.head')
</head>
<body>
    @include('includes.header')
  
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
    @endif
    
    @yield('content')

    @include('includes.footer')

    @yield('pagespecificscripts')
</body>


</html>