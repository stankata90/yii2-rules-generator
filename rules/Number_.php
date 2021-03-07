<?php


    namespace stankata90\Yii2RulesGenerator\rules;


    class Number_ extends BaseRules
    {

        /**
         * @param bool whether the attribute value can only be an integer. Defaults to false.
         */
        function integerOnly( $bool ) : self
        {
            $this->_rules['integerOnly'] = $bool;

            return $this;
        }

        /**
         * @param String_ the regular expression for matching integers.
         */
        function integerPattern( $string ) : self
        {
            $this->_rules['integerPattern'] = $string;

            return $this;
        }

        /**
         * @param int|float upper limit of the number. Defaults to null, meaning no upper limit.
         * @see tooBig for the customized message used when the number is too big.
         */
        function max( $int_float ) : self
        {
            $this->_rules['max'] = $int_float;

            return $this;
        }

        /**
         * @param int|float lower limit of the number. Defaults to null, meaning no lower limit.
         * @see tooSmall for the customized message used when the number is too small.
         */
        function min( $int_float ) : self
        {
            $this->_rules['min'] = $int_float;

            return $this;
        }

        /**
         * @param String_ the regular expression for matching numbers. It defaults to a pattern
         * that matches floating numbers with optional exponential part (e.g. -1.23e-10).
         */
        function numberPattern( $string ) : self
        {
            $this->_rules['numberPattern'] = $string;

            return $this;
        }

        /**
         * @param String_ user-defined error message used when the value is bigger than [[max]].
         */
        function tooBig( $string) : self
        {
            $this->_rules['tooBig'] = $string;

            return $this;
        }

        /**
         * @param String_ user-defined error message used when the value is smaller than [[min]].
         */
        function tooSmall( $string) : self
        {
            $this->_rules['tooSmall'] = $string;

            return $this;
        }



    }