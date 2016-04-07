@extends('pages/layouts')
@section('content')
    <div class="title">Cytonn Technologies form</div>
    <div class="col-lg-4">
        {!! Form::open(['url' => '/users/register']) !!}
        <div class="form-group col-lg-12">

            {!! Form::label('Your Name') !!}
            {!! Form::text('name', null,
                array('required',
                      'class'=>'form-control',
                      'placeholder'=>'Your name')) !!}
        </div>

        <div class="form-group col-lg-12">

            {!! Form::label('Your E-mail Address') !!}
            {!! Form::email('email', null, ['required', 'class'=>'form-control', 'placeholder'=>'Your e-mail address']) !!}
        </div>

        {!! Form::submit('Submit', []) !!}

        {!! Form::close() !!}
    </div>
@stop
