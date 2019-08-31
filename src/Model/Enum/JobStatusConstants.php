<?php

namespace Phpackage\Autodns\Model\Enum;

final class JobStatusConstants
{
    const RUNNING = 'RUNNING';
    const SUCCESS = 'SUCCESS';
    const FAILED = 'FAILED';
    const CANCELED = 'CANCELED';
    const SUPPORT = 'SUPPORT';
    const DEFERRED = 'DEFERRED';
    const NOT_SET = 'NOT_SET';
    const WAIT = 'WAIT';

    private function __construct()
    {
    }
}
