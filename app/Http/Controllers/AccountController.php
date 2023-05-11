<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


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
        $reqPass = $request->password;
        $accPass = Account::where('email', $request->email)->pluck("password")->first();

        if (Hash::check($reqPass, $accPass)) {
            Session::put('user_id', $request->email);
        }

        return redirect(route('board.index'));
    }
}
