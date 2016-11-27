@extends('layouts.app')



@section('content')

    <h3 class="page-title">Tag</h3>



    {!! Form::model($tag, ['method' => 'PUT', 'route' => ['tags.update', $tag->id]]) !!}



    <div class="panel panel-default">

        <div class="panel-heading">

            Edit

        </div>



        <div class="panel-body">

            <div class="row">

                <div class="col-xs-12 form-group">

                    {!! Form::label('tag_name', 'Tag Name', ['class' => 'control-label']) !!}

                    {!! Form::text('tag_name', old('tag_name'), ['class' => 'form-control', 'placeholder' => '']) !!}

                    <p class="help-block"></p>

                    @if($errors->has('tag_name'))

                        <p class="help-block">

                            {{ $errors->first('tag_name') }}

                        </p>

                    @endif

                </div>

            </div>



        </div>

    </div>



    {!! Form::submit('Update', ['class' => 'btn btn-danger']) !!}

    {!! Form::close() !!}

@stop