<?php


    namespace stankata90\Yii2RulesGenerator\rules;


    class BaseRules extends BaseGenerator
    {
        /**
         * @param bool whether to enable client-side validation for this validator.
         * The actual client-side validation is done via the JavaScript code returned
         * by [[clientValidateAttribute()]]. If that method returns null, even if this property
         * is true, no client-side validation will be done by this validator.
         */
        function enableClientValidation( $bool ) : self
        {
            $this->_rules['enableClientValidation'] = $bool;

            return $this;
        }

        /**
         * @param array|String_ scenarios that the validator should not be applied to. For multiple scenarios,
         * please specify them as an array; for single scenario, you may use either a string or an array.
         */
        function except( $array_string ) : self
        {
            $this->_rules['except'] = $array_string;

            return $this;
        }

        /**
         * @param callable a PHP callable that replaces the default implementation of [[isEmpty()]].
         * If not set, [[isEmpty()]] will be used to check if a value is empty. The signature
         * of the callable should be `function ($value)` which returns a boolean indicating
         * whether the value is empty.
         */
        function isEmpty( $callable ) : self
        {
            $this->_rules['except'] = $callable;

            return $this;
        }

        /**
         * @param String_ the user-defined error message. It may contain the following placeholders which
         * will be replaced accordingly by the validator:
         *
         * - `{attribute}`: the label of the attribute being validated
         * - `{value}`: the value of the attribute being validated
         *
         * Note that some validators may introduce other properties for error messages used when specific
         * validation conditions are not met. Please refer to individual class API documentation for details
         * about these properties. By convention, this property represents the primary error message
         * used when the most important validation condition is not met.
         */
        function message( $string ) : self
        {
            $this->_rules['message'] = $string;

            return $this;
        }

        /**
         * @param array|String_ scenarios that the validator can be applied to. For multiple scenarios,
         * please specify them as an array; for single scenario, you may use either a string or an array.
         */
        function on( $array_string ) : self
        {
            $this->_rules['on'] = $array_string;

            return $this;
        }

        /**
         * @param bool whether this validation rule should be skipped if the attribute value
         * is null or an empty string. This property is used only when validating [[yii\base\Model]].
         */
        function skipOnEmpty( $bool ) : self
        {
            $this->_rules['skipOnEmpty'] = $bool;

            return $this;
        }

        /**
         * @param bool whether this validation rule should be skipped if the attribute being validated
         * already has some validation error according to some previous rules. Defaults to true.
         */
        function skipOnError( $bool ) : self
        {
            $this->_rules['skipOnError'] = $bool;

            return $this;
        }

        /**
         * @param callable a PHP callable whose return value determines whether this validator should be applied.
         * The signature of the callable should be `function ($model, $attribute)`, where `$model` and `$attribute`
         * refer to the model and the attribute currently being validated. The callable should return a boolean value.
         *
         * This property is mainly provided to support conditional validation on the server-side.
         * If this property is not set, this validator will be always applied on the server-side.
         *
         * The following example will enable the validator only when the country currently selected is USA:
         *
         * ```php
         * function ($model) {
         *     return $model->country == Country::USA;
         * }
         * ```
         *
         * @see whenClient
         */
        function when( $callable ) : self
        {
            $this->_rules['when'] = $callable;

            return $this;
        }

        /**
         * @param String_ a JavaScript function name whose return value determines whether this validator should be applied
         * on the client-side. The signature of the function should be `function (attribute, value)`, where
         * `attribute` is an object describing the attribute being validated (see [[clientValidateAttribute()]])
         * and `value` the current value of the attribute.
         *
         * This property is mainly provided to support conditional validation on the client-side.
         * If this property is not set, this validator will be always applied on the client-side.
         *
         * The following example will enable the validator only when the country currently selected is USA:
         *
         * ```javascript
         * function (attribute, value) {
         *     return $('#country').val() === 'USA';
         * }
         * ```
         *
         * @see when
         */
        function whenClient( $string ) : self
        {
            $this->_rules['whenClient'] = $string;

            return $this;
        }

        /**
         * @param $key_string
         * @param $value_mixed
         */
        function custom( $key_string, $value_mixed ) {
            $this->_rules[$key_string] = $value_mixed;

            return $this;
        }

    }