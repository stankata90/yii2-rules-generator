<?php


    namespace stankata90\Yii2RulesGenerator\rules;


    class File_ extends BaseRules
    {
        /**
         * @param bool whether to check file type (extension) with mime-type. If extension produced by
         * file mime-type check differs from uploaded file extension, the file will be considered as invalid.
         */
        function checkExtensionByMimeType( $bool ) : self
        {
            $this->_rules['checkExtensionByMimeType'] = $bool;

            return $this;
        }

        /**
         * @param array|String_ a list of file name extensions that are allowed to be uploaded.
         * This can be either an array or a string consisting of file extension names
         * separated by space or comma (e.g. "gif, jpg").
         * Extension names are case-insensitive. Defaults to null, meaning all file name
         * extensions are allowed.
         * @see wrongExtension for the customized message for wrong file type.
         */
        function extensions( $array_string ) : self
        {
            $this->_rules['extensions'] = $array_string;

            return $this;
        }

        /**
         * @param int the maximum file count the given attribute can hold.
         * Defaults to 1, meaning single file upload. By defining a higher number,
         * multiple uploads become possible. Setting it to `0` means there is no limit on
         * the number of files that can be uploaded simultaneously.
         *
         * > Note: The maximum number of files allowed to be uploaded simultaneously is
         * also limited with PHP directive `max_file_uploads`, which defaults to 20.
         *
         * @see https://secure.php.net/manual/en/ini.core.php#ini.max-file-uploads
         * @see tooMany for the customized message when too many files are uploaded.
         */
        function maxFiles( $int ) : self
        {
            $this->_rules['maxFiles'] = $int;

            return $this;
        }

        /**
         * @param int the maximum number of bytes required for the uploaded file.
         * Defaults to null, meaning no limit.
         * Note, the size limit is also affected by `upload_max_filesize` and `post_max_size` INI setting
         * and the 'MAX_FILE_SIZE' hidden field value. See [[getSizeLimit()]] for details.
         * @see https://secure.php.net/manual/en/ini.core.php#ini.upload-max-filesize
         * @see https://secure.php.net/post-max-size
         * @see getSizeLimit
         * @see tooBig for the customized message for a file that is too big.
         */
        function maxSize( $int ) : self
        {
            $this->_rules['maxSize'] = $int;

            return $this;
        }

        /**
         * @param array|String_ a list of file MIME types that are allowed to be uploaded.
         * This can be either an array or a string consisting of file MIME types
         * separated by space or comma (e.g. "text/plain, image/png").
         * The mask with the special character `*` can be used to match groups of mime types.
         * For example `image/*` will pass all mime types, that begin with `image/` (e.g. `image/jpeg`, `image/png`).
         * Mime type names are case-insensitive. Defaults to null, meaning all MIME types are allowed.
         * @see wrongMimeType for the customized message for wrong MIME type.
         */
        function mimeTypes( $array_string ) : self
        {
            $this->_rules['mimeTypes'] = $array_string;

            return $this;
        }

        /**
         * @param int the minimum file count the given attribute can hold.
         * Defaults to 0. Higher value means at least that number of files should be uploaded.
         *
         * @see tooFew for the customized message when too few files are uploaded.
         * @since 2.0.14
         */
        function minFiles( $int ) : self
        {
            $this->_rules['minFiles'] = $int;

            return $this;
        }

        /**
         * @var int the minimum number of bytes required for the uploaded file.
         * Defaults to null, meaning no limit.
         * @see tooSmall for the customized message for a file that is too small.
         */
        function minSize( $int ) : self
        {
            $this->_rules['minSize'] = $int;

            return $this;
        }

        /**
         * @var String_ the error message used when the uploaded file is too large.
         * You may use the following tokens in the message:
         *
         * - {attribute}: the attribute name
         * - {file}: the uploaded file name
         * - {limit}: the maximum size allowed (see [[getSizeLimit()]])
         * - {formattedLimit}: the maximum size formatted
         *   with [[\yii\i18n\Formatter::asShortSize()|Formatter::asShortSize()]]
         */
        function tooBig( $string ) : self
        {
            $this->_rules['tooBig'] = $string;

            return $this;
        }

        /**
         * @var String_ the error message used if the count of multiple uploads less that minFiles.
         * You may use the following tokens in the message:
         *
         * - {attribute}: the attribute name
         * - {limit}: the value of [[minFiles]]
         *
         * @since 2.0.14
         */
        function tooFew( $string ) : self
        {
            $this->_rules['tooFew'] = $string;

            return $this;
        }

        /**
         * @var String_ the error message used if the count of multiple uploads exceeds limit.
         * You may use the following tokens in the message:
         *
         * - {attribute}: the attribute name
         * - {limit}: the value of [[maxFiles]]
         */
        function tooMany( $string ) : self
        {
            $this->_rules['tooMany'] = $string;

            return $this;
        }

        /**
         * @var String_ the error message used when the uploaded file is too small.
         * You may use the following tokens in the message:
         *
         * - {attribute}: the attribute name
         * - {file}: the uploaded file name
         * - {limit}: the value of [[minSize]]
         * - {formattedLimit}: the value of [[minSize]] formatted
         *   with [[\yii\i18n\Formatter::asShortSize()|Formatter::asShortSize()]
         */
        function tooSmall( $string ) : self
        {
            $this->_rules['tooSmall'] = $string;

            return $this;
        }

        /**
         * @var String_ the error message used when no file is uploaded.
         * Note that this is the text of the validation error message. To make uploading files required,
         * you have to set [[skipOnEmpty]] to `false`.
         */
        function uploadRequired( $string ) : self
        {
            $this->_rules['uploadRequired'] = $string;

            return $this;
        }

        /**
         * @var String_ the error message used when the uploaded file has an extension name
         * that is not listed in [[extensions]]. You may use the following tokens in the message:
         *
         * - {attribute}: the attribute name
         * - {file}: the uploaded file name
         * - {extensions}: the list of the allowed extensions.
         */
        function wrongExtension( $string ) : self
        {
            $this->_rules['wrongExtension'] = $string;

            return $this;
        }

        /**
         * @var String_ the error message used when the file has an mime type
         * that is not allowed by [[mimeTypes]] property.
         * You may use the following tokens in the message:
         *
         * - {attribute}: the attribute name
         * - {file}: the uploaded file name
         * - {mimeTypes}: the value of [[mimeTypes]]
         */
        function wrongMimeType( $string ) : self
        {
            $this->_rules['wrongMimeType'] = $string;

            return $this;
        }
    }