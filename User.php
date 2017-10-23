<?php

namespace vendor\samirmember\components;

use Yii;
use yii\web\User as BaseUser;

class User extends BaseUser
{
    /* By Samir */
    public $activateUser = false;

    public $enableGeneratingPassword = false;
    
    public function getIsAdmin()
    {
        $user = \dektrium\user\models\User::findOne(Yii::$app->user->id);
        return ($user) ? in_array($user->username, Yii::$app->modules['user']->admins) : false;
    }

    public function can($permissionName, $params = [], $allowCaching = true)
    {
        if ($this->isAdmin) return true;
        return parent::can($permissionName, $params = [], $allowCaching = true);
    }
}