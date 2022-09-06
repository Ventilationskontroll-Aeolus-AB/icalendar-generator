<?php

namespace Spatie\IcalendarGenerator\Enums;

use Spatie\Enum\Enum;

/**
 * @method static self individual()
 * @method static self group()
 * @method static self resource()
 * @method static self room()
 * @method static self unknown()
 * @method static self xname()
 * @method static self ianatoken()
 */
class CalendarUserType extends Enum
{
    protected static function values(): array
    {
        return [
            'individual' => 'INDIVIDUAL',
            'group' => 'GROUP',
            'resource' => 'RESOURCE',
            'room' => 'ROOM',
            'unknown' => 'UNKNOWN',
            'xname' => 'x-name ',
            'ianatoken' => 'iana-token',
        ];
    }
}

