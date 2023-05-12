<?php

declare(strict_types=1);

namespace app\modules\auth\v2\application\senders\authCode\services;

use app\modules\auth\v2\application\senders\authCode\interfaces\AuthCodeSenderStrategyInterface;
use app\modules\auth\v2\domain\entities\AbstractAccessToken;
use app\modules\auth\v2\domain\proxies\User;

class AuthCodeSenderService
{
    public function send(AuthCodeSenderStrategyInterface $strategy, User $user, AbstractAccessToken $token): void
    {
        $strategy->send($user, $token);
    }
}
