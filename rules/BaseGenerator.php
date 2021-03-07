<?php


    namespace stankata90\Yii2RulesGenerator\rules;


    class BaseGenerator
    {
        protected $_rules = [];

        public function __construct( $validator, $attributes = NULL )
        {
            if ( isset( $attributes ) ) {
                $this->addAttributes( $attributes );
            }
            $this->addValidator( $validator );
        }

        function getRules()
        {
            return $this->_rules;
        }

        function addAttributes( $attributes ) : self
        {
            if ( !is_array( $attributes ) ) {
                $this->_rules[0][] = $attributes;
            } else {
                foreach ( $attributes as $attribute ) {
                    $this->_rules[0][] = $attribute;
                }
            }

            return $this;
        }

        public function getAttributes()
        {
            return $this->_rules[0] ?? NULL;
        }

        function addValidator( $validator ) : self
        {
            $this->_rules[1] = $validator;
            return $this;
        }

        function getValidator( $validator )
        {
            return $this->_rules[1];
        }
    }