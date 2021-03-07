<?php


    namespace stankata90\Yii2RulesGenerator;

    trait RulesGenerator
    {
        public $rulesGenerator;

        public function rulesGenerator( $templates = null ) {

            if( !isset($this->rulesGenerator)) {
                return $this->rulesGenerator = ( new Rules())->attachTemplates($templates);
            }

            $this->rulesGenerator->attachTemplates( $templates );

            return $this->rulesGenerator;
        }
    }