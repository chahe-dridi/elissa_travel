<?php

namespace ContainerUdxx0CV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_RegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormRegistryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormRegistry.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DependencyInjection'.\DIRECTORY_SEPARATOR.'DependencyInjectionExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'ResolvedFormTypeFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'Proxy'.\DIRECTORY_SEPARATOR.'ResolvedTypeFactoryDataCollectorProxy.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'ResolvedFormTypeFactory.php';

        return $container->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Form\\AirportType' => ['privates', 'App\\Form\\AirportType', 'getAirportTypeService', true],
            'App\\Form\\BlogType' => ['privates', 'App\\Form\\BlogType', 'getBlogTypeService', true],
            'App\\Form\\ChambreCollectionType' => ['privates', 'App\\Form\\ChambreCollectionType', 'getChambreCollectionTypeService', true],
            'App\\Form\\ChambreType' => ['privates', 'App\\Form\\ChambreType', 'getChambreTypeService', true],
            'App\\Form\\EventType' => ['privates', 'App\\Form\\EventType', 'getEventTypeService', true],
            'App\\Form\\ForgotPasswordType' => ['privates', 'App\\Form\\ForgotPasswordType', 'getForgotPasswordTypeService', true],
            'App\\Form\\HotelType' => ['privates', 'App\\Form\\HotelType', 'getHotelTypeService', true],
            'App\\Form\\LoginFormType' => ['privates', 'App\\Form\\LoginFormType', 'getLoginFormTypeService', true],
            'App\\Form\\ProgrammeType' => ['privates', 'App\\Form\\ProgrammeType', 'getProgrammeTypeService', true],
            'App\\Form\\RegistrationFormType' => ['privates', 'App\\Form\\RegistrationFormType', 'getRegistrationFormTypeService', true],
            'App\\Form\\RegistrationFormType1' => ['privates', 'App\\Form\\RegistrationFormType1', 'getRegistrationFormType1Service', true],
            'App\\Form\\ReservationEventType' => ['privates', 'App\\Form\\ReservationEventType', 'getReservationEventTypeService', true],
            'App\\Form\\ReservationHotelType' => ['privates', 'App\\Form\\ReservationHotelType', 'getReservationHotelTypeService', true],
            'App\\Form\\ReservationVoyageType' => ['privates', 'App\\Form\\ReservationVoyageType', 'getReservationVoyageTypeService', true],
            'App\\Form\\Reservationvol1Type' => ['privates', 'App\\Form\\Reservationvol1Type', 'getReservationvol1TypeService', true],
            'App\\Form\\ReservationvolType' => ['privates', 'App\\Form\\ReservationvolType', 'getReservationvolTypeService', true],
            'App\\Form\\ResetPasswordType' => ['privates', 'App\\Form\\ResetPasswordType', 'getResetPasswordTypeService', true],
            'App\\Form\\TypeEvenemntType' => ['privates', 'App\\Form\\TypeEvenemntType', 'getTypeEvenemntTypeService', true],
            'App\\Form\\UserAddType' => ['privates', 'App\\Form\\UserAddType', 'getUserAddTypeService', true],
            'App\\Form\\UserEditType' => ['privates', 'App\\Form\\UserEditType', 'getUserEditTypeService', true],
            'App\\Form\\UserProfileType' => ['privates', 'App\\Form\\UserProfileType', 'getUserProfileTypeService', true],
            'App\\Form\\UserSearchType' => ['privates', 'App\\Form\\UserSearchType', 'getUserSearchTypeService', true],
            'App\\Form\\UserType' => ['privates', 'App\\Form\\UserType', 'getUserTypeService', true],
            'App\\Form\\VolType' => ['privates', 'App\\Form\\VolType', 'getVolTypeService', true],
            'App\\Form\\VolclassType' => ['privates', 'App\\Form\\VolclassType', 'getVolclassTypeService', true],
            'App\\Form\\VoyageSearchType' => ['privates', 'App\\Form\\VoyageSearchType', 'getVoyageSearchTypeService', true],
            'App\\Form\\VoyageType' => ['privates', 'App\\Form\\VoyageType', 'getVoyageTypeService', true],
            'App\\Form\\reservationtype' => ['privates', 'App\\Form\\reservationtype', 'getReservationtypeService', true],
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => ['privates', 'form.type.color', 'getForm_Type_ColorService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['services', '.container.private.form.type.file', 'get_Container_Private_Form_Type_FileService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService', true],
            'VictorPrdh\\RecaptchaBundle\\Form\\ReCaptchaType' => ['services', 'victor_prdh_recaptcha_bundle.recaptcha_type', 'getVictorPrdhRecaptchaBundle_RecaptchaTypeService', true],
        ], [
            'App\\Form\\AirportType' => '?',
            'App\\Form\\BlogType' => '?',
            'App\\Form\\ChambreCollectionType' => '?',
            'App\\Form\\ChambreType' => '?',
            'App\\Form\\EventType' => '?',
            'App\\Form\\ForgotPasswordType' => '?',
            'App\\Form\\HotelType' => '?',
            'App\\Form\\LoginFormType' => '?',
            'App\\Form\\ProgrammeType' => '?',
            'App\\Form\\RegistrationFormType' => '?',
            'App\\Form\\RegistrationFormType1' => '?',
            'App\\Form\\ReservationEventType' => '?',
            'App\\Form\\ReservationHotelType' => '?',
            'App\\Form\\ReservationVoyageType' => '?',
            'App\\Form\\Reservationvol1Type' => '?',
            'App\\Form\\ReservationvolType' => '?',
            'App\\Form\\ResetPasswordType' => '?',
            'App\\Form\\TypeEvenemntType' => '?',
            'App\\Form\\UserAddType' => '?',
            'App\\Form\\UserEditType' => '?',
            'App\\Form\\UserProfileType' => '?',
            'App\\Form\\UserSearchType' => '?',
            'App\\Form\\UserType' => '?',
            'App\\Form\\VolType' => '?',
            'App\\Form\\VolclassType' => '?',
            'App\\Form\\VoyageSearchType' => '?',
            'App\\Form\\VoyageType' => '?',
            'App\\Form\\reservationtype' => '?',
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
            'VictorPrdh\\RecaptchaBundle\\Form\\ReCaptchaType' => '?',
        ]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.form.transformation_failure_handling'] ?? $container->load('getForm_TypeExtension_Form_TransformationFailureHandlingService'));
            yield 1 => ($container->privates['form.type_extension.form.http_foundation'] ?? $container->load('getForm_TypeExtension_Form_HttpFoundationService'));
            yield 2 => ($container->privates['form.type_extension.form.validator'] ?? $container->load('getForm_TypeExtension_Form_ValidatorService'));
            yield 3 => ($container->privates['form.type_extension.upload.validator'] ?? $container->load('getForm_TypeExtension_Upload_ValidatorService'));
            yield 4 => ($container->privates['form.type_extension.csrf'] ?? $container->load('getForm_TypeExtension_CsrfService'));
            yield 5 => ($container->privates['form.type_extension.form.data_collector'] ?? $container->load('getForm_TypeExtension_Form_DataCollectorService'));
        }, 6), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.repeated.validator'] ?? ($container->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.submit.validator'] ?? ($container->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()));
        }, 1)], new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_guesser.validator'] ?? $container->load('getForm_TypeGuesser_ValidatorService'));
            yield 1 => ($container->privates['form.type_guesser.doctrine'] ?? $container->load('getForm_TypeGuesser_DoctrineService'));
        }, 2))], new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), ($container->privates['data_collector.form'] ?? $container->getDataCollector_FormService())));
    }
}
