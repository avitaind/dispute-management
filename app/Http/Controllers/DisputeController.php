<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Dispute;



class DisputeController extends Controller
{
    //
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'date' => 'required',
            'company' => 'required',
            'type' => 'required',
            'summary' => 'required',

        ]);

        $dispute = new Dispute([
            'name'   => $request->input('name'),
            'email'   => $request->input('email'),
            'phone'   => $request->input('phone'),
            'date'   => $request->input('date'),
            'company'   => $request->input('company'),
            'type'   => $request->input('type'),
            'summary'   => $request->input('summary'),

        ]);

            $dispute->save();
            return redirect()->back()->with("status", "Dispute registered successfully.");


    }

}
