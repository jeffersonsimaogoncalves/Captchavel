<?php

namespace DarkGhostHunter\Captchavel;

use DarkGhostHunter\Captchavel\Http\ReCaptchaResponse;

class RequestMacro
{
    /**
     * Check if the reCAPTCHA response is equal or above threshold score.
     *
     * @return bool
     */
    public static function isHuman()
    {
        return app(ReCaptchaResponse::class)->isHuman();
    }

    /**
     * Check if the reCAPTCHA response is below threshold score.
     *
     * @return bool
     */
    public static function isRobot()
    {
        return ! static::isHuman();
    }
}