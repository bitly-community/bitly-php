<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Normalizer;

use Bitly\Runtime\Normalizer\CheckArray;
use Bitly\Runtime\Normalizer\ValidatorTrait;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ChannelModifyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\ChannelModify::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\ChannelModify::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\ChannelModify();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('guid', $data)) {
                $object->setGuid($data['guid']);
                unset($data['guid']);
            }
            if (\array_key_exists('created', $data)) {
                $object->setCreated($data['created']);
                unset($data['created']);
            }
            if (\array_key_exists('modified', $data)) {
                $object->setModified($data['modified']);
                unset($data['modified']);
            }
            if (\array_key_exists('group_guid', $data)) {
                $object->setGroupGuid($data['group_guid']);
                unset($data['group_guid']);
            }
            if (\array_key_exists('bitlinks', $data)) {
                $values = [];
                foreach ($data['bitlinks'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Bitly\Model\BaseChannelBitlink::class, 'json', $context);
                }
                $object->setBitlinks($values);
                unset($data['bitlinks']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('guid') && null !== $object->getGuid()) {
                $data['guid'] = $object->getGuid();
            }
            if ($object->isInitialized('created') && null !== $object->getCreated()) {
                $data['created'] = $object->getCreated();
            }
            if ($object->isInitialized('modified') && null !== $object->getModified()) {
                $data['modified'] = $object->getModified();
            }
            if ($object->isInitialized('groupGuid') && null !== $object->getGroupGuid()) {
                $data['group_guid'] = $object->getGroupGuid();
            }
            if ($object->isInitialized('bitlinks') && null !== $object->getBitlinks()) {
                $values = [];
                foreach ($object->getBitlinks() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['bitlinks'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Bitly\Model\ChannelModify::class => false];
        }
    }
} else {
    class ChannelModifyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\ChannelModify::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\ChannelModify::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\ChannelModify();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('guid', $data)) {
                $object->setGuid($data['guid']);
                unset($data['guid']);
            }
            if (\array_key_exists('created', $data)) {
                $object->setCreated($data['created']);
                unset($data['created']);
            }
            if (\array_key_exists('modified', $data)) {
                $object->setModified($data['modified']);
                unset($data['modified']);
            }
            if (\array_key_exists('group_guid', $data)) {
                $object->setGroupGuid($data['group_guid']);
                unset($data['group_guid']);
            }
            if (\array_key_exists('bitlinks', $data)) {
                $values = [];
                foreach ($data['bitlinks'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Bitly\Model\BaseChannelBitlink::class, 'json', $context);
                }
                $object->setBitlinks($values);
                unset($data['bitlinks']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('guid') && null !== $object->getGuid()) {
                $data['guid'] = $object->getGuid();
            }
            if ($object->isInitialized('created') && null !== $object->getCreated()) {
                $data['created'] = $object->getCreated();
            }
            if ($object->isInitialized('modified') && null !== $object->getModified()) {
                $data['modified'] = $object->getModified();
            }
            if ($object->isInitialized('groupGuid') && null !== $object->getGroupGuid()) {
                $data['group_guid'] = $object->getGroupGuid();
            }
            if ($object->isInitialized('bitlinks') && null !== $object->getBitlinks()) {
                $values = [];
                foreach ($object->getBitlinks() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['bitlinks'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Bitly\Model\ChannelModify::class => false];
        }
    }
}
