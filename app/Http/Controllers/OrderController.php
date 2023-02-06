<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrdersCollection;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function getOrders()
    {
        $orders = Order::all();
        if (!$orders) {
            return response()->json([
                'status' => false,
                'message' => 'Could not get the data'
            ]);
        } else {
            return response()->json([
                'status' => true,
                'data' => OrdersCollection::collection($orders)
            ]);
        }
    }
}
