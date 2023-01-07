<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movieorder;
use Auth;


class MovieOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movieorders = Movieorder::orderBy('id','desc')->paginate(5);
        return view('admin.movieorders.index', compact('movieorders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Create()
    {
        $data =Auth::user();
        // $total = Movieorder::where('useremail', $data->email)->where('status', 0 )->sum('(price*qty)');
        return view('user.bookingmovie', compact('data'));
        
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
            'date' => 'required',
            'phone' => 'required',
            'cineplex' => 'required',
            'price' => 'required',
            'seat' =>'required',
        ]);
        
        $movieorder = new Movieorder;
        $movieorder->useremail = $request->input('useremail') ;
        $movieorder->name = $request->input('name');
        $movieorder->email = $request->input('email');
        $movieorder->date = $request->input('date');
        $movieorder->phone = $request->input('phone');
        $movieorder->cineplex = $request->input('cineplex');
        $movieorder->price = $request->input('price');
        $movieorder->qty = $request->input('seat');

        $save = $movieorder->save();
    if ($save){
            return redirect()->route('moviepayment.create')->with('success','Successfully Place Your Order. For Purchase Your Ticket Please Complete Your Payment');
    }
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $balance
     * @return \Illuminate\Http\Response
     */
    public function show(Movieorder $movieorder)
    {
        return view('admin.movieorders.show',compact('movieorder'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $balance
     * @return \Illuminate\Http\Response
     */
    public function edit(Movieorder $movieorder)
    {
        return view('admin.movieorders.edit',compact('movieorder'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentRequest  $request
     * @param  \App\Models\Payment  $balance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movieorder $movieorder)
    {
        $request->validate([
            'useremail' => 'required',
            'name' => 'required',
            'email' => 'required',
            'date' => 'required',
            'phone' => 'required',
            'cineplex' => 'required',
            'price' => 'required',
            'seat' =>'required',
        ]);
        $movieorder->fill($request->post())->save();
        return redirect()->route('movieorders.index')->with('success','Movie Order Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $balance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movieorder $movieorder)
    {
        $movieorder->delete();
        return redirect()->route('movieorders.index')->with('success','Movie Order has been deleted successfully');
    }
}
