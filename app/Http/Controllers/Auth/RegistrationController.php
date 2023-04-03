<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegistrationController extends Controller
{
public function showRegistrationForm()
{
return view('register');
}

public function register(Request $request)
{
$request->validate([
'username' => 'required|string|max:255|unique:users',
'password' => 'required|string|min:8|confirmed',
]);

$user = new User([
'username' => $request->username,
'password' => bcrypt($request->password),
]);

$user->save();

Auth::login($user);

return redirect()->route('home');
}
}
?>
