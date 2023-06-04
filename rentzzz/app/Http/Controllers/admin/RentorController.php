<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class RentorController extends Controller
{
    public function index()
    {
        $rentors = User::all();
        return view('admin.rentors', compact('rentors'));
    }
//  public function index()
// {
//     $lessors = Lesson::all();
//     return view('admin.lessorsadmin', compact('lessors'));
// }
    // public function create()
    // {
    //     return view('admin.rentors.create');
    // }

    // public function store(Request $request)
    // {
    //     $rentor = new User($request->all());
    //     $rentor->save();
    //     return redirect()->route('rentors');
    // }

    // public function edit(User $rentor)
    // {
    //     return view('admin.rentors.edit', compact('rentor'));
    // }

    // public function update(Request $request,User $rentor)
    // {
    //     $rentor->update($request->all());
    //     return redirect()->route('rentors');
    // }

    // public function destroy(User $rentor)
    // {
    //     $rentor->delete();
    //     return redirect()->route('rentors');
    // }

}

