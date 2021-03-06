<?php
class Jobify_CustomFields {
  public function run() {
    add_action( 'widgets_init', function(){

/*

if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_job-details',
    'title' => 'Job Details',
    'fields' => array (
      array (
        'key' => 'field_56a4076be1b97',
        'label' => 'Application URL',
        'name' => 'jobify_app_url',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => 'http://',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_56a407bb59164',
        'label' => 'Organization',
        'name' => '',
        'type' => 'tab',
      ),
      array (
        'key' => 'field_56a4082f935dc',
        'label' => 'Organization Logo',
        'name' => 'jobify_logo',
        'type' => 'image',
        'save_format' => 'object',
        'preview_size' => 'thumbnail',
        'library' => 'all',
      ),
      array (
        'key' => 'field_56a406fc2efce',
        'label' => 'Organization Name',
        'name' => 'jobify_company',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => 'Highfivery Paintball',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_56a40787e1b98',
        'label' => 'Organization Website',
        'name' => 'jobify_website',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => 'http://',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_56a406da2efcd',
        'label' => 'Location',
        'name' => '',
        'type' => 'tab',
      ),
      array (
        'key' => 'field_56a2b215508b8',
        'label' => 'City',
        'name' => 'jobify_city',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => 'Elgin',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_56a2b24d508b9',
        'label' => 'State',
        'name' => 'jobify_state',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => 'Texas',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_56a2b286508ba',
        'label' => 'Zip/Postal Code',
        'name' => 'jobify_zip',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => 78621,
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_56a2b2bb508bb',
        'label' => 'Country',
        'name' => 'jobify_country',
        'type' => 'select',
        'choices' => array (
          'AF' => 'Afghanistan',
          'AL' => 'Albania',
          'DZ' => 'Algeria',
          'AS' => 'American Samoa',
          'AD' => 'Andorra',
          'AO' => 'Angola',
          'AI' => 'Anguilla',
          'AQ' => 'Antarctica',
          'AG' => 'Antigua and Barbuda',
          'AR' => 'Argentina',
          'AM' => 'Armenia',
          'AW' => 'Aruba',
          'AU' => 'Australia',
          'AT' => 'Austria',
          'AZ' => 'Azerbaijan',
          'BS' => 'Bahamas',
          'BH' => 'Bahrain',
          'BD' => 'Bangladesh',
          'BB' => 'Barbados',
          'BY' => 'Belarus',
          'BE' => 'Belgium',
          'BZ' => 'Belize',
          'BJ' => 'Benin',
          'BM' => 'Bermuda',
          'BT' => 'Bhutan',
          'BO' => 'Bolivia',
          'BA' => 'Bosnia and Herzegovina',
          'BW' => 'Botswana',
          'BV' => 'Bouvet Island',
          'BR' => 'Brazil',
          'BQ' => 'British Antarctic Territory',
          'IO' => 'British Indian Ocean Territory',
          'VG' => 'British Virgin Islands',
          'BN' => 'Brunei',
          'BG' => 'Bulgaria',
          'BF' => 'Burkina Faso',
          'BI' => 'Burundi',
          'KH' => 'Cambodia',
          'CM' => 'Cameroon',
          'CA' => 'Canada',
          'CT' => 'Canton and Enderbury Islands',
          'CV' => 'Cape Verde',
          'KY' => 'Cayman Islands',
          'CF' => 'Central African Republic',
          'TD' => 'Chad',
          'CL' => 'Chile',
          'CN' => 'China',
          'CX' => 'Christmas Island',
          'CC' => 'Cocos [Keeling] Islands',
          'CO' => 'Colombia',
          'KM' => 'Comoros',
          'CG' => 'Congo - Brazzaville',
          'CD' => 'Congo - Kinshasa',
          'CK' => 'Cook Islands',
          'CR' => 'Costa Rica',
          'HR' => 'Croatia',
          'CU' => 'Cuba',
          'CY' => 'Cyprus',
          'CZ' => 'Czech Republic',
          'CI' => 'Côte d’Ivoire',
          'DK' => 'Denmark',
          'DJ' => 'Djibouti',
          'DM' => 'Dominica',
          'DO' => 'Dominican Republic',
          'NQ' => 'Dronning Maud Land',
          'DD' => 'East Germany',
          'EC' => 'Ecuador',
          'EG' => 'Egypt',
          'SV' => 'El Salvador',
          'GQ' => 'Equatorial Guinea',
          'ER' => 'Eritrea',
          'EE' => 'Estonia',
          'ET' => 'Ethiopia',
          'FK' => 'Falkland Islands',
          'FO' => 'Faroe Islands',
          'FJ' => 'Fiji',
          'FI' => 'Finland',
          'FR' => 'France',
          'GF' => 'French Guiana',
          'PF' => 'French Polynesia',
          'TF' => 'French Southern Territories',
          'FQ' => 'French Southern and Antarctic Territories',
          'GA' => 'Gabon',
          'GM' => 'Gambia',
          'GE' => 'Georgia',
          'DE' => 'Germany',
          'GH' => 'Ghana',
          'GI' => 'Gibraltar',
          'GR' => 'Greece',
          'GL' => 'Greenland',
          'GD' => 'Grenada',
          'GP' => 'Guadeloupe',
          'GU' => 'Guam',
          'GT' => 'Guatemala',
          'GG' => 'Guernsey',
          'GN' => 'Guinea',
          'GW' => 'Guinea-Bissau',
          'GY' => 'Guyana',
          'HT' => 'Haiti',
          'HM' => 'Heard Island and McDonald Islands',
          'HN' => 'Honduras',
          'HK' => 'Hong Kong SAR China',
          'HU' => 'Hungary',
          'IS' => 'Iceland',
          'IN' => 'India',
          'ID' => 'Indonesia',
          'IR' => 'Iran',
          'IQ' => 'Iraq',
          'IE' => 'Ireland',
          'IM' => 'Isle of Man',
          'IL' => 'Israel',
          'IT' => 'Italy',
          'JM' => 'Jamaica',
          'JP' => 'Japan',
          'JE' => 'Jersey',
          'JT' => 'Johnston Island',
          'JO' => 'Jordan',
          'KZ' => 'Kazakhstan',
          'KE' => 'Kenya',
          'KI' => 'Kiribati',
          'KW' => 'Kuwait',
          'KG' => 'Kyrgyzstan',
          'LA' => 'Laos',
          'LV' => 'Latvia',
          'LB' => 'Lebanon',
          'LS' => 'Lesotho',
          'LR' => 'Liberia',
          'LY' => 'Libya',
          'LI' => 'Liechtenstein',
          'LT' => 'Lithuania',
          'LU' => 'Luxembourg',
          'MO' => 'Macau SAR China',
          'MK' => 'Macedonia',
          'MG' => 'Madagascar',
          'MW' => 'Malawi',
          'MY' => 'Malaysia',
          'MV' => 'Maldives',
          'ML' => 'Mali',
          'MT' => 'Malta',
          'MH' => 'Marshall Islands',
          'MQ' => 'Martinique',
          'MR' => 'Mauritania',
          'MU' => 'Mauritius',
          'YT' => 'Mayotte',
          'FX' => 'Metropolitan France',
          'MX' => 'Mexico',
          'FM' => 'Micronesia',
          'MI' => 'Midway Islands',
          'MD' => 'Moldova',
          'MC' => 'Monaco',
          'MN' => 'Mongolia',
          'ME' => 'Montenegro',
          'MS' => 'Montserrat',
          'MA' => 'Morocco',
          'MZ' => 'Mozambique',
          'MM' => 'Myanmar [Burma]',
          'NA' => 'Namibia',
          'NR' => 'Nauru',
          'NP' => 'Nepal',
          'NL' => 'Netherlands',
          'AN' => 'Netherlands Antilles',
          'NT' => 'Neutral Zone',
          'NC' => 'New Caledonia',
          'NZ' => 'New Zealand',
          'NI' => 'Nicaragua',
          'NE' => 'Niger',
          'NG' => 'Nigeria',
          'NU' => 'Niue',
          'NF' => 'Norfolk Island',
          'KP' => 'North Korea',
          'VD' => 'North Vietnam',
          'MP' => 'Northern Mariana Islands',
          'NO' => 'Norway',
          'OM' => 'Oman',
          'PC' => 'Pacific Islands Trust Territory',
          'PK' => 'Pakistan',
          'PW' => 'Palau',
          'PS' => 'Palestinian Territories',
          'PA' => 'Panama',
          'PZ' => 'Panama Canal Zone',
          'PG' => 'Papua New Guinea',
          'PY' => 'Paraguay',
          'YD' => 'People\'s Democratic Republic of Yemen',
          'PE' => 'Peru',
          'PH' => 'Philippines',
          'PN' => 'Pitcairn Islands',
          'PL' => 'Poland',
          'PT' => 'Portugal',
          'PR' => 'Puerto Rico',
          'QA' => 'Qatar',
          'RO' => 'Romania',
          'RU' => 'Russia',
          'RW' => 'Rwanda',
          'RE' => 'Réunion',
          'BL' => 'Saint Barthélemy',
          'SH' => 'Saint Helena',
          'KN' => 'Saint Kitts and Nevis',
          'LC' => 'Saint Lucia',
          'MF' => 'Saint Martin',
          'PM' => 'Saint Pierre and Miquelon',
          'VC' => 'Saint Vincent and the Grenadines',
          'WS' => 'Samoa',
          'SM' => 'San Marino',
          'SA' => 'Saudi Arabia',
          'SN' => 'Senegal',
          'RS' => 'Serbia',
          'CS' => 'Serbia and Montenegro',
          'SC' => 'Seychelles',
          'SL' => 'Sierra Leone',
          'SG' => 'Singapore',
          'SK' => 'Slovakia',
          'SI' => 'Slovenia',
          'SB' => 'Solomon Islands',
          'SO' => 'Somalia',
          'ZA' => 'South Africa',
          'GS' => 'South Georgia and the South Sandwich Islands',
          'KR' => 'South Korea',
          'ES' => 'Spain',
          'LK' => 'Sri Lanka',
          'SD' => 'Sudan',
          'SR' => 'Suriname',
          'SJ' => 'Svalbard and Jan Mayen',
          'SZ' => 'Swaziland',
          'SE' => 'Sweden',
          'CH' => 'Switzerland',
          'SY' => 'Syria',
          'ST' => 'São Tomé and Príncipe',
          'TW' => 'Taiwan',
          'TJ' => 'Tajikistan',
          'TZ' => 'Tanzania',
          'TH' => 'Thailand',
          'TL' => 'Timor-Leste',
          'TG' => 'Togo',
          'TK' => 'Tokelau',
          'TO' => 'Tonga',
          'TT' => 'Trinidad and Tobago',
          'TN' => 'Tunisia',
          'TR' => 'Turkey',
          'TM' => 'Turkmenistan',
          'TC' => 'Turks and Caicos Islands',
          'TV' => 'Tuvalu',
          'UM' => 'U.S. Minor Outlying Islands',
          'PU' => 'U.S. Miscellaneous Pacific Islands',
          'VI' => 'U.S. Virgin Islands',
          'UG' => 'Uganda',
          'UA' => 'Ukraine',
          'SU' => 'Union of Soviet Socialist Republics',
          'AE' => 'United Arab Emirates',
          'GB' => 'United Kingdom',
          'US' => 'United States',
          'ZZ' => 'Unknown or Invalid Region',
          'UY' => 'Uruguay',
          'UZ' => 'Uzbekistan',
          'VU' => 'Vanuatu',
          'VA' => 'Vatican City',
          'VE' => 'Venezuela',
          'VN' => 'Vietnam',
          'WK' => 'Wake Island',
          'WF' => 'Wallis and Futuna',
          'EH' => 'Western Sahara',
          'YE' => 'Yemen',
          'ZM' => 'Zambia',
          'ZW' => 'Zimbabwe',
          'AX' => 'Åland Islands',
        ),
        'default_value' => 'US',
        'allow_null' => 0,
        'multiple' => 0,
      ),
      array (
        'key' => 'field_56a2b2f3508bc',
        'label' => 'Address',
        'name' => 'jobify_address',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '18810 Highway 290 E. Ste. 202',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_56a4088711af0',
        'label' => 'Contact Info',
        'name' => '',
        'type' => 'tab',
      ),
      array (
        'key' => 'field_56a4089711af1',
        'label' => 'Phone',
        'name' => 'jobify_phone',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '+1 (800) 123-4567',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_56a408c411af2',
        'label' => 'Email',
        'name' => 'jobify_email',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => 'jobs@jobify.highfivery.com',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'jobify_posting',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'default',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));
}
*/



    });
  }
}