<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    public function getAccount($id)
    {
        $account = Account::where('id', $id)->first();

        if ($account == null) {
            return view('404');
        }

        return view('account.view', ['account' => $account]);
    }

    public function authAccount(Request $request)
    {
        return $request;
    }
}
