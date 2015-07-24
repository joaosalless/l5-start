
{!! Form::open(array('url' => $route, 'method' => 'get')) !!}
    {!! Form::text('search', urldecode(\Request::get('search')), ['class' => 'form-control imput-sm', 'id' => 'search', 'placeholder' => 'buscar...']) !!}
{!! Form::close() !!}