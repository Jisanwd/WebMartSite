<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Order extends Model
{
    use HasFactory;
    private static $order;
    public static function newOrder($request, $id)
    {
        self::$order  = new Order();
        self::$order->customer_id       =  $id ;
        self::$order->order_total       =  Session::get('order_total');
        self::$order->tax_total         =  Session::get('tax_total');
        self::$order->shipping_total    =  Session::get('shipping_total');
        self::$order->order_date        = date('Y-m-d');
        self::$order->order_timestamp   = strtotime(date('Y-m-d'));
        self::$order->delivery_address  = $request->delivery_address;
        self::$order->payment_method     = $request->payment_method;
        self::$order->save();
        return self::$order;
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
    public static function deleteOrder($id)
    {

        self::$order = Order::find($id);
        self::$order->delete();
    }
}
