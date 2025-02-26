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
    class LaunchpadPresetThemeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\LaunchpadPresetTheme::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\LaunchpadPresetTheme::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\LaunchpadPresetTheme();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('theme_id', $data)) {
                $object->setThemeId($data['theme_id']);
                unset($data['theme_id']);
            }
            if (\array_key_exists('display_name', $data)) {
                $object->setDisplayName($data['display_name']);
                unset($data['display_name']);
            }
            if (\array_key_exists('background', $data)) {
                $object->setBackground($data['background']);
                unset($data['background']);
            }
            if (\array_key_exists('launchpad_text_color', $data)) {
                $object->setLaunchpadTextColor($data['launchpad_text_color']);
                unset($data['launchpad_text_color']);
            }
            if (\array_key_exists('description_color', $data)) {
                $object->setDescriptionColor($data['description_color']);
                unset($data['description_color']);
            }
            if (\array_key_exists('avatar_background', $data)) {
                $object->setAvatarBackground($data['avatar_background']);
                unset($data['avatar_background']);
            }
            if (\array_key_exists('button_text_color', $data)) {
                $object->setButtonTextColor($data['button_text_color']);
                unset($data['button_text_color']);
            }
            if (\array_key_exists('button_background', $data)) {
                $object->setButtonBackground($data['button_background']);
                unset($data['button_background']);
            }
            if (\array_key_exists('is_active', $data)) {
                $object->setIsActive($data['is_active']);
                unset($data['is_active']);
            }
            if (\array_key_exists('layout', $data)) {
                $object->setLayout($data['layout']);
                unset($data['layout']);
            }
            if (\array_key_exists('icon_gradient', $data)) {
                $object->setIconGradient($data['icon_gradient']);
                unset($data['icon_gradient']);
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
            if ($object->isInitialized('themeId') && null !== $object->getThemeId()) {
                $data['theme_id'] = $object->getThemeId();
            }
            if ($object->isInitialized('displayName') && null !== $object->getDisplayName()) {
                $data['display_name'] = $object->getDisplayName();
            }
            if ($object->isInitialized('background') && null !== $object->getBackground()) {
                $data['background'] = $object->getBackground();
            }
            if ($object->isInitialized('launchpadTextColor') && null !== $object->getLaunchpadTextColor()) {
                $data['launchpad_text_color'] = $object->getLaunchpadTextColor();
            }
            if ($object->isInitialized('descriptionColor') && null !== $object->getDescriptionColor()) {
                $data['description_color'] = $object->getDescriptionColor();
            }
            if ($object->isInitialized('avatarBackground') && null !== $object->getAvatarBackground()) {
                $data['avatar_background'] = $object->getAvatarBackground();
            }
            if ($object->isInitialized('buttonTextColor') && null !== $object->getButtonTextColor()) {
                $data['button_text_color'] = $object->getButtonTextColor();
            }
            if ($object->isInitialized('buttonBackground') && null !== $object->getButtonBackground()) {
                $data['button_background'] = $object->getButtonBackground();
            }
            if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
                $data['is_active'] = $object->getIsActive();
            }
            if ($object->isInitialized('layout') && null !== $object->getLayout()) {
                $data['layout'] = $object->getLayout();
            }
            if ($object->isInitialized('iconGradient') && null !== $object->getIconGradient()) {
                $data['icon_gradient'] = $object->getIconGradient();
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
            return [\Bitly\Model\LaunchpadPresetTheme::class => false];
        }
    }
} else {
    class LaunchpadPresetThemeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Bitly\Model\LaunchpadPresetTheme::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Bitly\Model\LaunchpadPresetTheme::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Bitly\Model\LaunchpadPresetTheme();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('theme_id', $data)) {
                $object->setThemeId($data['theme_id']);
                unset($data['theme_id']);
            }
            if (\array_key_exists('display_name', $data)) {
                $object->setDisplayName($data['display_name']);
                unset($data['display_name']);
            }
            if (\array_key_exists('background', $data)) {
                $object->setBackground($data['background']);
                unset($data['background']);
            }
            if (\array_key_exists('launchpad_text_color', $data)) {
                $object->setLaunchpadTextColor($data['launchpad_text_color']);
                unset($data['launchpad_text_color']);
            }
            if (\array_key_exists('description_color', $data)) {
                $object->setDescriptionColor($data['description_color']);
                unset($data['description_color']);
            }
            if (\array_key_exists('avatar_background', $data)) {
                $object->setAvatarBackground($data['avatar_background']);
                unset($data['avatar_background']);
            }
            if (\array_key_exists('button_text_color', $data)) {
                $object->setButtonTextColor($data['button_text_color']);
                unset($data['button_text_color']);
            }
            if (\array_key_exists('button_background', $data)) {
                $object->setButtonBackground($data['button_background']);
                unset($data['button_background']);
            }
            if (\array_key_exists('is_active', $data)) {
                $object->setIsActive($data['is_active']);
                unset($data['is_active']);
            }
            if (\array_key_exists('layout', $data)) {
                $object->setLayout($data['layout']);
                unset($data['layout']);
            }
            if (\array_key_exists('icon_gradient', $data)) {
                $object->setIconGradient($data['icon_gradient']);
                unset($data['icon_gradient']);
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
            if ($object->isInitialized('themeId') && null !== $object->getThemeId()) {
                $data['theme_id'] = $object->getThemeId();
            }
            if ($object->isInitialized('displayName') && null !== $object->getDisplayName()) {
                $data['display_name'] = $object->getDisplayName();
            }
            if ($object->isInitialized('background') && null !== $object->getBackground()) {
                $data['background'] = $object->getBackground();
            }
            if ($object->isInitialized('launchpadTextColor') && null !== $object->getLaunchpadTextColor()) {
                $data['launchpad_text_color'] = $object->getLaunchpadTextColor();
            }
            if ($object->isInitialized('descriptionColor') && null !== $object->getDescriptionColor()) {
                $data['description_color'] = $object->getDescriptionColor();
            }
            if ($object->isInitialized('avatarBackground') && null !== $object->getAvatarBackground()) {
                $data['avatar_background'] = $object->getAvatarBackground();
            }
            if ($object->isInitialized('buttonTextColor') && null !== $object->getButtonTextColor()) {
                $data['button_text_color'] = $object->getButtonTextColor();
            }
            if ($object->isInitialized('buttonBackground') && null !== $object->getButtonBackground()) {
                $data['button_background'] = $object->getButtonBackground();
            }
            if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
                $data['is_active'] = $object->getIsActive();
            }
            if ($object->isInitialized('layout') && null !== $object->getLayout()) {
                $data['layout'] = $object->getLayout();
            }
            if ($object->isInitialized('iconGradient') && null !== $object->getIconGradient()) {
                $data['icon_gradient'] = $object->getIconGradient();
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
            return [\Bitly\Model\LaunchpadPresetTheme::class => false];
        }
    }
}
