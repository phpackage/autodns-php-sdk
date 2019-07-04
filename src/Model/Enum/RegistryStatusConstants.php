<?php

namespace Phpackage\Autodns\Model\Enum;

interface RegistryStatusConstants
{
    const ACTIVE = 'ACTIVE';
    const HOLD = 'HOLD';
    const LOCK = 'LOCK';
    const HOLD_LOCK = 'HOLD_LOCK';
    const AUTO = 'AUTO';
    const LOCK_OWNER = 'LOCK_OWNER';
    const LOCK_UPDATE = 'LOCK_UPDATE';
    const PENDING = 'PENDING';
    const NONE = 'NONE';
}
