@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <header>
            <h1>Create New Client</h1>

            <hr>

            @include('errors._check')

            <span class="row">
                {!! Form::open(['route'=>'admin.clients.store']) !!}

               @include('admin.clients._form')

                   <div class="form-group-lg">

                       {!! Form::submit('Create New Client', ['class:'=>'btn btn-success']) !!}
                   </div>

                {!! Form::close() !!}
            </span>
            <br>
        </header>
        <a href="{{route('admin.clients.index')}}" class="btn btn-default"><< Back</a>

    </div><!-- End Row -->
</div><!-- End Container -->
@endsection