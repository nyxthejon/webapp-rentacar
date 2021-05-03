<?php
use Aws\S3\S3Client;
use Aws\Exception\AwsException;
require 'vendor/autoload.php';
$config = require('config.php');

/*
$client = new \Aws\S3\S3Client([
    'region'  => 'eu-central-1',
    'version' => 'latest',
]);

$source = 's3://rentcar-upb';

$dest = '/img';
$manager = new \Aws\S3\Transfer($client, $source, $dest);
$manager->transfer();

*/
$s3 = S3Client::factory(array(
    'key' => 'AKIAZE5W2FP77YGXVEWB',
    'secret' => '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',
    'region' => 'eu-central-1',
    'version' => 'latest',
    'profile' => 'default'

));

$objects = $s3 -> getIterator('ListObjects',array(
    'Bucket' => $config['s3']
));
var_dump($objects);

