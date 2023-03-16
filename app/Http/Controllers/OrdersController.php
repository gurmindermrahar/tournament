<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\CreditFee;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{

    public function createCoinOrder(Request $request)
    {
        $user = auth()->user();

        $data = json_decode($request->order);
        $units = $data->purchase_units[0];

        $orderdata = [
        "user_id" => $user->id,
        "reference_id" => $units->reference_id,
        "currency" => $units->amount->currency_code,
        "amount" => $units->amount->value,
        "email_address" => $data->payer->email_address,
        "payer_id" => $data->payer->payer_id,
        "firstname" => $data->payer->name->given_name,
        "lastname" => $data->payer->name->surname,
        "transaction_id" => $data->id,
        ];

        $coin = CreditFee::findOrFail($units->reference_id);

        $user = Auth::user();
        $user->wallet_coins += $coin->credits;
        $user->save();

        Order::create($orderdata);

        return true;
    }

}
