<?php


    namespace stankata90\Yii2RulesGenerator\rules;


    class Exist_ extends BaseRules
    {
        /**
         * @param bool whether to allow array type attribute.
         */
        function allowArray( $bool ) : self
        {
            $this->_rules['allowArray'] = $bool;

            return $this;
        }

        /**
         * @param String_|array|\Closure additional filter to be applied to the DB query used to check the existence of the attribute value.
         * This can be a string or an array representing the additional query condition (refer to [[\yii\db\Query::where()]]
         * on the format of query condition), or an anonymous function with the signature `function ($query)`, where `$query`
         * is the [[\yii\db\Query|Query]] object that you can modify in the function.
         */
        function filter( $string_array_closure ) : self
        {
            $this->_rules['filter'] = $string_array_closure;

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
         * @param String_|array the name of the ActiveRecord attribute that should be used to
         * validate the existence of the current attribute value. If not set, it will use the name
         * of the attribute currently being validated. You may use an array to validate the existence
         * of multiple columns at the same time. The array key is the name of the attribute with the value to validate,
         * the array value is the name of the database field to search.
         */
        function targetAttribute( $string_array ) : self
        {
            $this->_rules['targetAttribute'] = $string_array;

            return $this;
        }

        /**
         * @var String_ and|or define how target attributes are related
         * @since 2.0.11
         */
        function targetAttributeJunction( $string ) : self
        {
            $this->_rules['targetAttributeJunction'] = $string;

            return $this;
        }

        /**
         * @var String_ the name of the ActiveRecord class that should be used to validate the existence
         * of the current attribute value. If not set, it will use the ActiveRecord class of the attribute being validated.
         * @see targetAttribute
         */
        function targetClass( $string ) : self
        {
            $this->_rules['targetClass'] = $string;

            return $this;
        }

        /**
         * @var String_ the name of the relation that should be used to validate the existence of the current attribute value
         * This param overwrites $targetClass and $targetAttribute
         * @since 2.0.14
         */
        function targetRelation( $string ) : self
        {
            $this->_rules['targetRelation'] = $string;

            return $this;
        }

    }