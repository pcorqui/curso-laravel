<?php

namespace App\Http\Controllers;

use App\ExpenseReport;
use Illuminate\Http\Request;

class ExpenseReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //en laravel se hace referencia al archivo de la carpeta con punto
        return view('expenseReport.index',[
            'expenseReports' => ExpenseReport::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expenseReport.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validaData = $request->validate([
            'title' => 'required|min:3'
        ]);

        $report = new ExpenseReport();
        $report->title = $request->get('title');
        $report->save();

        return redirect('/expense_report');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $report = ExpenseReport::findOrFail($id);
        return view('expenseReport.show',[
            'report' => $report
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report = ExpenseReport::find($id);
        return view('expenseReport.edit',[
            'report' => $report
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $report = ExpenseReport::find($id);
        $report->title = $request->get('title');
        $report->save();

        return redirect('/expense_report');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = ExpenseReport::find($id);
        $report->delete();

        return redirect('/expense_report');

    }

    public function confirmdelete($id)
    {
        $report = ExpenseReport::find($id);
        return view('expenseReport.confirmDelete',[
            'report'=> $report
        ]);
    }

    public function confirmSendEmail($id){
        $report = ExpenseReport::find($id);
        return view('expenseReport.confirmSendMail',[
            'report'=> $report
        ]);
    }

    public function sendMail($id){
        $report = ExpenseReport::find($id);
        return $report;
    }
}
