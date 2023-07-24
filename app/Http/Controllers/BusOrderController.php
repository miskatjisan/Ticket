<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Busorder;
use Auth;

class BusOrderController extends Controller
{
    public function index()
    {
        $busorders = Busorder::orderBy('id','desc')->paginate(5);
        return view('admin.busorders.index', compact('busorders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Create()
    {
        $data =Auth::user();
        // $total = Busorder::where('useremail', $data->email)->where('status', 0 )->sum('(price*qty)');
        return view('user.bookingbus', compact('data'));
        
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
            'from' => 'required',
            'to' => 'required',
            'price' => 'required',
            'seat' =>'required',
        ]);
        
        $busorder = new Busorder;
        $busorder->useremail = $request->input('useremail') ;
        $busorder->name = $request->input('name');
        $busorder->email = $request->input('email');
        $busorder->date = $request->input('date');
        $busorder->phone = $request->input('phone');
        $busorder->from = $request->input('from');
        $busorder->to = $request->input('to');
        $busorder->price = $request->input('price');
        $busorder->seat = $request->input('seat');

        $save = $busorder->save();
    if ($save){
            return redirect()->route('buspayment.create')->with('success','Successfully Place Your Order. For Purchase Your Ticket Please Complete Your Payment');
    }
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $balance
     * @return \Illuminate\Http\Response
     */
    public function show(Busorder $busorder)
    {
        return view('admin.busorders.show',compact('busorder'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $balance
     * @return \Illuminate\Http\Response
     */
    public function edit(Busorder $busorder)
    {
        return view('admin.busorders.edit',compact('busorder'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentRequest  $request
     * @param  \App\Models\Payment  $balance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Busorder $busorder)
    {
        $request->validate([
            'useremail' => 'required',
            'name' => 'required',
            'email' => 'required',
            'date' => 'required',
            'phone' => 'required',
            'from' => 'required',
            'to' => 'required',
            'price' => 'required',
            'seat' =>'required',
        ]);
        $busorder->fill($request->post())->save();
        return redirect()->route('busorders.index')->with('success','Bus Order Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $balance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Busorder $busorder)
    {
        $busorder->delete();
        return redirect()->route('busorders.index')->with('success','Bus Order has been deleted successfully');
    }
}
