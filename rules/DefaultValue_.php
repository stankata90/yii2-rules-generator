<?php


    namespace stankata90\Yii2RulesGenerator\rules;


    class DefaultValue_ extends BaseRules
    {
        /**
         * @param mixed the default value or an anonymous function that returns the default value which will
         * be assigned to the attributes being validated if they are empty. The signature of the anonymous function
         * should be as follows,
         *
         * ```php
         * function($model, $attribute) {
         *     // compute value
         *     return $value;
         * }
         * ```
         */
        function value( $mixed ) : self
        {
            $this->_rules['value'] = $mixed;

            return $this;
        }

    }