<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Custom_FusionMapPlugin {

    //put your code here

    private $_countryCodes = array(
        "Afghanistan" => "93",
        "Albania" => "129",
        "Algeria" => "39",
        "American Samoa" => "208",
        "Andorra" => "130",
        "Angola" => "40",
        "Anguilla" => "207",
        "Antigua and Barbuda" => "01",
        "Argentina" => "25",
        "Armenia" => "94",
        "Aruba" => "206",
        "Australia" => "175",
        "Austria" => "131",
        "Azerbaijan" => "95",
        "Bahamas" => "02",
        "Bahrain" => "190",
        "Bangladesh" => "96",
        "Barbados" => "03",
        "Belarus" => "132",
        "Belgium" => "133",
        "Belize" => "04",
        "Benin" => "41",
        "Bermuda" => "209",
        "Bhutan" => "97",
        "Bolivia" => "26",
        "Bosnia and Herzegovina" => "134",
        "Botswana" => "42",
        "Brazil" => "27",
        "Brunei Darussalam" => "98",
        "Bulgaria" => "135",
        "Burkina Faso" => "43",
        "Burundi" => "44",
        "Cambodia" => "100",
        "Cameroon" => "45",
        "Canada" => "05",
        "Cape Verde" => "46",
        "Central African Republic" => "47",
        "Chad" => "48",
        "Chile" => "28",
        "China" => "101",
        "Christmas Island" => "210",
        "Cocos (Keeling) Islands" => "211",
        "Colombia" => "29",
        "Comoros" => "49",
        "Congo" => "91",
        "Cook Islands" => "212",
        "Costa Rica" => "06",
        "Cote D'Ivoire (Ivory Coast)" => "50",
        "Croatia" => "136",
        "Cuba" => "07",
        "Cyprus" => "172",
        "Czech Republic" => "137",
        "Democratic Republic of the Congo" => "51",
        "Denmark" => "138",
        "Djibouti" => "52",
        "Dominica" => "08",
        "Dominican Republic" => "9",
        "East Timor" => "102",
        "Ecuador" => "30",
        "Egypt" => "53",
        "El Salvador" => "10",
        "Equatorial Guinea" => "54",
        "Eritrea" => "55",
        "Estonia" => "139",
        "Ethiopia" => "56",
        "Falkland Islands" => "31",
        "Faroe Islands" => "213",
        "Fiji" => "176",
        "Finland" => "140",
        "France" => "141",
        "French Guiana" => "32",
        "French Polynesia" => "214",
        "Gabon" => "57",
        "Gambia" => "90",
        "Georgia" => "103",
        "Germany" => "142",
        "Ghana" => "58",
        "Gibraltar" => "216",
        "Greece" => "143",
        "Greenland" => "24",
        "Grenada" => "11",
        "Guadeloupe" => "217",
        "Guam" => "218",
        "Guatemala" => "12",
        "Guinea" => "59",
        "Guinea-Bissau" => "60",
        "Guyana" => "33",
        "Haiti" => "13",
        "Honduras" => "14",
        "Hong Kong" => "127",
        "Hungary" => "144",
        "Iceland" => "145",
        "India" => "104",
        "Indonesia" => "105",
        "Iran" => "106",
        "Iraq" => "191",
        "Ireland" => "146",
        "Israel" => "192",
        "Italy" => "147",
        "Jamaica" => "15",
        "Japan" => "107",
        "Jordan" => "193",
        "Kazakhstan" => "108",
        "Kenya" => "61",
        "Kiribati" => "177",
        "Korea" => "109",
        "Korea (South)" => "110",
        "Kuwait" => "194",
        "Kyrgyzstan" => "111",
        "Laos" => "112",
        "Latvia" => "148",
        "Lebanon" => "195",
        "Lesotho" => "62",
        "Liberia" => "63",
        "Libya" => "64",
        "Liechtenstein" => "149",
        "Lithuania" => "150",
        "Luxembourg" => "151",
        "Macao" => "128",
        "Macedonia" => "152",
        "Madagascar" => "65",
        "Malawi" => "66",
        "Malaysia" => "113",
        "Maldives" => "222",
        "Mali" => "67",
        "Malta" => "153",
        "Marshall Islands" => "178",
        "Martinique" => "224",
        "Mauritania" => "68",
        "Mauritius" => "92",
        "Mayotte" => "225",
        "Mexico" => "16",
        "Moldova" => "179",
        "Monaco" => "154",
        "Mongolia" => "155",
        "Montenegro" => "114",
        "Montserrat" => "156",
        "Morocco" => "226",
        "Mozambique" => "69",
        "Myanmar" => "70",
        "Namibia" => "71",
        "Nauru" => "180",
        "Nepal" => "115",
        "Netherlands" => "157",
        "New Caledonia" => "189",
        "New Zealand" => "181",
        "Nicaragua" => "17",
        "Niger" => "72",
        "Nigeria" => "73",
        "Niue" => "230",
        "Norfolk Island" => "231",
        "Northern Mariana Islands" => "232",
        "Norway" => "158",
        "Pakistan" => "116",
        "Palau" => "182",
        "Panama" => "18",
        "Papua New Guinea" => "183",
        "Paraguay" => "34",
        "Peru" => "35",
        "Philippines" => "117",
        "Pitcairn" => "233",
        "Poland" => "159",
        "Portugal" => "160",
        "Puerto Rico" => "202",
        "Qatar" => "197",
        "Reunion" => "234",
        "Romania" => "161",
        "Russia" => "118",
        "Rwanda" => "74",
        "Saint Helena" => "235",
        "Saint Pierre and Miquelon" => "236",
        "Samoa" => "184",
        "San Marino" => "162",
        "Sao Tome and Principe" => "75",
        "Saudi Arabia" => "198",
        "Senegal" => "76",
        "Serbia" => "163",
        "Seychelles" => "77",
        "Sierra Leone" => "78",
        "Singapore" => "119",
        "Slovenia" => "165",
        "Solomon Islands" => "185",
        "Somalia" => "79",
        "South Africa" => "80",
        "South Sudan" => "204",
        "Spain" => "166",
        "Sri Lanka" => "120",
        "Sudan" => "81",
        "Swaziland" => "82",
        "Sweden" => "167",
        "Switzerland" => "168",
        "Syria" => "199",
        "Taiwan" => "126",
        "Tajikistan" => "121",
        "Tanzania" => "83",
        "Thailand" => "122",
        "Togo" => "84",
        "Tonga" => "186",
        "Trinidad and Tobago" => "22",
        "Tunisia" => "85",
        "Turkey" => "173",
        "Turkmenistan" => "123",
        "Turks and Caicos Islands" => "237",
        "Tuvalu" => "187",
        "Uganda" => "86",
        "Ukraine" => "169",
        "United Arab Emirates" => "200",
        "United Kingdom" => "170",
        "United States" => "23",
        "Uruguay" => "37",
        "Uzbekistan" => "124",
        "Vanuatu" => "188",
        "Vatican City State" => "171",
        "Venezuela" => "38",
        "Vietnam" => "125",
        "Virgin Islands (British)" => "238",
        "Virgin Islands (U.S.)" => "239",
        "Wallis and Futuna" => "241",
        "Western Sahara" => "240",
        "Yemen" => "87",
        "Yugoslavia" => "201",
        "Zambia" => "88",
        "Zimbabwe" => "89"
    );

    public function getMapDataProvider($inputArr) {
        $resp = array();
        foreach ($inputArr as $data) {
            $val = $this->_countryCodes[$data['_id']];
            if (!empty($val)) {
                $resp[] = array("id" => $val, "value" => $data['value']);
            }
        }
        //  print_r($resp);
        //  echo json_encode($resp);
        //  exit();
        return $resp;
    }

}
