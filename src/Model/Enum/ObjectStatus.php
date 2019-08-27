<?php

namespace Phpackage\Autodns\Model\Enum;

final class ObjectStatus
{
    const SPOOL = 'SPOOL';
    const REQUEST = 'REQUEST';
    const PENDING_NOTIFY = 'PENDING_NOTIFY';
    const PENDING = 'PENDING';
    const FAILED = 'FAILED';
    const SUCCESS = 'SUCCESS';
    const PENDING_DOMAIN = 'PENDING_DOMAIN';
    const CONNECT = 'CONNECT';

    private function __construct()
    {
    }
}
