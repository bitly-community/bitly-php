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

class ActivityLogNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Bitly\Model\ActivityLog::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Bitly\Model\ActivityLog::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bitly\Model\ActivityLog();
        if (\array_key_exists('bitly_admin', $data) && \is_int($data['bitly_admin'])) {
            $data['bitly_admin'] = (bool) $data['bitly_admin'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('action_description', $data)) {
            $object->setActionDescription($data['action_description']);
            unset($data['action_description']);
        }
        if (\array_key_exists('action_login', $data)) {
            $object->setActionLogin($data['action_login']);
            unset($data['action_login']);
        }
        if (\array_key_exists('ts', $data)) {
            $object->setTs($data['ts']);
            unset($data['ts']);
        }
        if (\array_key_exists('user', $data)) {
            $object->setUser($data['user']);
            unset($data['user']);
        }
        if (\array_key_exists('action', $data)) {
            $object->setAction($data['action']);
            unset($data['action']);
        }
        if (\array_key_exists('org_guid', $data)) {
            $object->setOrgGuid($data['org_guid']);
            unset($data['org_guid']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('country_code', $data)) {
            $object->setCountryCode($data['country_code']);
            unset($data['country_code']);
        }
        if (\array_key_exists('region', $data)) {
            $object->setRegion($data['region']);
            unset($data['region']);
        }
        if (\array_key_exists('sub_region', $data)) {
            $object->setSubRegion($data['sub_region']);
            unset($data['sub_region']);
        }
        if (\array_key_exists('city', $data)) {
            $object->setCity($data['city']);
            unset($data['city']);
        }
        if (\array_key_exists('isp', $data)) {
            $object->setIsp($data['isp']);
            unset($data['isp']);
        }
        if (\array_key_exists('bitly_admin', $data)) {
            $object->setBitlyAdmin($data['bitly_admin']);
            unset($data['bitly_admin']);
        }
        if (\array_key_exists('metadata', $data)) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setMetadata($values);
            unset($data['metadata']);
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_1;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('actionDescription') && null !== $data->getActionDescription()) {
            $dataArray['action_description'] = $data->getActionDescription();
        }
        if ($data->isInitialized('actionLogin') && null !== $data->getActionLogin()) {
            $dataArray['action_login'] = $data->getActionLogin();
        }
        if ($data->isInitialized('ts') && null !== $data->getTs()) {
            $dataArray['ts'] = $data->getTs();
        }
        if ($data->isInitialized('user') && null !== $data->getUser()) {
            $dataArray['user'] = $data->getUser();
        }
        if ($data->isInitialized('action') && null !== $data->getAction()) {
            $dataArray['action'] = $data->getAction();
        }
        if ($data->isInitialized('orgGuid') && null !== $data->getOrgGuid()) {
            $dataArray['org_guid'] = $data->getOrgGuid();
        }
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('countryCode') && null !== $data->getCountryCode()) {
            $dataArray['country_code'] = $data->getCountryCode();
        }
        if ($data->isInitialized('region') && null !== $data->getRegion()) {
            $dataArray['region'] = $data->getRegion();
        }
        if ($data->isInitialized('subRegion') && null !== $data->getSubRegion()) {
            $dataArray['sub_region'] = $data->getSubRegion();
        }
        if ($data->isInitialized('city') && null !== $data->getCity()) {
            $dataArray['city'] = $data->getCity();
        }
        if ($data->isInitialized('isp') && null !== $data->getIsp()) {
            $dataArray['isp'] = $data->getIsp();
        }
        if ($data->isInitialized('bitlyAdmin') && null !== $data->getBitlyAdmin()) {
            $dataArray['bitly_admin'] = $data->getBitlyAdmin();
        }
        if ($data->isInitialized('metadata') && null !== $data->getMetadata()) {
            $values = [];
            foreach ($data->getMetadata() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['metadata'] = $values;
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Bitly\Model\ActivityLog::class => false];
    }
}
