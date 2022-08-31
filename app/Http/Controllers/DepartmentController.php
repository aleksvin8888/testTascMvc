<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveDepartmentRequest;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    public function index()
    {
        $departments = Department::with('users')
            ->withCount('users')
            ->get();

        return view('department.index', compact('departments'));
    }


    public function create()
    {
        return view('department.create');
    }


    public function store(SaveDepartmentRequest $request)
    {
        $data = $request->validated();

        $department = Department::create($data);

        if($department) {
            return redirect()->route('departments.index')
                ->with('success', 'Департамент ' . $department->title . ' створено успішно.');
        } else {
            return back()->withErrors(['msd' => 'Помилка збереження.'])
                ->withInput();
        }
    }


    public function show(Department $department)
    {
        $department->loadCount('users');

        return view("department.show", compact('department'));
    }


    public function edit(Department $department)
    {
        return view('department.edit', compact('department'));
    }


    public function update(SaveDepartmentRequest $request, Department $department)
    {
        $data = $request->validated();

        $department =  $department->update($data);

        if($department) {
            return redirect()->route('departments.index')
                ->with('success', 'Департамент відредаговано успішно.');
        } else {
            return back()->withErrors(['msd' => 'Помилка збереження.'])
                ->withInput();
        }

    }

    public function DepartmentModalAjaxDelete(Department $department)
    {
        $department->loadCount('users');

        return view('department.delete', compact('department'));
    }


    public function destroy(Department $department)
    {
        $department->delete();

        return redirect()->route('departments.index')
            ->with('success', 'Департамент видалено');

    }
}
