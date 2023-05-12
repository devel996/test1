<?php

declare(strict_types=1);

namespace app\modules\auth\v2\fixtures;

use app\modules\auth\v2\domain\proxies\User;
use yii\test\ActiveFixture;

class UserFixture extends ActiveFixture
{
    /** @phpstan-ignore-next-line */
    public $modelClass = User::class;
}