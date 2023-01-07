<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airpayment;
use App\Models\Airorder;
use Auth;

class AirPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $airpayments = Airpayment::orderBy('id','desc')->paginate(5);
        return view('admin.airpayments.index', compact('airpayments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Create()
    {
        
        $data =Auth::user();
        $total =  Airorder::where('useremail', $data->email)
        ->sum(\DB::raw('(price * seat)+(price*seat*vat)'));
        return view('user.airpayment', compact('data','total'));
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
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'total' => 'required',
            'creditnumber' => 'required',
            'expmonth' => 'required',
            'expyear' => 'required',
            'cvv' => 'required',
            
        ]);

        $airpayment = new Airpayment;
        $airpayment->useremail = $request->input('useremail') ;
        $airpayment->name = $request->input('name') ;
        $airpayment->email = $request->input('email') ;
        $airpayment->address = $request->input('address') ;
        $airpayment->city = $request->input('city') ;
        $airpayment->state = $request->input('state') ;
        $airpayment->zip = $request->input('zip') ;
        $airpayment->total = $request->input('total') ;
        $airpayment->creditnumber = $request->input('creditnumber') ;
        $airpayment->expmonth = $request->input('expmonth') ;
        $airpayment->expyear = $request->input('expyear') ;
        $airpayment->cvv = $request->input('cvv') ;

        $save = $airpayment->save();
    if ($save){
            return redirect('/')->with('success','Thank You Sir ! Your payment has been Successfully Done. We Will Send You Confirmation Massages.');
    }
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Airpayment $airpayment)
    {
        return view('admin.airpayments.show',compact('airpayment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Airpayment $airpayment)
    {
        return view('admin.airpayments.edit',compact('airpayment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentRequest  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentRequest $request, Airpayment $airpayment)
    {
        $request->validate([
            'useremail' => 'required',
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'total' => 'required',
            'creditnumber' => 'required',
            'expmonth' => 'required',
            'expyear' => 'required',
            'cvv' => 'required',
        ]);
       
        $airpayment->fill($request->post())->save();
        return redirect()->route('airpayments.index')->with('success','Air Payment Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Airpayment $airpayment)
    {
        $airpayment->delete();
        return redirect()->route('airpayments.index')->with('success','Air Payment has been deleted successfully');
    }
}
