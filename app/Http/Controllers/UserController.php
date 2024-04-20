<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CurrentJob;
use App\Models\JobPosition;
use App\Models\Skill;
use App\Models\User;
use App\Models\UserRequirement;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends BaseApiController
{
    public function index(): JsonResponse
    {
        $users = User::all();

        return response()->json([
            'data' => $users,
        ], 200);
    }

    public function show($id)
    {
        $user = User::with(['userRequirements', 'userInfor'])->find($id);

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

    public function saveUserRequirements(Request $request): JsonResponse
    {
        $data = $request->all();
        if (UserRequirement::updateOrInsert($data)) {
            return response()->json([
                'success' => true,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
            ], 200);
        }
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
        $jobSuggests = CurrentJob::where('due_date', '>', Carbon::now())->with(['company'])->inRandomOrder()->get();

        return response()->json([
            'data' => $jobSuggests,
        ], 200);
    }
}
