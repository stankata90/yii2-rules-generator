<?php


    namespace stankata90\Yii2RulesGenerator;


    use stankata90\Yii2RulesGenerator\rules\BaseRules;
    use stankata90\Yii2RulesGenerator\rules\Boolean_;
    use stankata90\Yii2RulesGenerator\rules\Captcha_;
    use stankata90\Yii2RulesGenerator\rules\Compare_;
    use stankata90\Yii2RulesGenerator\rules\Custom_;
    use stankata90\Yii2RulesGenerator\rules\Date_;
    use stankata90\Yii2RulesGenerator\rules\DefaultValue_;
    use stankata90\Yii2RulesGenerator\rules\Each_;
    use stankata90\Yii2RulesGenerator\rules\Email_;
    use stankata90\Yii2RulesGenerator\rules\Exist_;
    use stankata90\Yii2RulesGenerator\rules\File_;
    use stankata90\Yii2RulesGenerator\rules\Filter_;
    use stankata90\Yii2RulesGenerator\rules\Image_;
    use stankata90\Yii2RulesGenerator\rules\Inline_;
    use stankata90\Yii2RulesGenerator\rules\Ip_;
    use stankata90\Yii2RulesGenerator\rules\Number_;
    use stankata90\Yii2RulesGenerator\rules\Range_;
    use stankata90\Yii2RulesGenerator\rules\RegularExpression_;
    use stankata90\Yii2RulesGenerator\rules\Required_;
    use stankata90\Yii2RulesGenerator\rules\String_;
    use stankata90\Yii2RulesGenerator\rules\Unique_;
    use stankata90\Yii2RulesGenerator\rules\Url_;

    class Rules
    {

        private $_rules = [];
        private $_generators = [];
        private $_templates = [];

        public function attachTemplates( $templates ) : self {
            if( !is_array( $templates ) ) {
                $this->_templates[] = $templates;
            } else {
                foreach( $templates as $template ) {
                    $this->_templates[] = $template;
                }
            }

            return $this;
        }

        public function getRules()
        {
            foreach ( $this->_generators as $generator ) {
                foreach ( $generator as $rule ) {
                    $this->_rules[] = $rule->getRules();
                }
            }

            foreach ( $this->_templates??[] as $generator ) {
                if( $generator ) {
                    $this->_rules[] = $generator->getRules();
                }
            }

            return $this->_rules;
        }

        function boolean( $attributes = null )
        {
            return $this->_generators['boolean'][] = ( new Boolean_( 'boolean', $attributes  ) );
        }

        function compare( $attributes = null )
        {
            return $this->_generators['compare'][] = ( new Compare_( 'compare', $attributes  ) );
        }

        function date( $attributes = null )
        {
            return $this->_generators['date'][] = ( new Date_( 'date', $attributes  ) );
        }

        function datetime( $attributes = null )
        {
            return $this->_generators['datetime'][] = ( new Date_( 'datetime', $attributes  ));
        }

        function time( $attributes = null )
        {
            return $this->_generators['time'][] = ( new Date_( 'time', $attributes  ));
        }

        function default( $attributes = null )
        {
            return $this->_generators['default'][] = ( new DefaultValue_( 'default', $attributes  ) );
        }

        function double( $attributes = null )
        {
            return $this->_generators['double'][] = ( new Number_( 'double', $attributes  ) );
        }

        function each( $attributes = null )
        {
            return $this->_generators['each'][] = ( new Each_( 'each', $attributes  ) );
        }

        function email( $attributes = null )
        {
            return $this->_generators['email'][] = ( new Email_( 'email', $attributes  ) );
        }

        function exist( $attributes = null )
        {
            return $this->_generators['exist'][] = ( new Exist_( 'exist', $attributes  ) );
        }

        function file( $attributes = null )
        {
            return $this->_generators['file'][] = ( new File_( 'file', $attributes  ) );
        }

        function filter( $attributes = null )
        {
            return $this->_generators['filter'][] = ( new Filter_( 'filter', $attributes  ) );
        }

        function image( $attributes = null )
        {
            return $this->_generators['image'][] = ( new Image_( 'image', $attributes  ) );
        }

        function in( $attributes = null )
        {
            return $this->_generators['in'][] = ( new Range_( 'in', $attributes  ) );
        }

        function range( $attributes = null )
        {
            return $this->in( $attributes );
        }

        function integer( $attributes = null )
        {
            return $this->_generators['integer'][] = ( new Number_( 'integer', $attributes  ) );
        }

        function match( $attributes = null )
        {
            return $this->_generators['match'][] = ( new RegularExpression_( 'match', $attributes  ) );
        }

        function regularExpression( $attributes = null )
        {
            return $this->match( $attributes );
        }

        function number( $attributes = null )
        {
            return $this->_generators['number'][] = ( new Number_( 'number' , $attributes ) );
        }

        function required( $attributes = null )
        {
            return $this->_generators['required'][] = ( new Required_( 'required' , $attributes ) );
        }

        function safe( $attributes = null )
        {
            return $this->_generators['safe'][] = ( new BaseRules( 'safe' , $attributes ) );
        }

        function string( $attributes = null )
        {
            return $this->_generators['string'][] = ( new String_( 'string', $attributes  ) );
        }

        function trim( $attributes = null )
        {
            return $this->_generators['trim'][] = ( new Filter_( 'trim', $attributes  ) );
        }

        function unique( $attributes = null )
        {
            return $this->_generators['unique'][] = ( new Unique_( 'unique', $attributes  ) );
        }

        function url( $attributes = null )
        {
            return $this->_generators['url'][] = ( new Url_( 'url', $attributes  ) );
        }

        function ip( $attributes = null )
        {
            return $this->_generators['ip'][] = ( new Ip_( 'ip', $attributes  ) );
        }

        function inline( $attributes = null )
        {
            return $this->_generators['inline'][] = ( new Inline_('inline', $attributes ) );
        }

        function captcha( $attributes = null )
        {
            return $this->_generators['captcha'][] = ( new Captcha_('captcha', $attributes ) );
        }





    }