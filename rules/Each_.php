<?php


    namespace stankata90\Yii2RulesGenerator\rules;


    class Each_ extends BaseRules
    {

        /**
         * @param bool whether to use error message composed by validator declared via [[rule]] if its validation fails.
         * If enabled, error message specified for this validator itself will appear only if attribute value is not an array.
         * If disabled, own error message value will be used always.
         */
        function allowMessageFromRule( $bool ) : self
        {
            $this->_rules['allowMessageFromRule'] = $bool;

            return $this;
        }

        /**
         * @param array|Validator definition of the validation rule, which should be used on array values.
         * It should be specified in the same format as at [[\yii\base\Model::rules()]], except it should not
         * contain attribute list as the first element.
         * For example:
         *
         * ```php
         * ['integer']
         * ['match', 'pattern' => '/[a-z]/is']
         * ```
         *
         * Please refer to [[\yii\base\Model::rules()]] for more details.
         */
        function rule( $array_validator ) : self
        {
            $this->_rules['rule'] = $array_validator;

            return $this;
        }

        /**
         * @param bool whether to stop validation once first error among attribute value elements is detected.
         * When enabled validation will produce single error message on attribute, when disabled - multiple
         * error messages mya appear: one per each invalid value.
         * Note that this option will affect only [[validateAttribute()]] value, while [[validateValue()]] will
         * not be affected.
         * @since 2.0.11
         */
        function stopOnFirstError( $bool ) : self
        {
            $this->_rules['stopOnFirstError'] = $bool;

            return $this;
        }

    }