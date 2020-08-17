@extends('layout.base')

@section('content')

    <div class="row">
        <div class="col">
        <h1>Report: {{$report->title}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_report">back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <a class="btn btn-primary" href="/expense_report/{{ $report->id}}/confirmSendEmail">Send Email</a>
        </div>
    </div>
    <div class="row">
        <div>
            <h3>Details</h3>
            <table class="table">
                @foreach ($report->expenses as $expense)
                <tr>
                <td>{{ $expense->description }}</td>
                <td>{{ $expense->created_at }}</td>
                <td>{{ $expense->amout }}</td>
                </tr>
                    
                @endforeach
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/expense_report/{{ $report->id}}/expense/create">New Expense</a>

        </div>

    </div>
@endsection