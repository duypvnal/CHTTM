<?php

namespace App\Http\Controllers;

use App\Models\JobPosition;
use App\Models\Skill;
use App\Models\User;
use App\Models\UserRequirement;
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
}
