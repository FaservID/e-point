<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    // use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    // protected $redirectTo = '/home';

    public function reset(Request $request)
    {
        // Validate the form data
        try {
            $request->validate([
                'current_password' => 'required',
                'new_password' => 'required|min:8|confirmed',
            ], [
                'new_password.confirmed' => 'The new password and confirmation password do not match.',
            ]);
        
            // Check if the current password matches
            if (!Hash::check($request->current_password, Auth::user()->password)) {
                Alert::error('error', 'Current password does not match');
                return back()->withErrors(['current_password' => 'Current password does not match']);
            }
        
            $id = Auth::user()->id;
            $user = User::find($id);
        
            // Update the user's password
            $user->update([
                'password' => Hash::make($request->new_password),
            ]);
        
            // Redirect with success message
            Alert::success('success', 'Password updated successfully');
            return back()->with('status', 'Password updated successfully');
        } catch(\Exception $e) {
            Alert::error('error', $e->getMessage());
            return back();

        }
        
    }
    
}
