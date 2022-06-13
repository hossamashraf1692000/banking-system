<?php

namespace App\Http\Controllers;

use App\Models\Transfers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class oneCustomer extends Controller
{
    public function index($userId)
    {
        $clickedUser = User::findOrFail($userId);
        $allUserEmails = User::all()->except($userId);
        $allUserTransfers = Transfers::where('sender', $clickedUser->email)->Orwhere('receiver', $clickedUser->email)->get();

        return view('showCustomer.index')->with([
            'clickedUser' => $clickedUser,
            'allUserEmails' => $allUserEmails,
            'allTransfers' => $allUserTransfers,
        ]);
    }

    public function submit($curUserId, Request $request)
    {
        $senderData = User::findOrFail($curUserId);
        $senderBalance = $senderData->current_balance;

        $request->validate([
            'receiver' => 'required',
            'amount' => 'required|numeric'
        ]);

        $receiverData = User::findOrFail($request->receiver);
        $receiverBalance = $receiverData->current_balance;
        
        $msg = '';
        // Transfers Process
        if($senderBalance < $request->amount)
        {
            $msg = 'Your Money is not enough!';
        }
        else
        {   
            $newSenderBalance = $senderBalance - $request->amount;
            $newReceiverData = $receiverBalance + $request->amount;

            Transfers::create([
                'sender' => $senderData->email,
                'receiver' => $receiverData->email,
                'amount' => $request->amount,
            ]);
            // Sender Dataaaaa
            $senderData->update([
                'current_balance' => $newSenderBalance,
            ]);
            // Receiver Dataaaaa
            $receiverData->update([
                'current_balance' => $newReceiverData,
            ]);

            $msg = 'Sent Successfuly';
        }
        
        Session::flash('msg',$msg);

        return redirect("/viewCst/$curUserId");
        



    }
}
