<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;

class AdminTransactionController extends Controller
{
    public function index(){
        $transactions = Transaction::orderByDesc('id')->paginate(10);
        $viewData = [
            'transactions' => $transactions
        ];
        return view('admin.transaction.index' , $viewData);
    }

    public function delete($id){
        $transactions           = Transaction::find($id);
        if($transactions){
            $transactions ->delete();
            \DB::table('orders')->where('od_transaction_id' , $id)->delete();
        }
        return redirect()->back();

    }
}
