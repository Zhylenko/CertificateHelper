<?php

namespace CertificateHelper\Contracts;

interface ICertificateHelper
{
    public function __construct(string $url);

    public function setURL(string $url) : self;

    public function getURL() : string;

    public function getValidFromDate(string $format = DATE_RFC822): string;

    public function getValidToDate(string $format = DATE_RFC822): string;

    public function getCertificateInfo(float $timeout = 10) : array;

    public function parseHost(string $url): string;
}
