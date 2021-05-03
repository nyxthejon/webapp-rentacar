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
$s3Client = new S3Client([
    'region' => 'eu-central-1',
    'version' => 'latest',
    'credentials' => [
    'key' => 'AKIAZE5W2FP77YGXVEWB',
        'secret' => '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'
        ],

]);

$buckets = $s3Client->listBuckets();
foreach ($buckets['Buckets'] as $bucket) {
}

// Where the files will be sourced from
$source = 's3://'.$bucket['Name'];

// Where the files will be transferred to
$dest = 'C:\xampp\htdocs\webapp\img';

$manager = new \Aws\S3\Transfer($s3Client, $source, $dest);
$manager->transfer();
/*

$objects = $s3 -> getIterator('ListObjects',array(
    'Bucket' => $bucket['Name'];
));
var_dump($objects);

*/