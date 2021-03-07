<?php


    namespace stankata90\Yii2RulesGenerator\rules;


    class Email_ extends BaseRules
    {
        /**
         * @param bool whether to allow name in the email address (e.g. "John Smith <john.smith@example.com>"). Defaults to false.
         * @see fullPattern
         */
        function allowName( $bool ) : self
        {
            $this->_rules['allowName'] = $bool;

            return $this;
        }

        /**
         * @param bool whether to check whether the email's domain exists and has either an A or MX record.
         * Be aware that this check can fail due to temporary DNS problems even if the email address is
         * valid and an email would be deliverable. Defaults to false.
         */
        function checkDNS( $bool ) : self
        {
            $this->_rules['checkDNS'] = $bool;

            return $this;
        }

        /**
         * @param bool whether validation process should take into account IDN (internationalized domain
         * names). Defaults to false meaning that validation of emails containing IDN will always fail.
         * Note that in order to use IDN validation you have to install and enable `intl` PHP extension,
         * otherwise an exception would be thrown.
         */
        function enableIDN( $bool ) : self
        {
            $this->_rules['enableIDN'] = $bool;

            return $this;
        }

        /**
         * @param String_ the regular expression used to validate email addresses with the name part.
         * This property is used only when [[allowName]] is true.
         * @see allowName
         */
        function fullPattern( $string ) : self
        {
            $this->_rules['fullPattern'] = $string;

            return $this;
        }

        /**
         * @param String_ the regular expression used to validate the attribute value.
         * @see http://www.regular-expressions.info/email.html
         */
        function pattern( $string ) : self
        {
            $this->_rules['pattern'] = $string;

            return $this;
        }

    }