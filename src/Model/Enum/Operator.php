<?php

namespace Phpackage\Autodns\Model\Enum;

interface Operator
{
    const EQUAL = 'EQUAL';
    const NOT_EQUAL = 'NOT_EQUAL';
    const NOT_LIKE = 'NOT_LIKE';
    const LIKE = 'LIKE';
    const ILIKE = 'ILIKE';
    const GREATER = 'GREATER';
    const GREATER_EQUAL = 'GREATER_EQUAL';
    const LESS = 'LESS';
    const LESS_EQUAL = 'LESS_EQUAL';
    const IS_NULL = 'IS_NULL';
    const IS_NOT_NULL = 'IS_NOT_NULL';
    const IN = 'IN';
}
