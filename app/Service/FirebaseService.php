<?php

namespace App\Service;

use DateTime;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Storage;

final class FirebaseServices
{
    protected $storage;

    public function __construct()
    {
        $firebase = (new Factory)
            ->withServiceAccount(__DIR__ . '/firebase.json')
            ->withDefaultStorageBucket('aden-ab505.appspot.com');

        $this->storage = $firebase->createStorage();
    }

    public function getStorage($name)
    {
        $object = $this->storage->getBucket()->object($name);
        $link = $object->signedUrl(new DateTime('+1 day'));
        return $link;
    }

    public function uploadFile($file, $fileName)
    {
        try {
            $bucket = $this->storage->getBucket();
        $object = $bucket->upload(
            fopen($file->getPathName(), 'r'),
            [
                'name' => $fileName,
                'uploadType' => "media",
                'predefinedAcl' => 'publicRead',
            ]
        );

        return $object->signedUrl(new DateTime('+1 hour')); // Generate a signed URL valid for 1 hour
        } catch (\Throwable $th) {
            return 'error';
        }
    }
}
