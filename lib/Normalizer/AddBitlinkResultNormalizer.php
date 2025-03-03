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
    class AddBitlinkResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\AddBitlinkResult::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\AddBitlinkResult::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\AddBitlinkResult();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('channel_guid', $data)) {
                $object->setChannelGuid($data['channel_guid']);
                unset($data['channel_guid']);
            }
            if (\array_key_exists('hash', $data)) {
                $object->setHash($data['hash']);
                unset($data['hash']);
            }
            if (\array_key_exists('long_url', $data)) {
                $object->setLongUrl($data['long_url']);
                unset($data['long_url']);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('keyword_link', $data)) {
                $object->setKeywordLink($data['keyword_link']);
                unset($data['keyword_link']);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            if (\array_key_exists('new_channel_bitlink', $data)) {
                $object->setNewChannelBitlink($data['new_channel_bitlink']);
                unset($data['new_channel_bitlink']);
            }
            if (\array_key_exists('bitlink_created_ts', $data)) {
                $object->setBitlinkCreatedTs($data['bitlink_created_ts']);
                unset($data['bitlink_created_ts']);
            }
            if (\array_key_exists('shorten_link_error', $data)) {
                $object->setShortenLinkError($data['shorten_link_error']);
                unset($data['shorten_link_error']);
            }
            if (\array_key_exists('channel_bitlink_error', $data)) {
                $object->setChannelBitlinkError($data['channel_bitlink_error']);
                unset($data['channel_bitlink_error']);
            }
            if (\array_key_exists('other_link_error', $data)) {
                $object->setOtherLinkError($data['other_link_error']);
                unset($data['other_link_error']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            if ($object->isInitialized('hash') && null !== $object->getHash()) {
                $data['hash'] = $object->getHash();
            }
            if ($object->isInitialized('longUrl') && null !== $object->getLongUrl()) {
                $data['long_url'] = $object->getLongUrl();
            }
            if ($object->isInitialized('url') && null !== $object->getUrl()) {
                $data['url'] = $object->getUrl();
            }
            if ($object->isInitialized('keywordLink') && null !== $object->getKeywordLink()) {
                $data['keyword_link'] = $object->getKeywordLink();
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            if ($object->isInitialized('newChannelBitlink') && null !== $object->getNewChannelBitlink()) {
                $data['new_channel_bitlink'] = $object->getNewChannelBitlink();
            }
            if ($object->isInitialized('bitlinkCreatedTs') && null !== $object->getBitlinkCreatedTs()) {
                $data['bitlink_created_ts'] = $object->getBitlinkCreatedTs();
            }
            if ($object->isInitialized('shortenLinkError') && null !== $object->getShortenLinkError()) {
                $data['shorten_link_error'] = $object->getShortenLinkError();
            }
            if ($object->isInitialized('channelBitlinkError') && null !== $object->getChannelBitlinkError()) {
                $data['channel_bitlink_error'] = $object->getChannelBitlinkError();
            }
            if ($object->isInitialized('otherLinkError') && null !== $object->getOtherLinkError()) {
                $data['other_link_error'] = $object->getOtherLinkError();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Bitly\Model\AddBitlinkResult::class => false];
        }
    }
} else {
    class AddBitlinkResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\AddBitlinkResult::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\AddBitlinkResult::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\AddBitlinkResult();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('channel_guid', $data)) {
                $object->setChannelGuid($data['channel_guid']);
                unset($data['channel_guid']);
            }
            if (\array_key_exists('hash', $data)) {
                $object->setHash($data['hash']);
                unset($data['hash']);
            }
            if (\array_key_exists('long_url', $data)) {
                $object->setLongUrl($data['long_url']);
                unset($data['long_url']);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('keyword_link', $data)) {
                $object->setKeywordLink($data['keyword_link']);
                unset($data['keyword_link']);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            if (\array_key_exists('new_channel_bitlink', $data)) {
                $object->setNewChannelBitlink($data['new_channel_bitlink']);
                unset($data['new_channel_bitlink']);
            }
            if (\array_key_exists('bitlink_created_ts', $data)) {
                $object->setBitlinkCreatedTs($data['bitlink_created_ts']);
                unset($data['bitlink_created_ts']);
            }
            if (\array_key_exists('shorten_link_error', $data)) {
                $object->setShortenLinkError($data['shorten_link_error']);
                unset($data['shorten_link_error']);
            }
            if (\array_key_exists('channel_bitlink_error', $data)) {
                $object->setChannelBitlinkError($data['channel_bitlink_error']);
                unset($data['channel_bitlink_error']);
            }
            if (\array_key_exists('other_link_error', $data)) {
                $object->setOtherLinkError($data['other_link_error']);
                unset($data['other_link_error']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            if ($object->isInitialized('hash') && null !== $object->getHash()) {
                $data['hash'] = $object->getHash();
            }
            if ($object->isInitialized('longUrl') && null !== $object->getLongUrl()) {
                $data['long_url'] = $object->getLongUrl();
            }
            if ($object->isInitialized('url') && null !== $object->getUrl()) {
                $data['url'] = $object->getUrl();
            }
            if ($object->isInitialized('keywordLink') && null !== $object->getKeywordLink()) {
                $data['keyword_link'] = $object->getKeywordLink();
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            if ($object->isInitialized('newChannelBitlink') && null !== $object->getNewChannelBitlink()) {
                $data['new_channel_bitlink'] = $object->getNewChannelBitlink();
            }
            if ($object->isInitialized('bitlinkCreatedTs') && null !== $object->getBitlinkCreatedTs()) {
                $data['bitlink_created_ts'] = $object->getBitlinkCreatedTs();
            }
            if ($object->isInitialized('shortenLinkError') && null !== $object->getShortenLinkError()) {
                $data['shorten_link_error'] = $object->getShortenLinkError();
            }
            if ($object->isInitialized('channelBitlinkError') && null !== $object->getChannelBitlinkError()) {
                $data['channel_bitlink_error'] = $object->getChannelBitlinkError();
            }
            if ($object->isInitialized('otherLinkError') && null !== $object->getOtherLinkError()) {
                $data['other_link_error'] = $object->getOtherLinkError();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Bitly\Model\AddBitlinkResult::class => false];
        }
    }
}
