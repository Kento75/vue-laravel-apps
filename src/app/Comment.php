<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /** JSONに含める情報 */
    protected $visible = [
        "author", "content",
    ];

    /**
     * リレーションシップ usersテーブル
     */
    public function author()
    {
        return $this->belongsTo("App\User", "user_id", "id", "users");
    }
}
