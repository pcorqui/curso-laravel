@extends('layout.base')

@section('content')

    <div class="row">
        <div class="col">
        <h1>Delete Reports {{ $report->id }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_report">back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="/expense_report/{{ $report->id }}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-primary" type="submit">delete</button>
            </form>
        </div>
    </div>
    
@endsection