<?php


namespace App\Http\Repositories;


use App\House;
use App\Order;

class OrderRepository
{
    protected $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    function getAll()
    {
        return $this->order->all();
    }

    public function store($newOrder)
    {
        $newOrder->save();
    }


    public function getAllOfHouse($id)
    {

        return Order::where('house_id', '=', $id)->get();
    }

    public function findByIdUser($id)
    {
        return $orders = Order::where('user_id', '=', $id)->get();
    }

    public function findById($id)
    {
        return $order = Order::query()->findOrFail($id);
    }

    function updateStatus($order)
    {
        $order->status = 'Completed';
        $order->save();
    }

    function search($startDate, $endDate)
    {
        if ($startDate == null || $endDate == null) {
            return [];
        }
        return $this->order->where([
            ['status', '=', 'Confirmed'],
            ['arrival_date', '>', $startDate],
            ['departure_date', '<', $endDate],
        ])->orWhere([
            ['status', '=', 'Confirmed'],
            ['arrival_date', '<', $startDate],
            ['departure_date', '>', $startDate]
        ])->orWhere([
            ['status', '=', 'Confirmed'],
            ['arrival_date', '<', $endDate],
            ['departure_date', '>', $endDate]
        ])->orWhere([
            ['status', '=', 'Confirmed'],
            ['arrival_date', '<', $startDate],
            ['departure_date', '>', $startDate]
        ])->orWhere([
            ['status', '=', 'Confirmed'],
            ['arrival_date', '=', $startDate]
        ])->orWhere([
            ['status', '=', 'Confirmed'],
            ['departure_date', '=', $startDate]
        ])->get();
    }
}

