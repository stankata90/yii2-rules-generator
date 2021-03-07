<?php


    namespace stankata90\Yii2RulesGenerator\rules;


    class RegularExpression_ extends BaseRules
    {
        /**
         * @param bool whether to invert the validation logic. Defaults to false. If set to true,
         * the regular expression defined via [[pattern]] should NOT match the attribute value.
         */
        function not( $bool ) : self
        {
            $this->_rules['not'] = $bool;

            return $this;
        }

        /**
         * @param String_ the regular expression to be matched with
         */
        function pattern( $string ) : self
        {
            $this->_rules['pattern'] = $string;

            return $this;
        }
    }