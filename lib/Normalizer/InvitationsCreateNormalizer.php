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

class InvitationsCreateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Bitly\Model\InvitationsCreate::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Bitly\Model\InvitationsCreate::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bitly\Model\InvitationsCreate();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('emails', $data)) {
            $values = [];
            foreach ($data['emails'] as $value) {
                $values[] = $value;
            }
            $object->setEmails($values);
            unset($data['emails']);
        }
        if (\array_key_exists('role_name', $data)) {
            $object->setRoleName($data['role_name']);
            unset($data['role_name']);
        }
        if (\array_key_exists('groups', $data)) {
            $values_1 = [];
            foreach ($data['groups'] as $value_1) {
                $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($value_1 as $key => $value_2) {
                    $values_2[$key] = $value_2;
                }
                $values_1[] = $values_2;
            }
            $object->setGroups($values_1);
            unset($data['groups']);
        }
        if (\array_key_exists('created', $data)) {
            $object->setCreated($data['created']);
            unset($data['created']);
        }
        if (\array_key_exists('source', $data)) {
            $object->setSource($data['source']);
            unset($data['source']);
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_3;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $values = [];
        foreach ($data->getEmails() as $value) {
            $values[] = $value;
        }
        $dataArray['emails'] = $values;
        $dataArray['role_name'] = $data->getRoleName();
        if ($data->isInitialized('groups') && null !== $data->getGroups()) {
            $values_1 = [];
            foreach ($data->getGroups() as $value_1) {
                $values_2 = [];
                foreach ($value_1 as $key => $value_2) {
                    $values_2[$key] = $value_2;
                }
                $values_1[] = $values_2;
            }
            $dataArray['groups'] = $values_1;
        }
        if ($data->isInitialized('created') && null !== $data->getCreated()) {
            $dataArray['created'] = $data->getCreated();
        }
        if ($data->isInitialized('source') && null !== $data->getSource()) {
            $dataArray['source'] = $data->getSource();
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_3;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Bitly\Model\InvitationsCreate::class => false];
    }
}
