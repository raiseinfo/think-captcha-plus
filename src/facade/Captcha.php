<?php

namespace raiseinfo\captcha\facade;

use think\Facade;

/**
 * Class Captcha
 * @package think\captcha\facade
 * @mixin \raiseinfo\captcha\Captcha
 */
class Captcha extends Facade
{
    protected static function getFacadeClass()
    {
        return \raiseinfo\captcha\Captcha::class;
    }
}
