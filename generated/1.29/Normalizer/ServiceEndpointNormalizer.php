<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_29\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ServiceEndpointNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Docker\\API\\V1_29\\Model\\ServiceEndpoint' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\V1_29\Model\ServiceEndpoint) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Docker\API\V1_29\Model\ServiceEndpoint();
        if (property_exists($data, 'Spec')) {
            $object->setSpec($this->denormalizer->denormalize($data->{'Spec'}, 'Docker\\API\\V1_29\\Model\\EndpointSpec', 'json', $context));
        }
        if (property_exists($data, 'Ports')) {
            $values = [];
            foreach ($data->{'Ports'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\V1_29\\Model\\EndpointPortConfig', 'json', $context);
            }
            $object->setPorts($values);
        }
        if (property_exists($data, 'VirtualIPs')) {
            $values_1 = [];
            foreach ($data->{'VirtualIPs'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Docker\\API\\V1_29\\Model\\ServiceEndpointVirtualIPsItem', 'json', $context);
            }
            $object->setVirtualIPs($values_1);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getSpec()) {
            $data->{'Spec'} = $this->normalizer->normalize($object->getSpec(), 'json', $context);
        }
        if (null !== $object->getPorts()) {
            $values = [];
            foreach ($object->getPorts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Ports'} = $values;
        }
        if (null !== $object->getVirtualIPs()) {
            $values_1 = [];
            foreach ($object->getVirtualIPs() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'VirtualIPs'} = $values_1;
        }

        return $data;
    }
}
