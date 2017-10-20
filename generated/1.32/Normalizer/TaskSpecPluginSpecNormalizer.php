<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_32\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TaskSpecPluginSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Docker\\API\\V1_32\\Model\\TaskSpecPluginSpec' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\V1_32\Model\TaskSpecPluginSpec) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Docker\API\V1_32\Model\TaskSpecPluginSpec();
        if (property_exists($data, 'Name')) {
            $object->setName($data->{'Name'});
        }
        if (property_exists($data, 'Remote')) {
            $object->setRemote($data->{'Remote'});
        }
        if (property_exists($data, 'Disabled')) {
            $object->setDisabled($data->{'Disabled'});
        }
        if (property_exists($data, 'PluginPrivilege')) {
            $values = [];
            foreach ($data->{'PluginPrivilege'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\V1_32\\Model\\TaskSpecPluginSpecPluginPrivilegeItem', 'json', $context);
            }
            $object->setPluginPrivilege($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }
        if (null !== $object->getRemote()) {
            $data->{'Remote'} = $object->getRemote();
        }
        if (null !== $object->getDisabled()) {
            $data->{'Disabled'} = $object->getDisabled();
        }
        if (null !== $object->getPluginPrivilege()) {
            $values = [];
            foreach ($object->getPluginPrivilege() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'PluginPrivilege'} = $values;
        }

        return $data;
    }
}
