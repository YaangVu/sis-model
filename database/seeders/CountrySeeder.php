<?php

namespace YaangVu\SisModel\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use YaangVu\SisModel\App\Models\impl\CountryNoSQL;

class CountrySeeder extends Seeder
{
    public function run()
    {

        $data = [
            [
                "name"       => "Afghanistan",
                "two_code"   => "AF",
                "three_code" => "AFG",
                "numeric"    => "4",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Albania",
                "two_code"   => "AL",
                "three_code" => "ALB",
                "numeric"    => "8",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Algeria",
                "two_code"   => "DZ",
                "three_code" => "DZA",
                "numeric"    => "12",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "American Samoa",
                "two_code"   => "AS",
                "three_code" => "ASM",
                "numeric"    => "16",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Andorra",
                "two_code"   => "AD",
                "three_code" => "AND",
                "numeric"    => "20",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Angola",
                "two_code"   => "AO",
                "three_code" => "AGO",
                "numeric"    => "24",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Anguilla",
                "two_code"   => "AI",
                "three_code" => "AIA",
                "numeric"    => "660",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Antarctica",
                "two_code"   => "AQ",
                "three_code" => "ATA",
                "numeric"    => "10",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Antigua and Barbuda",
                "two_code"   => "AG",
                "three_code" => "ATG",
                "numeric"    => "28",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Argentina",
                "two_code"   => "AR",
                "three_code" => "ARG",
                "numeric"    => "32",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Armenia",
                "two_code"   => "AM",
                "three_code" => "ARM",
                "numeric"    => "51",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Aruba",
                "two_code"   => "AW",
                "three_code" => "ABW",
                "numeric"    => "533",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Australia",
                "two_code"   => "AU",
                "three_code" => "AUS",
                "numeric"    => "36",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Austria",
                "two_code"   => "AT",
                "three_code" => "AUT",
                "numeric"    => "40",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Azerbaijan",
                "two_code"   => "AZ",
                "three_code" => "AZE",
                "numeric"    => "31",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Bahamas (the)",
                "two_code"   => "BS",
                "three_code" => "BHS",
                "numeric"    => "44",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Bahrain",
                "two_code"   => "BH",
                "three_code" => "BHR",
                "numeric"    => "48",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Bangladesh",
                "two_code"   => "BD",
                "three_code" => "BGD",
                "numeric"    => "50",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Barbados",
                "two_code"   => "BB",
                "three_code" => "BRB",
                "numeric"    => "52",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Belarus",
                "two_code"   => "BY",
                "three_code" => "BLR",
                "numeric"    => "112",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Belgium",
                "two_code"   => "BE",
                "three_code" => "BEL",
                "numeric"    => "56",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Belize",
                "two_code"   => "BZ",
                "three_code" => "BLZ",
                "numeric"    => "84",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Benin",
                "two_code"   => "BJ",
                "three_code" => "BEN",
                "numeric"    => "204",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Bermuda",
                "two_code"   => "BM",
                "three_code" => "BMU",
                "numeric"    => "60",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Bhutan",
                "two_code"   => "BT",
                "three_code" => "BTN",
                "numeric"    => "64",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Bolivia (Plurinational State of)",
                "two_code"   => "BO",
                "three_code" => "BOL",
                "numeric"    => "68",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Bonaire Sint Eustatius and Saba",
                "two_code"   => "BQ",
                "three_code" => "BES",
                "numeric"    => "535",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Bosnia and Herzegovina",
                "two_code"   => "BA",
                "three_code" => "BIH",
                "numeric"    => "70",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Botswana",
                "two_code"   => "BW",
                "three_code" => "BWA",
                "numeric"    => "72",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Bouvet Island",
                "two_code"   => "BV",
                "three_code" => "BVT",
                "numeric"    => "74",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Brazil",
                "two_code"   => "BR",
                "three_code" => "BRA",
                "numeric"    => "76",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "British Indian Ocean Territory (the)",
                "two_code"   => "IO",
                "three_code" => "IOT",
                "numeric"    => "86",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Brunei Darussalam",
                "two_code"   => "BN",
                "three_code" => "BRN",
                "numeric"    => "96",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Bulgaria",
                "two_code"   => "BG",
                "three_code" => "BGR",
                "numeric"    => "100",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Burkina Faso",
                "two_code"   => "BF",
                "three_code" => "BFA",
                "numeric"    => "854",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Burundi",
                "two_code"   => "BI",
                "three_code" => "BDI",
                "numeric"    => "108",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Cabo Verde",
                "two_code"   => "CV",
                "three_code" => "CPV",
                "numeric"    => "132",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Cambodia",
                "two_code"   => "KH",
                "three_code" => "KHM",
                "numeric"    => "116",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Cameroon",
                "two_code"   => "CM",
                "three_code" => "CMR",
                "numeric"    => "120",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Canada",
                "two_code"   => "CA",
                "three_code" => "CAN",
                "numeric"    => "124",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Cayman Islands (the)",
                "two_code"   => "KY",
                "three_code" => "CYM",
                "numeric"    => "136",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Central African Republic (the)",
                "two_code"   => "CF",
                "three_code" => "CAF",
                "numeric"    => "140",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Chad",
                "two_code"   => "TD",
                "three_code" => "TCD",
                "numeric"    => "148",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Chile",
                "two_code"   => "CL",
                "three_code" => "CHL",
                "numeric"    => "152",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "China",
                "two_code"   => "CN",
                "three_code" => "CHN",
                "numeric"    => "156",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Christmas Island",
                "two_code"   => "CX",
                "three_code" => "CXR",
                "numeric"    => "162",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Cocos (Keeling) Islands (the)",
                "two_code"   => "CC",
                "three_code" => "CCK",
                "numeric"    => "166",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Colombia",
                "two_code"   => "CO",
                "three_code" => "COL",
                "numeric"    => "170",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Comoros (the)",
                "two_code"   => "KM",
                "three_code" => "COM",
                "numeric"    => "174",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Congo (the Democratic Republic of the)",
                "two_code"   => "CD",
                "three_code" => "COD",
                "numeric"    => "180",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Congo (the)",
                "two_code"   => "CG",
                "three_code" => "COG",
                "numeric"    => "178",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Cook Islands (the)",
                "two_code"   => "CK",
                "three_code" => "COK",
                "numeric"    => "184",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Costa Rica",
                "two_code"   => "CR",
                "three_code" => "CRI",
                "numeric"    => "188",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Croatia",
                "two_code"   => "HR",
                "three_code" => "HRV",
                "numeric"    => "191",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Cuba",
                "two_code"   => "CU",
                "three_code" => "CUB",
                "numeric"    => "192",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Curaçao",
                "two_code"   => "CW",
                "three_code" => "CUW",
                "numeric"    => "531",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Cyprus",
                "two_code"   => "CY",
                "three_code" => "CYP",
                "numeric"    => "196",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Czechia",
                "two_code"   => "CZ",
                "three_code" => "CZE",
                "numeric"    => "203",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Côte d'Ivoire",
                "two_code"   => "CI",
                "three_code" => "CIV",
                "numeric"    => "384",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Denmark",
                "two_code"   => "DK",
                "three_code" => "DNK",
                "numeric"    => "208",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Djibouti",
                "two_code"   => "DJ",
                "three_code" => "DJI",
                "numeric"    => "262",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Dominica",
                "two_code"   => "DM",
                "three_code" => "DMA",
                "numeric"    => "212",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Dominican Republic (the)",
                "two_code"   => "DO",
                "three_code" => "DOM",
                "numeric"    => "214",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Ecuador",
                "two_code"   => "EC",
                "three_code" => "ECU",
                "numeric"    => "218",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Egypt",
                "two_code"   => "EG",
                "three_code" => "EGY",
                "numeric"    => "818",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "El Salvador",
                "two_code"   => "SV",
                "three_code" => "SLV",
                "numeric"    => "222",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Equatorial Guinea",
                "two_code"   => "GQ",
                "three_code" => "GNQ",
                "numeric"    => "226",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Eritrea",
                "two_code"   => "ER",
                "three_code" => "ERI",
                "numeric"    => "232",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Estonia",
                "two_code"   => "EE",
                "three_code" => "EST",
                "numeric"    => "233",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Eswatini",
                "two_code"   => "SZ",
                "three_code" => "SWZ",
                "numeric"    => "748",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Ethiopia",
                "two_code"   => "ET",
                "three_code" => "ETH",
                "numeric"    => "231",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Falkland Islands (the) [Malvinas]",
                "two_code"   => "FK",
                "three_code" => "FLK",
                "numeric"    => "238",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Faroe Islands (the)",
                "two_code"   => "FO",
                "three_code" => "FRO",
                "numeric"    => "234",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Fiji",
                "two_code"   => "FJ",
                "three_code" => "FJI",
                "numeric"    => "242",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Finland",
                "two_code"   => "FI",
                "three_code" => "FIN",
                "numeric"    => "246",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "France",
                "two_code"   => "FR",
                "three_code" => "FRA",
                "numeric"    => "250",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "French Guiana",
                "two_code"   => "GF",
                "three_code" => "GUF",
                "numeric"    => "254",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "French Polynesia",
                "two_code"   => "PF",
                "three_code" => "PYF",
                "numeric"    => "258",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "French Southern Territories (the)",
                "two_code"   => "TF",
                "three_code" => "ATF",
                "numeric"    => "260",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Gabon",
                "two_code"   => "GA",
                "three_code" => "GAB",
                "numeric"    => "266",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Gambia (the)",
                "two_code"   => "GM",
                "three_code" => "GMB",
                "numeric"    => "270",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Georgia",
                "two_code"   => "GE",
                "three_code" => "GEO",
                "numeric"    => "268",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Germany",
                "two_code"   => "DE",
                "three_code" => "DEU",
                "numeric"    => "276",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Ghana",
                "two_code"   => "GH",
                "three_code" => "GHA",
                "numeric"    => "288",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Gibraltar",
                "two_code"   => "GI",
                "three_code" => "GIB",
                "numeric"    => "292",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Greece",
                "two_code"   => "GR",
                "three_code" => "GRC",
                "numeric"    => "300",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Greenland",
                "two_code"   => "GL",
                "three_code" => "GRL",
                "numeric"    => "304",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Grenada",
                "two_code"   => "GD",
                "three_code" => "GRD",
                "numeric"    => "308",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Guadeloupe",
                "two_code"   => "GP",
                "three_code" => "GLP",
                "numeric"    => "312",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Guam",
                "two_code"   => "GU",
                "three_code" => "GUM",
                "numeric"    => "316",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Guatemala",
                "two_code"   => "GT",
                "three_code" => "GTM",
                "numeric"    => "320",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Guernsey",
                "two_code"   => "GG",
                "three_code" => "GGY",
                "numeric"    => "831",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Guinea",
                "two_code"   => "GN",
                "three_code" => "GIN",
                "numeric"    => "324",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Guinea-Bissau",
                "two_code"   => "GW",
                "three_code" => "GNB",
                "numeric"    => "624",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Guyana",
                "two_code"   => "GY",
                "three_code" => "GUY",
                "numeric"    => "328",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Haiti",
                "two_code"   => "HT",
                "three_code" => "HTI",
                "numeric"    => "332",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Heard Island and McDonald Islands",
                "two_code"   => "HM",
                "three_code" => "HMD",
                "numeric"    => "334",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Holy See (the)",
                "two_code"   => "VA",
                "three_code" => "VAT",
                "numeric"    => "336",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Honduras",
                "two_code"   => "HN",
                "three_code" => "HND",
                "numeric"    => "340",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Hong Kong",
                "two_code"   => "HK",
                "three_code" => "HKG",
                "numeric"    => "344",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Hungary",
                "two_code"   => "HU",
                "three_code" => "HUN",
                "numeric"    => "348",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Iceland",
                "two_code"   => "IS",
                "three_code" => "ISL",
                "numeric"    => "352",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "India",
                "two_code"   => "IN",
                "three_code" => "IND",
                "numeric"    => "356",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Indonesia",
                "two_code"   => "ID",
                "three_code" => "IDN",
                "numeric"    => "360",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Iran (Islamic Republic of)",
                "two_code"   => "IR",
                "three_code" => "IRN",
                "numeric"    => "364",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Iraq",
                "two_code"   => "IQ",
                "three_code" => "IRQ",
                "numeric"    => "368",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Ireland",
                "two_code"   => "IE",
                "three_code" => "IRL",
                "numeric"    => "372",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Isle of Man",
                "two_code"   => "IM",
                "three_code" => "IMN",
                "numeric"    => "833",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Israel",
                "two_code"   => "IL",
                "three_code" => "ISR",
                "numeric"    => "376",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Italy",
                "two_code"   => "IT",
                "three_code" => "ITA",
                "numeric"    => "380",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Jamaica",
                "two_code"   => "JM",
                "three_code" => "JAM",
                "numeric"    => "388",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Japan",
                "two_code"   => "JP",
                "three_code" => "JPN",
                "numeric"    => "392",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Jersey",
                "two_code"   => "JE",
                "three_code" => "JEY",
                "numeric"    => "832",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Jordan",
                "two_code"   => "JO",
                "three_code" => "JOR",
                "numeric"    => "400",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Kazakhstan",
                "two_code"   => "KZ",
                "three_code" => "KAZ",
                "numeric"    => "398",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Kenya",
                "two_code"   => "KE",
                "three_code" => "KEN",
                "numeric"    => "404",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Kiribati",
                "two_code"   => "KI",
                "three_code" => "KIR",
                "numeric"    => "296",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Korea (the Democratic People's Republic of)",
                "two_code"   => "KP",
                "three_code" => "PRK",
                "numeric"    => "408",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Korea (the Republic of)",
                "two_code"   => "KR",
                "three_code" => "KOR",
                "numeric"    => "410",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Kuwait",
                "two_code"   => "KW",
                "three_code" => "KWT",
                "numeric"    => "414",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Kyrgyzstan",
                "two_code"   => "KG",
                "three_code" => "KGZ",
                "numeric"    => "417",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Lao People's Democratic Republic (the)",
                "two_code"   => "LA",
                "three_code" => "LAO",
                "numeric"    => "418",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Latvia",
                "two_code"   => "LV",
                "three_code" => "LVA",
                "numeric"    => "428",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Lebanon",
                "two_code"   => "LB",
                "three_code" => "LBN",
                "numeric"    => "422",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Lesotho",
                "two_code"   => "LS",
                "three_code" => "LSO",
                "numeric"    => "426",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Liberia",
                "two_code"   => "LR",
                "three_code" => "LBR",
                "numeric"    => "430",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Libya",
                "two_code"   => "LY",
                "three_code" => "LBY",
                "numeric"    => "434",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Liechtenstein",
                "two_code"   => "LI",
                "three_code" => "LIE",
                "numeric"    => "438",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Lithuania",
                "two_code"   => "LT",
                "three_code" => "LTU",
                "numeric"    => "440",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Luxembourg",
                "two_code"   => "LU",
                "three_code" => "LUX",
                "numeric"    => "442",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Macao",
                "two_code"   => "MO",
                "three_code" => "MAC",
                "numeric"    => "446",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Madagascar",
                "two_code"   => "MG",
                "three_code" => "MDG",
                "numeric"    => "450",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Malawi",
                "two_code"   => "MW",
                "three_code" => "MWI",
                "numeric"    => "454",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Malaysia",
                "two_code"   => "MY",
                "three_code" => "MYS",
                "numeric"    => "458",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Maldives",
                "two_code"   => "MV",
                "three_code" => "MDV",
                "numeric"    => "462",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Mali",
                "two_code"   => "ML",
                "three_code" => "MLI",
                "numeric"    => "466",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Malta",
                "two_code"   => "MT",
                "three_code" => "MLT",
                "numeric"    => "470",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Marshall Islands (the)",
                "two_code"   => "MH",
                "three_code" => "MHL",
                "numeric"    => "584",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Martinique",
                "two_code"   => "MQ",
                "three_code" => "MTQ",
                "numeric"    => "474",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Mauritania",
                "two_code"   => "MR",
                "three_code" => "MRT",
                "numeric"    => "478",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Mauritius",
                "two_code"   => "MU",
                "three_code" => "MUS",
                "numeric"    => "480",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Mayotte",
                "two_code"   => "YT",
                "three_code" => "MYT",
                "numeric"    => "175",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Mexico",
                "two_code"   => "MX",
                "three_code" => "MEX",
                "numeric"    => "484",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Micronesia (Federated States of)",
                "two_code"   => "FM",
                "three_code" => "FSM",
                "numeric"    => "583",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Moldova (the Republic of)",
                "two_code"   => "MD",
                "three_code" => "MDA",
                "numeric"    => "498",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Monaco",
                "two_code"   => "MC",
                "three_code" => "MCO",
                "numeric"    => "492",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Mongolia",
                "two_code"   => "MN",
                "three_code" => "MNG",
                "numeric"    => "496",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Montenegro",
                "two_code"   => "ME",
                "three_code" => "MNE",
                "numeric"    => "499",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Montserrat",
                "two_code"   => "MS",
                "three_code" => "MSR",
                "numeric"    => "500",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Morocco",
                "two_code"   => "MA",
                "three_code" => "MAR",
                "numeric"    => "504",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Mozambique",
                "two_code"   => "MZ",
                "three_code" => "MOZ",
                "numeric"    => "508",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Myanmar",
                "two_code"   => "MM",
                "three_code" => "MMR",
                "numeric"    => "104",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Namibia",
                "two_code"   => "NA",
                "three_code" => "NAM",
                "numeric"    => "516",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Nauru",
                "two_code"   => "NR",
                "three_code" => "NRU",
                "numeric"    => "520",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Nepal",
                "two_code"   => "NP",
                "three_code" => "NPL",
                "numeric"    => "524",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Netherlands (the)",
                "two_code"   => "NL",
                "three_code" => "NLD",
                "numeric"    => "528",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "New Caledonia",
                "two_code"   => "NC",
                "three_code" => "NCL",
                "numeric"    => "540",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "New Zealand",
                "two_code"   => "NZ",
                "three_code" => "NZL",
                "numeric"    => "554",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Nicaragua",
                "two_code"   => "NI",
                "three_code" => "NIC",
                "numeric"    => "558",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Niger (the)",
                "two_code"   => "NE",
                "three_code" => "NER",
                "numeric"    => "562",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Nigeria",
                "two_code"   => "NG",
                "three_code" => "NGA",
                "numeric"    => "566",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Niue",
                "two_code"   => "NU",
                "three_code" => "NIU",
                "numeric"    => "570",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Norfolk Island",
                "two_code"   => "NF",
                "three_code" => "NFK",
                "numeric"    => "574",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Northern Mariana Islands (the)",
                "two_code"   => "MP",
                "three_code" => "MNP",
                "numeric"    => "580",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Norway",
                "two_code"   => "NO",
                "three_code" => "NOR",
                "numeric"    => "578",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Oman",
                "two_code"   => "OM",
                "three_code" => "OMN",
                "numeric"    => "512",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Pakistan",
                "two_code"   => "PK",
                "three_code" => "PAK",
                "numeric"    => "586",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Palau",
                "two_code"   => "PW",
                "three_code" => "PLW",
                "numeric"    => "585",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Palestine State of",
                "two_code"   => "PS",
                "three_code" => "PSE",
                "numeric"    => "275",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Panama",
                "two_code"   => "PA",
                "three_code" => "PAN",
                "numeric"    => "591",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Papua New Guinea",
                "two_code"   => "PG",
                "three_code" => "PNG",
                "numeric"    => "598",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Paraguay",
                "two_code"   => "PY",
                "three_code" => "PRY",
                "numeric"    => "600",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Peru",
                "two_code"   => "PE",
                "three_code" => "PER",
                "numeric"    => "604",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Philippines (the)",
                "two_code"   => "PH",
                "three_code" => "PHL",
                "numeric"    => "608",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Pitcairn",
                "two_code"   => "PN",
                "three_code" => "PCN",
                "numeric"    => "612",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Poland",
                "two_code"   => "PL",
                "three_code" => "POL",
                "numeric"    => "616",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Portugal",
                "two_code"   => "PT",
                "three_code" => "PRT",
                "numeric"    => "620",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Puerto Rico",
                "two_code"   => "PR",
                "three_code" => "PRI",
                "numeric"    => "630",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Qatar",
                "two_code"   => "QA",
                "three_code" => "QAT",
                "numeric"    => "634",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Republic of North Macedonia",
                "two_code"   => "MK",
                "three_code" => "MKD",
                "numeric"    => "807",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Romania",
                "two_code"   => "RO",
                "three_code" => "ROU",
                "numeric"    => "642",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Russian Federation (the)",
                "two_code"   => "RU",
                "three_code" => "RUS",
                "numeric"    => "643",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Rwanda",
                "two_code"   => "RW",
                "three_code" => "RWA",
                "numeric"    => "646",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Réunion",
                "two_code"   => "RE",
                "three_code" => "REU",
                "numeric"    => "638",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Saint Barthélemy",
                "two_code"   => "BL",
                "three_code" => "BLM",
                "numeric"    => "652",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Saint Helena Ascension and Tristan da Cunha",
                "two_code"   => "SH",
                "three_code" => "SHN",
                "numeric"    => "654",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Saint Kitts and Nevis",
                "two_code"   => "KN",
                "three_code" => "KNA",
                "numeric"    => "659",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Saint Lucia",
                "two_code"   => "LC",
                "three_code" => "LCA",
                "numeric"    => "662",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Saint Martin (French part)",
                "two_code"   => "MF",
                "three_code" => "MAF",
                "numeric"    => "663",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Saint Pierre and Miquelon",
                "two_code"   => "PM",
                "three_code" => "SPM",
                "numeric"    => "666",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Saint Vincent and the Grenadines",
                "two_code"   => "VC",
                "three_code" => "VCT",
                "numeric"    => "670",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Samoa",
                "two_code"   => "WS",
                "three_code" => "WSM",
                "numeric"    => "882",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "San Marino",
                "two_code"   => "SM",
                "three_code" => "SMR",
                "numeric"    => "674",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Sao Tome and Principe",
                "two_code"   => "ST",
                "three_code" => "STP",
                "numeric"    => "678",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Saudi Arabia",
                "two_code"   => "SA",
                "three_code" => "SAU",
                "numeric"    => "682",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Senegal",
                "two_code"   => "SN",
                "three_code" => "SEN",
                "numeric"    => "686",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Serbia",
                "two_code"   => "RS",
                "three_code" => "SRB",
                "numeric"    => "688",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Seychelles",
                "two_code"   => "SC",
                "three_code" => "SYC",
                "numeric"    => "690",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Sierra Leone",
                "two_code"   => "SL",
                "three_code" => "SLE",
                "numeric"    => "694",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Singapore",
                "two_code"   => "SG",
                "three_code" => "SGP",
                "numeric"    => "702",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Sint Maarten (Dutch part)",
                "two_code"   => "SX",
                "three_code" => "SXM",
                "numeric"    => "534",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Slovakia",
                "two_code"   => "SK",
                "three_code" => "SVK",
                "numeric"    => "703",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Slovenia",
                "two_code"   => "SI",
                "three_code" => "SVN",
                "numeric"    => "705",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Solomon Islands",
                "two_code"   => "SB",
                "three_code" => "SLB",
                "numeric"    => "90",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Somalia",
                "two_code"   => "SO",
                "three_code" => "SOM",
                "numeric"    => "706",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "South Africa",
                "two_code"   => "ZA",
                "three_code" => "ZAF",
                "numeric"    => "710",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "South Georgia and the South Sandwich Islands",
                "two_code"   => "GS",
                "three_code" => "SGS",
                "numeric"    => "239",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "South Sudan",
                "two_code"   => "SS",
                "three_code" => "SSD",
                "numeric"    => "728",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Spain",
                "two_code"   => "ES",
                "three_code" => "ESP",
                "numeric"    => "724",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Sri Lanka",
                "two_code"   => "LK",
                "three_code" => "LKA",
                "numeric"    => "144",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Sudan (the)",
                "two_code"   => "SD",
                "three_code" => "SDN",
                "numeric"    => "729",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Suriname",
                "two_code"   => "SR",
                "three_code" => "SUR",
                "numeric"    => "740",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Svalbard and Jan Mayen",
                "two_code"   => "SJ",
                "three_code" => "SJM",
                "numeric"    => "744",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Sweden",
                "two_code"   => "SE",
                "three_code" => "SWE",
                "numeric"    => "752",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Switzerland",
                "two_code"   => "CH",
                "three_code" => "CHE",
                "numeric"    => "756",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Syrian Arab Republic",
                "two_code"   => "SY",
                "three_code" => "SYR",
                "numeric"    => "760",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Taiwan (Province of China)",
                "two_code"   => "TW",
                "three_code" => "TWN",
                "numeric"    => "158",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Tajikistan",
                "two_code"   => "TJ",
                "three_code" => "TJK",
                "numeric"    => "762",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Tanzania United Republic of",
                "two_code"   => "TZ",
                "three_code" => "TZA",
                "numeric"    => "834",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Thailand",
                "two_code"   => "TH",
                "three_code" => "THA",
                "numeric"    => "764",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Timor-Leste",
                "two_code"   => "TL",
                "three_code" => "TLS",
                "numeric"    => "626",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Togo",
                "two_code"   => "TG",
                "three_code" => "TGO",
                "numeric"    => "768",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Tokelau",
                "two_code"   => "TK",
                "three_code" => "TKL",
                "numeric"    => "772",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Tonga",
                "two_code"   => "TO",
                "three_code" => "TON",
                "numeric"    => "776",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Trinidad and Tobago",
                "two_code"   => "TT",
                "three_code" => "TTO",
                "numeric"    => "780",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Tunisia",
                "two_code"   => "TN",
                "three_code" => "TUN",
                "numeric"    => "788",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Turkey",
                "two_code"   => "TR",
                "three_code" => "TUR",
                "numeric"    => "792",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Turkmenistan",
                "two_code"   => "TM",
                "three_code" => "TKM",
                "numeric"    => "795",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Turks and Caicos Islands (the)",
                "two_code"   => "TC",
                "three_code" => "TCA",
                "numeric"    => "796",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Tuvalu",
                "two_code"   => "TV",
                "three_code" => "TUV",
                "numeric"    => "798",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Uganda",
                "two_code"   => "UG",
                "three_code" => "UGA",
                "numeric"    => "800",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Ukraine",
                "two_code"   => "UA",
                "three_code" => "UKR",
                "numeric"    => "804",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "United Arab Emirates (the)",
                "two_code"   => "AE",
                "three_code" => "ARE",
                "numeric"    => "784",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "United Kingdom of Great Britain and Northern Ireland (the)",
                "two_code"   => "GB",
                "three_code" => "GBR",
                "numeric"    => "826",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "United States Minor Outlying Islands (the)",
                "two_code"   => "UM",
                "three_code" => "UMI",
                "numeric"    => "581",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "United States of America (the)",
                "two_code"   => "US",
                "three_code" => "USA",
                "numeric"    => "840",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Uruguay",
                "two_code"   => "UY",
                "three_code" => "URY",
                "numeric"    => "858",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Uzbekistan",
                "two_code"   => "UZ",
                "three_code" => "UZB",
                "numeric"    => "860",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Vanuatu",
                "two_code"   => "VU",
                "three_code" => "VUT",
                "numeric"    => "548",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Venezuela (Bolivarian Republic of)",
                "two_code"   => "VE",
                "three_code" => "VEN",
                "numeric"    => "862",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Viet Nam",
                "two_code"   => "VN",
                "three_code" => "VNM",
                "numeric"    => "704",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Virgin Islands (British)",
                "two_code"   => "VG",
                "three_code" => "VGB",
                "numeric"    => "92",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Virgin Islands (U.S.)",
                "two_code"   => "VI",
                "three_code" => "VIR",
                "numeric"    => "850",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Wallis and Futuna",
                "two_code"   => "WF",
                "three_code" => "WLF",
                "numeric"    => "876",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Western Sahara",
                "two_code"   => "EH",
                "three_code" => "ESH",
                "numeric"    => "732",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Yemen",
                "two_code"   => "YE",
                "three_code" => "YEM",
                "numeric"    => "887",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Zambia",
                "two_code"   => "ZM",
                "three_code" => "ZMB",
                "numeric"    => "894",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Zimbabwe",
                "two_code"   => "ZW",
                "three_code" => "ZWE",
                "numeric"    => "716",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ],
            [
                "name"       => "Åland Islands",
                "two_code"   => "AX",
                "three_code" => "ALA",
                "numeric"    => "248",
                'created_at' => Carbon::now()
                                      ->toDateTimeString(),
            ]
        ];
        CountryNoSQL::query()->insert($data);
    }
}
