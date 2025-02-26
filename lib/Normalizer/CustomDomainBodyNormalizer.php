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
    class CustomDomainBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\CustomDomainBody::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\CustomDomainBody::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\CustomDomainBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('custom_domain', $data)) {
                $object->setCustomDomain($data['custom_domain']);
                unset($data['custom_domain']);
            }
            if (\array_key_exists('is_active', $data)) {
                $object->setIsActive($data['is_active']);
                unset($data['is_active']);
            }
            if (\array_key_exists('group_guids', $data)) {
                $values = [];
                foreach ($data['group_guids'] as $value) {
                    $values[] = $value;
                }
                $object->setGroupGuids($values);
                unset($data['group_guids']);
            }
            if (\array_key_exists('ssl_configuration_error', $data)) {
                $object->setSslConfigurationError($data['ssl_configuration_error']);
                unset($data['ssl_configuration_error']);
            }
            if (\array_key_exists('configuration_last_check_ts', $data)) {
                $object->setConfigurationLastCheckTs($data['configuration_last_check_ts']);
                unset($data['configuration_last_check_ts']);
            }
            if (\array_key_exists('root_redirect', $data)) {
                $object->setRootRedirect($data['root_redirect']);
                unset($data['root_redirect']);
            }
            if (\array_key_exists('https_bitlinks', $data)) {
                $object->setHttpsBitlinks($data['https_bitlinks']);
                unset($data['https_bitlinks']);
            }
            if (\array_key_exists('ssl_autoconfigure_error', $data)) {
                $object->setSslAutoconfigureError($data['ssl_autoconfigure_error']);
                unset($data['ssl_autoconfigure_error']);
            }
            if (\array_key_exists('https_enabled', $data)) {
                $object->setHttpsEnabled($data['https_enabled']);
                unset($data['https_enabled']);
            }
            if (\array_key_exists('hsts_enabled', $data)) {
                $object->setHstsEnabled($data['hsts_enabled']);
                unset($data['hsts_enabled']);
            }
            if (\array_key_exists('created', $data)) {
                $object->setCreated($data['created']);
                unset($data['created']);
            }
            if (\array_key_exists('wildcard_redirect', $data)) {
                $object->setWildcardRedirect($data['wildcard_redirect']);
                unset($data['wildcard_redirect']);
            }
            if (\array_key_exists('validation_status', $data)) {
                $object->setValidationStatus($data['validation_status']);
                unset($data['validation_status']);
            }
            if (\array_key_exists('validation_error', $data)) {
                $object->setValidationError($data['validation_error']);
                unset($data['validation_error']);
            }
            if (\array_key_exists('deeplink_apps', $data)) {
                $values_1 = [];
                foreach ($data['deeplink_apps'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Bitly\Model\MinimalDeeplinkApp::class, 'json', $context);
                }
                $object->setDeeplinkApps($values_1);
                unset($data['deeplink_apps']);
            }
            if (\array_key_exists('upgrade_insecure_requests', $data)) {
                $object->setUpgradeInsecureRequests($data['upgrade_insecure_requests']);
                unset($data['upgrade_insecure_requests']);
            }
            if (\array_key_exists('ssl_cert', $data)) {
                $object->setSslCert($this->denormalizer->denormalize($data['ssl_cert'], \Bitly\Model\PublicSSLCert::class, 'json', $context));
                unset($data['ssl_cert']);
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
            if ($object->isInitialized('customDomain') && null !== $object->getCustomDomain()) {
                $data['custom_domain'] = $object->getCustomDomain();
            }
            if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
                $data['is_active'] = $object->getIsActive();
            }
            if ($object->isInitialized('groupGuids') && null !== $object->getGroupGuids()) {
                $values = [];
                foreach ($object->getGroupGuids() as $value) {
                    $values[] = $value;
                }
                $data['group_guids'] = $values;
            }
            if ($object->isInitialized('sslConfigurationError') && null !== $object->getSslConfigurationError()) {
                $data['ssl_configuration_error'] = $object->getSslConfigurationError();
            }
            if ($object->isInitialized('configurationLastCheckTs') && null !== $object->getConfigurationLastCheckTs()) {
                $data['configuration_last_check_ts'] = $object->getConfigurationLastCheckTs();
            }
            if ($object->isInitialized('rootRedirect') && null !== $object->getRootRedirect()) {
                $data['root_redirect'] = $object->getRootRedirect();
            }
            if ($object->isInitialized('httpsBitlinks') && null !== $object->getHttpsBitlinks()) {
                $data['https_bitlinks'] = $object->getHttpsBitlinks();
            }
            if ($object->isInitialized('sslAutoconfigureError') && null !== $object->getSslAutoconfigureError()) {
                $data['ssl_autoconfigure_error'] = $object->getSslAutoconfigureError();
            }
            if ($object->isInitialized('httpsEnabled') && null !== $object->getHttpsEnabled()) {
                $data['https_enabled'] = $object->getHttpsEnabled();
            }
            if ($object->isInitialized('hstsEnabled') && null !== $object->getHstsEnabled()) {
                $data['hsts_enabled'] = $object->getHstsEnabled();
            }
            if ($object->isInitialized('created') && null !== $object->getCreated()) {
                $data['created'] = $object->getCreated();
            }
            if ($object->isInitialized('wildcardRedirect') && null !== $object->getWildcardRedirect()) {
                $data['wildcard_redirect'] = $object->getWildcardRedirect();
            }
            if ($object->isInitialized('validationStatus') && null !== $object->getValidationStatus()) {
                $data['validation_status'] = $object->getValidationStatus();
            }
            if ($object->isInitialized('validationError') && null !== $object->getValidationError()) {
                $data['validation_error'] = $object->getValidationError();
            }
            if ($object->isInitialized('deeplinkApps') && null !== $object->getDeeplinkApps()) {
                $values_1 = [];
                foreach ($object->getDeeplinkApps() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['deeplink_apps'] = $values_1;
            }
            if ($object->isInitialized('upgradeInsecureRequests') && null !== $object->getUpgradeInsecureRequests()) {
                $data['upgrade_insecure_requests'] = $object->getUpgradeInsecureRequests();
            }
            if ($object->isInitialized('sslCert') && null !== $object->getSslCert()) {
                $data['ssl_cert'] = $this->normalizer->normalize($object->getSslCert(), 'json', $context);
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
            return [\Bitly\Model\CustomDomainBody::class => false];
        }
    }
} else {
    class CustomDomainBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\CustomDomainBody::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\CustomDomainBody::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\CustomDomainBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('custom_domain', $data)) {
                $object->setCustomDomain($data['custom_domain']);
                unset($data['custom_domain']);
            }
            if (\array_key_exists('is_active', $data)) {
                $object->setIsActive($data['is_active']);
                unset($data['is_active']);
            }
            if (\array_key_exists('group_guids', $data)) {
                $values = [];
                foreach ($data['group_guids'] as $value) {
                    $values[] = $value;
                }
                $object->setGroupGuids($values);
                unset($data['group_guids']);
            }
            if (\array_key_exists('ssl_configuration_error', $data)) {
                $object->setSslConfigurationError($data['ssl_configuration_error']);
                unset($data['ssl_configuration_error']);
            }
            if (\array_key_exists('configuration_last_check_ts', $data)) {
                $object->setConfigurationLastCheckTs($data['configuration_last_check_ts']);
                unset($data['configuration_last_check_ts']);
            }
            if (\array_key_exists('root_redirect', $data)) {
                $object->setRootRedirect($data['root_redirect']);
                unset($data['root_redirect']);
            }
            if (\array_key_exists('https_bitlinks', $data)) {
                $object->setHttpsBitlinks($data['https_bitlinks']);
                unset($data['https_bitlinks']);
            }
            if (\array_key_exists('ssl_autoconfigure_error', $data)) {
                $object->setSslAutoconfigureError($data['ssl_autoconfigure_error']);
                unset($data['ssl_autoconfigure_error']);
            }
            if (\array_key_exists('https_enabled', $data)) {
                $object->setHttpsEnabled($data['https_enabled']);
                unset($data['https_enabled']);
            }
            if (\array_key_exists('hsts_enabled', $data)) {
                $object->setHstsEnabled($data['hsts_enabled']);
                unset($data['hsts_enabled']);
            }
            if (\array_key_exists('created', $data)) {
                $object->setCreated($data['created']);
                unset($data['created']);
            }
            if (\array_key_exists('wildcard_redirect', $data)) {
                $object->setWildcardRedirect($data['wildcard_redirect']);
                unset($data['wildcard_redirect']);
            }
            if (\array_key_exists('validation_status', $data)) {
                $object->setValidationStatus($data['validation_status']);
                unset($data['validation_status']);
            }
            if (\array_key_exists('validation_error', $data)) {
                $object->setValidationError($data['validation_error']);
                unset($data['validation_error']);
            }
            if (\array_key_exists('deeplink_apps', $data)) {
                $values_1 = [];
                foreach ($data['deeplink_apps'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Bitly\Model\MinimalDeeplinkApp::class, 'json', $context);
                }
                $object->setDeeplinkApps($values_1);
                unset($data['deeplink_apps']);
            }
            if (\array_key_exists('upgrade_insecure_requests', $data)) {
                $object->setUpgradeInsecureRequests($data['upgrade_insecure_requests']);
                unset($data['upgrade_insecure_requests']);
            }
            if (\array_key_exists('ssl_cert', $data)) {
                $object->setSslCert($this->denormalizer->denormalize($data['ssl_cert'], \Bitly\Model\PublicSSLCert::class, 'json', $context));
                unset($data['ssl_cert']);
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
            if ($object->isInitialized('customDomain') && null !== $object->getCustomDomain()) {
                $data['custom_domain'] = $object->getCustomDomain();
            }
            if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
                $data['is_active'] = $object->getIsActive();
            }
            if ($object->isInitialized('groupGuids') && null !== $object->getGroupGuids()) {
                $values = [];
                foreach ($object->getGroupGuids() as $value) {
                    $values[] = $value;
                }
                $data['group_guids'] = $values;
            }
            if ($object->isInitialized('sslConfigurationError') && null !== $object->getSslConfigurationError()) {
                $data['ssl_configuration_error'] = $object->getSslConfigurationError();
            }
            if ($object->isInitialized('configurationLastCheckTs') && null !== $object->getConfigurationLastCheckTs()) {
                $data['configuration_last_check_ts'] = $object->getConfigurationLastCheckTs();
            }
            if ($object->isInitialized('rootRedirect') && null !== $object->getRootRedirect()) {
                $data['root_redirect'] = $object->getRootRedirect();
            }
            if ($object->isInitialized('httpsBitlinks') && null !== $object->getHttpsBitlinks()) {
                $data['https_bitlinks'] = $object->getHttpsBitlinks();
            }
            if ($object->isInitialized('sslAutoconfigureError') && null !== $object->getSslAutoconfigureError()) {
                $data['ssl_autoconfigure_error'] = $object->getSslAutoconfigureError();
            }
            if ($object->isInitialized('httpsEnabled') && null !== $object->getHttpsEnabled()) {
                $data['https_enabled'] = $object->getHttpsEnabled();
            }
            if ($object->isInitialized('hstsEnabled') && null !== $object->getHstsEnabled()) {
                $data['hsts_enabled'] = $object->getHstsEnabled();
            }
            if ($object->isInitialized('created') && null !== $object->getCreated()) {
                $data['created'] = $object->getCreated();
            }
            if ($object->isInitialized('wildcardRedirect') && null !== $object->getWildcardRedirect()) {
                $data['wildcard_redirect'] = $object->getWildcardRedirect();
            }
            if ($object->isInitialized('validationStatus') && null !== $object->getValidationStatus()) {
                $data['validation_status'] = $object->getValidationStatus();
            }
            if ($object->isInitialized('validationError') && null !== $object->getValidationError()) {
                $data['validation_error'] = $object->getValidationError();
            }
            if ($object->isInitialized('deeplinkApps') && null !== $object->getDeeplinkApps()) {
                $values_1 = [];
                foreach ($object->getDeeplinkApps() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['deeplink_apps'] = $values_1;
            }
            if ($object->isInitialized('upgradeInsecureRequests') && null !== $object->getUpgradeInsecureRequests()) {
                $data['upgrade_insecure_requests'] = $object->getUpgradeInsecureRequests();
            }
            if ($object->isInitialized('sslCert') && null !== $object->getSslCert()) {
                $data['ssl_cert'] = $this->normalizer->normalize($object->getSslCert(), 'json', $context);
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
            return [\Bitly\Model\CustomDomainBody::class => false];
        }
    }
}
