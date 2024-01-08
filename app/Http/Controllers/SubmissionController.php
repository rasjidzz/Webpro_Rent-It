<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    protected $pemesananModel;
    public function __construct()
    {
        $this->pemesananModel = new Pemesanan();
    }
    public function index()
    {
        $data = [
            'title' => 'Reservasi',
            'pesananFasilitas' => Pemesanan::where('status', 'Waiting')->paginate(5)
        ];
        return view('admin.submissionPage.index', $data);
    }

    public function deny($id, Request $request)
    {
        $submission = Pemesanan::findOrFail($id);
        $reason = $request->input('reason');

        // Update the status and add the reason
        $submission->update([
            'status' => 'Rejected',
            'note' => $reason,
        ]);

        return redirect()->back()->with('message', 'Reservasi berhasil ditolak.');
    }

    public function approve($id)
    {
        $submission = Pemesanan::findOrFail($id);
        $submission->update(['status' => 'Approved']);

        return redirect()->back()->with('message', 'Reservasi berhasil diterima.');
    }
}
