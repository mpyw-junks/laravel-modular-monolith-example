<?php

namespace Packages\Member;

use Carbon\CarbonInterface;

// パッケージ外で使う前提
class Member
{
    public function __construct(
        public int $id,
        public string $name,
        public CarbonInterface $created_at,
        public ?CarbonInterface $updated_at,
    )
    {
    }
}
