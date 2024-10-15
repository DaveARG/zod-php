<?php

namespace DaveARG\Zod;

use DaveARG\Zod\Schemas\NumberSchema;
use DaveARG\Zod\Schemas\ObjectSchema;
use DaveARG\Zod\Schemas\StringSchema;

class Zod
{
    public static function object($schema = [])
    {
        return ObjectSchema::make($schema);
    }

    public static function string()
    {
        return StringSchema::make();
    }

    public static function number()
    {
        return NumberSchema::make();
    }
}
