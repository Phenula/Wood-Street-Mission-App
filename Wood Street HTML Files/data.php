<?php

$target_area = 'Manchester and Salford';
$target_percent = 40;

$regions = array(
    'east_of_england' => 'East of England',
    'the_east_midlands' => 'The East Midlands',
    'london' => 'London',
    'the_north_east' => 'The North East',
    'the_north_west' => 'The North West',
    'the_south_east' => 'The South East',
    'the_south_west' => 'The South West',
    'the_west_midlands' => 'The West Midlands',
    'yorkshire_the_humber' => 'Yorkshire & The Humber',
    'northern_ireland' => 'Northern Ireland',
    'scotland' => 'Scotland',
    'wales' => 'Wales',
);

$region_data = array(

    'east_of_england' => array(
        'Babergh' => '13',
        'Basildon' => '23',
        'Bedford' => '20',
        'Braintree ' => '14',
        'Breckland' => '15',
        'Brentwood' => '10',
        'Broadland' => '10',
        'Broxbourne' => '18',
        'Cambridge' => '17',
        'Castle Point' => '16',
        'Central Bedfordshire' => '12',
        'Chelmsford' => '12',
        'Colchester' => '17',
        'Dacorum' => '14',
        'East Cambridgeshire' => '11',
        'East Hertfordshire' => '9',
        'Epping Forest' => '15',
        'Fenland' => '20',
        'Forest Heath' => '15',
        'Great Yarmouth' => '25',
        'Harlow' => '22',
        'Hertsmere' => '14',
        'Huntingdonshire' => '11',
        'Ipswich' => '22',
        'King\'s Lynn & W Norfolk' => '18',
        'Luton UA' => '29',
        'Maldon' => '13',
        'Mid Suffolk' => '9',
        'North Hertfordshire' => '13',
        'North Norfolk' => '16',
        'Norwich' => '30',
        'Peterborough UA' => '25',
        'Rochford' => '11',
        'South Cambridgeshire' => '8',
        'South Norfolk ' => '11',
        'Southend-on-Sea UA  ' => '24',
        'St. Albans ' => '10',
        'St. Edmundsbury ' => '12',
        'Stevenage' => '19',
        'Suffolk Coastal' => '11',
        'Tendring' => '24',
        'Three Rivers' => '12',
        'Thurrock UA' => '20',
        'Uttlesford' => '8',
        'Watford ' => '16',
        'Waveney ' => '22',
        'Welwyn Hatfield ' => '16',
    ),

    'the_east_midlands' => array(
        'Amber Valley' => '17',
        'Ashfield' => '22',
        'Bassetlaw' => '19',
        'Blaby' => '9',
        'Bolsover' => '23',
        'Boston' => '18',
        'Broxtowe' => '15',
        'Charnwood' => '14',
        'Chesterfield' => '21',
        'Corby' => '21',
        'Daventry' => '12',
        'Derby UA' => '24',
        'Derbyshire Dales' => '10',
        'East Lindsey' => '20',
        'East Northamptonshire' => '12',
        'Erewash' => '18',
        'Gainsborough' => '19',
        'Gedling' => '15',
        'Harborough' => '7',
        'High Peak' => '13',
        'Kettering' => '15',
        'Leicester UA' => '32',
        'Lincoln' => '24',
        'Mansfield' => '23',
        'Melton' => '10',
        'Newark & Sherwood' => '16',
        'North East Derbyshire' => '15',
        'North Kesteven' => '10',
        'North West Leicestershire' => '13',
        'Northampton' => '21',
        'Nottingham UA' => '35',
        'Oadby and Wigston' => '12',
        'Rushcliffe' => '8',
        'Rutland UA' => '7',
        'South Derbyshire' => '13',
        'South Holland' => '15',
        'South Kesteven' => '13',
        'South Northamptonshire' => '6',
        'Wellingborough' => '19',
        'West Lindsey' => '15',
    ),

    'london' => array(
        'Barking and Dagenham' => '35',
        'Barent' => '21',
        'Bexley' => '17',
        'Brent' => '30',
        'Bromley' => '15',
        'Camden' => '37',
        'City of London' => '16',
        'Croydon' => '24',
        'Ealing' => '27',
        'Enfield' => '33',
        'Greenwich' => '31',
        'Hackney' => '39',
        'Hammersmith and Fulham' => '33',
        'Haringey' => '34',
        'Harrow' => '21',
        'Havering' => '17',
        'Hillingdon' => '22',
        'Hounslow' => '25',
        'Islington' => '43',
        'Kensington and Chelsea' => '26',
        'Kingston upon Thames' => '14',
        'Lambeth' => '33',
        'Lewisham' => '32',
        'Merton' => '18',
        'Newham' => '37',
        'Redbridge' => '25',
        'Richmond upon Thames' => '9',
        'Southwark' => '31',
        'Sutton' => '15',
        'Tower Hamlets' => '52',
        'Waltham Forest' => '31',
        'Wandsworth' => '24',
        'Westminster and City of London' => '38',

    ),


    'the_north_east' => array(
        'County Durham' => '22',
        'Darlington UA' => '22',
        'Gateshead' => '25',
        'Hartlepool UA' => '30',
        'Middlesbrough UA' => '34',
        'Newcastle-upon-Tyne' => '31',
        'North Tyneside' => '21',
        'Northumberlnad UA' => '18',
        'Redcar and Cleveland UA' => '26',
        'South Tyneside' => '28',
        'Stockton-on-Tees UA' => '23',
        'Sunderland' => '26',
    ),

    'the_north_west' => array(
        'Allerdale' => '16',
        'Barrow-in-Furness' => '22',
        'Blackburn with Darwen UA' => '29',
        'Blackpool UA' => '29',
        'Bolton' => '24',
        'Burnley' => '29',
        'Bury' => '18',
        'Carlisle' => '17',
        'Chester West and Chester' => '16',
        'Chester East UA' => '13',
        'Chorley' => '13',
        'Copeland' => '18',
        'Eden' => '9',
        'Fylde' => '12',
        'Halton UA' => '27',
        'Hyndburn' => '25',
        'Knowsley' => '32',
        'Lancaster' => '18',
        'Liverpool' => '34',
        'Manchester' => '40',
        'Oldham' => '29',
        'Pendle' => '24',
        'Preston' => '23',
        'Ribble Valley' => '6',
        'Rochdale' => '28',
        'Rossendale' => '19',
        'Salford' => '29',
        'Sefton' => '20',
        'South Lakeland' => '9',
        'South Ribble' => '12',
        'St. Helens' => '25',
        'Stockport' => '16',
        'Tameside' => '24',
        'Trafford' => '15',
        'Warrington UA' => '14',
        'West Lancashire' => '18',
        'Wigan' => '20',
        'Wirral' => '25',
        'Wyre' => '16',
    ),

    'the_south_east' => array(
        'Adur' => '17',
        'Arun' => '15',
        'Ashford' => '15',
        'Aylesbury Vale' => '9',
        'Basingstoke and Deane' => '11',
        'Bracknell Forest UA' => '10',
        'Brighton and Hove UA' => '20',
        'Canterbury' => '16',
        'Cherwell' => '11',
        'Chichester' => '11',
        'Chiltern' => '6',
        'Crawley' => '17',
        'Dartford' => '15',
        'Dover' => '19',
        'East Hampshire' => '8',
        'Eastbourne' => '21',
        'Eastleigh' => '10',
        'Elmbridge' => '8',
        'Epsom and Ewell' => '8',
        'Fareham' => '8',
        'Gosport' => '18',
        'Gravesham' => '19',
        'Guildford' => '9',
        'Hart' => '5',
        'Hastings' => '28',
        'Havant' => '20',
        'Horsham' => '8',
        'Isle of Wight UA' => '20',
        'Lewes' => '14',
        'Maidstone' => '13',
        'Medway UA' => '19',
        'Mid Sussex' => '7',
        'Milton Keynes UA' => '19',
        'Mole Valley' => '7',
        'New Forest' => '12',
        'Oxford' => '22',
        'Portsmouth UA' => '24',
        'Reading UA' => '20',
        'Reigate and Banstead' => '10',
        'Rother' => '17',
        'Runnymede' => '11',
        'Rushmoor' => '12',
        'Sevenoaks' => '11',
        'Shepway' => '19',
        'Slough UA' => '22',
        'South Bucks' => '8',
        'South Oxfordshire' => '7',
        'Southampton UA' => '26',
        'Spelthorne' => '13',
        'Surrey Heath' => '8',
        'Swale' => '22',
        'Tandridge' => '9',
        'Test Valley' => '9',
        'Thanet' => '25',
        'Tonbridge and Malling' => '11',
        'Tunbridge Wells' => '11',
        'Vale of White Horse' => '8',
        'Waverley' => '7',
        'Wealden' => '9',
        'West Berkshie UA' => '10',
        'West Oxfordshire' => '7',
        'Winchester' => '7',
        'Windsor and Maidenhead UA' => '9',
        'Woking' => '11',
        'Wokingham UA' => '5',
        'Worthing' => '14',
        'Wycombe' => '12',
    ),


    'the_south_west' => array(
        'Bath and North East Somerset UA' => '12',
        'Bournemouth UA' => '19',
        'Bristol, City of UA' => '25',
        'Cheltenham' => '16',
        'Christchurch' => '15',
        'Cornwall UA' => '17',
        'Cotswold' => '9',
        'East Devon' => '9',
        'East Dorset' => '9',
        'Exeter' => '16',
        'Forest of Dean' => '14',
        '*Isles of Scilly' => '3',
        'Gloucester' => '19',
        'Mendip' => '13',
        'Mid Devon' => '11',
        'North Devon' => '14',
        'North Dorset' => '11',
        'North Somerset UA' => '13',
        'Plymouth UA' => '20',
        'Poole UA' => '16',
        'Purbeck' => '12',
        'Sedgemoor' => '15',
        'South Gloucestershire UA' => '10',
        'South Hams' => '11',
        'South Somerset' => '12',
        'Stroud' => '10',
        'Swindon UA' => '16',
        'Taunton Deane' => '13',
        'Teignbridge' => '13',
        'Tewkesbury' => '12',
        'Torbay UA' => '22',
        'Torridge' => '15',
        'West Devon' => '11',
        'West Dorset' => '11',
        'West Somerset' => '17',
        'Weymouth and Portland' => '18',
        'Wiltshire UA' => '10',
    ),

    'the_west_midlands' => array(
        'Birmingham' => '34',
        'Bromsgrove' => '9',
        'Cannock Chase' => '19',
        'Coventry' => '27',
        'Dudley' => '22',
        'East Staffordshire' => '17',
        'Herefordshire UA' => '14',
        'Lichfield' => '13',
        'Malvern Hills' => '13',
        'Newcastle-under-Lyme' => '18',
        'North Warwickshire' => '14',
        'Nuneaton and Bedworth' => '19',
        'Redditch' => '19',
        'Rugby' => '13',
        'Sandwell' => '31',
        'Shropshire UA' => '13',
        'Solihull' => '16',
        'South Staffordshire' => '12',
        'Stafford' => '11',
        'Staffordshire Moorlands' => '11',
        'Stoke-on-Trent UA' => '29',
        'Stratford-on-Avon' => '10',
        'Tamworth' => '19',
        'Telford and Wrekin UA' => '25',
        'Walsall' => '29',
        'Warwick' => '11',
        'Wolverhampton' => '31',
        'Worcester' => '17',
        'Wychavon' => '13',
        'Wyre Forest' => '19',
    ),

    'yorkshire_the_humber' => array(
        'Barnsley' => '23',
        'Bradford' => '26',
        'Calderdale' => '20',
        'Craven' => '8',
        'Doncaster' => '23',
        'East Riding of Yorkshire UA' => '12',
        'Hambleton' => '8',
        'Harrogate' => '8',
        'Kingston upon Hull, City of UA' => '32',
        'Kirklees' => '20',
        'Leeds' => '21',
        'North East Lincolnshire UA' => '26',
        'North Lincolnshire UA' => '19',
        'Richmondshire' => '8',
        'Rotherham' => '22',
        'Ryedale' => '9',
        'Scarborough' => '20',
        'Selby' => '11',
        'Sheffield' => '23',
        'Wakefield' => '20',
        'York UA' => '12',
    ),

    'northern_ireland' => array(
        'Antrim' => '15',
        'Ards' => '15',
        'Armagh' => '17',
        'Ballymena' => '16',
        'Ballymoney' => '20',
        'Banbridge' => '14',
        'Belfast' => '35',
        'Carrickfergus' => '16',
        'Castlereagh' => '12',
        'Coleraine' => '21',
        'Cookstown' => '21',
        'Craigavon' => '21',
        'Derry' => '36',
        'Down' => '19',
        'Dungannon' => '20',
        'Fermanagh' => '19',
        'Larne' => '18',
        'Limavady' => '26',
        'Lisburn' => '21',
        'Magherafelt' => '17',
        'Moyle' => '24',
        'Newry and Mourne' => '25',
        'Newtonabbey' => '17',
        'North Down' => '12',
        'Omagh' => '22',
        'Strabane' => '31',
    ),

    'scotland' => array(
        'Aberdeen City' => '16',
        'Aberdeenshire' => '9',
        'Angus' => '15',
        'Argyll and Bute' => '14',
        'Clackmannanshire' => '23',
        'Dumfries & Galloway' => '17',
        'Dundee City' => '27',
        'East Ayrshire' => '23',
        'East Dunbartonshire' => '10',
        'East Lothian' => '10',
        'East Renfrewshire' => '10',
        'Edinburgh, City of' => '19',
        'Eilean Siar (Western Isles)' => '11',
        'Falkirk' => '17',
        'Fife' => '20',
        'Glasgow City' => '35',
        'Highland' => '15',
        'Inverclyde' => '24',
        'Midlothian' => '18',
        'Moray' => '13',
        'North Ayrshire' => '25',
        'North Lanarkshire' => '22',
        'Orkney Islands' => '8',
        'Perth and Kinross' => '11',
        'Renfrewshire' => '19',
        'Scottish Borders' => '13',
        'Shetland Islands' => '7',
        'South Ayrshire' => '19',
        'South Lanarkshire' => '18',
        'Stirling' => '14',
        'West Dunbartonshire' => '26',
        'West Lothian' => '18',
    ),

    'wales' => array(
        'Blaenau Gwent' => '29',
        'Bridgend' => '22',
        'Caerphilly' => '25',
        'Cardiff' => '26',
        'Carmarthenshire' => '19',
        'Ceredigion' => '16',
        'Conwy' => '19',
        'Denbighshire' => '20',
        'Flintshire' => '16',
        'Gwynedd' => '16',
        'Isle of Anglesey' => '18',
        'Merthyr Tydfil' => '28',
        'Monmouthshire' => '12',
        'Neath Port Talbot' => '25',
        'Newport' => '25',
        'Pembrokeshire' => '18',
        'Powys' => '12',
        'Rhondda, Cynon, Taff' => '25',
        'Swansea' => '23',
        'Torfaen' => '23',
        'Vale of Glamorgan' => '16',
        'Wrexham' => '19',

    )
);



if (isset($_POST) && !empty($_POST)) {
    if (isset($_POST['select_region']) && !empty($_POST['select_region'])) {
        // they pressed region, lets make the correct area selector visible
        $region = isset($_POST['region']) ? $_POST['region'] : '';

    } else {
        $la = isset($_POST['la']) ? $_POST['la'] : '';
        $region = isset($_POST['region']) ? $_POST['region'] : '';

    }
} // no post
?><!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Data</title>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="favicon.ico"/>
    <link rel="apple-touch-icon" href="woodst-logo-57.png"/>
    <link rel="apple-touch-icon" sizes="72x72" href="woodst-logo-72.png"/>
    <link rel="apple-touch-icon" sizes="114x114" href="woodst-logo-144.png"/>
</head>

<body>

<div class="button back_button">
    <p><a href="index.html">Back</a></p>
</div>
<h1>Lifestyle Comparison</h1>


<form method="post" name="Booking_Form" action="data.php">

    <?php if (empty($region)) { ?>

    <p>We can compare the level of poverty in your are with that of the area Wood Street Mission covers!</p>
    <p><label for="SelectRegion">Please Select Region*</label></p>
    <p class="styled-select"><select name="region" id="SelectRegion" class="selector">
        <?php
        foreach ($regions as $regname => $name) {
            echo '<option value="' . $regname . '">' . $name . '</option>';
        }
        ?>
    </select></p>
    <p><input type="submit" name="select_region" value="Select Region" class="submit"/></p>

    <?php } else if (!isset($la)) { ?>
    <?php echo '<input type="hidden" name="region" value="' . $region . '" />'; ?>
    <p><label for="SelectRegion">Please Select Your Local Authority (LA)*</label></p>
    <p class="styled-select"><select name="la" id="SelectRegion" class="selector">
        <?php

        foreach ($region_data[$region] as $regname => $percent) {
            echo '<option value="' . $regname . '">' . "$regname" . '</option>';
        }
        ?>
    </select></p> <!-- onClick="processRegionSelection();return false;" -->
    <p><input type="submit" value="Select LA" name="selectla" class="submit"/></p>

    <?php
} else {
    $your_percent = $region_data[$region][$la];

    if ($your_percent < $target_percent) {
        ?>

        <p> <?php echo $your_percent?>% of children living your area live in poverty,
            whereas <?php echo $target_percent?>% of children living in Manchester are affected.</p>

        <p> Since <?php echo $la?> has less children living in poverty than Manchester, please consider donating to Wood
            Street Mission.</p>

        <p> Any donations you make will help to reduce the consequences of poverty. </p>

        <p> Thank You!</p>
        <?php
    } else if ($your_percent == $target_percent) {
        ?>


        <p> <?php echo $your_percent?>% of children living in Manchester and <?php echo $la?> </p>


        <?php
    } else {
        ?>

        <p> <?php echo $target_percent?>% of children living in Manchester live in poverty
            whereas <?php echo $your_percent?>% of children living in your area are in poverty</p>

        <p> Maybe consider setting up a mission similar to Wood St in <?php echo $la?>!</p>
        <?php
    }
    ?>

    <?php } ?>

</form>
<div class="home_button button">
    <a href="index.html"><img src="homehouse.gif" title="Go Back to Home Page"/></a>
</div>
</body>
</html>