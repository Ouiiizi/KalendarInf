<?php
namespace App\Http\Controllers;
use App\Models\Events;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
public function store(Request $request)
{
$validatedData = $request->validate([
'activity' => 'required',
'description' => 'required',
'created_at' => 'required|date',
]);

$activity = new Activity;
$activity->activity = $validatedData['title'];
$activity->description = $validatedData['about'];
$activity->created_at = $validatedData['date'];
$activity->save();

return redirect('/')->with('success', 'Activity added successfully.');
}
}
?>
