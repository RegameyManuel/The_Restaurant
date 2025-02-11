<?php

namespace App\DataFixtures;

use App\Entity\Employe;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EmployeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $data = [
            [
                "name" => "Lev Chang",
                "email" => "scelerisque.neque@protonmail.ca",
                "address" => "Ap #854-1365 Ante Ave",
                "postalZip" => "744192",
                "region" => "Canarias",
                "country" => "Chile",
                "phone" => "03 70 77 37 41"
            ],
            [
                "name" => "Alexander Stuart",
                "email" => "et.malesuada@outlook.edu",
                "address" => "Ap #867-2263 Scelerisque, Rd.",
                "postalZip" => "423082",
                "region" => "Carinthia",
                "country" => "Brazil",
                "phone" => "02 56 78 24 96"
            ],
            [
                "name" => "Anthony Curtis",
                "email" => "ac.tellus@protonmail.ca",
                "address" => "Ap #295-1803 Vivamus St.",
                "postalZip" => "686225",
                "region" => "Ceará",
                "country" => "South Korea",
                "phone" => "06 48 14 11 16"
            ],
            [
                "name" => "Aidan Pennington",
                "email" => "morbi.quis@outlook.ca",
                "address" => "P.O. Box 268, 7489 Velit St.",
                "postalZip" => "235247",
                "region" => "Santa Catarina",
                "country" => "India",
                "phone" => "02 68 27 71 56"
            ],
            [
                "name" => "Uriah Witt",
                "email" => "cursus@google.org",
                "address" => "183-7420 Odio Ave",
                "postalZip" => "50607",
                "region" => "Burgenland",
                "country" => "South Africa",
                "phone" => "07 28 05 43 54"
            ],
            [
                "name" => "Haley Gilmore",
                "email" => "a.scelerisque.sed@icloud.org",
                "address" => "Ap #444-6591 Mauris Street",
                "postalZip" => "392911",
                "region" => "Free State",
                "country" => "Pakistan",
                "phone" => "08 15 69 26 42"
            ],
            [
                "name" => "Raymond Acosta",
                "email" => "imperdiet.non@aol.net",
                "address" => "299-7832 Lacus, Av.",
                "postalZip" => "8487",
                "region" => "Kurgan Oblast",
                "country" => "Italy",
                "phone" => "02 93 28 63 28"
            ],
            [
                "name" => "Yvonne Dickson",
                "email" => "lobortis.nisi@yahoo.ca",
                "address" => "P.O. Box 504, 9969 Eget Av.",
                "postalZip" => "46421",
                "region" => "La Libertad",
                "country" => "Canada",
                "phone" => "01 29 46 88 89"
            ],
            [
                "name" => "Renee Cervantes",
                "email" => "semper@google.com",
                "address" => "880 Sit Avenue",
                "postalZip" => "47445",
                "region" => "Northwest Territories",
                "country" => "Australia",
                "phone" => "06 31 62 52 97"
            ],
            [
                "name" => "Victor Riley",
                "email" => "lacus.cras.interdum@outlook.org",
                "address" => "Ap #487-1311 Mauris Road",
                "postalZip" => "31992",
                "region" => "Salzburg",
                "country" => "Canada",
                "phone" => "04 48 22 88 44"
            ],
            [
                "name" => "Beverly Francis",
                "email" => "blandit@google.couk",
                "address" => "238-1346 Donec Street",
                "postalZip" => "454317",
                "region" => "Kursk Oblast",
                "country" => "Nigeria",
                "phone" => "05 85 34 34 21"
            ],
            [
                "name" => "Bruce Gibbs",
                "email" => "in@protonmail.net",
                "address" => "332 Morbi Av.",
                "postalZip" => "3262",
                "region" => "Overijssel",
                "country" => "United States",
                "phone" => "05 36 52 78 33"
            ],
            [
                "name" => "Kylan Sampson",
                "email" => "vitae.purus@google.ca",
                "address" => "Ap #953-8139 Vitae Av.",
                "postalZip" => "78-794",
                "region" => "Prince Edward Island",
                "country" => "United Kingdom",
                "phone" => "08 67 52 00 64"
            ],
            [
                "name" => "Kiona Kirk",
                "email" => "quis@google.net",
                "address" => "Ap #442-776 Sed Street",
                "postalZip" => "435566",
                "region" => "Bremen",
                "country" => "South Korea",
                "phone" => "08 36 84 50 14"
            ],
            [
                "name" => "Hedley Contreras",
                "email" => "lorem.donec@icloud.ca",
                "address" => "718-8205 Lobortis Av.",
                "postalZip" => "3657",
                "region" => "Western Visayas",
                "country" => "Russian Federation",
                "phone" => "05 02 48 27 51"
            ],
            [
                "name" => "Clark Hickman",
                "email" => "molestie.sed@outlook.ca",
                "address" => "Ap #403-7379 Convallis Avenue",
                "postalZip" => "459767",
                "region" => "Zakarpattia oblast",
                "country" => "Germany",
                "phone" => "08 81 23 38 27"
            ],
            [
                "name" => "Ashton Rodriquez",
                "email" => "integer@protonmail.net",
                "address" => "Ap #564-1057 Nulla Avenue",
                "postalZip" => "566069",
                "region" => "Mizoram",
                "country" => "Australia",
                "phone" => "06 17 81 28 19"
            ],
            [
                "name" => "Tanner Harrison",
                "email" => "bibendum.donec@google.couk",
                "address" => "Ap #594-5522 Etiam Road",
                "postalZip" => "7586",
                "region" => "Konya",
                "country" => "South Korea",
                "phone" => "07 79 55 55 44"
            ],
            [
                "name" => "Clio Greer",
                "email" => "tellus.id@aol.ca",
                "address" => "Ap #853-1873 Risus. Street",
                "postalZip" => "572829",
                "region" => "Tarapacá",
                "country" => "Ireland",
                "phone" => "04 24 72 53 48"
            ],
            [
                "name" => "Angelica Mathews",
                "email" => "nisi@hotmail.com",
                "address" => "4155 Cum St.",
                "postalZip" => "7494",
                "region" => "Friuli-Venezia Giulia",
                "country" => "Netherlands",
                "phone" => "03 53 95 64 79"
            ],
            [
                "name" => "Owen Santiago",
                "email" => "feugiat@protonmail.com",
                "address" => "Ap #449-5871 Eu Street",
                "postalZip" => "835815",
                "region" => "Metropolitana de Santiago",
                "country" => "Norway",
                "phone" => "08 02 21 47 49"
            ],
            [
                "name" => "Talon Burch",
                "email" => "mauris.blandit@google.net",
                "address" => "456-8248 Arcu Ave",
                "postalZip" => "34898",
                "region" => "Zaporizhzhia oblast",
                "country" => "Indonesia",
                "phone" => "05 45 17 23 27"
            ],
            [
                "name" => "Carol May",
                "email" => "felis.ullamcorper@google.ca",
                "address" => "867-304 Integer St.",
                "postalZip" => "13893",
                "region" => "Poitou-Charentes",
                "country" => "Vietnam",
                "phone" => "05 44 48 05 61"
            ],
            [
                "name" => "Christian Snyder",
                "email" => "hendrerit.donec.porttitor@hotmail.ca",
                "address" => "544-948 Adipiscing Ave",
                "postalZip" => "585611",
                "region" => "Nord-Pas-de-Calais",
                "country" => "South Africa",
                "phone" => "06 61 58 11 44"
            ],
            [
                "name" => "Clinton Shaffer",
                "email" => "amet.consectetuer@protonmail.com",
                "address" => "1460 Nunc Rd.",
                "postalZip" => "54-68",
                "region" => "Tyrol",
                "country" => "United Kingdom",
                "phone" => "02 06 15 79 53"
            ],
            [
                "name" => "Amanda Hughes",
                "email" => "sagittis.felis.donec@icloud.org",
                "address" => "645 Ultrices. Road",
                "postalZip" => "98424-177",
                "region" => "Ceará",
                "country" => "New Zealand",
                "phone" => "05 34 54 24 55"
            ],
            [
                "name" => "Rahim Kim",
                "email" => "diam@aol.org",
                "address" => "542-425 Vehicula Avenue",
                "postalZip" => "3615",
                "region" => "Sumy oblast",
                "country" => "Indonesia",
                "phone" => "06 70 03 88 64"
            ],
            [
                "name" => "Sophia Hatfield",
                "email" => "sed@outlook.com",
                "address" => "Ap #936-7132 Laoreet Street",
                "postalZip" => "18723",
                "region" => "Eastern Cape",
                "country" => "China",
                "phone" => "08 22 23 23 28"
            ],
            [
                "name" => "Idona Dalton",
                "email" => "convallis.dolor@outlook.com",
                "address" => "654-9687 Sed Rd.",
                "postalZip" => "285766",
                "region" => "Uttar Pradesh",
                "country" => "Philippines",
                "phone" => "05 11 39 79 71"
            ],
            [
                "name" => "Roth Carpenter",
                "email" => "nascetur.ridiculus.mus@google.ca",
                "address" => "2997 Primis St.",
                "postalZip" => "JB2 3UR",
                "region" => "Ogun",
                "country" => "Belgium",
                "phone" => "09 60 57 99 42"
            ],
            [
                "name" => "Isaiah Mosley",
                "email" => "nibh.lacinia.orci@hotmail.couk",
                "address" => "Ap #630-2624 Pede. Av.",
                "postalZip" => "21857",
                "region" => "Dōngběi",
                "country" => "Germany",
                "phone" => "04 52 20 31 87"
            ],
            [
                "name" => "Wilma Tate",
                "email" => "ac.feugiat@outlook.edu",
                "address" => "Ap #863-4206 Vehicula St.",
                "postalZip" => "2580-2676",
                "region" => "Hidalgo",
                "country" => "New Zealand",
                "phone" => "09 76 15 95 27"
            ],
            [
                "name" => "Caryn Chen",
                "email" => "lorem.ac@google.edu",
                "address" => "506-7924 Ac Street",
                "postalZip" => "11704",
                "region" => "Special Region of Yogyakarta",
                "country" => "India",
                "phone" => "01 26 10 71 34"
            ],
            [
                "name" => "Leilani Kirkland",
                "email" => "lacinia.sed@google.org",
                "address" => "908-1648 Malesuada Road",
                "postalZip" => "4256",
                "region" => "Azad Kashmir",
                "country" => "South Africa",
                "phone" => "03 86 81 72 10"
            ],
            [
                "name" => "Hilda Gates",
                "email" => "tempus@outlook.com",
                "address" => "8823 Eu Rd.",
                "postalZip" => "88658-338",
                "region" => "Languedoc-Roussillon",
                "country" => "Mexico",
                "phone" => "08 08 15 08 11"
            ],
            [
                "name" => "Ainsley Green",
                "email" => "at@yahoo.com",
                "address" => "Ap #747-2569 Vitae, St.",
                "postalZip" => "64566",
                "region" => "São Paulo",
                "country" => "Colombia",
                "phone" => "04 32 77 86 21"
            ],
            [
                "name" => "Yolanda Branch",
                "email" => "risus@yahoo.com",
                "address" => "7394 Duis Avenue",
                "postalZip" => "6018",
                "region" => "Vienna",
                "country" => "Australia",
                "phone" => "03 65 19 89 23"
            ],
            [
                "name" => "Brody Silva",
                "email" => "eu@yahoo.couk",
                "address" => "Ap #682-1586 Id, Ave",
                "postalZip" => "23514-43824",
                "region" => "North Kalimantan",
                "country" => "Belgium",
                "phone" => "04 98 96 18 51"
            ],
            [
                "name" => "Juliet Ratliff",
                "email" => "ac.facilisis@yahoo.com",
                "address" => "Ap #629-5168 Aenean Avenue",
                "postalZip" => "7638 PE",
                "region" => "Waals-Brabant",
                "country" => "Ireland",
                "phone" => "03 41 15 60 75"
            ],
            [
                "name" => "Cruz Glass",
                "email" => "luctus.felis@protonmail.org",
                "address" => "9388 Ultrices Av.",
                "postalZip" => "41307",
                "region" => "Munster",
                "country" => "South Africa",
                "phone" => "05 66 28 67 15"
            ],
            [
                "name" => "Dai Herring",
                "email" => "metus@yahoo.com",
                "address" => "614-5022 Nulla. St.",
                "postalZip" => "28-295",
                "region" => "Västra Götalands län",
                "country" => "Mexico",
                "phone" => "06 22 81 86 28"
            ],
            [
                "name" => "Jelani Robertson",
                "email" => "molestie.dapibus.ligula@hotmail.org",
                "address" => "Ap #709-4001 Eu Street",
                "postalZip" => "787645",
                "region" => "Huáběi",
                "country" => "Canada",
                "phone" => "08 89 51 40 82"
            ],
            [
                "name" => "Amery Tucker",
                "email" => "odio@outlook.net",
                "address" => "Ap #625-7209 Consequat Road",
                "postalZip" => "2251",
                "region" => "Cao Bằng",
                "country" => "Peru",
                "phone" => "06 66 22 66 48"
            ],
            [
                "name" => "Priscilla Tate",
                "email" => "nec@protonmail.net",
                "address" => "6795 Aliquam Av.",
                "postalZip" => "74732-279",
                "region" => "National Capital Region",
                "country" => "Nigeria",
                "phone" => "07 23 13 12 86"
            ],
            [
                "name" => "Serena Salazar",
                "email" => "eros.non@google.edu",
                "address" => "Ap #656-2945 Phasellus Ave",
                "postalZip" => "11-671",
                "region" => "Ivano-Frankivsk oblast",
                "country" => "Norway",
                "phone" => "03 13 66 67 28"
            ],
            [
                "name" => "Dieter Brady",
                "email" => "orci.sem@protonmail.com",
                "address" => "Ap #709-3236 Amet Rd.",
                "postalZip" => "688241",
                "region" => "Los Lagos",
                "country" => "Belgium",
                "phone" => "02 77 12 52 23"
            ],
            [
                "name" => "Ray Cantu",
                "email" => "pellentesque.tincidunt@icloud.edu",
                "address" => "Ap #320-3457 Parturient Road",
                "postalZip" => "29314",
                "region" => "Munster",
                "country" => "United Kingdom",
                "phone" => "02 62 34 32 97"
            ],
            [
                "name" => "Shellie Hensley",
                "email" => "felis.ullamcorper@yahoo.org",
                "address" => "P.O. Box 540, 6652 Id Road",
                "postalZip" => "11903",
                "region" => "Jönköpings län",
                "country" => "Brazil",
                "phone" => "04 51 57 74 21"
            ],
            [
                "name" => "Mary Bennett",
                "email" => "fringilla.donec@protonmail.edu",
                "address" => "Ap #318-842 Mus. St.",
                "postalZip" => "524521",
                "region" => "Berlin",
                "country" => "Russian Federation",
                "phone" => "08 83 31 76 08"
            ],
            [
                "name" => "Harrison Wilkerson",
                "email" => "molestie@aol.edu",
                "address" => "Ap #230-8172 Vulputate, Av.",
                "postalZip" => "74484",
                "region" => "Sussex",
                "country" => "Indonesia",
                "phone" => "05 77 33 17 23"
            ],
            [
                "name" => "Maryam Juarez",
                "email" => "integer@google.net",
                "address" => "P.O. Box 857, 3744 Nullam St.",
                "postalZip" => "484181",
                "region" => "Đà Nẵng",
                "country" => "United States",
                "phone" => "07 24 70 37 56"
            ],
            [
                "name" => "James Fletcher",
                "email" => "scelerisque.sed@yahoo.com",
                "address" => "P.O. Box 383, 5151 Sodales Rd.",
                "postalZip" => "955362",
                "region" => "Konya",
                "country" => "Poland",
                "phone" => "08 79 22 75 21"
            ],
            [
                "name" => "May Colon",
                "email" => "eget.ipsum.suspendisse@outlook.org",
                "address" => "5348 Commodo Rd.",
                "postalZip" => "38651",
                "region" => "Khyber Pakhtoonkhwa",
                "country" => "Philippines",
                "phone" => "04 93 25 74 41"
            ],
            [
                "name" => "Chloe Wolf",
                "email" => "ligula.eu.enim@aol.com",
                "address" => "Ap #521-8321 Semper Av.",
                "postalZip" => "455409",
                "region" => "Himachal Pradesh",
                "country" => "China",
                "phone" => "07 61 63 16 45"
            ],
            [
                "name" => "Ezra Sanders",
                "email" => "aliquet.libero.integer@icloud.com",
                "address" => "633-8415 Lobortis St.",
                "postalZip" => "28543",
                "region" => "Australian Capital Territory",
                "country" => "Germany",
                "phone" => "08 07 33 73 61"
            ],
            [
                "name" => "Colette Scott",
                "email" => "egestas@icloud.couk",
                "address" => "7581 Lacus Avenue",
                "postalZip" => "212353",
                "region" => "Dalarnas län",
                "country" => "Germany",
                "phone" => "03 18 46 30 90"
            ],
            [
                "name" => "Carlos Curry",
                "email" => "ante.blandit@yahoo.org",
                "address" => "763-9640 Lorem St.",
                "postalZip" => "YS5 7PL",
                "region" => "La Guajira",
                "country" => "United Kingdom",
                "phone" => "09 91 52 65 45"
            ],
            [
                "name" => "Amelia Pratt",
                "email" => "egestas.rhoncus.proin@yahoo.com",
                "address" => "691-2947 Curae Av.",
                "postalZip" => "38337",
                "region" => "Comunitat Valenciana",
                "country" => "Pakistan",
                "phone" => "07 79 47 86 53"
            ],
            [
                "name" => "Idona Mullins",
                "email" => "morbi.metus.vivamus@icloud.org",
                "address" => "121-5476 Diam. Road",
                "postalZip" => "255346",
                "region" => "Quebec",
                "country" => "Nigeria",
                "phone" => "06 76 27 18 33"
            ],
            [
                "name" => "Giacomo Reynolds",
                "email" => "et.euismod@icloud.com",
                "address" => "Ap #284-8430 Curabitur Street",
                "postalZip" => "5815",
                "region" => "West-Vlaanderen",
                "country" => "Ukraine",
                "phone" => "06 26 33 70 79"
            ],
            [
                "name" => "Duncan Stephenson",
                "email" => "et.ipsum@google.net",
                "address" => "Ap #622-1541 Semper St.",
                "postalZip" => "644411",
                "region" => "Moscow City",
                "country" => "Pakistan",
                "phone" => "03 74 44 91 65"
            ],
            [
                "name" => "Vivian Nunez",
                "email" => "ut.nulla.cras@yahoo.com",
                "address" => "P.O. Box 708, 3143 Eget St.",
                "postalZip" => "56887",
                "region" => "Washington",
                "country" => "Netherlands",
                "phone" => "02 37 16 02 04"
            ],
            [
                "name" => "Rhona Rojas",
                "email" => "nisi@outlook.edu",
                "address" => "Ap #394-9298 Ullamcorper Rd.",
                "postalZip" => "54541",
                "region" => "Östergötlands län",
                "country" => "Vietnam",
                "phone" => "02 48 11 77 76"
            ],
            [
                "name" => "Jasper Howell",
                "email" => "fusce.diam@google.com",
                "address" => "368-6774 Integer Ave",
                "postalZip" => "74806",
                "region" => "Loreto",
                "country" => "Philippines",
                "phone" => "09 07 23 54 76"
            ],
            [
                "name" => "Amy Mccarthy",
                "email" => "aliquet.odio@outlook.net",
                "address" => "Ap #967-5353 Est Rd.",
                "postalZip" => "733893",
                "region" => "Valparaíso",
                "country" => "Belgium",
                "phone" => "06 70 76 43 91"
            ],
            [
                "name" => "Jamal Hyde",
                "email" => "quis@google.net",
                "address" => "Ap #344-4782 A, St.",
                "postalZip" => "31303",
                "region" => "North-East Region",
                "country" => "New Zealand",
                "phone" => "08 55 54 01 76"
            ],
            [
                "name" => "Emerald Rowland",
                "email" => "magnis.dis@protonmail.net",
                "address" => "Ap #127-9793 Dolor. Ave",
                "postalZip" => "2250",
                "region" => "Aragón",
                "country" => "Ukraine",
                "phone" => "02 85 27 28 20"
            ],
            [
                "name" => "Celeste Kane",
                "email" => "lobortis.class@aol.ca",
                "address" => "326-8192 Vivamus Road",
                "postalZip" => "40402",
                "region" => "Lagos",
                "country" => "Ireland",
                "phone" => "08 30 91 27 16"
            ],
            [
                "name" => "Jonas Leach",
                "email" => "donec@aol.edu",
                "address" => "P.O. Box 855, 476 Sed Rd.",
                "postalZip" => "28150",
                "region" => "South Australia",
                "country" => "Ireland",
                "phone" => "07 73 36 36 28"
            ],
            [
                "name" => "Whoopi Garza",
                "email" => "vel.vulputate@google.couk",
                "address" => "Ap #138-3918 Eget Avenue",
                "postalZip" => "459567",
                "region" => "Huila",
                "country" => "Singapore",
                "phone" => "02 67 28 96 71"
            ],
            [
                "name" => "Fay Coffey",
                "email" => "augue.eu@yahoo.ca",
                "address" => "823-3704 Et St.",
                "postalZip" => "21597",
                "region" => "Oost-Vlaanderen",
                "country" => "United Kingdom",
                "phone" => "07 80 84 11 73"
            ],
            [
                "name" => "Aiko Cobb",
                "email" => "curabitur.vel@icloud.edu",
                "address" => "554-3225 Montes, Rd.",
                "postalZip" => "40106",
                "region" => "Sverdlovsk Oblast",
                "country" => "Mexico",
                "phone" => "05 23 65 38 21"
            ],
            [
                "name" => "Wilma Pierce",
                "email" => "luctus@aol.com",
                "address" => "513-6448 A, Ave",
                "postalZip" => "5870",
                "region" => "Xīnán",
                "country" => "Italy",
                "phone" => "04 75 75 11 24"
            ],
            [
                "name" => "Melvin Valdez",
                "email" => "vivamus.nibh.dolor@hotmail.couk",
                "address" => "Ap #757-6616 Non, St.",
                "postalZip" => "51149",
                "region" => "Yukon",
                "country" => "Chile",
                "phone" => "01 40 58 10 57"
            ],
            [
                "name" => "Alan Simmons",
                "email" => "curae.phasellus@yahoo.ca",
                "address" => "637-8498 Adipiscing St.",
                "postalZip" => "372266",
                "region" => "Gia Lai",
                "country" => "Sweden",
                "phone" => "02 06 28 53 65"
            ],
            [
                "name" => "Gloria Mercer",
                "email" => "vestibulum.massa.rutrum@protonmail.edu",
                "address" => "Ap #537-5323 Nullam Road",
                "postalZip" => "868422",
                "region" => "Los Lagos",
                "country" => "Nigeria",
                "phone" => "01 41 73 77 53"
            ],
            [
                "name" => "Wesley Hogan",
                "email" => "ornare.in.faucibus@aol.edu",
                "address" => "729-9282 In Avenue",
                "postalZip" => "801664",
                "region" => "Xīnán",
                "country" => "Colombia",
                "phone" => "09 23 32 61 68"
            ],
            [
                "name" => "Jamalia Dennis",
                "email" => "justo.sit@aol.com",
                "address" => "Ap #257-3981 Lacus. Ave",
                "postalZip" => "5863",
                "region" => "Hampshire",
                "country" => "Costa Rica",
                "phone" => "03 72 20 96 66"
            ],
            [
                "name" => "Desirae Pace",
                "email" => "et@yahoo.org",
                "address" => "Ap #463-8327 Aliquam Rd.",
                "postalZip" => "3912",
                "region" => "Santa Catarina",
                "country" => "Canada",
                "phone" => "02 24 38 63 01"
            ],
            [
                "name" => "Wing Dominguez",
                "email" => "odio.etiam@hotmail.couk",
                "address" => "P.O. Box 824, 9335 Aliquet Rd.",
                "postalZip" => "YP7 6MB",
                "region" => "West-Vlaanderen",
                "country" => "Philippines",
                "phone" => "05 58 68 33 24"
            ],
            [
                "name" => "Bruce Alvarez",
                "email" => "et@aol.couk",
                "address" => "312-9909 Egestas Ave",
                "postalZip" => "911223",
                "region" => "Arequipa",
                "country" => "India",
                "phone" => "09 51 45 47 36"
            ],
            [
                "name" => "Nathaniel Soto",
                "email" => "non.massa.non@outlook.net",
                "address" => "2462 Lacus, Rd.",
                "postalZip" => "536157",
                "region" => "Puno",
                "country" => "Pakistan",
                "phone" => "05 23 51 17 99"
            ],
            [
                "name" => "Chandler Murray",
                "email" => "amet@hotmail.com",
                "address" => "P.O. Box 380, 5064 Donec Street",
                "postalZip" => "85863",
                "region" => "Chandigarh",
                "country" => "South Korea",
                "phone" => "05 89 27 96 05"
            ],
            [
                "name" => "Imani Cantu",
                "email" => "etiam@outlook.couk",
                "address" => "672 Vel Rd.",
                "postalZip" => "75325",
                "region" => "Istanbul",
                "country" => "Nigeria",
                "phone" => "06 17 55 63 31"
            ],
            [
                "name" => "Xyla Blankenship",
                "email" => "ipsum.sodales@hotmail.org",
                "address" => "Ap #296-1344 Sed Road",
                "postalZip" => "66721",
                "region" => "Luxemburg",
                "country" => "China",
                "phone" => "04 73 41 35 05"
            ],
            [
                "name" => "Deirdre Nichols",
                "email" => "molestie@protonmail.org",
                "address" => "819-7713 Placerat, Street",
                "postalZip" => "4702 AB",
                "region" => "Dnipropetrovsk oblast",
                "country" => "Nigeria",
                "phone" => "04 40 61 32 68"
            ],
            [
                "name" => "Ezekiel Lindsey",
                "email" => "fringilla@outlook.net",
                "address" => "P.O. Box 187, 1394 Curabitur Av.",
                "postalZip" => "1387",
                "region" => "Mpumalanga",
                "country" => "Vietnam",
                "phone" => "05 63 52 12 93"
            ],
            [
                "name" => "Lila Owen",
                "email" => "a.auctor.non@protonmail.couk",
                "address" => "Ap #925-2176 Elit. Road",
                "postalZip" => "5871",
                "region" => "Vestland",
                "country" => "Chile",
                "phone" => "09 54 88 13 60"
            ],
            [
                "name" => "Nayda Glenn",
                "email" => "pede@hotmail.edu",
                "address" => "675-1778 Penatibus Street",
                "postalZip" => "15254",
                "region" => "North West",
                "country" => "Indonesia",
                "phone" => "02 97 55 62 91"
            ],
            [
                "name" => "Ignatius Finch",
                "email" => "lacus.nulla@icloud.net",
                "address" => "907-463 Aenean Rd.",
                "postalZip" => "57269-11427",
                "region" => "Caraga",
                "country" => "Sweden",
                "phone" => "04 32 95 76 44"
            ],
            [
                "name" => "Cameron Hebert",
                "email" => "eu.eros.nam@yahoo.ca",
                "address" => "550 Magnis Avenue",
                "postalZip" => "652229",
                "region" => "Östergötlands län",
                "country" => "Ukraine",
                "phone" => "08 88 48 91 89"
            ],
            [
                "name" => "Keith Herring",
                "email" => "quis.diam.pellentesque@hotmail.com",
                "address" => "Ap #904-7880 Vivamus Ave",
                "postalZip" => "3138 GL",
                "region" => "Eastern Cape",
                "country" => "France",
                "phone" => "05 48 13 77 26"
            ],
            [
                "name" => "Kameko Powers",
                "email" => "aliquam.eros@yahoo.org",
                "address" => "805-4285 Sociis Ave",
                "postalZip" => "R3 1UJ",
                "region" => "Xīnán",
                "country" => "Spain",
                "phone" => "07 88 07 88 61"
            ],
            [
                "name" => "Seth Lawrence",
                "email" => "non.massa@google.couk",
                "address" => "528-9144 Non Road",
                "postalZip" => "18637",
                "region" => "Lampung",
                "country" => "New Zealand",
                "phone" => "04 54 10 47 33"
            ],
            [
                "name" => "Troy Benjamin",
                "email" => "sed.consequat@hotmail.com",
                "address" => "P.O. Box 431, 7817 Habitant St.",
                "postalZip" => "4155",
                "region" => "Riau Islands",
                "country" => "Russian Federation",
                "phone" => "06 86 84 20 10"
            ],
            [
                "name" => "Sybill Hansen",
                "email" => "justo.faucibus@google.org",
                "address" => "Ap #285-7032 Pede. Rd.",
                "postalZip" => "91161-757",
                "region" => "South Island",
                "country" => "Vietnam",
                "phone" => "07 72 30 85 11"
            ],
            [
                "name" => "Ishmael Roberson",
                "email" => "a@icloud.couk",
                "address" => "P.O. Box 892, 1487 Nunc Ave",
                "postalZip" => "2846",
                "region" => "Saratov Oblast",
                "country" => "Mexico",
                "phone" => "08 74 24 51 64"
            ],
            [
                "name" => "Destiny Juarez",
                "email" => "ultricies.dignissim@hotmail.net",
                "address" => "804-1476 Ante. Rd.",
                "postalZip" => "2634",
                "region" => "Ulster",
                "country" => "China",
                "phone" => "08 23 45 55 19"
            ],
            [
                "name" => "Christine Rush",
                "email" => "adipiscing.mauris@icloud.edu",
                "address" => "432-8771 Massa. Road",
                "postalZip" => "0247",
                "region" => "Quebec",
                "country" => "South Africa",
                "phone" => "02 37 47 39 95"
            ],
            [
                "name" => "Pascale Rosa",
                "email" => "at@google.ca",
                "address" => "Ap #257-2543 Diam Avenue",
                "postalZip" => "388686",
                "region" => "Baden Württemberg",
                "country" => "Austria",
                "phone" => "08 40 56 20 73"
            ]
        ];

        foreach ($data as $emp) {
            $employe = new Employe();
            $employe->setName($emp["name"]);
            $employe->setEmail($emp["email"]);
            $employe->setAddress($emp["address"]);
            $employe->setPostalZip($emp["postalZip"]);
            $employe->setRegion($emp["region"]);
            $employe->setCountry($emp["country"]);
            $employe->setPhone($emp["phone"]);
            $manager->persist($employe);
        }
        $manager->flush();
    }
}
