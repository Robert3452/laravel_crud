@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>New expense</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports/{{ $report->id }}">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/expense_reports/{{ $report->id }}/expenses" method="POST">
                {{--  Agrega en este punto csrf  --}}
                @csrf
                <div class="form-group">
                    <label for="description" class="">Description:</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}"
                        placeholder="Type a description">
                </div>
                <div class="form-group">
                    <label for="amount" class="">Amount:</label>
                    <input type="text" class="form-control" id="amount" name="amount" value="{{ old('amount') }}"
                        placeholder="Type a amount">
                    <button class="mt-2 btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
