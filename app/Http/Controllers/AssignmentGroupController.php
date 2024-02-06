<?php

namespace App\Http\Controllers;

use App\Models\AssignmentGroup;
use Illuminate\Http\Request;

class AssignmentGroupController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        return view('livewire.counter');
    }

    public function store(Request $request)
    {
    }

    public function show(AssignmentGroup $assignmentGroup)
    {
    }

    public function edit(AssignmentGroup $assignmentGroup)
    {
    }

    public function update(Request $request, AssignmentGroup $assignmentGroup)
    {
    }

    public function destroy(AssignmentGroup $assignmentGroup)
    {
    }
}
