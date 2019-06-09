<?php

namespace Phpackage\Autodns\Model;

interface CancelationStatusConstants
{
    const DELETE = 'DELETE';
    const DELETE_EXPIRE = 'DELETE_EXPIRE';
    const TRANSIT = 'TRANSIT';
    const TRANSIT_EXPIRE = 'TRANSIT_EXPIRE';
    const PREACK = 'PREACK';
    const PREACK_EXPIRE = 'PREACK_EXPIRE';
}
