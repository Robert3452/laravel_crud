@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Send report</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/expense_reports/{{ $report->id }}/send_mail" method="POST">
                {{--Agrega en este punto csrf--}}
                @csrf
                <div class="form-group">
                    <label for="email" class="">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}"
                           placeholder="Type an email">
                    <button class="mt-2 btn btn-primary" type="submit">Send mail</button>
                </div>
            </form>
        </div>
    </div>
@endsection
