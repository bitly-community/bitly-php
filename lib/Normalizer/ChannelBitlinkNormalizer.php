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
    class ChannelBitlinkNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\ChannelBitlink::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\ChannelBitlink::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\ChannelBitlink();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('created_ts', $data)) {
                $object->setCreatedTs($data['created_ts']);
                unset($data['created_ts']);
            }
            if (\array_key_exists('bitlink_id', $data)) {
                $object->setBitlinkId($data['bitlink_id']);
                unset($data['bitlink_id']);
            }
            if (\array_key_exists('campaign_guid', $data)) {
                $object->setCampaignGuid($data['campaign_guid']);
                unset($data['campaign_guid']);
            }
            if (\array_key_exists('channel_guid', $data)) {
                $object->setChannelGuid($data['channel_guid']);
                unset($data['channel_guid']);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
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
            if (\array_key_exists('keyword_link', $data)) {
                $object->setKeywordLink($data['keyword_link']);
                unset($data['keyword_link']);
            }
            if (\array_key_exists('link', $data)) {
                $object->setLink($data['link']);
                unset($data['link']);
            }
            if (\array_key_exists('long_url', $data)) {
                $object->setLongUrl($data['long_url']);
                unset($data['long_url']);
            }
            if (\array_key_exists('campaign_ids', $data)) {
                $values_1 = [];
                foreach ($data['campaign_ids'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setCampaignIds($values_1);
                unset($data['campaign_ids']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['created_ts'] = $object->getCreatedTs();
            $data['bitlink_id'] = $object->getBitlinkId();
            $data['campaign_guid'] = $object->getCampaignGuid();
            $data['channel_guid'] = $object->getChannelGuid();
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
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
            if ($object->isInitialized('keywordLink') && null !== $object->getKeywordLink()) {
                $data['keyword_link'] = $object->getKeywordLink();
            }
            if ($object->isInitialized('link') && null !== $object->getLink()) {
                $data['link'] = $object->getLink();
            }
            if ($object->isInitialized('longUrl') && null !== $object->getLongUrl()) {
                $data['long_url'] = $object->getLongUrl();
            }
            if ($object->isInitialized('campaignIds') && null !== $object->getCampaignIds()) {
                $values_1 = [];
                foreach ($object->getCampaignIds() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['campaign_ids'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Bitly\Model\ChannelBitlink::class => false];
        }
    }
} else {
    class ChannelBitlinkNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\ChannelBitlink::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\ChannelBitlink::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\ChannelBitlink();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('created_ts', $data)) {
                $object->setCreatedTs($data['created_ts']);
                unset($data['created_ts']);
            }
            if (\array_key_exists('bitlink_id', $data)) {
                $object->setBitlinkId($data['bitlink_id']);
                unset($data['bitlink_id']);
            }
            if (\array_key_exists('campaign_guid', $data)) {
                $object->setCampaignGuid($data['campaign_guid']);
                unset($data['campaign_guid']);
            }
            if (\array_key_exists('channel_guid', $data)) {
                $object->setChannelGuid($data['channel_guid']);
                unset($data['channel_guid']);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
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
            if (\array_key_exists('keyword_link', $data)) {
                $object->setKeywordLink($data['keyword_link']);
                unset($data['keyword_link']);
            }
            if (\array_key_exists('link', $data)) {
                $object->setLink($data['link']);
                unset($data['link']);
            }
            if (\array_key_exists('long_url', $data)) {
                $object->setLongUrl($data['long_url']);
                unset($data['long_url']);
            }
            if (\array_key_exists('campaign_ids', $data)) {
                $values_1 = [];
                foreach ($data['campaign_ids'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setCampaignIds($values_1);
                unset($data['campaign_ids']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            $data['created_ts'] = $object->getCreatedTs();
            $data['bitlink_id'] = $object->getBitlinkId();
            $data['campaign_guid'] = $object->getCampaignGuid();
            $data['channel_guid'] = $object->getChannelGuid();
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
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
            if ($object->isInitialized('keywordLink') && null !== $object->getKeywordLink()) {
                $data['keyword_link'] = $object->getKeywordLink();
            }
            if ($object->isInitialized('link') && null !== $object->getLink()) {
                $data['link'] = $object->getLink();
            }
            if ($object->isInitialized('longUrl') && null !== $object->getLongUrl()) {
                $data['long_url'] = $object->getLongUrl();
            }
            if ($object->isInitialized('campaignIds') && null !== $object->getCampaignIds()) {
                $values_1 = [];
                foreach ($object->getCampaignIds() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['campaign_ids'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Bitly\Model\ChannelBitlink::class => false];
        }
    }
}
