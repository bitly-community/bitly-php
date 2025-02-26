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
    class BulkUploadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\BulkUpload::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\BulkUpload::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\BulkUpload();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('org_guid', $data)) {
                $object->setOrgGuid($data['org_guid']);
                unset($data['org_guid']);
            }
            if (\array_key_exists('group_guid', $data)) {
                $object->setGroupGuid($data['group_guid']);
                unset($data['group_guid']);
            }
            if (\array_key_exists('report_url', $data)) {
                $object->setReportUrl($data['report_url']);
                unset($data['report_url']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('uploaded_by', $data)) {
                $object->setUploadedBy($data['uploaded_by']);
                unset($data['uploaded_by']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('created', $data)) {
                $object->setCreated($data['created']);
                unset($data['created']);
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
            $data['org_guid'] = $object->getOrgGuid();
            $data['group_guid'] = $object->getGroupGuid();
            $data['report_url'] = $object->getReportUrl();
            $data['name'] = $object->getName();
            $data['uploaded_by'] = $object->getUploadedBy();
            $data['status'] = $object->getStatus();
            $data['created'] = $object->getCreated();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Bitly\Model\BulkUpload::class => false];
        }
    }
} else {
    class BulkUploadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\BulkUpload::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\BulkUpload::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\BulkUpload();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('org_guid', $data)) {
                $object->setOrgGuid($data['org_guid']);
                unset($data['org_guid']);
            }
            if (\array_key_exists('group_guid', $data)) {
                $object->setGroupGuid($data['group_guid']);
                unset($data['group_guid']);
            }
            if (\array_key_exists('report_url', $data)) {
                $object->setReportUrl($data['report_url']);
                unset($data['report_url']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('uploaded_by', $data)) {
                $object->setUploadedBy($data['uploaded_by']);
                unset($data['uploaded_by']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('created', $data)) {
                $object->setCreated($data['created']);
                unset($data['created']);
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
            $data['org_guid'] = $object->getOrgGuid();
            $data['group_guid'] = $object->getGroupGuid();
            $data['report_url'] = $object->getReportUrl();
            $data['name'] = $object->getName();
            $data['uploaded_by'] = $object->getUploadedBy();
            $data['status'] = $object->getStatus();
            $data['created'] = $object->getCreated();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Bitly\Model\BulkUpload::class => false];
        }
    }
}
