<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Http\Requests\StorecustomerRequest;
use App\Http\Requests\UpdatecustomerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $customers = customer::orderBy('id', 'desc')->get();
        return view('welcome',compact('customers'));
    }



    public function customerAdd()
    {
        return view('customerStore');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function customerStore(Request $request)
    {

            $customer = new customer;
            $customer->first = $request->first;
            $customer->last = $request->last;
            $customer->email = $request->email;
            $customer->phone = $request->phone;
            $customer->message = $request->message;
            $customer->save();
            return redirect()->route('home')->with('success','Customer Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function customerEdit($id)
    {
        $customer = customer::find($id);

        return view('customerEdit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecustomerRequest  $request
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
   public function customerUpdate(Request $request, $id){
         $customer = customer::find($id);
            $customer->first = $request->first;
            $customer->last = $request->last;
            $customer->email = $request->email;
            $customer->phone = $request->phone;
            $customer->message = $request->message;
            $customer->save();
            return redirect()->route('home')->with('success','Customer Updated Successfully');
   }

   public function customerDelete(Request $request){



        $customer = customer::find($request->id);

        $customer->delete();
        return redirect()->route('home')->with('success','Customer Deleted Successfully');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(customer $customer)
    {
        //
    }
}
