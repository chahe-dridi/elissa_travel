<?php

namespace ContainerTzFRMLM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_FormDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DebugCommand.php';

        $container->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($container->privates['form.registry'] ?? $container->load('getForm_RegistryService')), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 3 => 'VictorPrdh\\RecaptchaBundle\\Form'], [0 => 'App\\Form\\AirportType', 1 => 'App\\Form\\BlogType', 2 => 'App\\Form\\ChambreCollectionType', 3 => 'App\\Form\\ChambreType', 4 => 'App\\Form\\EventType', 5 => 'App\\Form\\ForgotPasswordType', 6 => 'App\\Form\\HotelType', 7 => 'App\\Form\\LoginFormType', 8 => 'App\\Form\\ProgrammeType', 9 => 'App\\Form\\RegistrationFormType', 10 => 'App\\Form\\RegistrationFormType1', 11 => 'App\\Form\\ReservationEventType', 12 => 'App\\Form\\ReservationHotelType', 13 => 'App\\Form\\ReservationVoyageType', 14 => 'App\\Form\\Reservationvol1Type', 15 => 'App\\Form\\ReservationvolType', 16 => 'App\\Form\\ResetPasswordType', 17 => 'App\\Form\\TypeEvenemntType', 18 => 'App\\Form\\UserAddType', 19 => 'App\\Form\\UserEditType', 20 => 'App\\Form\\UserProfileType', 21 => 'App\\Form\\UserSearchType', 22 => 'App\\Form\\UserType', 23 => 'App\\Form\\VolType', 24 => 'App\\Form\\VolclassType', 25 => 'App\\Form\\VoyageSearchType', 26 => 'App\\Form\\VoyageType', 27 => 'App\\Form\\reservationtype', 28 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 29 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 30 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 31 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType', 32 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 33 => 'VictorPrdh\\RecaptchaBundle\\Form\\ReCaptchaType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($container->privates['debug.file_link_formatter'] ?? $container->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:form');
        $instance->setDescription('Display form type information');

        return $instance;
    }
}
