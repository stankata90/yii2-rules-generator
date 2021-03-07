<?php


    namespace stankata90\Yii2RulesGenerator\rules;


    class Image_ extends File_
    {
        /**
         * @param int the minimum height in pixels.
         * Defaults to null, meaning no limit.
         * @see underHeight for the customized message used when image height is too small.
         */
        function maxHeight( $int ) : self
        {
            $this->_rules['maxHeight'] = $int;

            return $this;
        }

        /**
         * @param int the maximum width in pixels.
         * Defaults to null, meaning no limit.
         * @see overWidth for the customized message used when image width is too big.
         */
        function maxWidth( $int ) : self
        {
            $this->_rules['maxWidth'] = $int;

            return $this;
        }

        /**
         * @param int the minimum height in pixels.
         * Defaults to null, meaning no limit.
         * @see underHeight for the customized message used when image height is too small.
         */
        function minHeight( $int ) : self
        {
            $this->_rules['minHeight'] = $int;

            return $this;
        }

        /**
         * @param int the minimum width in pixels.
         * Defaults to null, meaning no limit.
         * @see underWidth for the customized message used when image width is too small.
         */
        function minWidth( $int ) : self
        {
            $this->_rules['minWidth'] = $int;

            return $this;
        }

        /**
         * @param String_ the error message used when the uploaded file is not an image.
         * You may use the following tokens in the message:
         *
         * - {attribute}: the attribute name
         * - {file}: the uploaded file name
         */
        function notImage( $string ) : self
        {
            $this->_rules['notImage'] = $string;

            return $this;
        }

        /**
         * @var String_ the error message used when the image is over [[maxHeight]].
         * You may use the following tokens in the message:
         *
         * - {attribute}: the attribute name
         * - {file}: the uploaded file name
         * - {limit}: the value of [[maxHeight]]
         */
        function overHeight( $string ) : self
        {
            $this->_rules['overHeight'] = $string;

            return $this;
        }

        /**
         * @var String_ the error message used when the image is over [[maxWidth]].
         * You may use the following tokens in the message:
         *
         * - {attribute}: the attribute name
         * - {file}: the uploaded file name
         * - {limit}: the value of [[maxWidth]]
         */
        function overWidth( $string ) : self
        {
            $this->_rules['overWidth'] = $string;

            return $this;
        }

        /**
         * @var String_ the error message used when the image is under [[minHeight]].
         * You may use the following tokens in the message:
         *
         * - {attribute}: the attribute name
         * - {file}: the uploaded file name
         * - {limit}: the value of [[minHeight]]
         */
        function underHeight( $string ) : self
        {
            $this->_rules['underHeight'] = $string;

            return $this;
        }

        /**
         * @var String_ the error message used when the image is under [[minWidth]].
         * You may use the following tokens in the message:
         *
         * - {attribute}: the attribute name
         * - {file}: the uploaded file name
         * - {limit}: the value of [[minWidth]]
         */
        function underWidth( $string ) : self
        {
            $this->_rules['underWidth'] = $string;

            return $this;
        }
    }