<?php
/*
 * $Id$
 */

/*
    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

if(!function_exists('add_action')) die('Cheatin’ uh?');

$countries = array(
	'af' => __('Afghanistan', WP_CLANWARS_TEXTDOMAIN),
	'al' => __('Albania', WP_CLANWARS_TEXTDOMAIN),
	'dz' => __('Algeria', WP_CLANWARS_TEXTDOMAIN),
	'as' => __('American Samoa', WP_CLANWARS_TEXTDOMAIN),
	'ad' => __('Andorra', WP_CLANWARS_TEXTDOMAIN),
	'ao' => __('Angola', WP_CLANWARS_TEXTDOMAIN),
	'ai' => __('Anguilla', WP_CLANWARS_TEXTDOMAIN),
	'ag' => __('Antigua and Barbuda', WP_CLANWARS_TEXTDOMAIN),
	'ar' => __('Argentina', WP_CLANWARS_TEXTDOMAIN),
	'am' => __('Armenia', WP_CLANWARS_TEXTDOMAIN),
	'aw' => __('Aruba', WP_CLANWARS_TEXTDOMAIN),
	'au' => __('Australia', WP_CLANWARS_TEXTDOMAIN),
	'at' => __('Austria', WP_CLANWARS_TEXTDOMAIN),
	'az' => __('Azerbaijan', WP_CLANWARS_TEXTDOMAIN),
	'bs' => __('Bahamas', WP_CLANWARS_TEXTDOMAIN),
	'bh' => __('Bahrain', WP_CLANWARS_TEXTDOMAIN),
	'bd' => __('Bangladesh', WP_CLANWARS_TEXTDOMAIN),
	'bb' => __('Barbados', WP_CLANWARS_TEXTDOMAIN),
	'by' => __('Belarus', WP_CLANWARS_TEXTDOMAIN),
	'be' => __('Belgium', WP_CLANWARS_TEXTDOMAIN),
	'bz' => __('Belize', WP_CLANWARS_TEXTDOMAIN),
	'bj' => __('Benin', WP_CLANWARS_TEXTDOMAIN),
	'bm' => __('Bermuda', WP_CLANWARS_TEXTDOMAIN),
	'bt' => __('Bhutan', WP_CLANWARS_TEXTDOMAIN),
	'bo' => __('Bolivia', WP_CLANWARS_TEXTDOMAIN),
	'ba' => __('Bosnia and Herzegowina', WP_CLANWARS_TEXTDOMAIN),
	'bw' => __('Botswana', WP_CLANWARS_TEXTDOMAIN),
	'bv' => __('Bouvet Island', WP_CLANWARS_TEXTDOMAIN),
	'br' => __('Brazil', WP_CLANWARS_TEXTDOMAIN),
	'io' => __('British Indian Ocean Territory', WP_CLANWARS_TEXTDOMAIN),
	'bn' => __('Brunei Darussalam', WP_CLANWARS_TEXTDOMAIN),
	'bg' => __('Bulgaria', WP_CLANWARS_TEXTDOMAIN),
	'bf' => __('Burkina Faso', WP_CLANWARS_TEXTDOMAIN),
	'bi' => __('Burundi', WP_CLANWARS_TEXTDOMAIN),
	'kh' => __('Cambodia', WP_CLANWARS_TEXTDOMAIN),
	'cm' => __('Cameroon', WP_CLANWARS_TEXTDOMAIN),
	'ca' => __('Canada', WP_CLANWARS_TEXTDOMAIN),
	'cv' => __('Cape Verde', WP_CLANWARS_TEXTDOMAIN),
	'catalonia' => __('Catalonia', WP_CLANWARS_TEXTDOMAIN),
	'ky' => __('Cayman Islands', WP_CLANWARS_TEXTDOMAIN),
	'cf' => __('Central African Republic', WP_CLANWARS_TEXTDOMAIN),
	'td' => __('Chad', WP_CLANWARS_TEXTDOMAIN),
	'cl' => __('Chile', WP_CLANWARS_TEXTDOMAIN),
	'cn' => __('China', WP_CLANWARS_TEXTDOMAIN),
	'cx' => __('Christmas Island', WP_CLANWARS_TEXTDOMAIN),
	'cc' => __('Cocos (Keeling) Islands', WP_CLANWARS_TEXTDOMAIN),
	'co' => __('Colombia', WP_CLANWARS_TEXTDOMAIN),
	'km' => __('Comoros', WP_CLANWARS_TEXTDOMAIN),
	'cg' => __('Congo', WP_CLANWARS_TEXTDOMAIN),
	'cd' => __('Congo, the DRC', WP_CLANWARS_TEXTDOMAIN),
	'ck' => __('Cook Islands', WP_CLANWARS_TEXTDOMAIN),
	'cr' => __('Costa Rica', WP_CLANWARS_TEXTDOMAIN),
	'ci' => __('Cote D\'Ivoire', WP_CLANWARS_TEXTDOMAIN),
	'hr' => __('Croatia', WP_CLANWARS_TEXTDOMAIN),
	'cu' => __('Cuba', WP_CLANWARS_TEXTDOMAIN),
	'cy' => __('Cyprus', WP_CLANWARS_TEXTDOMAIN),
	'cz' => __('Czech Republic', WP_CLANWARS_TEXTDOMAIN),
	'dk' => __('Denmark', WP_CLANWARS_TEXTDOMAIN),
	'dj' => __('Djibouti', WP_CLANWARS_TEXTDOMAIN),
	'dm' => __('Dominica', WP_CLANWARS_TEXTDOMAIN),
	'do' => __('Dominican Republic', WP_CLANWARS_TEXTDOMAIN),
	'ec' => __('Ecuador', WP_CLANWARS_TEXTDOMAIN),
	'eg' => __('Egypt', WP_CLANWARS_TEXTDOMAIN),
	'sv' => __('El Salvador', WP_CLANWARS_TEXTDOMAIN),
	'england' => __('England', WP_CLANWARS_TEXTDOMAIN),
	'gq' => __('Equatorial Guinea', WP_CLANWARS_TEXTDOMAIN),
	'er' => __('Eritrea', WP_CLANWARS_TEXTDOMAIN),
	'ee' => __('Estonia', WP_CLANWARS_TEXTDOMAIN),
	'et' => __('Ethiopia', WP_CLANWARS_TEXTDOMAIN),
	'europeanunion' => __('European Union', WP_CLANWARS_TEXTDOMAIN),
	'fk' => __('Falkland Islands (Malvinas)', WP_CLANWARS_TEXTDOMAIN),
	'fo' => __('Faroe Islands', WP_CLANWARS_TEXTDOMAIN),
	'fj' => __('Fiji', WP_CLANWARS_TEXTDOMAIN),
	'fi' => __('Finland', WP_CLANWARS_TEXTDOMAIN),
	'fr' => __('France', WP_CLANWARS_TEXTDOMAIN),
	'gf' => __('French Guiana', WP_CLANWARS_TEXTDOMAIN),
	'pf' => __('French Polynesia', WP_CLANWARS_TEXTDOMAIN),
	'tf' => __('French Southern Territories', WP_CLANWARS_TEXTDOMAIN),
	'ga' => __('Gabon', WP_CLANWARS_TEXTDOMAIN),
	'gm' => __('Gambia', WP_CLANWARS_TEXTDOMAIN),
	'ge' => __('Georgia', WP_CLANWARS_TEXTDOMAIN),
	'de' => __('Germany', WP_CLANWARS_TEXTDOMAIN),
	'gh' => __('Ghana', WP_CLANWARS_TEXTDOMAIN),
	'gi' => __('Gibraltar', WP_CLANWARS_TEXTDOMAIN),
	'gr' => __('Greece', WP_CLANWARS_TEXTDOMAIN),
	'gl' => __('Greenland', WP_CLANWARS_TEXTDOMAIN),
	'gd' => __('Grenada', WP_CLANWARS_TEXTDOMAIN),
	'gp' => __('Guadeloupe', WP_CLANWARS_TEXTDOMAIN),
	'gu' => __('Guam', WP_CLANWARS_TEXTDOMAIN),
	'gt' => __('Guatemala', WP_CLANWARS_TEXTDOMAIN),
	'gn' => __('Guinea', WP_CLANWARS_TEXTDOMAIN),
	'gw' => __('Guinea-Bissau', WP_CLANWARS_TEXTDOMAIN),
	'gy' => __('Guyana', WP_CLANWARS_TEXTDOMAIN),
	'ht' => __('Haiti', WP_CLANWARS_TEXTDOMAIN),
	'hm' => __('Heard Island and McDonald Islands', WP_CLANWARS_TEXTDOMAIN),
	'va' => __('Holy See (Vatican City State)', WP_CLANWARS_TEXTDOMAIN),
	'hn' => __('Honduras', WP_CLANWARS_TEXTDOMAIN),
	'hk' => __('Hong Kong', WP_CLANWARS_TEXTDOMAIN),
	'hu' => __('Hungary', WP_CLANWARS_TEXTDOMAIN),
	'is' => __('Iceland', WP_CLANWARS_TEXTDOMAIN),
	'in' => __('India', WP_CLANWARS_TEXTDOMAIN),
	'id' => __('Indonesia', WP_CLANWARS_TEXTDOMAIN),
	'ir' => __('Iran, Islamic Republic of', WP_CLANWARS_TEXTDOMAIN),
	'iq' => __('Iraq', WP_CLANWARS_TEXTDOMAIN),
	'ie' => __('Ireland', WP_CLANWARS_TEXTDOMAIN),
	'il' => __('Israel', WP_CLANWARS_TEXTDOMAIN),
	'it' => __('Italy', WP_CLANWARS_TEXTDOMAIN),
	'jm' => __('Jamaica', WP_CLANWARS_TEXTDOMAIN),
	'jp' => __('Japan', WP_CLANWARS_TEXTDOMAIN),
	'jo' => __('Jordan', WP_CLANWARS_TEXTDOMAIN),
	'kz' => __('Kazakhstan', WP_CLANWARS_TEXTDOMAIN),
	'ke' => __('Kenya', WP_CLANWARS_TEXTDOMAIN),
	'ki' => __('Kiribati', WP_CLANWARS_TEXTDOMAIN),
	'kp' => __('Korea, Democratic People\'s Republic of', WP_CLANWARS_TEXTDOMAIN),
	'kr' => __('Korea, Republic of', WP_CLANWARS_TEXTDOMAIN),
	'kw' => __('Kuwait', WP_CLANWARS_TEXTDOMAIN),
	'kg' => __('Kyrgyzstan', WP_CLANWARS_TEXTDOMAIN),
	'la' => __('Lao People\'s Democratic Republic', WP_CLANWARS_TEXTDOMAIN),
	'lv' => __('Latvia', WP_CLANWARS_TEXTDOMAIN),
	'lb' => __('Lebanon', WP_CLANWARS_TEXTDOMAIN),
	'ls' => __('Lesotho', WP_CLANWARS_TEXTDOMAIN),
	'lr' => __('Liberia', WP_CLANWARS_TEXTDOMAIN),
	'ly' => __('Libyan Arab Jamahiriya', WP_CLANWARS_TEXTDOMAIN),
	'li' => __('Liechtenstein', WP_CLANWARS_TEXTDOMAIN),
	'lt' => __('Lithuania', WP_CLANWARS_TEXTDOMAIN),
	'lu' => __('Luxembourg', WP_CLANWARS_TEXTDOMAIN),
	'mo' => __('Macao', WP_CLANWARS_TEXTDOMAIN),
	'mk' => __('Macedonia, the former Yugoslav Republic of', WP_CLANWARS_TEXTDOMAIN),
	'mg' => __('Madagascar', WP_CLANWARS_TEXTDOMAIN),
	'mw' => __('Malawi', WP_CLANWARS_TEXTDOMAIN),
	'my' => __('Malaysia', WP_CLANWARS_TEXTDOMAIN),
	'mv' => __('Maldives', WP_CLANWARS_TEXTDOMAIN),
	'ml' => __('Mali', WP_CLANWARS_TEXTDOMAIN),
	'mt' => __('Malta', WP_CLANWARS_TEXTDOMAIN),
	'mh' => __('Marshall Islands', WP_CLANWARS_TEXTDOMAIN),
	'mq' => __('Martinique', WP_CLANWARS_TEXTDOMAIN),
	'mr' => __('Mauritania', WP_CLANWARS_TEXTDOMAIN),
	'mu' => __('Mauritius', WP_CLANWARS_TEXTDOMAIN),
	'yt' => __('Mayotte', WP_CLANWARS_TEXTDOMAIN),
	'mx' => __('Mexico', WP_CLANWARS_TEXTDOMAIN),
	'fm' => __('Micronesia, Federated States of', WP_CLANWARS_TEXTDOMAIN),
	'md' => __('Moldova, Republic of', WP_CLANWARS_TEXTDOMAIN),
	'mc' => __('Monaco', WP_CLANWARS_TEXTDOMAIN),
	'mn' => __('Mongolia', WP_CLANWARS_TEXTDOMAIN),
	'me' => __('Montenegro', WP_CLANWARS_TEXTDOMAIN),
	'ms' => __('Montserrat', WP_CLANWARS_TEXTDOMAIN),
	'ma' => __('Morocco', WP_CLANWARS_TEXTDOMAIN),
	'mz' => __('Mozambique', WP_CLANWARS_TEXTDOMAIN),
	'mm' => __('Myanmar', WP_CLANWARS_TEXTDOMAIN),
	'na' => __('Namibia', WP_CLANWARS_TEXTDOMAIN),
	'nr' => __('Nauru', WP_CLANWARS_TEXTDOMAIN),
	'np' => __('Nepal', WP_CLANWARS_TEXTDOMAIN),
	'nl' => __('Netherlands', WP_CLANWARS_TEXTDOMAIN),
	'an' => __('Netherlands Antilles', WP_CLANWARS_TEXTDOMAIN),
	'nc' => __('New Caledonia', WP_CLANWARS_TEXTDOMAIN),
	'nz' => __('New Zealand', WP_CLANWARS_TEXTDOMAIN),
	'ni' => __('Nicaragua', WP_CLANWARS_TEXTDOMAIN),
	'ne' => __('Niger', WP_CLANWARS_TEXTDOMAIN),
	'ng' => __('Nigeria', WP_CLANWARS_TEXTDOMAIN),
	'nu' => __('Niue', WP_CLANWARS_TEXTDOMAIN),
	'nf' => __('Norfolk Island', WP_CLANWARS_TEXTDOMAIN),
	'mp' => __('Northern Mariana Islands', WP_CLANWARS_TEXTDOMAIN),
	'no' => __('Norway', WP_CLANWARS_TEXTDOMAIN),
	'om' => __('Oman', WP_CLANWARS_TEXTDOMAIN),
	'pk' => __('Pakistan', WP_CLANWARS_TEXTDOMAIN),
	'pw' => __('Palau', WP_CLANWARS_TEXTDOMAIN),
	'ps' => __('Palestinian Territory, Occupied', WP_CLANWARS_TEXTDOMAIN),
	'pa' => __('Panama', WP_CLANWARS_TEXTDOMAIN),
	'pg' => __('Papua New Guinea', WP_CLANWARS_TEXTDOMAIN),
	'py' => __('Paraguay', WP_CLANWARS_TEXTDOMAIN),
	'pe' => __('Peru', WP_CLANWARS_TEXTDOMAIN),
	'ph' => __('Philippines', WP_CLANWARS_TEXTDOMAIN),
	'pn' => __('Pitcairn', WP_CLANWARS_TEXTDOMAIN),
	'pl' => __('Poland', WP_CLANWARS_TEXTDOMAIN),
	'pt' => __('Portugal', WP_CLANWARS_TEXTDOMAIN),
	'pr' => __('Puerto Rico', WP_CLANWARS_TEXTDOMAIN),
	'qa' => __('Qatar', WP_CLANWARS_TEXTDOMAIN),
	'ro' => __('Romania', WP_CLANWARS_TEXTDOMAIN),
	'ru' => __('Russia', WP_CLANWARS_TEXTDOMAIN),
	'rw' => __('Rwanda', WP_CLANWARS_TEXTDOMAIN),
	're' => __('Réunion', WP_CLANWARS_TEXTDOMAIN),
	'sh' => __('Saint Helena, Ascension and Tristan da Cunha', WP_CLANWARS_TEXTDOMAIN),
	'kn' => __('Saint Kitts and Nevis', WP_CLANWARS_TEXTDOMAIN),
	'lc' => __('Saint Lucia', WP_CLANWARS_TEXTDOMAIN),
	'pm' => __('Saint Pierre and Miquelon', WP_CLANWARS_TEXTDOMAIN),
	'vc' => __('Saint Vincent and the Grenadines', WP_CLANWARS_TEXTDOMAIN),
	'ws' => __('Samoa', WP_CLANWARS_TEXTDOMAIN),
	'sm' => __('San Marino', WP_CLANWARS_TEXTDOMAIN),
	'st' => __('Sao Tome and Principe', WP_CLANWARS_TEXTDOMAIN),
	'sa' => __('Saudi Arabia', WP_CLANWARS_TEXTDOMAIN),
	'scotland' => __('Scotland', WP_CLANWARS_TEXTDOMAIN),
	'sn' => __('Senegal', WP_CLANWARS_TEXTDOMAIN),
	'rs' => __('Serbia', WP_CLANWARS_TEXTDOMAIN),
	'cs' => __('Serbia and Montenegro', WP_CLANWARS_TEXTDOMAIN),
	'sc' => __('Seychelles', WP_CLANWARS_TEXTDOMAIN),
	'sl' => __('Sierra Leone', WP_CLANWARS_TEXTDOMAIN),
	'sg' => __('Singapore', WP_CLANWARS_TEXTDOMAIN),
	'sk' => __('Slovakia', WP_CLANWARS_TEXTDOMAIN),
	'si' => __('Slovenia', WP_CLANWARS_TEXTDOMAIN),
	'sb' => __('Solomon Islands', WP_CLANWARS_TEXTDOMAIN),
	'so' => __('Somalia', WP_CLANWARS_TEXTDOMAIN),
	'za' => __('South Africa', WP_CLANWARS_TEXTDOMAIN),
	'gs' => __('South Georgia and the South Sandwich Islands', WP_CLANWARS_TEXTDOMAIN),
	'es' => __('Spain', WP_CLANWARS_TEXTDOMAIN),
	'lk' => __('Sri Lanka', WP_CLANWARS_TEXTDOMAIN),
	'sd' => __('Sudan', WP_CLANWARS_TEXTDOMAIN),
	'sr' => __('Suriname', WP_CLANWARS_TEXTDOMAIN),
	'sj' => __('Svalbard and Jan Mayen', WP_CLANWARS_TEXTDOMAIN),
	'sz' => __('Swaziland', WP_CLANWARS_TEXTDOMAIN),
	'se' => __('Sweden', WP_CLANWARS_TEXTDOMAIN),
	'ch' => __('Switzerland', WP_CLANWARS_TEXTDOMAIN),
	'sy' => __('Syrian Arab Republic', WP_CLANWARS_TEXTDOMAIN),
	'tw' => __('Taiwan, Province of China', WP_CLANWARS_TEXTDOMAIN),
	'tj' => __('Tajikistan', WP_CLANWARS_TEXTDOMAIN),
	'tz' => __('Tanzania, United Republic of', WP_CLANWARS_TEXTDOMAIN),
	'th' => __('Thailand', WP_CLANWARS_TEXTDOMAIN),
	'tl' => __('Timor-Leste', WP_CLANWARS_TEXTDOMAIN),
	'tg' => __('Togo', WP_CLANWARS_TEXTDOMAIN),
	'tk' => __('Tokelau', WP_CLANWARS_TEXTDOMAIN),
	'to' => __('Tonga', WP_CLANWARS_TEXTDOMAIN),
	'tt' => __('Trinidad and Tobago', WP_CLANWARS_TEXTDOMAIN),
	'tn' => __('Tunisia', WP_CLANWARS_TEXTDOMAIN),
	'tr' => __('Turkey', WP_CLANWARS_TEXTDOMAIN),
	'tm' => __('Turkmenistan', WP_CLANWARS_TEXTDOMAIN),
	'tc' => __('Turks and Caicos Islands', WP_CLANWARS_TEXTDOMAIN),
	'tv' => __('Tuvalu', WP_CLANWARS_TEXTDOMAIN),
	'ug' => __('Uganda', WP_CLANWARS_TEXTDOMAIN),
	'ua' => __('Ukraine', WP_CLANWARS_TEXTDOMAIN),
	'ae' => __('United Arab Emirates', WP_CLANWARS_TEXTDOMAIN),
	'gb' => __('United Kingdom', WP_CLANWARS_TEXTDOMAIN),
	'us' => __('United States', WP_CLANWARS_TEXTDOMAIN),
	'um' => __('United States Minor Outlying Islands', WP_CLANWARS_TEXTDOMAIN),
	'uy' => __('Uruguay', WP_CLANWARS_TEXTDOMAIN),
	'uz' => __('Uzbekistan', WP_CLANWARS_TEXTDOMAIN),
	'vu' => __('Vanuatu', WP_CLANWARS_TEXTDOMAIN),
	've' => __('Venezuela, Bolivarian Republic of', WP_CLANWARS_TEXTDOMAIN),
	'vn' => __('Viet Nam', WP_CLANWARS_TEXTDOMAIN),
	'vg' => __('Virgin Islands, British', WP_CLANWARS_TEXTDOMAIN),
	'vi' => __('Virgin Islands, U.S.', WP_CLANWARS_TEXTDOMAIN),
	'wales' => __('Wales', WP_CLANWARS_TEXTDOMAIN),
	'wf' => __('Wallis and Futuna', WP_CLANWARS_TEXTDOMAIN),
	'eh' => __('Western Sahara', WP_CLANWARS_TEXTDOMAIN),
	'ye' => __('Yemen', WP_CLANWARS_TEXTDOMAIN),
	'zm' => __('Zambia', WP_CLANWARS_TEXTDOMAIN),
	'zw' => __('Zimbabwe', WP_CLANWARS_TEXTDOMAIN),
	'ax' => __('Åland', WP_CLANWARS_TEXTDOMAIN)
);
