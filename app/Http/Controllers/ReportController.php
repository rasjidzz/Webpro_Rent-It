<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kerusakan;

class ReportController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'LaporKerusakan',
            'laporKerusakan' => Kerusakan::where('status', 'Waiting')->paginate(5)
        ];
        // dd($data);
        return view('admin.reportPage.index', $data);
    }
    public function doneReview(Request $request)
    {
        $id = $request->input('idKerusakan');
        // return response()->json($id);
        $submission = Kerusakan::findOrFail($id);
        $submission->update(['status' => 'Done']);

        return redirect()->back()->with('message', 'Review Laporan Keruskan Selesai.');
    }

}
