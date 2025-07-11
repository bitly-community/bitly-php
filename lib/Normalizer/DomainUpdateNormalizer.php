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

class DomainUpdateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Bitly\Model\DomainUpdate::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Bitly\Model\DomainUpdate::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bitly\Model\DomainUpdate();
        if (\array_key_exists('https_enabled', $data) && \is_int($data['https_enabled'])) {
            $data['https_enabled'] = (bool) $data['https_enabled'];
        }
        if (\array_key_exists('hsts_enabled', $data) && \is_int($data['hsts_enabled'])) {
            $data['hsts_enabled'] = (bool) $data['hsts_enabled'];
        }
        if (\array_key_exists('upgrade_insecure_requests', $data) && \is_int($data['upgrade_insecure_requests'])) {
            $data['upgrade_insecure_requests'] = (bool) $data['upgrade_insecure_requests'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('root_redirect', $data)) {
            $object->setRootRedirect($data['root_redirect']);
            unset($data['root_redirect']);
        }
        if (\array_key_exists('wildcard_redirect', $data)) {
            $object->setWildcardRedirect($data['wildcard_redirect']);
            unset($data['wildcard_redirect']);
        }
        if (\array_key_exists('https_enabled', $data)) {
            $object->setHttpsEnabled($data['https_enabled']);
            unset($data['https_enabled']);
        }
        if (\array_key_exists('hsts_enabled', $data)) {
            $object->setHstsEnabled($data['hsts_enabled']);
            unset($data['hsts_enabled']);
        }
        if (\array_key_exists('upgrade_insecure_requests', $data)) {
            $object->setUpgradeInsecureRequests($data['upgrade_insecure_requests']);
            unset($data['upgrade_insecure_requests']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('rootRedirect') && null !== $data->getRootRedirect()) {
            $dataArray['root_redirect'] = $data->getRootRedirect();
        }
        if ($data->isInitialized('wildcardRedirect') && null !== $data->getWildcardRedirect()) {
            $dataArray['wildcard_redirect'] = $data->getWildcardRedirect();
        }
        if ($data->isInitialized('httpsEnabled') && null !== $data->getHttpsEnabled()) {
            $dataArray['https_enabled'] = $data->getHttpsEnabled();
        }
        if ($data->isInitialized('hstsEnabled') && null !== $data->getHstsEnabled()) {
            $dataArray['hsts_enabled'] = $data->getHstsEnabled();
        }
        if ($data->isInitialized('upgradeInsecureRequests') && null !== $data->getUpgradeInsecureRequests()) {
            $dataArray['upgrade_insecure_requests'] = $data->getUpgradeInsecureRequests();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Bitly\Model\DomainUpdate::class => false];
    }
}
