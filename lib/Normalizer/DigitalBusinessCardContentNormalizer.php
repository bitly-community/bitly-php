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

class DigitalBusinessCardContentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Bitly\Model\DigitalBusinessCardContent::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Bitly\Model\DigitalBusinessCardContent::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bitly\Model\DigitalBusinessCardContent();
        if (\array_key_exists('download_enabled', $data) && \is_int($data['download_enabled'])) {
            $data['download_enabled'] = (bool) $data['download_enabled'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('digital_business_card_id', $data)) {
            $object->setDigitalBusinessCardId($data['digital_business_card_id']);
            unset($data['digital_business_card_id']);
        }
        if (\array_key_exists('link_title', $data)) {
            $object->setLinkTitle($data['link_title']);
            unset($data['link_title']);
        }
        if (\array_key_exists('layout', $data)) {
            $object->setLayout($data['layout']);
            unset($data['layout']);
        }
        if (\array_key_exists('first_name', $data)) {
            $object->setFirstName($data['first_name']);
            unset($data['first_name']);
        }
        if (\array_key_exists('last_name', $data)) {
            $object->setLastName($data['last_name']);
            unset($data['last_name']);
        }
        if (\array_key_exists('pronouns', $data)) {
            $object->setPronouns($data['pronouns']);
            unset($data['pronouns']);
        }
        if (\array_key_exists('company', $data)) {
            $object->setCompany($data['company']);
            unset($data['company']);
        }
        if (\array_key_exists('job_title', $data)) {
            $object->setJobTitle($data['job_title']);
            unset($data['job_title']);
        }
        if (\array_key_exists('contacts', $data)) {
            $values = [];
            foreach ($data['contacts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Bitly\Model\DigitalBusinessCardContact::class, 'json', $context);
            }
            $object->setContacts($values);
            unset($data['contacts']);
        }
        if (\array_key_exists('download_enabled', $data)) {
            $object->setDownloadEnabled($data['download_enabled']);
            unset($data['download_enabled']);
        }
        if (\array_key_exists('file', $data)) {
            $object->setFile($this->denormalizer->denormalize($data['file'], \Bitly\Model\DigitalBusinessCardContentFile::class, 'json', $context));
            unset($data['file']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('digitalBusinessCardId') && null !== $data->getDigitalBusinessCardId()) {
            $dataArray['digital_business_card_id'] = $data->getDigitalBusinessCardId();
        }
        if ($data->isInitialized('linkTitle') && null !== $data->getLinkTitle()) {
            $dataArray['link_title'] = $data->getLinkTitle();
        }
        if ($data->isInitialized('layout') && null !== $data->getLayout()) {
            $dataArray['layout'] = $data->getLayout();
        }
        if ($data->isInitialized('firstName') && null !== $data->getFirstName()) {
            $dataArray['first_name'] = $data->getFirstName();
        }
        if ($data->isInitialized('lastName') && null !== $data->getLastName()) {
            $dataArray['last_name'] = $data->getLastName();
        }
        if ($data->isInitialized('pronouns') && null !== $data->getPronouns()) {
            $dataArray['pronouns'] = $data->getPronouns();
        }
        if ($data->isInitialized('company') && null !== $data->getCompany()) {
            $dataArray['company'] = $data->getCompany();
        }
        if ($data->isInitialized('jobTitle') && null !== $data->getJobTitle()) {
            $dataArray['job_title'] = $data->getJobTitle();
        }
        if ($data->isInitialized('contacts') && null !== $data->getContacts()) {
            $values = [];
            foreach ($data->getContacts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['contacts'] = $values;
        }
        if ($data->isInitialized('downloadEnabled') && null !== $data->getDownloadEnabled()) {
            $dataArray['download_enabled'] = $data->getDownloadEnabled();
        }
        if ($data->isInitialized('file') && null !== $data->getFile()) {
            $dataArray['file'] = $this->normalizer->normalize($data->getFile(), 'json', $context);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Bitly\Model\DigitalBusinessCardContent::class => false];
    }
}
