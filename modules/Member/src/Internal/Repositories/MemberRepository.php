<?php

namespace Packages\Member\Internal\Repositories;

use Packages\Member\Internal\Models\Member as MemberModel;
use Packages\Member\Member;
use Packages\Member\MemberRepositoryInterface;

class MemberRepository implements MemberRepositoryInterface
{
    private function toEntity(MemberModel $memberModel): Member
    {
        // 手抜き
        return new Member(...$memberModel->getAttributes());
    }

    private function fromEntity(Member $member): MemberModel
    {
        // 手抜き
        return new MemberModel(...\get_object_vars($member));
    }

    public function findById(int $id): ?Member
    {
        $member = MemberModel::query()->find($id);

        if (!$member) {
            return null;
        }

        // IDE Helper 入れたらおそらく不要
        assert($member instanceof MemberModel);

        return $this->toEntity($member);
    }
}
