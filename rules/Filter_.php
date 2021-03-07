<?php


    namespace stankata90\Yii2RulesGenerator\rules;


    class Filter_ extends BaseRules
    {
        /**
         * @param callable the filter. This can be a global function name, anonymous function, etc.
         * The function signature must be as follows,
         *
         * ```php
         * function foo($value) {
         *     // compute $newValue here
         *     return $newValue;
         * }
         * ```
         */
        function filter( $callable ) : self
        {
            $this->_rules['filter'] = $callable;

            return $this;
        }
        /**
         * @param bool whether the filter should be skipped if an array input is given.
         * If true and an array input is given, the filter will not be applied.
         */
        function skipOnArray( $bool ) : self
        {
            $this->_rules['skipOnArray'] = $bool;

            return $this;
        }
    }