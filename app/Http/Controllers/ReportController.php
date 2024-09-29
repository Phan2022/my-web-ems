<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class ReportController extends Controller
{
    public function index()
    {
        $employee = Employee::where('del',1)->get();
        return view('report.emp_report', compact('employee'));
    }

    public function print()
    {
        $employee = Employee::where('del',1)->get();
        return view('report.emp_report_print', compact('employee'));
    }
}
