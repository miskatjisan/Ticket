<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moviepayment;
use App\Models\Movieorder;
use Auth;

class MoviePaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $moviepayments = Moviepayment::orderBy('id','desc')->paginate(5);
        return view('admin.moviepayments.index', compact('moviepayments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Create()
    {
        $data =Auth::user();
        $total =  Movieorder::where('useremail', $data->email)->sum(\DB::raw('price * seat'));
        return view('user.moviepayment', compact('data','total'));
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

        $moviepayment = new Moviepayment;
        $moviepayment->useremail = $request->input('useremail') ;
        $moviepayment->name = $request->input('name') ;
        $moviepayment->email = $request->input('email') ;
        $moviepayment->address = $request->input('address') ;
        $moviepayment->city = $request->input('city') ;
        $moviepayment->state = $request->input('state') ;
        $moviepayment->zip = $request->input('zip') ;
        $moviepayment->total = $request->input('total') ;
        $moviepayment->creditnumber = $request->input('creditnumber') ;
        $moviepayment->expmonth = $request->input('expmonth') ;
        $moviepayment->expyear = $request->input('expyear') ;
        $moviepayment->cvv = $request->input('cvv') ;

        $save = $moviepayment->save();
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
    public function show(Moviepayment $moviepayment)
    {
        return view('admin.moviepayments.show',compact('moviepayment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Moviepayment $moviepayment)
    {
        return view('admin.moviepayments.edit',compact('moviepayment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentRequest  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentRequest $request, Moviepayment $moviepayment)
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
       
        $moviepayment->fill($request->post())->save();
        return redirect()->route('moviepayments.index')->with('success','Movie Payment Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Moviepayment $moviepayment)
    {
        $moviepayment->delete();
        return redirect()->route('moviepayments.index')->with('success','Movie Payment has been deleted successfully');
    }
}
