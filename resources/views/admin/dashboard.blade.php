@extends('layouts.app')

@section('content')
<div class="container">

    @foreach ($data as $models)
        @includeWhen(count($models), 'admin.datatable', [
            'models' => $models,
            'excluded' => ['updated_at', 'email_verified_at', 'password', 'remember_token']
        ])
    @endforeach

</div>  
@endsection
