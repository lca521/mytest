<?php

namespace Testmy\TestKernel;


class Base
{
    protected $config = [];
    protected $type = null;
    protected $httpClient = null;
    protected $accessToken = null;

    protected $extraParams = [];

    private $thoseTypesNeedToCheckFileSystemParams = ['screenshot', 'html2pdf', 'upload'];

    private $fileSystemParams = [
        'oss' => [
            'accessId',
            'accessSecret',
            'bucket',
            'endpoint',
        ],
        'cos' => [
            'region',
            'app_id',
            'secret_id',
            'secret_key',
            'bucket',
        ],
        'qiniu' => [
            'accessKey',
            'secretKey',
            'bucket',
            'domain',
        ],
    ];

    public function __construct(array $config) {


    }



}