@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Edit report: N°{{$report -> id}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="/expense_reports/{{$report->id}}" method="POST">
                {{--Agrega en este punto csrf--}}
                @csrf
                {{--Metodo auxiliar--}}
                @method('put')
                <div class="form-group">
                    <label for="title" class="">Title:</label>
                    <input type="text" class="form-control" value="{{{$report->title}}}" id="title" name="title"
                           placeholder="Type a title">
                    <button class="mt-2 btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
