<?php

namespace App\Http\Controllers\Admin;

use App\Business\Admin\AdminBusiness;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    private $AdminBusiness;

    public function __construct(AdminBusiness $AdminBusiness)
    {
        $this->AdminBusiness = $AdminBusiness;
    }
    public function getAdminPanel()
    {
        return view('frontend.AdminPanel.AdminPanel');
    }

    public function changeRoles()
    {
        $users = $this->AdminBusiness->getAllUsers();
        return view('frontend.AdminPanel.AdminRoles',compact('users'));
    }

    public function updateRoles(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'added' => 'required|boolean',
            'roletype' => 'required|in:admin,moderator,editor',
        ]);

        $result = ['status' => 200];
        try {
            $user = $this->AdminBusiness->getUsersById($request->user_id);
            if ($request->added==1) {
                $user->assignRole($request->roletype);
            } else {
                $user->removeRole($request->roletype);
            }
        }catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage(),
                'test'=>$request->all()
            ];
        }

        return response()->json($result,$result['status']);
    }

    public function AdminAcctDelReqIndex()
    {
        $DeleteAccountRequests = $this->AdminBusiness->getAllAccountDeleteRequest();
        return view('frontend.AdminPanel.AdminAcctDelReq',compact('DeleteAccountRequests'));
    }

    public function AdminAcctDelReqShow($id)
    {
        /*
        $ForValidation = ['id' => $id,];
        $validator = Validator::make($ForValidation, ['id' => 'required|exists:delete_account_requests,id']);
        */

        $DeleteAccountRequest = $this->AdminBusiness->getAccountDeleteRequestById($id);
        return view('frontend.AdminPanel.AdminAcctDelReqShow',compact('DeleteAccountRequest'));
    }

    public function AdminAcctDelReqUpdate(Request $request,$id)
    {
        $validated = $request->validate([
            'answer' => 'nullable|string|max:150',
            'request_status' => 'required|in:accepted,denied',
        ]);

        $this->AdminBusiness->getAccountDeleteRequestEnd($request->only('answer','request_status'),$id);
        return redirect()->route('AdminAcctDelReqIndex');
    }
}
