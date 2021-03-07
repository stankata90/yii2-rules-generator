<?php


    namespace stankata90\Yii2RulesGenerator\rules;


    class Url_ extends BaseRules
    {

        /**
         * @param String_ the default URI scheme. If the input doesn't contain the scheme part, the default
         * scheme will be prepended to it (thus changing the input). Defaults to null, meaning a URL must
         * contain the scheme part.
         */
        function defaultScheme( $string ) : self
        {
            $this->_rules['defaultScheme'] = $string;

            return $this;
        }

        /**
         * @param bool whether validation process should take into account IDN (internationalized
         * domain names). Defaults to false meaning that validation of URLs containing IDN will always
         * fail. Note that in order to use IDN validation you have to install and enable `intl` PHP
         * extension, otherwise an exception would be thrown.
         */
        function enableIDN( $bool ) : self
        {
            $this->_rules['enableIDN'] = $bool;

            return $this;
        }

        /**
         * @param String_ the regular expression used to validate the attribute value.
         * The pattern may contain a `{schemes}` token that will be replaced
         * by a regular expression which represents the [[validSchemes]].
         */
        function pattern( $string ) : self
        {
            $this->_rules['pattern'] = $string;

            return $this;
        }

        /**
         * @param array list of URI schemes which should be considered valid. By default, http and https
         * are considered to be valid schemes.
         */
        function validSchemes( $array ) : self
        {
            $this->_rules['validSchemes'] = $array;

            return $this;
        }

    }