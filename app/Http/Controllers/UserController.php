<?php

namespace App\Http\Controllers;

use App\Models\JobPosition;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class UserController extends BaseApiController
{
    public function index(): JsonResponse
    {
        $users = User::all();

        return response()->json([
            'data' => $users,
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

}
