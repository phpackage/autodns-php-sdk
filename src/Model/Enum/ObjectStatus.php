<?php

namespace Phpackage\Autodns\Model\Enum;

interface ObjectStatus
{
    const SPOOL = 'SPOOL';
    const REQUEST = 'REQUEST';
    const PENDING_NOTIFY = 'PENDING_NOTIFY';
    const PENDING = 'PENDING';
    const FAILED = 'FAILED';
    const SUCCESS = 'SUCCESS';
    const PENDING_DOMAIN = 'PENDING_DOMAIN';
    const CONNECT = 'CONNECT';
}
