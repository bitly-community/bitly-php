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
    class CampaignAddBitlinkResponseDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\CampaignAddBitlinkResponseData::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\CampaignAddBitlinkResponseData::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\CampaignAddBitlinkResponseData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('successes', $data)) {
                $object->setSuccesses($data['successes']);
                unset($data['successes']);
            }
            if (\array_key_exists('shorten_failures', $data)) {
                $object->setShortenFailures($data['shorten_failures']);
                unset($data['shorten_failures']);
            }
            if (\array_key_exists('other_link_failures', $data)) {
                $object->setOtherLinkFailures($data['other_link_failures']);
                unset($data['other_link_failures']);
            }
            if (\array_key_exists('create_bitlink_failures', $data)) {
                $object->setCreateBitlinkFailures($data['create_bitlink_failures']);
                unset($data['create_bitlink_failures']);
            }
            if (\array_key_exists('results', $data)) {
                $values = [];
                foreach ($data['results'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Bitly\Model\AddBitlinkResult::class, 'json', $context);
                }
                $object->setResults($values);
                unset($data['results']);
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
            if ($object->isInitialized('successes') && null !== $object->getSuccesses()) {
                $data['successes'] = $object->getSuccesses();
            }
            if ($object->isInitialized('shortenFailures') && null !== $object->getShortenFailures()) {
                $data['shorten_failures'] = $object->getShortenFailures();
            }
            if ($object->isInitialized('otherLinkFailures') && null !== $object->getOtherLinkFailures()) {
                $data['other_link_failures'] = $object->getOtherLinkFailures();
            }
            if ($object->isInitialized('createBitlinkFailures') && null !== $object->getCreateBitlinkFailures()) {
                $data['create_bitlink_failures'] = $object->getCreateBitlinkFailures();
            }
            if ($object->isInitialized('results') && null !== $object->getResults()) {
                $values = [];
                foreach ($object->getResults() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['results'] = $values;
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
            return [\Bitly\Model\CampaignAddBitlinkResponseData::class => false];
        }
    }
} else {
    class CampaignAddBitlinkResponseDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\CampaignAddBitlinkResponseData::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\CampaignAddBitlinkResponseData::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\CampaignAddBitlinkResponseData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('successes', $data)) {
                $object->setSuccesses($data['successes']);
                unset($data['successes']);
            }
            if (\array_key_exists('shorten_failures', $data)) {
                $object->setShortenFailures($data['shorten_failures']);
                unset($data['shorten_failures']);
            }
            if (\array_key_exists('other_link_failures', $data)) {
                $object->setOtherLinkFailures($data['other_link_failures']);
                unset($data['other_link_failures']);
            }
            if (\array_key_exists('create_bitlink_failures', $data)) {
                $object->setCreateBitlinkFailures($data['create_bitlink_failures']);
                unset($data['create_bitlink_failures']);
            }
            if (\array_key_exists('results', $data)) {
                $values = [];
                foreach ($data['results'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Bitly\Model\AddBitlinkResult::class, 'json', $context);
                }
                $object->setResults($values);
                unset($data['results']);
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
            if ($object->isInitialized('successes') && null !== $object->getSuccesses()) {
                $data['successes'] = $object->getSuccesses();
            }
            if ($object->isInitialized('shortenFailures') && null !== $object->getShortenFailures()) {
                $data['shorten_failures'] = $object->getShortenFailures();
            }
            if ($object->isInitialized('otherLinkFailures') && null !== $object->getOtherLinkFailures()) {
                $data['other_link_failures'] = $object->getOtherLinkFailures();
            }
            if ($object->isInitialized('createBitlinkFailures') && null !== $object->getCreateBitlinkFailures()) {
                $data['create_bitlink_failures'] = $object->getCreateBitlinkFailures();
            }
            if ($object->isInitialized('results') && null !== $object->getResults()) {
                $values = [];
                foreach ($object->getResults() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['results'] = $values;
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
            return [\Bitly\Model\CampaignAddBitlinkResponseData::class => false];
        }
    }
}
