<?php


    namespace stankata90\Yii2RulesGenerator\rules;


    class Compare_ extends BaseRules
    {
        /**
         * @param String_ the name of the attribute to be compared with. When both this property
         * and [[compareValue]] are set, the latter takes precedence. If neither is set,
         * it assumes the comparison is against another attribute whose name is formed by
         * appending '_repeat' to the attribute being validated. For example, if 'password' is
         * being validated, then the attribute to be compared would be 'password_repeat'.
         * @see compareValue
         */
        function compareAttribute( $string ) : self
        {
            $this->_rules['compareAttribute'] = $string;

            return $this;
        }

        /**
         * @param mixed the constant value to be compared with. When both this property
         * and [[compareAttribute]] are set, this property takes precedence.
         * @see compareAttribute
         */
        function compareValue( $mixed ) : self
        {
            $this->_rules['compareValue'] = $mixed;

            return $this;
        }

        /**
         * @param String_ the operator for comparison. The following operators are supported:
         *
         * - `==`: check if two values are equal. The comparison is done is non-strict mode.
         * - `===`: check if two values are equal. The comparison is done is strict mode.
         * - `!=`: check if two values are NOT equal. The comparison is done is non-strict mode.
         * - `!==`: check if two values are NOT equal. The comparison is done is strict mode.
         * - `>`: check if value being validated is greater than the value being compared with.
         * - `>=`: check if value being validated is greater than or equal to the value being compared with.
         * - `<`: check if value being validated is less than the value being compared with.
         * - `<=`: check if value being validated is less than or equal to the value being compared with.
         *
         * When you want to compare numbers, make sure to also set [[type]] to `number`.
         */
        function operator( $string ) : self
        {
            $this->_rules['operator'] = $string;

            return $this;
        }

        /**
         * @param String_ the type of the values being compared. The follow types are supported:
         *
         * - [[TYPE_STRING|string]]: the values are being compared as strings. No conversion will be done before comparison.
         * - [[TYPE_NUMBER|number]]: the values are being compared as numbers. String values will be converted into numbers before comparison.
         */
        function type( $string ) : self
        {
            $this->_rules['type'] = $string;

            return $this;
        }



    }