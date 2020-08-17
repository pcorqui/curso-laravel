@extends('layout.base')

@section('content')

    <div class="row">
        <div class="col">
            <h1>Reports</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/expense_report/create">Create new Report</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                @foreach ($expenseReports as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                    <td><a href="/expense_report/{{ $item->id }}">{{ $item->title }}</a></td>
                    <td><a href="/expense_report/{{ $item->id }}/edit">Edit</a></td>
                    <td><a href="/expense_report/{{ $item->id }}/confirmDelete">Delete</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    
@endsection