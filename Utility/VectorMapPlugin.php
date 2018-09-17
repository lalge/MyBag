<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VectorMapPlugin
 *
 * @author suraj.varane
 */
class Custom_VectorMapPlugin {
    //put your code here
 
    private $_countryCodes = array( "Bangladesh"=>"BD",
                                    "Belgium"=>"BE",
                                    "Burkina Faso"=>"BF",
                                    "Bulgaria"=>"BG",
                                    "Bosnia and Herz."=>"BA",
                                    "Brunei"=>"BN",
                                    "Bolivia"=>"BO",
                                    "Japan"=>"JP",
                                    "Burundi"=>"BI",
                                    "Benin"=>"BJ",
                                    "Bhutan"=>"BT",
                                    "Jamaica"=>"JM",
                                    "Botswana"=>"BW",
                                    "Brazil"=>"BR",
                                    "Bahamas"=>"BS",
                                    "Belarus"=>"BY",
                                    "Belize"=>"BZ",
                                    "Russia"=>"RU",
                                    "Rwanda"=>"RW",
                                    "Serbia"=>"RS",
                                    "Timor-Leste"=>"TL",
                                    "Turkmenistan"=>"TM",
                                    "Tajikistan"=>"TJ",
                                    "Romania"=>"RO",
                                    "Guinea-Bissau"=>"GW",
                                    "Guatemala"=>"GT",
                                    "Greece"=>"GR",
                                    "Eq. Guinea"=>"GQ",
                                    "Guyana"=>"GY",
                                    "Georgia"=>"GE",
                                    "United Kingdom"=>"GB",
                                    "Gabon"=>"GA",
                                    "Guinea"=>"GN",
                                    "Gambia"=>"GM",
                                    "Greenland"=>"GL",
                                    "Ghana"=>"GH",
                                    "Oman"=>"OM",
                                    "Tunisia"=>"TN",
                                    "Jordan"=>"JO",
                                    "Croatia"=>"HR",
                                    "Haiti"=>"HT",
                                    "Hungary"=>"HU",
                                    "Honduras"=>"HN",
                                    "Puerto Rico"=>"PR",
                                    "Palestine"=>"PS",
                                    "Portugal"=>"PT",
                                    "Paraguay"=>"PY",
                                    "Panama"=>"PA",
                                    "Papua New Guinea"=>"PG",
                                    "Peru"=>"PE",
                                    "Pakistan"=>"PK",
                                    "Philippines"=>"PH",
                                    "Poland"=>"PL",
                                    "Zambia"=>"ZM",
                                    "W. Sahara"=>"EH",
                                    "Estonia"=>"EE",
                                    "Egypt"=>"EG",
                                    "South Africa"=>"ZA",
                                    "Ecuador"=>"EC",
                                    "Italy"=>"IT",
                                    "Vietnam"=>"VN",
                                    "Solomon Is."=>"SB",
                                    "Ethiopia"=>"ET",
                                    "Somalia"=>"SO",
                                    "Zimbabwe"=>"ZW",
                                    "Spain"=>"ES",
                                    "Eritrea"=>"ER",
                                    "Montenegro"=>"ME",
                                    "Moldova"=>"MD",
                                    "Madagascar"=>"MG",
                                    "Morocco"=>"MA",
                                    "Uzbekistan"=>"UZ",
                                    "Myanmar"=>"MM",
                                    "Mali"=>"ML",
                                    "Mongolia"=>"MN",
                                    "Macedonia"=>"MK",
                                    "Malawi"=>"MW",
                                    "Mauritania"=>"MR",
                                    "Uganda"=>"UG",
                                    "Malaysia"=>"MY",
                                    "Mexico"=>"MX",
                                    "Israel"=>"IL",
                                    "France"=>"FR",
                                    "Somaliland"=>"XS",
                                    "Finland"=>"FI",
                                    "Fiji"=>"FJ",
                                    "Falkland Is."=>"FK",
                                    "Nicaragua"=>"NI",
                                    "Netherlands"=>"NL",
                                    "Norway"=>"NO",
                                    "Namibia"=>"NA",
                                    "Vanuatu"=>"VU",
                                    "New Caledonia"=>"NC",
                                    "Niger"=>"NE",
                                    "Nigeria"=>"NG",
                                    "New Zealand"=>"NZ",
                                    "Nepal"=>"NP",
                                    "Kosovo"=>"XK",
                                    "Côte d'Ivoire"=>"CI",
                                    "Switzerland"=>"CH",
                                    "Colombia"=>"CO",
                                    "China"=>"CN",
                                    "Cameroon"=>"CM",
                                    "Chile"=>"CL",
                                    "N. Cyprus"=>"XC",
                                    "Canada"=>"CA",
                                    "Congo"=>"CG",
                                    "Central African Rep."=>"CF",
                                    "Dem. Rep. Congo"=>"CD",
                                    "Czech Rep."=>"CZ",
                                    "Cyprus"=>"CY",
                                    "Costa Rica"=>"CR",
                                    "Cuba"=>"CU",
                                    "Swaziland"=>"SZ",
                                    "Syria"=>"SY",
                                    "Kyrgyzstan"=>"KG",
                                    "Kenya"=>"KE",
                                    "S. Sudan"=>"SS",
                                    "Suriname"=>"SR",
                                    "Cambodia"=>"KH",
                                    "El Salvador"=>"SV",
                                    "Slovakia"=>"SK",
                                    "South Korea"=>"KR",
                                    "Slovenia"=>"SI",
                                    "North Korea"=>"KP",
                                    "Kuwait"=>"KW",
                                    "Senegal"=>"SN",
                                    "Sierra Leone"=>"SL",
                                    "Kazakhstan"=>"KZ",
                                    "Saudi Arabia"=>"SA",
                                    "Sweden"=>"SE",
                                    "Sudan"=>"SD",
                                    "Dominican Rep."=>"DO",
                                    "Djibouti"=>"DJ",
                                    "Denmark"=>"DK",
                                    "Germany"=>"DE",
                                    "Yemen"=>"YE",
                                    "Algeria"=>"DZ",
                                    "United States"=>"US",
                                    "Uruguay"=>"UY",
                                    "Lebanon"=>"LB",
                                    "Lao PDR"=>"LA",
                                    "Taiwan"=>"TW",
                                    "Trinidad and Tobago"=>"TT",
                                    "Turkey"=>"TR",
                                    "Sri Lanka"=>"LK",
                                    "Latvia"=>"LV",
                                    "Lithuania"=>"LT",
                                    "Luxembourg"=>"LU",
                                    "Liberia"=>"LR",
                                    "Lesotho"=>"LS",
                                    "Thailand"=>"TH",
                                    "Fr. S. Antarctic Lands"=>"TF",
                                    "Togo"=>"TG",
                                    "Chad"=>"TD",
                                    "Libya"=>"LY",
                                    "United Arab Emirates"=>"AE",
                                    "Venezuela"=>"VE",
                                    "Afghanistan"=>"AF",
                                    "Iraq"=>"IQ",
                                    "Iceland"=>"IS",
                                    "Iran"=>"IR",
                                    "Armenia"=>"AM",
                                    "Albania"=>"AL",
                                    "Angola"=>"AO",
                                    "Argentina"=>"AR",
                                    "Australia"=>"AU",
                                    "Austria"=>"AT",
                                    "India"=>"IN",
                                    "Tanzania"=>"TZ",
                                    "Azerbaijan"=>"AZ",
                                    "Ireland"=>"IE",
                                    "Indonesia"=>"ID",
                                    "Ukraine"=>"UA",
                                    "Qatar"=>"QA",
                                    "Mozambique"=>"MZ");
    public function getMapDataProvider($inputArr){
        $resp = new stdClass();
        foreach($inputArr as $data){
            $val = strtolower($this->_countryCodes[$data['_id']]);
            if(!empty($val))
                $resp->{$val} = $data['value'];
        }
        return $resp;
    }
    public function getCountryNames($inputArr){
        $resp= array();
        foreach($inputArr as $data){
            $country_name= array_keys($this->_countryCodes, $data);
            //$val = ($this->_countryCodes[$data['_id']]);
            if(!empty($country_name)){
                array_push($resp,$country_name[0]);
            }
        }
        return $resp;
    }
}
