<?php


    namespace stankata90\Yii2RulesGenerator\rules;


    class Required_ extends BaseRules
    {

        /**
         * @param mixed the desired value that the attribute must have.
         * If this is null, the validator will validate that the specified attribute is not empty.
         * If this is set as a value that is not null, the validator will validate that
         * the attribute has a value that is the same as this property value.
         * Defaults to null.
         * @see strict
         */
        function requiredValue( $mixed ) : self
        {
            $this->_rules['requiredValue'] = $mixed;

            return $this;
        }

        /**
         * @param bool whether the comparison between the attribute value and [[requiredValue]] is strict.
         * When this is true, both the values and types must match.
         * Defaults to false, meaning only the values need to match.
         * Note that when [[requiredValue]] is null, if this property is true, the validator will check
         * if the attribute value is null; If this property is false, the validator will call [[isEmpty]]
         * to check if the attribute value is empty.
         */
        function strict( $bool ) : self
        {
            $this->_rules['strict'] = $bool;

            return $this;
        }

    }