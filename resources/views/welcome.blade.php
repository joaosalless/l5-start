@extends('layouts.app_admin',
    [
        'feature'          => 'home',
        'page_title'       => '',
        'page_description' => null
     ]
)

@section('styles')
<link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

<style>
    html, body {
        height: 100%;
    }

    body {
        margin: 0;
        padding: 0;
        width: 100%;
        display: table;
    }

    .container {
        text-align: center !important;
        display: table-cell;
        vertical-align: middle;
    }

    div.content {
        text-align: center !important;
        display: inline-block;
        /*min-height: 350px;*/
        vertical-align: middle;
    }

    .title {
        font-size: 96px;
        font-weight: 100;
        font-family: 'Lato';
        padding: 160px 0;
        text-align: center;
        width: 100%;
    }
</style>
@stop



@section('content')
<div class="row">
    <div class="col-md-12">
        <div style="text-center" class="title">Laravel 5.1</div>
    </div>
</div>
@endsection
