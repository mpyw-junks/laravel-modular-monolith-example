<?php

namespace Packages\Member\Internal\Models;

use Illuminate\Database\Eloquent\Model;

// このパッケージ内では Member モデルを直接使用して OK
// 外から触るときだけ必ず Repository を通じて Entity として取得するようにする
/**
 * @property int $id
 * @property string $name
 * @property \Carbon\CarbonInterface $created_at
 * @property \Carbon\CarbonInterface|null $updated_at
 */
class Member extends Model
{
    protected $casts = [
        'name' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
