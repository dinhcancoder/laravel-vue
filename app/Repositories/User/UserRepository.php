<?php 

namespace App\Repositories\User;

use App\Repositories\User\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface {
    public function all() {
        return User::with('role')->get();
    }
    public function find($id) {
        
    }
    public function create(array $data) {
        return User::create($data);
    }
    public function update($id, array $data) {
        
    }
    public function delete($id) {
        
    }
}
