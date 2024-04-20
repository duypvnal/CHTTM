<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CurrentJob;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends BaseApiController
{
    const MAX_SALARY = 20000000;
    const MAX_EXPERIENCE = 3;
    const MAX_GPA = 4;

    public function index(): JsonResponse
    {
        $users = User::all();

        return response()->json([
            'data' => $users,
        ], 200);
    }

    public function show($id)
    {
        $user = User::with(['userInfor'])->find($id);

        return response()->json([
            'data' => $user,
        ], 200);
    }

    public function getAllSkills(): JsonResponse
    {
        $skills = Skill::all();
        return response()->json([
            'data' => $skills,
        ], 200);
    }

    public function getAllJobPositions(): JsonResponse
    {
        $jobs = JobPosition::all();
        return response()->json([
            'data' => $jobs,
        ], 200);
    }

    public function getCompanySuggests()
    {
        $companySuggests = Company::inRandomOrder()->take(5)->get();

        return response()->json([
            'data' => $companySuggests,
        ], 200);
    }

    public function getJobSuggests(Request $request)
    {
        $search = $request->get('search');
        $userId = $request->get('user_id');
        $salary = $request->get('salary');
        $gpa = $request->get('gpa');
        $experience = $request->get('experience');
        $user = User::with('userInfor')->find($userId);

        $query = CurrentJob::query();
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        }
        $jobSuggests = $query->with(['company'])->inRandomOrder()->get();
        return response()->json([
            'data' => $jobSuggests,
        ], 200);
    }
}
