<?php


namespace App\Http\Services;


use App\Http\Repositories\UserRepository;
use App\Mail\ResetPasswordMail;
use App\User;
use Brian2694\Toastr\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;


class UserService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    function store($userRequest)
    {
        $data = new User();
        $data->name = $userRequest->name;
        $data->email = $userRequest->email;
        $data->password = Hash::make($userRequest->password);
        $data->phone = $userRequest->phone;
        $image = $userRequest->image->store('image', 'public');
        $data->image = $image;
        $this->userRepository->store($data);
    }

    function loginHandling($equest)
    {
        $user = [
            'email' => $equest->email,
            'password' => $equest->password
        ];
        return $this->userRepository->loginHandling($user);
    }

    public function findById($id)
    {
        return $this->userRepository->finById($id);
    }

    public function changePassword($oldUser, $request)
    {
        $user = [
            'email' => $oldUser->email,
            'password' => $request->oldPassword
        ];

        if (Auth::attempt($user)) {
            $oldUser->password = Hash::make($request->password);
            if ($request->password == $request->repeatPassword) {
                $this->userRepository->store($oldUser);
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }

    }


    public function update($request, $user)
    {
        $user->name = $request->name;
        $user->phone = $request->phone;
        if ($request->hasFile('image')) {
            $currentImage = $user->image;
            if ($currentImage) {
                Storage::delete('/public/' . $currentImage);
            }
            $image = $request->file('image');
            $path = $image->store('users/images', 'public');
            $user->image = $path;
        }
        $this->userRepository->store($user);
        return true;
    }


    function sendEmailResetPassword($request)
    {
        $email = $request->email;
        $user = $this->userRepository->findUserByEmail($email);
        if ($user == null) {
            return false;
        }
        $id = $user->id;
        $data = [
            'id' => $id,
            'title' => 'Reset password',
            'body' => 'Click link path to reset password.'
        ];
        Mail::to($email)->send(new ResetPasswordMail($data));
        return true;
    }

    function resetPassword($id, $request)
    {
        $user = $this->userRepository->finById($id);
        $password = $request->password;
        $confirmPassword = $request->confirmPassword;
        if ($password == $confirmPassword) {
            $user->password = Hash::make($password);
            $this->userRepository->store($user);
            return true;
        }
        return false;
    }

    public function findHouseByUserId($userId)
    {
        return $this->userRepository->findHouseByUserId($userId);
    }
}
