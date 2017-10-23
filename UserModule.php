<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace vendor\samirmember\components;

use yii\base\Module as ModuleUser;


/**
 * This is the main module class for the Yii2-user.
 *
 * @property array $modelMap
 *
 * @author Dmitry Erofeev <dmeroff@gmail.com>
 */
class UserModule extends ModuleUser
{
    public $enableUnconfirmedLogin = false;

    public $confirmWithin = 86400; // 24 hours

    public $cost = 10;

    public $admins = [];

    public $urlPrefix = 'user';
}
