<?php

namespace Phpackage\Autodns\Model\Enum;

final class StatusType
{
    const SUCCESS = 'SUCCESS';
    const ERROR = 'ERROR';
    const NOTIFY = 'NOTIFY';
    const NOTICE = 'NOTICE';
    const NICCOM_NOTIFY = 'NICCOM_NOTIFY';

    private function __construct()
    {
    }
}
