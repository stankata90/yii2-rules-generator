<?php


    namespace stankata90\Yii2RulesGenerator\rules;


    class Date_ extends BaseRules
    {


        /**
         * @param String_ the timezone to use for parsing date and time values.
         * This can be any value that may be passed to [date_default_timezone_set()](https://secure.php.net/manual/en/function.date-default-timezone-set.php)
         * e.g. `UTC`, `Europe/Berlin` or `America/Chicago`.
         * Refer to the [php manual](https://secure.php.net/manual/en/timezones.php) for available timezones.
         * If this property is not set, [[\yii\base\Application::timeZone]] will be used.
         */
        function format( $string ) : self
        {
            $this->_rules['format'] = $string;

            return $this;
        }

        /**
         * @param String_ the locale ID that is used to localize the date parsing.
         * This is only effective when the [PHP intl extension](https://secure.php.net/manual/en/book.intl.php) is installed.
         * If not set, the locale of the [[\yii\base\Application::formatter|formatter]] will be used.
         * See also [[\yii\i18n\Formatter::locale]].
         */
        function locale( $string ) : self
        {
            $this->_rules['locale'] = $string;

            return $this;
        }


        /**
         * @param int|String_ upper limit of the date. Defaults to null, meaning no upper limit.
         * This can be a unix timestamp or a string representing a date time value.
         * If this property is a string, [[format]] will be used to parse it.
         * @see tooBig for the customized message used when the date is too big.
         * @since 2.0.4
         */
        function max( $int_string ) : self
        {
            $this->_rules['max'] = $int_string;

            return $this;
        }

        /**
         * @param String_ user friendly value of upper limit to display in the error message.
         * If this property is null, the value of [[max]] will be used (before parsing).
         * @since 2.0.4
         */
        function maxString( $string ) : self
        {
            $this->_rules['maxString'] = $string;

            return $this;
        }

        /**
         * @param int|String_ lower limit of the date. Defaults to null, meaning no lower limit.
         * This can be a unix timestamp or a string representing a date time value.
         * If this property is a string, [[format]] will be used to parse it.
         * @see tooSmall for the customized message used when the date is too small.
         * @since 2.0.4
         */
        function min( $int_string ) : self
        {
            $this->_rules['min'] = $int_string;

            return $this;
        }

        /**
         * @param String_ user friendly value of lower limit to display in the error message.
         * If this property is null, the value of [[min]] will be used (before parsing).
         * @since 2.0.4
         */
        function minString( $string ) : self
        {
            $this->_rules['minString'] = $string;

            return $this;
        }

        /**
         * @param bool set this parameter to true if you need strict date format validation (e.g. only such dates pass
         * validation for the following format 'yyyy-MM-dd': '0011-03-25', '2019-04-30' etc. and not '18-05-15',
         * '2017-Mar-14' etc. which pass validation if this parameter is set to false)
         * @since 2.0.22
         */
        function strictDateFormat( $bool ) : self
        {
            $this->_rules['strictDateFormat'] = $bool;

            return $this;
        }

        /**
         * @param String_ the timezone to use for parsing date and time values.
         * This can be any value that may be passed to [date_default_timezone_set()](https://secure.php.net/manual/en/function.date-default-timezone-set.php)
         * e.g. `UTC`, `Europe/Berlin` or `America/Chicago`.
         * Refer to the [php manual](https://secure.php.net/manual/en/timezones.php) for available timezones.
         * If this property is not set, [[\yii\base\Application::timeZone]] will be used.
         */
        function timeZone( $string ) : self
        {
            $this->_rules['timeZone'] = $string;

            return $this;
        }

        /**
         * @param String_ the name of the attribute to receive the parsing result.
         * When this property is not null and the validation is successful, the named attribute will
         * receive the parsing result.
         *
         * This can be the same attribute as the one being validated. If this is the case,
         * the original value will be overwritten with the timestamp value after successful validation.
         *
         * Note, that when using this property, the input value will be converted to a unix timestamp,
         * which by definition is in UTC, so a conversion from the [[$timeZone|input time zone]] to UTC
         * will be performed. When defining [[$timestampAttributeFormat]] you can control the conversion by
         * setting [[$timestampAttributeTimeZone]] to a different value than `'UTC'`.
         *
         * @see timestampAttributeFormat
         * @see timestampAttributeTimeZone
         */
        function timestampAttribute( $string ) : self
        {
            $this->_rules['timestampAttribute'] = $string;

            return $this;
        }

        /**
         * @param String_ the format to use when populating the [[timestampAttribute]].
         * The format can be specified in the same way as for [[format]].
         *
         * If not set, [[timestampAttribute]] will receive a UNIX timestamp.
         * If [[timestampAttribute]] is not set, this property will be ignored.
         * @see format
         * @see timestampAttribute
         * @since 2.0.4
         */
        function timestampAttributeFormat( $string ) : self
        {
            $this->_rules['timestampAttributeFormat'] = $string;

            return $this;
        }

        /**
         * @param String_ the timezone to use when populating the [[timestampAttribute]]. Defaults to `UTC`.
         *
         * This can be any value that may be passed to [date_default_timezone_set()](https://secure.php.net/manual/en/function.date-default-timezone-set.php)
         * e.g. `UTC`, `Europe/Berlin` or `America/Chicago`.
         * Refer to the [php manual](https://secure.php.net/manual/en/timezones.php) for available timezones.
         *
         * If [[timestampAttributeFormat]] is not set, this property will be ignored.
         * @see timestampAttributeFormat
         * @since 2.0.4
         */
        function timestampAttributeTimeZone( $string ) : self
        {
            $this->_rules['timestampAttributeTimeZone'] = $string;

            return $this;
        }

        /**
         * @param String_ user-defined error message used when the value is bigger than [[max]].
         * @since 2.0.4
         */
        function tooBig( $string ) : self
        {
            $this->_rules['tooBig'] = $string;

            return $this;
        }

        /**
         * @param String_ user-defined error message used when the value is smaller than [[min]].
         * @since 2.0.4
         */
        function tooSmall( $string ) : self
        {
            $this->_rules['tooSmall'] = $string;

            return $this;
        }

        /**
         * @param String_ the type of the validator. Indicates, whether a date, time or datetime value should be validated.
         * This property influences the default value of [[format]] and also sets the correct behavior when [[format]] is one of the intl
         * short formats, `short`, `medium`, `long`, or `full`.
         *
         * This is only effective when the [PHP intl extension](https://secure.php.net/manual/en/book.intl.php) is installed.
         *
         * This property can be set to the following values:
         *
         * - [[TYPE_DATE]] - (default) for validating date values only, that means only values that do not include a time range are valid.
         * - [[TYPE_DATETIME]] - for validating datetime values, that contain a date part as well as a time part.
         * - [[TYPE_TIME]] - for validating time values, that contain no date information.
         *
         * @since 2.0.8
         */
        function type( $string ) : self
        {
            $this->_rules['type'] = $string;

            return $this;
        }
    }