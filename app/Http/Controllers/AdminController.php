<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Crypt;
use App\Admin;
use App\Gender;
use App\Status;
use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('moderator.home');
    }

    public function create()
    {
        $genderList = Gender::orderBy('id')->get();
        $statusList = Status::where('name', 'Active')
                            ->orWhere('name', 'Deactive')
                            ->orderBy('id')
                            ->get();
        return view('admin.employee.add-employee')
                ->with('genderList', $genderList)
                ->with('statusList', $statusList);
    }

    public function store(AdminRequest $request)
    {
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->uname = $request->uname;
        $admin->email = $request->email;
        $admin->password = Crypt::encryptString($request->pass);
        $admin->phone1 = $request->contact1;
        $admin->phone2 = $request->contact2;
        $admin->gender = $request->gender;
        $admin->dob = $request->dob;
        $admin->address = $request->address;
        $admin->join_date = date('Y-m-d');
        $admin->role = $request->role;
        $admin->status = $request->status;
        $file = $request->file('photo');
        $fileName = $admin->uname.".".$file->getClientOriginalExtension();
        $admin->photo = 'admin/'.$fileName;
        if ($admin->save() == 1) {
            $file->move('images/admin', $fileName);
        }
        return redirect()->route('admin.all');
    }

    public function show($id, Request $request)
    {
        $admin = DB::table('view_admin')
                ->where('id', $id)
                ->first();
        return view('admin.employee.delete-employee')
                ->with('admin', $admin);
    }

    public function edit($id, Request $request)
    {
        $statusList = Status::where('name', 'Active')
            ->orWhere('name', 'Deactive')
            ->orderBy('id')
            ->get();
        $admin = Admin::find($id);
        return view('admin.employee.update-employee')
            ->with('admin', $admin)
            ->with('statusList', $statusList);
    }

    public function update(Request $request)
    {
        $admin = Admin::find($request->id);
        $admin->role = $request->role;
        $admin->status = $request->status;
        $admin->save();
        return redirect()->route('admin.all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }

    public function all(Request $request)
    {
        $adminList = DB::table('view_admin')->get();
        return view('admin.employee.employee-list')
            ->with('adminList', $adminList);
    }

    public function profile(Request $request)
    {
        $genderList = Gender::all();
        $admin = Admin::find($request->session()->get('loggedMod'));
        return view('moderator.profile')
                ->with('admin', $admin)
                ->with('genderList', $genderList);
    }

    public function updateProfile(UpdateAdminRequest $request)
    {
        $admin = Admin::find($request->session()->get('loggedMod'));
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->phone1 = $request->phone1;
        $admin->phone2 = $request->phone2;
        $admin->gender = $request->gender;
        $admin->dob = $request->dob;
        $admin->address = $request->address;
        if ($request->file('photo') != null){
            $file = $request->file('photo');
            $fileName = $admin->uname.".".$file->getClientOriginalExtension();
            $admin->photo = 'admin/'.$fileName;
            $file->move('images/admin', $fileName);
        }
        $admin->save();
        return redirect()->route('admin.profile');
    }

    public function editPassword(Request $request)
    {
        return view('moderator.password');
    }

    public function updatePassword(PasswordRequest $request)
    {
        $admin = Admin::find($request->session()->get('loggedMod'));
        if (Crypt::decryptString($admin->password) == $request->cPass){
            $admin->password = Crypt::encryptString($request->newPass);
            $admin->save();
            $request->session()->flash('msg', "Password changed successfully");
        }
        else{
            $request->session()->flash('msg', "Wrong password");
        }
        return redirect()->route('admin.password');
    }
}
