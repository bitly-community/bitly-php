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

class SSOSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Bitly\Model\SSOSettings::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Bitly\Model\SSOSettings::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bitly\Model\SSOSettings();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('organization_guid', $data)) {
            $object->setOrganizationGuid($data['organization_guid']);
            unset($data['organization_guid']);
        }
        if (\array_key_exists('identity_provider', $data)) {
            $object->setIdentityProvider($data['identity_provider']);
            unset($data['identity_provider']);
        }
        if (\array_key_exists('issuer_url', $data)) {
            $object->setIssuerUrl($data['issuer_url']);
            unset($data['issuer_url']);
        }
        if (\array_key_exists('url_slug', $data)) {
            $object->setUrlSlug($data['url_slug']);
            unset($data['url_slug']);
        }
        if (\array_key_exists('idp_url', $data)) {
            $object->setIdpUrl($data['idp_url']);
            unset($data['idp_url']);
        }
        if (\array_key_exists('saml_endpoint', $data)) {
            $object->setSamlEndpoint($data['saml_endpoint']);
            unset($data['saml_endpoint']);
        }
        if (\array_key_exists('certificate', $data)) {
            $object->setCertificate($data['certificate']);
            unset($data['certificate']);
        }
        if (\array_key_exists('slo_endpoint', $data)) {
            $object->setSloEndpoint($data['slo_endpoint']);
            unset($data['slo_endpoint']);
        }
        if (\array_key_exists('domains', $data)) {
            $values = [];
            foreach ($data['domains'] as $value) {
                $values[] = $value;
            }
            $object->setDomains($values);
            unset($data['domains']);
        }
        if (\array_key_exists('default_group_guid', $data)) {
            $object->setDefaultGroupGuid($data['default_group_guid']);
            unset($data['default_group_guid']);
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
        if ($data->isInitialized('organizationGuid') && null !== $data->getOrganizationGuid()) {
            $dataArray['organization_guid'] = $data->getOrganizationGuid();
        }
        if ($data->isInitialized('identityProvider') && null !== $data->getIdentityProvider()) {
            $dataArray['identity_provider'] = $data->getIdentityProvider();
        }
        if ($data->isInitialized('issuerUrl') && null !== $data->getIssuerUrl()) {
            $dataArray['issuer_url'] = $data->getIssuerUrl();
        }
        if ($data->isInitialized('urlSlug') && null !== $data->getUrlSlug()) {
            $dataArray['url_slug'] = $data->getUrlSlug();
        }
        if ($data->isInitialized('idpUrl') && null !== $data->getIdpUrl()) {
            $dataArray['idp_url'] = $data->getIdpUrl();
        }
        if ($data->isInitialized('samlEndpoint') && null !== $data->getSamlEndpoint()) {
            $dataArray['saml_endpoint'] = $data->getSamlEndpoint();
        }
        if ($data->isInitialized('certificate') && null !== $data->getCertificate()) {
            $dataArray['certificate'] = $data->getCertificate();
        }
        if ($data->isInitialized('sloEndpoint') && null !== $data->getSloEndpoint()) {
            $dataArray['slo_endpoint'] = $data->getSloEndpoint();
        }
        if ($data->isInitialized('domains') && null !== $data->getDomains()) {
            $values = [];
            foreach ($data->getDomains() as $value) {
                $values[] = $value;
            }
            $dataArray['domains'] = $values;
        }
        if ($data->isInitialized('defaultGroupGuid') && null !== $data->getDefaultGroupGuid()) {
            $dataArray['default_group_guid'] = $data->getDefaultGroupGuid();
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
        return [\Bitly\Model\SSOSettings::class => false];
    }
}
