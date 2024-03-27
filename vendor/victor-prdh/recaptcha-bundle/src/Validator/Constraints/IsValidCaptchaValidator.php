<?php

namespace VictorPrdh\RecaptchaBundle\Validator\Constraints;

use LogicException;
use ReCaptcha\ReCaptcha;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class IsValidCaptchaValidator extends ConstraintValidator
{

    /**
     * @var ReCaptcha
     */
    private ReCaptcha $reCaptcha;

    /**
     * Request Stack.
     *
     * @var RequestStack
     */
    protected RequestStack $requestStack;

    /**
     * Request Stack.
     *
     * @var TranslatorInterface
     */
    protected TranslatorInterface $translator;

    public function __construct(ReCaptcha $reCaptcha, RequestStack $requestStack,TranslatorInterface $translator) {
        $this->reCaptcha = $reCaptcha;
        $this->requestStack = $requestStack;
        $this->translator = $translator;
    }

    public function validate($value, Constraint $constraint) :void
    {
        $request = $this->requestStack->getMainRequest();
        $result = $this->reCaptcha
            ->setExpectedHostname($request->getHost())
            ->verify($request->request->get('g-recaptcha-response'), $request->getClientIp());

            if(in_array('missing-input-response', $result->getErrorCodes())) {
                $this->context->addViolation($this->translator->trans('verify.captcha', array(), 'victorprdh_recaptcha'));
            }

            if(in_array('timeout-or-duplicate', $result->getErrorCodes())) {
                $this->context->addViolation($this->translator->trans('timeout.captcha', array(), 'victorprdh_recaptcha'));
            }

            if(in_array('missing-input-secret', $result->getErrorCodes())) {
                throw new LogicException($this->translator->trans('missinginput.captcha', array(), 'victorprdh_recaptcha'));
            }

            if(in_array('hostname-mismatch', $result->getErrorCodes())) {
                throw new LogicException($this->translator->trans('hostname.captcha', array(), 'victorprdh_recaptcha'));
            }

            if(in_array('invalid-input-secret', $result->getErrorCodes())) {
                throw new LogicException($this->translator->trans('invalidinput.captcha', array(), 'victorprdh_recaptcha'));
            }

            if(in_array('bad-request', $result->getErrorCodes())) {
                throw new LogicException($this->translator->trans('badrequest.captcha', array(), 'victorprdh_recaptcha'));
            }

            if (!$result->isSuccess()) {
                $this->context->addViolation($this->translator->trans('invalid.captcha', array(), 'victorprdh_recaptcha'));
            }
    }
}
