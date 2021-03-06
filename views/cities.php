<?php

// @TODO: Remove all this code and start using city and region DB tables instead.
// @TODO: Fix all the relations between city and region (use DB relation instead of elsewhere...).
// For example, user must have direct relation to city, not to region. User must not have relation to city's parent (region).
// @TODO: Fix the existing DB entries related to city-region relation. Some entries (e.g. needy table, #9508) have wrong region attached to the city.

$citiesList = array(
    0 => 'Akmenės r. sav.',
    1 => 'Alytaus m. sav.',
    2 => 'Alytaus r. sav.',
    3 => 'Anykščių r. sav.',
    4 => 'Birštono sav.',
    5 => 'Biržų r. sav.',
    6 => 'Druskininkų sav.',
    7 => 'Elektrėnų sav.',
    8 => 'Ignalinos r. sav.',
    9 => 'Jonavos r. sav.',
    10 => 'Joniškio r. sav.',
    11 => 'Jurbarko r. sav.',
    12 => 'Kaišiadorių r. sav.',
    13 => 'Kalvarijos sav.',
    14 => 'Kauno m. sav.',
    15 => 'Kauno r. sav.',
    16 => 'Kazlų Rūdos sav.',
    17 => 'Kėdainių r. sav.',
    18 => 'Kelmės r. sav.',
    19 => 'Klaipėdos m. sav.',
    20 => 'Klaipėdos r. sav.',
    21 => 'Kretingos r. sav.',
    22 => 'Kupiškio r. sav.',
    23 => 'Lazdijų r. sav.',
    24 => 'Marijampolės sav.',
    25 => 'Mažeikių r. sav.',
    26 => 'Molėtų r. sav.',
    27 => 'Neringos sav.',
    28 => 'Pagėgių sav.',
    29 => 'Pakruojo r. sav.',
    30 => 'Palangos m. sav.',
    31 => 'Panevėžio m. sav.',
    32 => 'Panevėžio r. sav.',
    33 => 'Pasvalio r. sav.',
    34 => 'Plungės r. sav.',
    35 => 'Prienų r. sav.',
    36 => 'Radviliškio r. sav.',
    37 => 'Raseinių r. sav.',
    38 => 'Rietavo sav.',
    39 => 'Rokiškio r. sav.',
    40 => 'Šakių r. sav.',
    41 => 'Šalčininkų r. sav.',
    42 => 'Šiaulių m. sav.',
    43 => 'Šiaulių r. sav.',
    44 => 'Šilalės r. sav.',
    45 => 'Šilutės r. sav.',
    46 => 'Širvintų r. sav.',
    47 => 'Skuodo r. sav.',
    48 => 'Švenčionių r. sav.',
    49 => 'Tauragės r. sav.',
    50 => 'Telšių r. sav.',
    51 => 'Trakų r. sav.',
    52 => 'Ukmergės r. sav.',
    53 => 'Utenos r. sav.',
    54 => 'Varėnos r. sav.',
    55 => 'Vilkaviškio r. sav.',
    56 => 'Vilniaus m. sav.',
    57 => 'Vilniaus r. sav.',
    58 => 'Visagino sav.',
    59 => 'Zarasų r. sav.',
);

$regionsList = array(
    'Alytaus apskritis',        // 1
    'Kauno apskritis',          // 2
    'Klaipėdos apskritis',      // 3
    'Marijampolės apskritis',   // 4
    'Panevėžio apskritis',      // 5
    'Šiaulių apskritis',        // 6
    'Tauragės apskritis',       // 7
    'Telšių apskritis',         // 8
    'Utenos apskritis',         // 9
    'Vilniaus apskritis',       // 10
);

$regionsListChildren = array(
    array(1, 2, 6, 23, 54),                 // Alytaus -1
    array(4, 9, 12, 14, 15, 17, 35, 37),    // Kauno - 2
    array(19, 20, 21, 27, 30, 47, 45),      // Klaipedos - 3
    array(13, 16, 24, 40, 55),              // Marijampoles - 4
    array(5, 22, 31, 32, 33, 39),           // Panevezio -5
    array(0, 10, 18, 29, 36, 42, 43),       // Siauliu - 6
    array(11, 28, 44, 49),                  // Taurages -7
    array(25, 34, 38, 50),                  // Telsiu - 8
    array(3, 8, 26, 53, 58, 59),            // Utenos -9
    array(7, 41, 46, 48, 51, 52, 56, 57),   // Vilniaus - 10
);
?>