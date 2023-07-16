<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UsersController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    //CREATE ROLE
    public function createRole()
    {
        $email= auth()->user()->email;
        if ($email === 'barasabrandon@gmail.com' || $email === 'domkaris@gmail.com') {
            $roleNames = ['user', 'admin'];// Replace with the desired role name
            foreach ($roleNames as $roleName) {
                Role::create(['name' => $roleName]);
            }

            $data = [
                'message' => 'Roles Created Successfully.',
                
            ];
    
            return response()->json($data);
        }           
        else{
            
            $data = [
                'message' => 'Not Authorized to perform this function',
                
            ];
    
            return response()->json($data);
           
    }
   }

   public function getUsers()
   {
    $users = User::orderBy('created_at', 'desc')->get();
    return view('dashboard.users.index')->with(['users' => $users]);
   }

   public function deleteUser($id)
   {
    $user = User::find($id);
    if ($user->hasRole('admin')){
        return redirect()->back()->with('error', 'This user has an admin role.');
    }

   }

   public function assignRole()
   {
    $userEmails = ['barasabrandon@gmail.com', 'domkaris@gmail.com'];
    $role = 'admin';
    
    foreach ($userEmails as $email) {
        $user = User::where('email', $email)->first();
        if ($user) {
            if (!$user->hasRole($role)) {
                $user->assignRole($role);
            }
        }
    }
    
    return response()->json(['message' => 'Roles assigned successfully.']);
    ;
   }
}
