<?php

namespace VictorPrdh\RecaptchaBundle\Form;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use ReCaptcha\ReCaptcha;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;
use VictorPrdh\RecaptchaBundle\Validator\Constraints\IsValidCaptcha;

/**
 * Class ReCaptchaType.
 * 
 * 
 * @author Victor Prudhomme <contact@victor-prdh.com>
 */
class ReCaptchaType extends AbstractType
{
    /**
     * @var ReCaptcha
     */
    private $reCaptcha;

    /**
     * @var ParameterBagInterface
     */
    private ParameterBagInterface $parameterBag;


    /**
     * ReCaptchaType constructor.
     *
     * @param ParameterBagInterface $parameterBag
     */
    public function __construct(ParameterBagInterface $parameterBag)
    {
        $this->parameterBag = $parameterBag;
        $this->reCaptcha = new ReCaptcha($this->parameterBag->get('victor_prdh_recaptcha.google_secret_key'));
    }
    
    /**
     * @inheritDoc
     */
    public function buildView(FormView $view, FormInterface $form, array $options) :void
    {
        $view->vars['type'] = $options['type'];
        $view->vars['google_site_key'] = $this->parameterBag->get('victor_prdh_recaptcha.google_site_key');
    }

    /**
     * {@inheritdoc}
     */
    public function getParent(): ?string
    {
        return HiddenType::class;
    }

    public function getBlockPrefix(): string
    {
        return 'recaptcha';
    }

    /**
     * @inheritDoc
     */
    public function configureOptions(OptionsResolver $resolver) :void
    {
        $resolver
            ->setDefault('type', 'checkbox')
            ->setDefault('mapped', false)
            ->setDefault('error_bubbling', false)
            ->setDefault('constraints',new IsValidCaptcha())
            ->setAllowedValues('type', ['checkbox', 'invisible']);
    }
}
