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
    class ModuleSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\ModuleSettings::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\ModuleSettings::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\ModuleSettings();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('allow_edits', $data)) {
                $object->setAllowEdits($data['allow_edits']);
                unset($data['allow_edits']);
            }
            if (\array_key_exists('visualization', $data)) {
                $object->setVisualization($this->denormalizer->denormalize($data['visualization'], \Bitly\Model\ChartVisualization::class, 'json', $context));
                unset($data['visualization']);
            }
            if (\array_key_exists('chart_type', $data)) {
                $object->setChartType($data['chart_type']);
                unset($data['chart_type']);
            }
            if (\array_key_exists('view_metric_selection', $data)) {
                $object->setViewMetricSelection($data['view_metric_selection']);
                unset($data['view_metric_selection']);
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
            if ($object->isInitialized('allowEdits') && null !== $object->getAllowEdits()) {
                $data['allow_edits'] = $object->getAllowEdits();
            }
            if ($object->isInitialized('visualization') && null !== $object->getVisualization()) {
                $data['visualization'] = $this->normalizer->normalize($object->getVisualization(), 'json', $context);
            }
            if ($object->isInitialized('chartType') && null !== $object->getChartType()) {
                $data['chart_type'] = $object->getChartType();
            }
            if ($object->isInitialized('viewMetricSelection') && null !== $object->getViewMetricSelection()) {
                $data['view_metric_selection'] = $object->getViewMetricSelection();
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
            return [\Bitly\Model\ModuleSettings::class => false];
        }
    }
} else {
    class ModuleSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\ModuleSettings::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\ModuleSettings::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\ModuleSettings();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('allow_edits', $data)) {
                $object->setAllowEdits($data['allow_edits']);
                unset($data['allow_edits']);
            }
            if (\array_key_exists('visualization', $data)) {
                $object->setVisualization($this->denormalizer->denormalize($data['visualization'], \Bitly\Model\ChartVisualization::class, 'json', $context));
                unset($data['visualization']);
            }
            if (\array_key_exists('chart_type', $data)) {
                $object->setChartType($data['chart_type']);
                unset($data['chart_type']);
            }
            if (\array_key_exists('view_metric_selection', $data)) {
                $object->setViewMetricSelection($data['view_metric_selection']);
                unset($data['view_metric_selection']);
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
            if ($object->isInitialized('allowEdits') && null !== $object->getAllowEdits()) {
                $data['allow_edits'] = $object->getAllowEdits();
            }
            if ($object->isInitialized('visualization') && null !== $object->getVisualization()) {
                $data['visualization'] = $this->normalizer->normalize($object->getVisualization(), 'json', $context);
            }
            if ($object->isInitialized('chartType') && null !== $object->getChartType()) {
                $data['chart_type'] = $object->getChartType();
            }
            if ($object->isInitialized('viewMetricSelection') && null !== $object->getViewMetricSelection()) {
                $data['view_metric_selection'] = $object->getViewMetricSelection();
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
            return [\Bitly\Model\ModuleSettings::class => false];
        }
    }
}
