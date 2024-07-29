<?php 

namespace App\Services;

use App\Repositories\User\UserRepositoryInterface;

class UserService {
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function getAllUser() {
        try {
            $users = $this->userRepository->all();
            return response()->json($users, 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 422);
        }
    }
}
