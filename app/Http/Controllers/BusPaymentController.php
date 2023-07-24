<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buspayment;
use App\Models\Busorder;
use Auth;

class BusPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buspayments = Buspayment::orderBy('id','desc')->paginate(5);
        return view('admin.buspayments.index', compact('buspayments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Create()
    {
        $data =Auth::user();
        $total =  Busorder::where('useremail', $data->email)->sum(\DB::raw('price * seat'));
        return view('user.buspayment', compact('data','total'));
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

        $buspayment = new Buspayment;
        $buspayment->useremail = $request->input('useremail') ;
        $buspayment->name = $request->input('name') ;
        $buspayment->email = $request->input('email') ;
        $buspayment->address = $request->input('address') ;
        $buspayment->city = $request->input('city') ;
        $buspayment->state = $request->input('state') ;
        $buspayment->zip = $request->input('zip') ;
        $buspayment->total = $request->input('total') ;
        $buspayment->creditnumber = $request->input('creditnumber') ;
        $buspayment->expmonth = $request->input('expmonth') ;
        $buspayment->expyear = $request->input('expyear') ;
        $buspayment->cvv = $request->input('cvv') ;

        $save = $buspayment->save();
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
    public function show(Buspayment $buspayment)
    {
        return view('admin.buspayments.show',compact('buspayment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Buspayment $buspayment)
    {
        return view('admin.buspayments.edit',compact('buspayment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentRequest  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentRequest $request, Buspayment $buspayment)
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
       
        $buspayment->fill($request->post())->save();
        return redirect()->route('buspayments.index')->with('success','Bus Payment Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buspayment $buspayment)
    {
        $buspayment->delete();
        return redirect()->route('buspayments.index')->with('success','Bus Payment has been deleted successfully');
    }
}
