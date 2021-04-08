<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\CheckingAccounts;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class CheckingAccount extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'error' => false,
            'accounts' => CheckingAccounts::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [ 
            'account_name' => 'required',
            'agency' => 'required',
            'account_number' => 'required',
            'balance' => 'required'
        ]);

        if($validation->fails())
        {
            return response()->json([
                'error' => true,
                'messages'  => $validation->errors(),
            ], 200);
        }
        else 
        {
            $checkingAccount = new CheckingAccounts();

            $checkingAccount->account_name = $request->input('account_name');
            $checkingAccount->agency = $request->input('agency');
            $checkingAccount->account_number = $request->input('account_number');
            $checkingAccount->balance = $request->input('balance');
            
            $checkingAccount->save();

            return response()->json([
                'error' => false,
                'account' => $checkingAccount
            ], 200);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
