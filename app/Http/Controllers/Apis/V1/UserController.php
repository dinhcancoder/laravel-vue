<?php

namespace App\Http\Controllers\Apis\V1;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller {
	protected $userService;
	public function __construct(UserService $userService) {
		$this->userService = $userService;
	}

	/**
	 * @OA\Get(
	 *     path="/api/v1/users",
	 *     tags={"Users"},
	 *     summary="Get all users with their roles",
	 *     description="Returns a list of all users along with their roles",
	 *     @OA\Response(
	 *         response=200,
	 *         description="Successful response",
	 *         @OA\JsonContent(
	 *             type="array",
	 *             @OA\Items(
	 *                 @OA\Property(property="id", type="integer", example=1),
	 *                 @OA\Property(property="name", type="string", example="John Doe"),
	 *                 @OA\Property(property="email", type="string", example="john.doe@example.com"),
	 *                 @OA\Property(property="created_at", type="string", format="date-time", example="2023-01-01T00:00:00.000000Z"),
	 *                 @OA\Property(property="updated_at", type="string", format="date-time", example="2023-01-01T00:00:00.000000Z"),
	 *                 @OA\Property(
	 *                     property="role",
	 *                     type="object",
	 *                     @OA\Property(property="id", type="integer", example=1),
	 *                     @OA\Property(property="name", type="string", example="admin"),
	 *                     @OA\Property(property="description", type="string", example="Đây là mô tả")
	 *                 )
	 *             )
	 *         )
	 *     ),
	 *     @OA\Response(
	 *         response=500,
	 *         description="Internal Server Error",
	 *         @OA\JsonContent(
	 *             @OA\Property(property="message", type="string", example="Internal Server Error")
	 *         )
	 *     )
	 * )
	 */
	public function index() {
		return $this->userService->getAllUser();
	}
}
