<?php


    namespace stankata90\Yii2RulesGenerator\rules;


    class Range_ extends BaseRules
    {
        /**
         * @param bool whether to allow array type attribute.
         */
        function allowArray( $bool ) : self
        {
            $this->_rules['allowArray'] = $bool;

            return $this;
        }

        /**
         * @param bool whether to invert the validation logic. Defaults to false. If set to true,
         * the attribute value should NOT be among the list of values defined via [[range]].
         */
        function not( $bool ) : self
        {
            $this->_rules['not'] = $bool;

            return $this;
        }

        /**
         * @param array|\Traversable|\Closure a list of valid values that the attribute value should be among or an anonymous function that returns
         * such a list. The signature of the anonymous function should be as follows,
         *
         * ```php
         * function($model, $attribute) {
         *     // compute range
         *     return $range;
         * }
         * ```
         */
        function range( $array_traversable_closurel ) : self
        {
            $this->_rules['range'] = $array_traversable_closurel;

            return $this;
        }

        /**
         * @param bool whether the comparison is strict (both type and value must be the same)
         */
        function strict( $bool ) : self
        {
            $this->_rules['strict'] = $bool;

            return $this;
        }
    }