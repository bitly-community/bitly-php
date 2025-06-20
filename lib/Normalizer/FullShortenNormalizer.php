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
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class FullShortenNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Bitly\Model\FullShorten::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Bitly\Model\FullShorten::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bitly\Model\FullShorten();
        if (\array_key_exists('force_new_link', $data) && \is_int($data['force_new_link'])) {
            $data['force_new_link'] = (bool) $data['force_new_link'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('long_url', $data)) {
            $object->setLongUrl($data['long_url']);
            unset($data['long_url']);
        }
        if (\array_key_exists('domain', $data)) {
            $object->setDomain($data['domain']);
            unset($data['domain']);
        }
        if (\array_key_exists('group_guid', $data)) {
            $object->setGroupGuid($data['group_guid']);
            unset($data['group_guid']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        if (\array_key_exists('tags', $data)) {
            $values = [];
            foreach ($data['tags'] as $value) {
                $values[] = $value;
            }
            $object->setTags($values);
            unset($data['tags']);
        }
        if (\array_key_exists('deeplinks', $data)) {
            $values_1 = [];
            foreach ($data['deeplinks'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Bitly\Model\Deeplink::class, 'json', $context);
            }
            $object->setDeeplinks($values_1);
            unset($data['deeplinks']);
        }
        if (\array_key_exists('force_new_link', $data)) {
            $object->setForceNewLink($data['force_new_link']);
            unset($data['force_new_link']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['long_url'] = $data->getLongUrl();
        if ($data->isInitialized('domain') && null !== $data->getDomain()) {
            $dataArray['domain'] = $data->getDomain();
        }
        if ($data->isInitialized('groupGuid') && null !== $data->getGroupGuid()) {
            $dataArray['group_guid'] = $data->getGroupGuid();
        }
        if ($data->isInitialized('title') && null !== $data->getTitle()) {
            $dataArray['title'] = $data->getTitle();
        }
        if ($data->isInitialized('tags') && null !== $data->getTags()) {
            $values = [];
            foreach ($data->getTags() as $value) {
                $values[] = $value;
            }
            $dataArray['tags'] = $values;
        }
        if ($data->isInitialized('deeplinks') && null !== $data->getDeeplinks()) {
            $values_1 = [];
            foreach ($data->getDeeplinks() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['deeplinks'] = $values_1;
        }
        if ($data->isInitialized('forceNewLink') && null !== $data->getForceNewLink()) {
            $dataArray['force_new_link'] = $data->getForceNewLink();
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Bitly\Model\FullShorten::class => false];
    }
}
