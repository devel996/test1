<?php

declare(strict_types=1);

namespace app\modules\auth\v2\application\senders\authCode\interfaces;

use app\modules\auth\v2\domain\entities\AbstractAccessToken;
use app\modules\auth\v2\domain\proxies\User;

interface AuthCodeSenderStrategyInterface
{
    public function send(User $user, AbstractAccessToken $token): void;
}
