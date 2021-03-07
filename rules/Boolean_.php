<?php


    namespace stankata90\Yii2RulesGenerator\rules;


    class Boolean_ extends BaseRules
    {
        /**
         * @param mixed the value representing false status. Defaults to '0'.
         */
        function falseValue( $mixed ) : self
        {
            $this->_rules['falseValue'] = $mixed;

            return $this;
        }

        /**
         * @param bool whether the comparison to [[trueValue]] and [[falseValue]] is strict.
         * When this is true, the attribute value and type must both match those of [[trueValue]] or [[falseValue]].
         * Defaults to false, meaning only the value needs to be matched.
         */
        function strict( $bool ) : self
        {
            $this->_rules['strict'] = $bool;

            return $this;
        }

        /**
         * @param mixed the value representing true status. Defaults to '1'.
         */
        function trueValue( $mixed ) : self
        {
            $this->_rules['trueValue'] = $mixed;

            return $this;
        }
    }