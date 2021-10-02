<?php

namespace App\Repositories\Admin;

use App\Models\DeleteAccountRequest;
use App\Models\User;

class AdminRepository
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getAllUsers()
    {
        return User::all();
    }

    public function getAllAccountDeleteRequest()
    {
        return DeleteAccountRequest::all();
    }

    public function getUsersById($id)
    {
        return User::findOrFail($id);
    }

    public function getAccountDeleteRequestById($id)
    {
        return DeleteAccountRequest::findOrFail($id);
    }

    public function getAccountDeleteRequestEnd($data,$id)
    {
        $RequestToEnded =  $this->getAccountDeleteRequestById($id);

        if($data['request_status']=='accepted'){
            $DeleteUser =$this->getUsersById($RequestToEnded->user_id);
            $data['answer'] = $data['answer']." Username = $DeleteUser->username";
            $data = array_merge($data, ['user_id' => 1]);
            $RequestToEnded->update($data);
            $this->DestroyUser($DeleteUser);
        }
    }

    public function DestroyUser(User $user)
    {
        $user->delete();
    }
}
