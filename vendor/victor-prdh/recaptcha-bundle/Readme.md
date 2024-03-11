# VictorPrdhRecaptchaBundle

![bundle version](https://img.shields.io/badge/version-1.7.1-blue)

Easy implementation of Google Recaptcha with symfony.

## Installation

Before starting the bundle installation, you need to register reCAPTCHA keys
[here](https://g.co/recaptcha/v3).

Use [composer](https://getcomposer.org) to install this bundle.

```bash
composer require victor-prdh/recaptcha-bundle
```
### With Symfony flex

You can quickly configure this bundle by using symfony/flex:
- answer **no** for `google/recaptcha` 
- answer **yes** for `victor-prdh/recaptcha-bundle` 


If everything is good, you must have the bundle registred in the *"bundles.php"* file of your config folder (*"config/bundles.php"*):
```php 
//config/bunldes.php
<?php
return [
    ...
    VictorPrdh\RecaptchaBundle\RecaptchaBundle::class => ['all' => true]
];
```
Just add it if you dont see this line.

You can directly go to [Usage section](#Usage)

### Without Symfony flex

If you don't want / you can't  use the flex recipe you can create a *"recaptcha.yaml"* file in your config folder (*"config/packages/recaptcha.yaml"*): 

```yaml
#config/packages/recaptcha.yaml
recaptcha:
  google_site_key: '%env(GOOGLE_RECAPTCHA_SITE_KEY)%'
  google_secret_key: '%env(GOOGLE_RECAPTCHA_SECRET_KEY)%'
```


Once you created this config file, you can go in your *".env"* file and add this:

```env
###> victor-prdh/recaptcha ###
# https://www.google.com/recaptcha/admin  <--- get keys here
GOOGLE_RECAPTCHA_SITE_KEY='your site key'
GOOGLE_RECAPTCHA_SECRET_KEY='your secret key'
###< victor-prdh/recaptcha ###
```

It's time for update the bundle, if you don't do it, your keys will not be used by the bundle.

```bash
composer update victor-prdh/recaptcha-bundle
```

## Usage

### Integration in Symfony Form
You have now a *"ReCaptchaType"* class available for all your forms. You can use it in your FormBuilder like a *"TextType*" or *"PasswordType"*:

```php
<?php

namespace App\Form;

use VictorPrdh\RecaptchaBundle\Form\ReCaptchaType;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add("recaptcha", ReCaptchaType::class);

        // If you want an "invisible" recaptcha protection use this:
        // $builder->add("recaptcha", ReCaptchaType::class, ["type" => "invisible"]);
    }
}
```

### Display error on your Twig view

Once you create the form, you render it as usual with Symfony. You can show it in your twig file like that:
```twig
{{ form_start(form) }}

    {{ form_row(form.recaptcha) }} 
    {# must be the same name of this put on the FormBuilder #}

    {{ form_errors(form.recaptcha) }}
    {# That will display the error of the captcha to user #}

{{ form_end(form) }}
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

If you speak a language without translation, you're help is welcome.

## License
[MIT](https://choosealicense.com/licenses/mit/)
