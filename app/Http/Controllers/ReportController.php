<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account_report;
use App\Models\Post_report;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function accountReport(Request $request)
    {
        $request->validate([
            'reason' => 'required|string|max:255'
        ]);

        Account_report::create([
            'reported_users_id' => $request->reported_user_id,
            'reporter_id' => Auth::user()->id,
            'reason' => $request->reason
        ]);
        return redirect()->back()->with('success', "Your report has been sent successfully!");
    }

    public function postReport(Request $request)
    {
        $request->validate([
            'reason' => 'required|string|max:255'
        ]);

        Post_report::create([
            'photos_id' => $request->photos_id,
            'reporter_id' => Auth::user()->id,
            'reason' => $request->reason
        ]);
        return redirect()->back()->with('success', "Your report has been sent successfully!");
    }
}
