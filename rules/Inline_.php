<?php


    namespace stankata90\Yii2RulesGenerator\rules;


    class Inline_ extends BaseRules
    {
        /**
         * @param String_|\Closure an anonymous function or the name of a model class method that returns the client validation code.
         * The signature of the method should be like the following:
         *
         * ```php
         * function foo($attribute, $params, $validator)
         * {
         *     return "javascript";
         * }
         * ```
         *
         * where `$attribute` refers to the attribute name to be validated.
         *
         * Please refer to [[clientValidateAttribute()]] for details on how to return client validation code.
         */
        function clientValidate( $string_Closure ) : self
        {
            $this->_rules['clientValidate'] = $string_Closure;

            return $this;
        }

        /**
         * @param String_|\Closure an anonymous function or the name of a model class method that will be
         * called to perform the actual validation. The signature of the method should be like the following:
         *
         * ```php
         * function foo($attribute, $params, $validator)
         * ```
         *
         * - `$attribute` is the name of the attribute to be validated;
         * - `$params` contains the value of [[params]] that you specify when declaring the inline validation rule;
         * - `$validator` is a reference to related [[InlineValidator]] object. This parameter is available since version 2.0.11.
         */
        function method( $string_Closure ) : self
        {
            $this->_rules['method'] = $string_Closure;

            return $this;
        }

        /**
         * @param mixed additional parameters that are passed to the validation method
         */
        function params( $mixed ) : self
        {
            $this->_rules['params'] = $mixed;

            return $this;
        }
    }