<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Wallet;

class TopUpController extends Controller
{
    public function index()
    {
        $title = 'TopUp';
        return view('modules.topup.index', compact('title'));
    }

    public function store(Request $request)
    {
        // Get authenticated user
        $user = auth()->user();

        // Get user's wallet
        $wallet = $user->wallet;

        // Update user's wallet balance
        $wallet->topUp($request->input('selected_balance'));

        return redirect('/topup');
    }
}
