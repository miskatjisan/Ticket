<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airorder;
use Auth;

class AirOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $airorders = Airorder::orderBy('id','desc')->paginate(5);
        return view('admin.airorders.index', compact('airorders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Create()
    {
        $data =Auth::user();
        // $total = airorder::where('useremail', $data->email)->where('status', 0 )->sum('(price*seat)');
        return view('user.bookingair', compact('data'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePaymentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function Store(Request $request)
    {
        $request->validate([
            'useremail' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'vat' => 'required',
            'from' => 'required',
            'to' => 'required',
            'departure' => 'required',
            'return' => 'required',
            'price' => 'required',
            'seat' =>'required',
        ]);
        
        $airorder = new Airorder;
        $airorder->useremail = $request->input('useremail') ;
        $airorder->name = $request->input('name');
        $airorder->email = $request->input('email');
        $airorder->phone = $request->input('phone');
        $airorder->vat = $request->input('vat');
        $airorder->from = $request->input('from');
        $airorder->to = $request->input('to');
        $airorder->departure = $request->input('departure');
        $airorder->return = $request->input('return');
        $airorder->price = $request->input('price');
        $airorder->qty = $request->input('seat');

        $save = $airorder->save();
    if ($save){
            return redirect()->route('airpayment.create')->with('success','Successfully Place Your Order. For Purchase Your Ticket Please Complete Your Payment');
    }
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $balance
     * @return \Illuminate\Http\Response
     */
    public function show(Airorder $airorder)
    {
        return view('admin.airorders.show',compact('airorder'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $balance
     * @return \Illuminate\Http\Response
     */
    public function edit(Airorder $airorder)
    {
        return view('admin.airorders.edit',compact('airorder'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentRequest  $request
     * @param  \App\Models\Payment  $balance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Airorder $airorder)
    {
        $request->validate([
            'useremail' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'vat' => 'required',
            'from' => 'required',
            'to' => 'required',
            'departure' => 'required',
            'return' => 'required',
            'price' => 'required',
            'seat' =>'required',
        ]);
        $airorder->fill($request->post())->save();
        return redirect()->route('airorders.index')->with('success','Air Order Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $balance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Airorder $airorder)
    {
        $airorder->delete();
        return redirect()->route('airorders.index')->with('success','Air Order has been deleted successfully');
    }
}
