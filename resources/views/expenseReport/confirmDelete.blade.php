@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Delete report: N°{{$report -> id}}</h1>
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
                @method('delete')
                    <button class="mt-2 btn btn-danger" type="submit">Delete</button>
            </form>
        </div>
    </div>
@endsection
