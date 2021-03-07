<?php


    namespace stankata90\Yii2RulesGenerator\rules;


    class String_ extends BaseRules
    {

        /**
         * @param int|array specifies the length limit of the value to be validated.
         * This can be specified in one of the following forms:
         *
         * - an integer: the exact length that the value should be of;
         * - an array of one element: the minimum length that the value should be of. For example, `[8]`.
         *   This will overwrite [[min]].
         * - an array of two elements: the minimum and maximum lengths that the value should be of.
         *   For example, `[8, 128]`. This will overwrite both [[min]] and [[max]].
         * @see tooShort for the customized message for a too short string.
         * @see tooLong for the customized message for a too long string.
         * @see notEqual for the customized message for a string that does not match desired length.
         */
        function length( $int_array ) : self
        {
            $this->_rules['length'] = $int_array;

            return $this;
        }

        /**
         * @param int maximum length. If not set, it means no maximum length limit.
         * @see tooLong for the customized message for a too long string.
         */
        function max( $int ) : self
        {
            $this->_rules['max'] = $int;

            return $this;
        }

        /**
         * @param int minimum length. If not set, it means no minimum length limit.
         * @see tooShort for the customized message for a too short string.
         */
        function min( $int ) : self
        {
            $this->_rules['min'] = $int;

            return $this;
        }

        /**
         * @param String_ user-defined error message used when the length of the value is not equal to [[length]].
         */
        function notEqual( $string ) : self
        {
            $this->_rules['notEqual'] = $string;

            return $this;
        }

        function strict(  $bool ) : self
        {
            $this->_rules['strict'] = $bool;

            return $this;
        }

        /**
         * @param String_ user-defined error message used when the length of the value is greater than [[max]].
         */
        function tooLong( $string ) : self
        {
            $this->_rules['tooLong'] = $string;

            return $this;
        }

        /**
         * @param String_ user-defined error message used when the length of the value is smaller than [[min]].
         */
        function tooShort( $string ) : self
        {
            $this->_rules['tooShort'] = $string;

            return $this;
        }

    }