<?php

namespace App\Http\Controllers;

use App\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $statusList = Status::orderBy('id')->get();
        return view('admin.status.status-list')
                ->with('statusList', $statusList);
    }

    public function create()
    {
        return view('admin.status.add-status');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'bail | required | unique:tbl_statuses,name',
        ]);
        $status = new Status();
        $status->name = $request->name;
        $status->save();
        return redirect()->route('status.index');
    }

    public function show(Request $request)
    {
        $status = Status::find($request->id);
        return view('admin.status.delete-status')
            ->with('status', $status);
    }

    public function edit($id, Status $status)
    {
        $status = Status::find($id);
        return view('admin.status.update-status')
                ->with('status', $status);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'bail | required | unique:tbl_statuses,name',
        ]);
        $status = Status::find($request->id);
        $status->name = $request->name;
        $status->save();
    }

    public function destroy(Status $status)
    {
        //
    }
}
