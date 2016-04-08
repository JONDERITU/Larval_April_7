@extends('pages/layouts')

@section('content')
    {!! Form::model($client,['url'=>'/clientUpdate/'.$client->id]) !!}
    {!! Form::text('name', null, []) !!}
    {!! Form::email('email', null, []) !!}
    {!! Form::submit('Submit') !!}
@stop