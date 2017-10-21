<?php

namespace Docker\Tests\Resource;

use Docker\Context\ContextBuilder;
use Docker\Resource\ImageResource;
use Docker\Tests\TestCase;
use Joli\Jane\OpenApi\Runtime\Client\Resource;

class ImageResourceTest extends TestCase
{
    /**
     * Return a container manager
     */
    private function getManager()
    {
        return self::getDocker()->image();
    }

    public function testBuildStream()
    {
        $contextBuilder = new ContextBuilder();
        $contextBuilder->from('ubuntu:precise');
        $contextBuilder->add('/test', 'test file content');

        $context = $contextBuilder->getContext();
        $buildStream = $this->getManager()->imageBuild($context->read(), ['t' => 'test-image'], ImageResource::FETCH_STREAM);

        $this->assertInstanceOf('Docker\Stream\BuildStream', $buildStream);

        $lastMessage = "";

        $buildStream->onFrame(function ($frame) use (&$lastMessage) {
            $lastMessage = $frame->getStream();
        });
        $buildStream->wait();

        $this->assertContains("Successfully", $lastMessage);
    }

    public function testBuildObject()
    {
        $contextBuilder = new ContextBuilder();
        $contextBuilder->from('ubuntu:precise');
        $contextBuilder->add('/test', 'test file content');

        $context = $contextBuilder->getContext();
        $buildInfos = $this->getManager()->imageBuild($context->read(), ['t' => 'test-image'], Resource::FETCH_OBJECT);

        $this->assertInternalType('array', $buildInfos);
        $this->assertContains("Successfully", $buildInfos[count($buildInfos) - 1]->getStream());
    }

    public function testCreateStream()
    {
        $createImageStream = $this->getManager()->imageCreate(null, [
            'fromImage' => 'registry:latest'
        ], ImageResource::FETCH_STREAM);

        $this->assertInstanceOf('Docker\Stream\CreateImageStream', $createImageStream);

        $firstMessage = null;

        $createImageStream->onFrame(function ($createImageInfo) use (&$firstMessage) {
            if (null === $firstMessage) {
                $firstMessage = $createImageInfo->getStatus();
            }
        });
        $createImageStream->wait();

        $this->assertContains("Pulling from library/registry", $firstMessage);
    }

    public function testCreateObject()
    {
        $createImagesInfos = $this->getManager()->imageCreate(null, [
            'fromImage' => 'registry:latest'
        ], Resource::FETCH_OBJECT);

        $this->assertInternalType('array', $createImagesInfos);
        $this->assertContains("Pulling from library/registry", $createImagesInfos[0]->getStatus());
    }

    public function testPushStream()
    {
        $contextBuilder = new ContextBuilder();
        $contextBuilder->from('ubuntu:precise');
        $contextBuilder->add('/test', 'test file content');

        $context = $contextBuilder->getContext();
        $this->getManager()->imageBuild($context->read(), ['t' => 'localhost:5000/test-image'], Resource::FETCH_OBJECT);

        $registryConfig = self::createModel('AuthConfig');
        $registryConfig->setServeraddress('localhost:5000');
        $pushImageStream = $this->getManager()->imagePush('localhost:5000/test-image', [
            'X-Registry-Auth' => $registryConfig
        ], ImageResource::FETCH_STREAM);

        $this->assertInstanceOf('Docker\Stream\PushStream', $pushImageStream);

        $firstMessage = null;

        $pushImageStream->onFrame(function ($pushImageInfo) use (&$firstMessage) {
            if (null === $firstMessage) {
                $firstMessage = $pushImageInfo->getStatus();
            }
        });
        $pushImageStream->wait();

        $this->assertContains("The push refers to a repository [localhost:5000/test-image]", $firstMessage);
    }

    public function testPushObject()
    {
        $contextBuilder = new ContextBuilder();
        $contextBuilder->from('ubuntu:precise');
        $contextBuilder->add('/test', 'test file content');

        $context = $contextBuilder->getContext();
        $this->getManager()->imageBuild($context->read(), ['t' => 'localhost:5000/test-image'], Resource::FETCH_OBJECT);

        $registryConfig = self::createModel('AuthConfig');
        $registryConfig->setServeraddress('localhost:5000');
        $pushImageInfos = $this->getManager()->imagePush('localhost:5000/test-image', [
            'X-Registry-Auth' => $registryConfig
        ], Resource::FETCH_OBJECT);

        $this->assertInternalType('array', $pushImageInfos);
        $this->assertContains("The push refers to a repository [localhost:5000/test-image]", $pushImageInfos[0]->getStatus());
    }
}