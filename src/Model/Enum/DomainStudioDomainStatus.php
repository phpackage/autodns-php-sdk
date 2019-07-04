<?php

namespace Phpackage\Autodns\Model\Enum;

abstract class DomainStudioDomainStatus
{
    const FREE = 'FREE';
    const ASSIGNED = 'ASSIGNED';
    const MARKET = 'MARKET';
    const PREMIUM = 'PREMIUM';
    const INVALID = 'INVALID';
    const ERROR = 'ERROR';
    const TIMEOUT = 'TIMEOUT';
}
