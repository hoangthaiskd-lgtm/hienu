<?php
namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PostPolicy {
    // Admin thì được quyền làm mọi thứ
    public function before(User $user, string $ability): bool|null {
        return $user->is_admin ? true : false;
    }

    // Ai cũng xem được danh sách
    public function viewAny(User $user): bool {
        return false;
    }

    // Ai cũng xem được những bài đã publish, bài nào chưa publish chỉ tác giả mới xem được
    public function view(User $user, Post $post): bool {
        return false;
    }

    // User đã login tạo mới bài viết
    public function create(User $user): bool {
        return false;
    }

    // Chỉ có tác giả chủ bài viết mới được sửa
    public function update(User $user, Post $post): bool {
        return false;
    }

    // Chỉ có tác giả chủ bài viết mới được xóa
    public function delete(User $user, Post $post): bool {
        return false;
    }

    // Chỉ có tác giả chủ bài viết mới được restore
    public function restore(User $user, Post $post): bool {
        return false;
    }

    // Chỉ có tác giả chủ bài viết mới được xóa vĩnh viễn
    public function forceDelete(User $user, Post $post): bool {
        return false;
    }
}