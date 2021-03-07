# yii2-rules-generator
[![PHP from Packagist](https://img.shields.io/github/languages/code-size/stankata90/yii2-rules-generator?style=flat-square)](https://packagist.org/packages/stankata90/yii2-rules-generator)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/stankata90/yii2-rules-generator.svg?style=flat-square)](https://packagist.org/packages/stankata90/yii2-rules-generator)
[![Latest Stable Version](https://img.shields.io/packagist/v/stankata90/yii2-rules-generator?include_prereleases&style=flat-square)](https://packagist.org/packages/stankata90/yii2-rules-generator)
[![Total Downloads](https://img.shields.io/packagist/dt/stankata90/yii2-rules-generator.svg?style=flat-square)](https://packagist.org/packages/stankata90/yii2-rules-generator)


Generate quick and easy arrays for model rules, auto-complete tips for validators and their options.

## Highlights

- Simple installation
- Simplify things

## Installation

Install in the usual way with Composer. Add the following to the require section of your composer.json file:

```bash
"stankata90/yii2-rules-generator": "*"
```

or run

```bash
composer require stankata90/yii2-rules-generator
```

## Documentation

#### Example standard model file:

```php
<?php

    namespace frontend\models;

    use Yii;
    use yii\base\Model;

    /**
     * ContactForm is the model behind the contact form.
     */
    class ContactForm extends Model
    {

        public $name;
        public $email;
        public $subject;
        public $body;
        public $verifyCode;


        /**
         * {@inheritdoc}
         */
        public function rules()
        {
            return [
                // name, email, subject and body are required
                [ [ 'name', 'email', 'subject', 'body' ], 'required' ],
                // email has to be a valid email address
                [ 'email', 'email' ],
                // verifyCode needs to be entered correctly
                [ 'verifyCode', 'captcha' ],
            ];
        }
    }
?>
```

#### Install the  Generator in model

To access the generator, you need to use the trait RulesGenerator

```php
<?php

    namespace frontend\models;

    use stankata90\Yii2RulesGenerator\RulesGenerator;
    use Yii;
    use yii\base\Model;

    /**
     * ContactForm is the model behind the contact form.
     */
    class ContactForm extends Model
    {
        use RulesGenerator;
        
        public $name;
        public $email;
        public $subject;
        public $body;
        public $verifyCode;


        /**
         * {@inheritdoc}
         */
        public function rules()
        {
            return [
                // name, email, subject and body are required
                [ [ 'name', 'email', 'subject', 'body' ], 'required' ],
                // email has to be a valid email address
                [ 'email', 'email' ],
                // verifyCode needs to be entered correctly
                [ 'verifyCode', 'captcha' ],
            ];
        }
    }
?>
```
#### Using the generator

After using trait, another "rulesGenerator" method is presented in the context of the model. Using this method we will generate arrays with rules for yii2.

```php
<?php
    class ContactForm extends Model
    {
        use RulesGenerator;
        
        public $name;
        public $email;
        public $subject;
        public $body;
        public $verifyCode;

        /**
         * {@inheritdoc}
         */
        public function rules()
        {
            $r = $this->rulesGenerator();

            $r->required([ 'name', 'email', 'subject', 'body' ]);
            $r->email('email');
            $r->string('name')->min(10)->max(100)->tooShort('To short message')->tooLong('To long message');
            $r->captcha('verifyCode');
            
            // using custom in rule
            $r->string('name_2')->custom('min', 10)->custom('max', 100)->custom('tooShort', 'To short message')->custom('tooLong', 'To long message');
    
            return $this->rulesGenerator()->getRules();
        }
    }
?>
```

#### Create a Template.

You can create templates with initial rule settings, this would save unnecessary repetition of rules. To create a template, extend the Custom_.php file no matter which folder it is in. For example, "frontend\rules\StringRules.php"


```php
<?php

    namespace frontend\rules;

    use stankata90\Yii2RulesGenerator\rules\Custom_;

    class StringRules extends Custom_
    {

        public function template_string10() {
            return $this->rulesGenerator()->string( $this->getAttributes() )->max(10);
        }

        public function template_string255() {
            return $this->rulesGenerator()->string( $this->getAttributes() )->max(255);
        }

        public function template_string100() {
           return $this->rulesGenerator()->string( $this->getAttributes() )->max(100);
        }

    }
?>
```

#### Using a Template.

```php
    public function rules()
    {
        $r = $this->rulesGenerator();

        $r->required([ 'name', 'email', 'subject', 'body' ]);
        $r->email('email');
        $r->string('name')->min(10)->max(100)->tooShort('To short message')->tooLong('To long message');
        $r->captcha('verifyCode');
        
        // using custom in rule
        $r->string('name_2')->custom('min', 10)->custom('max', 100)->custom('tooShort', 'To short message')->custom('tooLong', 'To long message');

        // use the string100 template and add more settings
        $customString = ( new StringRules('name' ) )->template_string100()->message('Custom message');
        
        // use the string255 template
        $customString255 = ( new StringRules('name' ) )->template_string255();

        // send $customString and $customString255 to rulesGenerator before get all the rules
        return $this->rulesGenerator( [ $customString, $customString255 ] )->getRules();
    }
```

