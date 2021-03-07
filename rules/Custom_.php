<?php


    namespace stankata90\Yii2RulesGenerator\rules;


    use stankata90\Yii2RulesGenerator\RulesGenerator;

    class Custom_ extends BaseRules
    {
        use RulesGenerator;

        public function __construct(  $attributes = NULL )
        {
            parent::__construct( null, $attributes );
        }
    }