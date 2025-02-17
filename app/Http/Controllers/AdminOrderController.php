<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use PDF;

class AdminOrderController extends Controller
{
    private $order;
    public function index()
    {
        return view('admin.order.index',[
            'orders'=> Order::orderBy('id', 'desc')->get(),
        ]);
    }
    public function detail($id)
    {
        return view('admin.order.detail',['order' => Order::find($id)]);
    }
    public function invoice($id)
    {
        return view('admin.order.invoice', ['order' => Order::find($id)]);
    }
    public function printOrder($id)
    {
        $pdf = PDF::loadView('admin.order.print', ['order' => Order::find($id)]);
        return $pdf->stream('invoice-No'.$id.'.pdf');
    }
    public function edit($id)
    {
        return view('admin.order.edit', ['order' => Order::find($id)]);
    }
    public function update(Request $request, $id)
    {
        $this->order = Order::find($id);
        if ($request->order_status == 'Pending')
        {

        }
        else if ($request->order_status == 'Processing')
        {
            $this->order->order_status =  'Processing';
            $this->order->delivery_address = $request->delivery_address;
            $this->order->delivery_status =  'Processing';
            $this->order->payment_status =  'Processing';
            $this->order->save();
        }
        else if ($request->order_status == 'Complete')
        {
            $this->order->order_status =  'Complete';
            $this->order->delivery_address = $request->delivery_address;
            $this->order->delivery_status =  'Complete';
            $this->order->delivery_date = date('y-m-d');
            $this->order->delivery_timestamp =  strtotime(date('y-m-d'));
            $this->order->payment_status =  'Complete';
            $this->order->payment_date = date('y-m-d');
            $this->order->payment_timestamp =  strtotime(date('y-m-d'));
            $this->order->save();
        }
        else if ($request->order_status == 'Cancel')
        {
            $this->order->order_status =  'Cancel';
            $this->order->delivery_status =  'Cancel';
            $this->order->payment_status =  'Cancel';
            $this->order->save();
        }
        return redirect('/admin/manage-order')->with('message','Your Order Update Successfully');
    }
    public function delete($id)
    {
        Order::deleteOrder($id);
        OrderDetail::deleteOrderDetail($id);
        return redirect('/admin/manage-order')->with('message','Your Order Delete Successfully');
    }


}
