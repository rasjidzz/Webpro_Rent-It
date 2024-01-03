<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;

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

    public function deny($id)
    {
        $submission = Pemesanan::findOrFail($id);
        $submission->update(['status' => 'Rejected']);

        return redirect()->back()->with('message', 'Reservasi berhasil ditolak.');
    }

    public function approve($id)
    {
        $submission = Pemesanan::findOrFail($id);
        $submission->update(['status' => 'Approved']);

        return redirect()->back()->with('message', 'Reservasi berhasil diterima.');
    }
}
