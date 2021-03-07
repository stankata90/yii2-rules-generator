<?php


    namespace stankata90\Yii2RulesGenerator\rules;


    class Ip_ extends BaseRules
    {
        /**
         * @param bool whether to expand an IPv6 address to the full notation format.
         * Defaults to `false`.
         */
        function expandIPv6( $bool ) : self
        {
            $this->_rules['expandIPv6'] = $bool;

            return $this;
        }

        /**
         * @param String_ user-defined error message is used when validation fails
         * due to [[subnet]] is false, but CIDR prefix is present.
         *
         * You may use the following placeholders in the message:
         *
         * - `{attribute}`: the label of the attribute being validated
         * - `{value}`: the value of the attribute being validated
         *
         * @see subnet
         */
        function hasSubnet( $string ) : self
        {
            $this->_rules['hasSubnet'] = $string;

            return $this;
        }

        /**
         * @param bool whether the validating value can be an IPv4 address. Defaults to `true`.
         */
        function ipv4( $bool ) : self
        {
            $this->_rules['ipv4'] = $bool;

            return $this;
        }

        /**
         * @param String_ user-defined error message is used when validation fails due to the disabled IPv6 validation.
         *
         * You may use the following placeholders in the message:
         *
         * - `{attribute}`: the label of the attribute being validated
         * - `{value}`: the value of the attribute being validated
         *
         * @see ipv6
         */
        function ipv4NotAllowed( $string ) : self
        {
            $this->_rules['ipv4NotAllowed'] = $string;

            return $this;
        }

        /**
         * @param String_ Regexp-pattern to validate IPv4 address
         */
        function ipv4Pattern( $string ) : self
        {
            $this->_rules['ipv4Pattern'] = $string;

            return $this;
        }

        /**
         * @param bool whether the validating value can be an IPv6 address. Defaults to `true`.
         */
        function ipv6( $bool ) : self
        {
            $this->_rules['ipv6'] = $bool;

            return $this;
        }

        /**
         * @param String_ user-defined error message is used when validation fails due to the disabled IPv6 validation.
         *
         * You may use the following placeholders in the message:
         *
         * - `{attribute}`: the label of the attribute being validated
         * - `{value}`: the value of the attribute being validated
         *
         * @see ipv6
         */
        function ipv6NotAllowed( $bool ) : self
        {
            $this->_rules['ipv6NotAllowed'] = $bool;

            return $this;
        }

        /**
         * @param String_ Regexp-pattern to validate IPv6 address
         */
        function ipv6Pattern( $bool ) : self
        {
            $this->_rules['ipv6Pattern'] = $bool;

            return $this;
        }

        /**
         * @var bool whether address may have a [[NEGATION_CHAR]] character at the beginning.
         * Defaults to `false`.
         */
        function negation( $bool ) : self
        {
            $this->_rules['negation'] = $bool;

            return $this;
        }

        /**
         * @var array The network aliases, that can be used in [[ranges]].
         *  - key - alias name
         *  - value - array of strings. String can be an IP range, IP address or another alias. String can be
         *    negated with [[NEGATION_CHAR]] (independent of `negation` option).
         *
         * The following aliases are defined by default:
         *  - `*`: `any`
         *  - `any`: `0.0.0.0/0, ::/0`
         *  - `private`: `10.0.0.0/8, 172.16.0.0/12, 192.168.0.0/16, fd00::/8`
         *  - `multicast`: `224.0.0.0/4, ff00::/8`
         *  - `linklocal`: `169.254.0.0/16, fe80::/10`
         *  - `localhost`: `127.0.0.0/8', ::1`
         *  - `documentation`: `192.0.2.0/24, 198.51.100.0/24, 203.0.113.0/24, 2001:db8::/32`
         *  - `system`: `multicast, linklocal, localhost, documentation`
         */
        function networks( $array ) : self
        {
            $this->_rules['networks'] = $array;

            return $this;
        }

        /**
         * @var String_ user-defined error message is used when validation fails due to subnet [[subnet]] set to 'only',
         * but the CIDR prefix is not set.
         *
         * You may use the following placeholders in the message:
         *
         * - `{attribute}`: the label of the attribute being validated
         * - `{value}`: the value of the attribute being validated
         *
         * @see subnet
         */
        function noSubnet( $string ) : self
        {
            $this->_rules['noSubnet'] = $string;

            return $this;
        }

        /**
         * @var bool whether to add the CIDR prefix with the smallest length (32 for IPv4 and 128 for IPv6) to an
         * address without it. Works only when `subnet` is not `false`. For example:
         *  - `10.0.1.5` will normalized to `10.0.1.5/32`
         *  - `2008:db0::1` will be normalized to `2008:db0::1/128`
         *    Defaults to `false`.
         * @see subnet
         */
        function normalize( $bool ) : self
        {
            $this->_rules['normalize'] = $bool;

            return $this;
        }

        /**
         * @var String_ user-defined error message is used when validation fails due to IP address
         * is not not allowed by [[ranges]] check.
         *
         * You may use the following placeholders in the message:
         *
         * - `{attribute}`: the label of the attribute being validated
         * - `{value}`: the value of the attribute being validated
         *
         * @see ranges
         */
        function notInRange( $string ) : self
        {
            $this->_rules['notInRange'] = $string;

            return $this;
        }

        /**
         * @var bool whether the address can be an IP with CIDR subnet, like `192.168.10.0/24`.
         * The following values are possible:
         *
         * - `false` - the address must not have a subnet (default).
         * - `true` - specifying a subnet is required.
         * - `null` - specifying a subnet is optional.
         */
        function subnet( $bool ) : self
        {
            $this->_rules['subnet'] = $bool;

            return $this;
        }

        /**
         * @var String_ user-defined error message is used when validation fails due to the wrong CIDR.
         *
         * You may use the following placeholders in the message:
         *
         * - `{attribute}`: the label of the attribute being validated
         * - `{value}`: the value of the attribute being validated
         * @see subnet
         */
        function wrongCidr( $string ) : self
        {
            $this->_rules['wrongCidr'] = $string;

            return $this;
        }



    }