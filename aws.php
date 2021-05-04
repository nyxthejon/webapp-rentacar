<?php
use Aws\S3\S3Client;
use Aws\Exception\AwsException;
require 'vendor/autoload.php';
$config = require('config.php');


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

$source = 's3://'.$bucket['Name'];


$dest = '\img';

$manager = new \Aws\S3\Transfer($s3Client, $source, $dest);
$manager->transfer();
