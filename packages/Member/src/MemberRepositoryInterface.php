<?php

namespace Packages\Member;

// パッケージ外で使う前提
interface MemberRepositoryInterface
{
    public function findById(int $id): ?Member;
}
