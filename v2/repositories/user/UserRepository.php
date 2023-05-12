<?php

declare(strict_types=1);

namespace app\modules\auth\v2\repositories\user;

use app\modules\auth\v2\domain\proxies\User;
use app\traits\SingletonTrait;

class UserRepository
{
    use SingletonTrait;

    public function getByEmailAndPassword(string $email, string $password): ?User
    {
        /** @var User|null $user */
        $user = User::findOne([
            'email' => $email,
            'deleted_at' => null
        ]);

        return $user;
    }
}