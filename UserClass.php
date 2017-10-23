<?php
/*
 *
 * By Samir IZZA <samirmember@gmail.com>
 *
 */
namespace vendor\samirmember\components;

use Yii;
use dektrium\user\models\User as BaseUser;

class UserClass extends BaseUser
{

    // public function getIsClub()
    // {
    //     $id = Yii::$app->user->id;
    //     $user = \common\models\User::findOne($id);
    //     if (!$user->userType) return false;
    //     $club = \backend\models\Club::findOne($user->userType->id_club);
    //     return ($club) ? true : false;
    // }


}