<?php


    namespace stankata90\Yii2RulesGenerator\rules;


    class Unique_ extends BaseRules
    {
        /**
         * @param String_
         * @since 2.0.9
         * @deprecated since version 2.0.10, to be removed in 2.1. Use [[message]] property
         * to setup custom message for multiple target attributes.
         */
        function comboNotUnique( $string ) : self
        {
            $this->_rules['comboNotUnique'] = $string;

            return $this;
        }

        /**
         * @param String_|array|\Closure additional filter to be applied to the DB query used to check the uniqueness of the attribute value.
         * This can be a string or an array representing the additional query condition (refer to [[\yii\db\Query::where()]]
         * on the format of query condition), or an anonymous function with the signature `function ($query)`, where `$query`
         * is the [[\yii\db\Query|Query]] object that you can modify in the function.
         */
        function filter( $string_array_Closure ) : self
        {
            $this->_rules['filter'] = $string_array_Closure;

            return $this;
        }

        /**
         * @param bool whether this validator is forced to always use master DB
         * @since 2.0.14
         */
        function forceMasterDb( $bool ) : self
        {
            $this->_rules['forceMasterDb'] = $bool;

            return $this;
        }

        /**
         * @param String_|array the name of the [[\yii\db\ActiveRecord|ActiveRecord]] attribute that should be used to
         * validate the uniqueness of the current attribute value. If not set, it will use the name
         * of the attribute currently being validated. You may use an array to validate the uniqueness
         * of multiple columns at the same time. The array values are the attributes that will be
         * used to validate the uniqueness, while the array keys are the attributes whose values are to be validated.
         */
        function targetAttribute( $string_array ) : self
        {
            $this->_rules['targetAttribute'] = $string_array;

            return $this;
        }

        /**
         * @param String_ and|or define how target attributes are related
         * @since 2.0.11
         */
        function targetAttributeJunction( $string ) : self
        {
            $this->_rules['targetAttributeJunction'] = $string;

            return $this;
        }

        /**
         * @param String_ the name of the ActiveRecord class that should be used to validate the uniqueness
         * of the current attribute value. If not set, it will use the ActiveRecord class of the attribute being validated.
         * @see targetAttribute
         */
        function targetClass( $string ) : self
        {
            $this->_rules['targetClass'] = $string;

            return $this;
        }
    }