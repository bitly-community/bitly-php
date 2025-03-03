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
    class CampaignChannelClicksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\CampaignChannelClicks::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\CampaignChannelClicks::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\CampaignChannelClicks();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('channel_guid', $data)) {
                $object->setChannelGuid($data['channel_guid']);
                unset($data['channel_guid']);
            }
            if (\array_key_exists('channel_name', $data)) {
                $object->setChannelName($data['channel_name']);
                unset($data['channel_name']);
            }
            if (\array_key_exists('created_ts', $data)) {
                $object->setCreatedTs($data['created_ts']);
                unset($data['created_ts']);
            }
            if (\array_key_exists('total_clicks', $data)) {
                $object->setTotalClicks($data['total_clicks']);
                unset($data['total_clicks']);
            }
            if (\array_key_exists('clicks', $data)) {
                $values = [];
                foreach ($data['clicks'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Bitly\Model\CampaignClickData::class, 'json', $context);
                }
                $object->setClicks($values);
                unset($data['clicks']);
            }
            if (\array_key_exists('channel_bitlinks', $data)) {
                $object->setChannelBitlinks($this->denormalizer->denormalize($data['channel_bitlinks'], \Bitly\Model\ChannelBitlinks::class, 'json', $context));
                unset($data['channel_bitlinks']);
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
            if ($object->isInitialized('channelGuid') && null !== $object->getChannelGuid()) {
                $data['channel_guid'] = $object->getChannelGuid();
            }
            if ($object->isInitialized('channelName') && null !== $object->getChannelName()) {
                $data['channel_name'] = $object->getChannelName();
            }
            if ($object->isInitialized('createdTs') && null !== $object->getCreatedTs()) {
                $data['created_ts'] = $object->getCreatedTs();
            }
            if ($object->isInitialized('totalClicks') && null !== $object->getTotalClicks()) {
                $data['total_clicks'] = $object->getTotalClicks();
            }
            if ($object->isInitialized('clicks') && null !== $object->getClicks()) {
                $values = [];
                foreach ($object->getClicks() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['clicks'] = $values;
            }
            if ($object->isInitialized('channelBitlinks') && null !== $object->getChannelBitlinks()) {
                $data['channel_bitlinks'] = $this->normalizer->normalize($object->getChannelBitlinks(), 'json', $context);
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
            return [\Bitly\Model\CampaignChannelClicks::class => false];
        }
    }
} else {
    class CampaignChannelClicksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\CampaignChannelClicks::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\CampaignChannelClicks::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\CampaignChannelClicks();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('channel_guid', $data)) {
                $object->setChannelGuid($data['channel_guid']);
                unset($data['channel_guid']);
            }
            if (\array_key_exists('channel_name', $data)) {
                $object->setChannelName($data['channel_name']);
                unset($data['channel_name']);
            }
            if (\array_key_exists('created_ts', $data)) {
                $object->setCreatedTs($data['created_ts']);
                unset($data['created_ts']);
            }
            if (\array_key_exists('total_clicks', $data)) {
                $object->setTotalClicks($data['total_clicks']);
                unset($data['total_clicks']);
            }
            if (\array_key_exists('clicks', $data)) {
                $values = [];
                foreach ($data['clicks'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Bitly\Model\CampaignClickData::class, 'json', $context);
                }
                $object->setClicks($values);
                unset($data['clicks']);
            }
            if (\array_key_exists('channel_bitlinks', $data)) {
                $object->setChannelBitlinks($this->denormalizer->denormalize($data['channel_bitlinks'], \Bitly\Model\ChannelBitlinks::class, 'json', $context));
                unset($data['channel_bitlinks']);
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
            if ($object->isInitialized('channelGuid') && null !== $object->getChannelGuid()) {
                $data['channel_guid'] = $object->getChannelGuid();
            }
            if ($object->isInitialized('channelName') && null !== $object->getChannelName()) {
                $data['channel_name'] = $object->getChannelName();
            }
            if ($object->isInitialized('createdTs') && null !== $object->getCreatedTs()) {
                $data['created_ts'] = $object->getCreatedTs();
            }
            if ($object->isInitialized('totalClicks') && null !== $object->getTotalClicks()) {
                $data['total_clicks'] = $object->getTotalClicks();
            }
            if ($object->isInitialized('clicks') && null !== $object->getClicks()) {
                $values = [];
                foreach ($object->getClicks() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['clicks'] = $values;
            }
            if ($object->isInitialized('channelBitlinks') && null !== $object->getChannelBitlinks()) {
                $data['channel_bitlinks'] = $this->normalizer->normalize($object->getChannelBitlinks(), 'json', $context);
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
            return [\Bitly\Model\CampaignChannelClicks::class => false];
        }
    }
}
