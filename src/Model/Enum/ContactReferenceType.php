<?php

namespace Phpackage\Autodns\Model\Enum;

final class ContactReferenceType
{
    const ALL = 'ALL';
    const OWNERC = 'OWNERC';
    const ADMINC = 'ADMINC';
    const TECHC = 'TECHC';
    const ZONEC = 'ZONEC';
    const BILLINGC = 'BILLINGC';

    private function __construct()
    {
    }
}
