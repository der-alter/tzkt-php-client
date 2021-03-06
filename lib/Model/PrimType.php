<?php
/**
 * PrimType
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Bzzhh\Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * TzKT API
 *
 * # Introduction  TzKT Explorer provides a free REST-like API and WebSocket API for accessing detailed Tezos blockchain data and helps developers build more services and applications on top of Tezos. TzKT is an open-source project, so you can easily clone and build it and use it as a self-hosted service to avoid any risks depending on third-party services.  TzKT API is available for the following Tezos networks with the following base URLs:  - Mainnet: `https://api.tzkt.io/` or `https://api.mainnet.tzkt.io/` ([view docs](https://api.tzkt.io)) - Edo2net: `https://api.edo2net.tzkt.io/` ([view docs](https://api.edo2net.tzkt.io)) - Florencenet: `https://api.florencenet.tzkt.io/` ([view docs](https://api.florencenet.tzkt.io))  We also provide a staging environment for testing newest features and pre-updating client applications before deploying to production:  - Mainnet staging: `https://staging.api.tzkt.io/` or `https://staging.api.mainnet.tzkt.io/` ([view docs](https://staging.api.tzkt.io)) - Edo2net staging: `https://staging.api.edo2net.tzkt.io/` ([view docs](https://staging.api.edo2net.tzkt.io))      Feel free to contact us if you have any questions or feature requests. Your feedback really helps us make TzKT better!  - Email: hello@baking-bad.org - Twitter: https://twitter.com/TezosBakingBad - Telegram: [tg://resolve?domain=baking_bad_chat](tg://resolve?domain=baking_bad_chat) - Slack: https://tezos-dev.slack.com/archives/CV5NX7F2L  And don't forget to star TzKT project [on GitHub](https://github.com/baking-bad/tzkt) ;)  # Terms of Use  TzKT API is free for everyone and for both commercial and non-commercial usage.  If your application or service uses the TzKT API in any forms: directly on frontend or indirectly on backend, you should mention that fact on your website or application by placing the label **\"Powered by TzKT API\"** with a direct link to [tzkt.io](https://tzkt.io).   # Rate Limits  There will be no rate limits as long as our servers can handle the load without additional infrastructure costs. However, any apparent abuse will be prevented by setting targeted rate limits.  Check out [Tezos Explorer API Best Practices](https://baking-bad.org/blog/tag/TzKT/) and in particular [how to optimize requests count](https://baking-bad.org/blog/2020/07/29/tezos-explorer-api-tzkt-how-often-to-make-requests/).  ---
 *
 * The version of the OpenAPI document: v1.5
 * Contact: hello@baking-bad.org
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bzzhh\Tzkt\Model;
use \Bzzhh\Tzkt\ObjectSerializer;

/**
 * PrimType Class Doc Comment
 *
 * @category Class
 * @package  Bzzhh\Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PrimType
{
    /**
     * Possible values of this enum
     */
    const 0 = 0;
    const 1 = 1;
    const 2 = 2;
    const 3 = 3;
    const 4 = 4;
    const 5 = 5;
    const 6 = 6;
    const 7 = 7;
    const 8 = 8;
    const 9 = 9;
    const 10 = 10;
    const 11 = 11;
    const 12 = 12;
    const 13 = 13;
    const 14 = 14;
    const 15 = 15;
    const 16 = 16;
    const 17 = 17;
    const 18 = 18;
    const 19 = 19;
    const 20 = 20;
    const 21 = 21;
    const 22 = 22;
    const 23 = 23;
    const 24 = 24;
    const 25 = 25;
    const 26 = 26;
    const 27 = 27;
    const 28 = 28;
    const 29 = 29;
    const 30 = 30;
    const 31 = 31;
    const 32 = 32;
    const 33 = 33;
    const 34 = 34;
    const 35 = 35;
    const 36 = 36;
    const 37 = 37;
    const 38 = 38;
    const 39 = 39;
    const 40 = 40;
    const 41 = 41;
    const 42 = 42;
    const 43 = 43;
    const 44 = 44;
    const 45 = 45;
    const 46 = 46;
    const 47 = 47;
    const 48 = 48;
    const 49 = 49;
    const 50 = 50;
    const 51 = 51;
    const 52 = 52;
    const 53 = 53;
    const 54 = 54;
    const 55 = 55;
    const 56 = 56;
    const 57 = 57;
    const 58 = 58;
    const 59 = 59;
    const 60 = 60;
    const 61 = 61;
    const 62 = 62;
    const 63 = 63;
    const 64 = 64;
    const 65 = 65;
    const 66 = 66;
    const 67 = 67;
    const 68 = 68;
    const 69 = 69;
    const 70 = 70;
    const 71 = 71;
    const 72 = 72;
    const 73 = 73;
    const 74 = 74;
    const 75 = 75;
    const 76 = 76;
    const 77 = 77;
    const 78 = 78;
    const 79 = 79;
    const 80 = 80;
    const 81 = 81;
    const 82 = 82;
    const 83 = 83;
    const 84 = 84;
    const 85 = 85;
    const 86 = 86;
    const 87 = 87;
    const 88 = 88;
    const 89 = 89;
    const 90 = 90;
    const 91 = 91;
    const 92 = 92;
    const 93 = 93;
    const 94 = 94;
    const 95 = 95;
    const 96 = 96;
    const 97 = 97;
    const 98 = 98;
    const 99 = 99;
    const 100 = 100;
    const 101 = 101;
    const 102 = 102;
    const 103 = 103;
    const 104 = 104;
    const 105 = 105;
    const 106 = 106;
    const 107 = 107;
    const 108 = 108;
    const 109 = 109;
    const 110 = 110;
    const 111 = 111;
    const 112 = 112;
    const 113 = 113;
    const 114 = 114;
    const 115 = 115;
    const 116 = 116;
    const 117 = 117;
    const 118 = 118;
    const 119 = 119;
    const 120 = 120;
    const 121 = 121;
    const 122 = 122;
    const 123 = 123;
    const 124 = 124;
    const 125 = 125;
    const 126 = 126;
    const 127 = 127;
    const 128 = 128;
    const 129 = 129;
    const 130 = 130;
    const 131 = 131;
    const 132 = 132;
    const 133 = 133;
    const 134 = 134;
    const 135 = 135;
    const 136 = 136;
    const 137 = 137;
    const 138 = 138;
    const 139 = 139;
    const 140 = 140;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::0,
            self::1,
            self::2,
            self::3,
            self::4,
            self::5,
            self::6,
            self::7,
            self::8,
            self::9,
            self::10,
            self::11,
            self::12,
            self::13,
            self::14,
            self::15,
            self::16,
            self::17,
            self::18,
            self::19,
            self::20,
            self::21,
            self::22,
            self::23,
            self::24,
            self::25,
            self::26,
            self::27,
            self::28,
            self::29,
            self::30,
            self::31,
            self::32,
            self::33,
            self::34,
            self::35,
            self::36,
            self::37,
            self::38,
            self::39,
            self::40,
            self::41,
            self::42,
            self::43,
            self::44,
            self::45,
            self::46,
            self::47,
            self::48,
            self::49,
            self::50,
            self::51,
            self::52,
            self::53,
            self::54,
            self::55,
            self::56,
            self::57,
            self::58,
            self::59,
            self::60,
            self::61,
            self::62,
            self::63,
            self::64,
            self::65,
            self::66,
            self::67,
            self::68,
            self::69,
            self::70,
            self::71,
            self::72,
            self::73,
            self::74,
            self::75,
            self::76,
            self::77,
            self::78,
            self::79,
            self::80,
            self::81,
            self::82,
            self::83,
            self::84,
            self::85,
            self::86,
            self::87,
            self::88,
            self::89,
            self::90,
            self::91,
            self::92,
            self::93,
            self::94,
            self::95,
            self::96,
            self::97,
            self::98,
            self::99,
            self::100,
            self::101,
            self::102,
            self::103,
            self::104,
            self::105,
            self::106,
            self::107,
            self::108,
            self::109,
            self::110,
            self::111,
            self::112,
            self::113,
            self::114,
            self::115,
            self::116,
            self::117,
            self::118,
            self::119,
            self::120,
            self::121,
            self::122,
            self::123,
            self::124,
            self::125,
            self::126,
            self::127,
            self::128,
            self::129,
            self::130,
            self::131,
            self::132,
            self::133,
            self::134,
            self::135,
            self::136,
            self::137,
            self::138,
            self::139,
            self::140,
        ];
    }
}


