@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$character->name}}</div>
                <form action="/yakala" method="POST">
                    @csrf
                    <input type="hidden" name="character_id" value="{{$character->id}}">
                    <button class='btn btn-danger'>Yakala</button>
                </form>
                
                <div class="card-body">
                {{$character->id}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
