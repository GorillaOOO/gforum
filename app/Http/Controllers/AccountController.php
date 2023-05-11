<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    public function getAccount($id)
    {
        $account = Account::where('id', $id)->first();

        return view('account.view', ['account' => $account]);
    }
}
