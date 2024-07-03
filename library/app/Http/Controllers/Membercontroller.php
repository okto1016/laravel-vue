<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class Membercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::with('user')->get();
        return $members;
        return view('admin.member.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return view('admin.member.store');
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        return view('admin.member.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        return view('admin.member.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        return view('admin.member.update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        return view('admin.member.destroy');
    }
}
