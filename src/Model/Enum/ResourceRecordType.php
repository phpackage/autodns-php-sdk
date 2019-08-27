<?php

namespace Phpackage\Autodns\Model\Enum;

final class ResourceRecordType
{
    const A = 'A';
    const MX = 'MX';
    const CNAME = 'CNAME';
    const TXT = 'TXT';
    const SRV = 'SRV';
    const PTR = 'PTR';
    const AAAA = 'AAAA';
    const NS = 'NS';
    const CAA = 'CAA';
    const PROCEED_MUC = 'PROCEED_MUC';
    const TLSA = 'TLSA';
    const NAPTR = 'NAPTR';
    const SSHFP = 'SSHFP';
    const LOC = 'LOC';
    const RP = 'RP';
    const HINFO = 'HINFO';
    const PROCEED = 'PROCEED';
    const ALIAS = 'ALIAS';
    const DNSKEY = 'DNSKEY';
    const NSEC = 'NSEC';
    const DS = 'DS';

    private function __construct()
    {
    }
}
