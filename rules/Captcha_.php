<?php


    namespace stankata90\Yii2RulesGenerator\rules;


    class Captcha_ extends BaseRules
    {
        /**
         * @param bool whether the comparison is case sensitive. Defaults to false.
         */
        function caseSensitive( $bool ) : self
        {
            $this->_rules['caseSensitive'] = $bool;

            return $this;
        }

        /**
         * @param string the route of the controller action that renders the CAPTCHA image.
         */
        function captchaAction( $string ) : self
        {
            $this->_rules['captchaAction'] = $string;

            return $this;
        }
    }