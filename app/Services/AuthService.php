<?php 

namespace App\Services;

use App\Repositories\User\UserRepositoryInterface;

class AuthService {
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function create($request) {
        try {
            $user = $request->validated();
            $this->userRepository->create([
                'email' => $user['email'],
                'password' => $user['password'],
                'name' => $user['name'],
                'role_id' => 3,
            ]);
            
            return response()->json(['message' => 'Đăng ký thành công'], 201);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 422);
        }
    }
}
