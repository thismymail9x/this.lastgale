<?php


namespace App\Http\Services;


use App\Http\Repositories\OrderRepository;
use App\Order;

class OrderService
{
    protected $orderRepository;

    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function store($orderRequest)
    {
        $newOrder = new Order();
        $newOrder->arrival_date = $orderRequest->arrival_date;
        $newOrder->departure_date = $orderRequest->departure_date;
        $newOrder->user_id = $orderRequest->user_id;
        $newOrder->house_id = $orderRequest->house_id;
        // cover date to amount.
        $newOrder->total_price = $orderRequest->total_price;
        $this->orderRepository->store($newOrder);
    }

    public function getAllOfHouse($id)
    {
        return $this->orderRepository->getAllOfHouse($id);
    }

    public function getByIdUser($id){
       return $orders = $this->orderRepository->findByIdUser($id);
    }

    public function getById($id){
        return $order = $this->orderRepository->findById($id);
    }

    function updateStatus() {
        foreach ($this->orderRepository->getAll() as $order) {
            if ($order->departure_date < date('Y-m-d')) {
                $this->orderRepository->updateStatus($order);
            }
        }
    }

    function search($startDate, $endDate) {
        return $this->orderRepository->search($startDate, $endDate);
    }
}
