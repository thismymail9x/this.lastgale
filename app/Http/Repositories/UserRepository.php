<?php


namespace App\Http\Repositories;


use App\House;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserRepository
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    function store($data)
    {
        $data->save();
        \auth()->login($data);
    }

    function loginHandling($user)
    {
        return Auth::attempt($user);
    }

    public function finById($id)
    {
        return $this->user->findOrFail($id);
    }

    function findUserByEmail($email)
    {
        return $this->user->whereEmail($email)->first();
    }

    public function findHouseByUserId($userId)
    {
        return House::where('user_id', '=', $userId)->paginate(6);

    }
}
