<?php

namespace Phpackage\Autodns\Model\Enum;

final class NameserverActionConstants
{
    const PRIMARY = 'PRIMARY';
    const SECONDARY = 'SECONDARY';
    const COMPLETE = 'COMPLETE';
    const HIDDEN = 'HIDDEN';
    const NONE = 'NONE';
    const AUTO = 'AUTO';

    private function __construct()
    {
    }
}
