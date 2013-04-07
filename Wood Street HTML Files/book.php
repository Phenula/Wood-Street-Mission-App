<?php
// check
if (isset($_POST) && !empty($_POST)) {

    if (isset($_POST['select_region']) && !empty($_POST['select_region'])) {
        // they pressed region, lets make the correct area selector visible
        $region = isset($_POST['region']) ? $_POST['region'] : '';

    } else {

        $region = isset($_POST['region']) ? $_POST['region'] : '';
        $area = isset($_POST['area']) ? $_POST['area'] : '';
        $user_date = isset($_POST['user_date']) ? $_POST['user_date'] : '';
        $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
        $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
        $bags = isset($_POST['bags']) ? $_POST['bags'] : '';
        $street = isset($_POST['street']) ? $_POST['street'] : '';
        $town = isset($_POST['town']) ? $_POST['town'] : '';
        $county = isset($_POST['county']) ? $_POST['county'] : '';
        $postcode = isset($_POST['postcode']) ? $_POST['postcode'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $mobile = isset($_POST['mobile']) ? $_POST['mobile'] : '';
        $additionalnotes = isset($_POST['additionalnotes']) ? $_POST['additionalnotes'] : '';

        if (empty($area) || empty($firstname) || empty($lastname) || empty($postcode) || empty($user_date) || empty($street) || empty($bags) || (empty($email) && empty($telephone))) {
            $message = "<p>There was an error. Please check you have entered the required fields.</p>";
        } else { //  email
            $body = "
$firstname $lastname has requested a pick up on $user_date

Their Address is:
$street
$postcode
$town
$county
$area

To confirm this booking, their email is $email and their mobile number is $mobile

Additional Notes:
$additionalnotes
";

            mail("info@woodstreetmission.org.uk", "Subject: Pickup request", $body, "From: $firstname $lastname<$email>");
            echo '<div class="centred" style="margin-bottom:20px;">Thank your for your request, we will be in contact you shortly to confirm your booking
			</div>';
            $bodytwo = "
Thank you for your inquiry, we will telephone you to confirm your booking.
You booking is not confirmed until we call!
";

            mail("$email", "Subject: Thank You!", $bodytwo, "From: Wood_St_Mission");

        }
    }
}
//echo $message;
?><!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Book</title>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="favicon.ico"/>
    <link rel="apple-touch-icon" href="woodst-logo-57.png"/>
    <link rel="apple-touch-icon" sizes="72x72" href="woodst-logo-72.png"/>
    <link rel="apple-touch-icon" sizes="114x114" href="woodst-logo-144.png"/>

    <script type="text/javascript">
        function processRegionSelection() {
            var region = document.Booking_Form.region.value;
            var others = ["Marple", "Sale", "Bramhall", "Salford"];
            for (i = 0; i < others.length; i++) {
                //alert (others[i]);
                if (others[i] != region) {
                    hideAreaSelectorAndLabel(others[i]);
                }
            }

            showAreaSelectorAndLabel(region);


        }
        function showAreaSelectorAndLabel(region) {

            document.getElementById("Select_Area_Label_" + region).className = "selector";
            document.getElementById("Select_Area_" + region).className = "selector";
        }

        function hideAreaSelectorAndLabel(region) {

            document.getElementById("Select_Area_Label_" + region).className = "hiddenselector selector";
            document.getElementById("Select_Area_" + region).className = "hiddenselector selector";
        }
    </script>
</head>


<body>

<div class="button back_button">
    <p><a href="donate_items.html">Back</a></p>
</div>
<h1>Booking Form</h1>

<p>We collect from across greater Manchester and parts of Cheshire throughout the year.</p>

<p> Each day of the week is dedicated to collecting donations from a specific part of Manchester.</p>

<p> Find you local area in the list below to see which day our Collection Van visits your community</p>

<p>Please note you booking is not confirmed until we call you! </p>

<p class="comment">*means your are required to fill in this field</p>

<form method="post" name="Booking_Form" action="book.php">

    <?php if (empty($region)) { ?>

    <p><label for="SelectRegion">Please Select Region*</label></p>
    <p class="styled-select"><select name="region" id="SelectRegion" class="selector">
        <option value="Marple">Marple (Tuesdays)</option>
        <option value="Sale">Sale/Altrincham (Wednesdays)</option>
        <option value="Bramhall">Bramhall (Thursdays)</option>
        <option value="Salford">Salford (Fridays)</option>
    </select></p> <!-- onClick="processRegionSelection();return false;" -->
    <p><input type="submit" value="Select Region" class="submit"/></p>

    <?php } else { ?>
    <?php if ($region == 'Marple') { ?>


        <p><label for="Select_Area_Marple" id="Select_Area_Label_Marple">Please select your area around Marple*</label>
        </p>
        <p class="styled-select"><select name="area" id="Select_Area_Marple" class="selector">
            <option value="Abbey_Hey">Abbey Hey</option>
            <option value="Ardwick">Ardwick</option>
            <option value="Ashton_Under_Lyne">Ashton Under Lyne</option>
            <option value="Audenshaw">Audenshaw</option>
            <option value="Beswick">Beswick</option>
            <option value="Bredbury">Bredbury</option>
            <option value="Brinnington">Brinnington</option>
            <option value="Burnage">Burnage</option>
            <option value="Davenport">Davenport</option>
            <option value="Disley">Disley</option>
            <option value="Edgeley">Edgeley</option>
            <option value="Gorton">Gorton</option>
            <option value="Great_Moor">Great Moor</option>
            <option value="Hazel_Grove">Hazel Grove</option>
            <option value="Heaton_Chapel">Heaton Chapel</option>
            <option value="Heaton_Moor">Heaton Moor</option>
            <option value="Hyde">Hyde</option>
            <option value="Levenshulme">Levenshulme</option>
            <option value="Longsight">Longsight</option>
            <option value="Marple">Marple</option>
            <option value="Mellor">Mellor</option>
            <option value="Offerton">Offerton</option>
            <option value="Reddish">Reddish</option>
            <option value="Romiley">Romiley</option>
            <option value="Stalybridge">Stalybridge</option>
            <option value="Stockport">Stockport</option>
            <option value="Woodley">Woodley</option>
            <option value="Woodsmoor">Woodsmoor</option>
        </select>
        </p>

        <p><label for="user_date" >Choose a Date on Tuesday*</label></p>
        <p><input type="date" name="user_date" id="user_date" class="input"/><p>
		

<?php } else if ($region == 'Sale') { ?>

        <p><label for="Select_Area_Sale" id="Select_Area_Label_Sale">Please select your area around
            Sale/Altrincham*</label></p>
        <p class="styled-select"><select name="area" id="Select_Area_Sale" class="selector">
            <option value="Altrincham">Altrincham</option>
            <option value="Baguley">Baguley</option>
            <option value="Bowden">Bowden</option>
            <option value="Brooklands">Brooklands</option>
            <option value="Brunswick">Brunswick</option>
            <option value="Cadishead">Cadishead</option>
            <option value="Chorlton">Chorlton</option>
            <option value="Davyhulme">Davyhulme</option>
            <option value="Firswood">Firswood</option>
            <option value="Hale">Hale</option>
            <option value="Halebarns">Halebarns</option>
            <option value="Hulme">Hulme</option>
            <option value="Knutsford">Knutsford</option>
            <option value="Lymm">Lymm</option>
            <option value="Mere">Mere</option>
            <option value="Mobberley">Mobberley</option>
            <option value="Northenden">Northenden</option>
            <option value="Northern_MoorAbbey_Hey">Northern Moor</option>
            <option value="Old_Trafford">Old Trafford</option>
            <option value="Partington">Partington</option>
            <option value="Sale">Sale</option>
            <option value="Stretford">Stretford</option>
            <option value="Timperley">Timperley</option>
            <option value="Urmston">Urmston</option>
            <option value="Whalley_RangeAbbey_Hey">Whalley Range</option>
        </select>
        </p>

        <p><label>Choose a Date on Wednesday*</label></p>
        <p><input type="date" name="user_date" class="input"/><p>
		

<?php } else if ($region == 'Bramhall') { ?>

        <p><label for="Select_Area_Bramhall" id="Select_Area_Label_Bramhall">Please select your area around
            Bramhall*</label></p>
        <p class="styled-select"><select name="area" id="Select_Area_Bramhall" class="selector">
            <option value="Alderley_Edge">Alderley Edge</option>
            <option value="Bramhall">Bramhall</option>
            <option value="Cheadle_Hulme">Cheadle Hulme</option>
            <option value="Didsbury">Didsbury</option>
            <option value="Fallowfield">Fallowfield</option>
            <option value="Gatley">Gatley</option>
            <option value="Handforth">Handforth</option>
            <option value="Heald_Green">Heald Green</option>
            <option value="Moss_Side">Moss Side</option>
            <option value="Newall_Green">Newall Green</option>
            <option value="Northern_Moor">Northern Moor</option>
            <option value="Poynton">Poynton</option>
            <option value="Rusholme">Rusholme</option>
            <option value="Victoria_Park">Victoria Park</option>
            <option value="Wilmslow">Wilmslow</option>
            <option value="Withington">Withington</option>
            <option value="Wythenshawe">Wythenshawe</option>
        </select></p>

        <p><label>Choose a Date on Thursday*</label></p>
        <p><input type="date" name="user_date" class="input"/><p>
		

<?php } else if ($region == 'Salford') { ?>

        <p><label for="Select_Area_Salford" id="Select_Area_Label_Salford">Please select your area around
            Salford*</label></p>
        <p class="styled-select"><select name="area" id="Select_Area_Salford" class="selector">
            <option value="Astley">Astley</option>
            <option value="Blackley">Blackley</option>
            <option value="Boothstown">Boothstown</option>
            <option value="Bury">Bury</option>
            <option value="Cheetham_Hill">Cheetham Hill</option>
            <option value="Clayton">Clayton</option>
            <option value="Clifton">Clifton</option>
            <option value="Crumpsall">Crumpsall</option>
            <option value="Denton">Denton</option>
            <option value="Droylesden">Droylesden</option>
            <option value="Dukinfield">Dukinfield</option>
            <option value="Failsworth">Failsworth</option>
            <option value="Harpurhey">Harpurhey</option>
            <option value="Irlam">Irlam</option>
            <option value="Little_Hulton">Little Hulton</option>
            <option value="Middleton">Middleton</option>
            <option value="Miles_Platting">Miles Platting</option>
            <option value="Moston">Moston</option>
            <option value="Newton_Heath">Newton Heath</option>
            <option value="Oldham">Oldham</option>
            <option value="Openshaw">Openshaw</option>
            <option value="Pendleton">Pendleton</option>
            <option value="Pendlebury">Pendlebury</option>
            <option value="Prestwich">Prestwich</option>
            <option value="Radcliffe">Radcliffe</option>
            <option value="Salford">Salford</option>
            <option value="Swinton">Swinton</option>
            <option value="Walkden">Walkden</option>
            <option value="Whitefield">Whitefield</option>
            <option value="Worsley">Worsley</option>
        </select>
        </p>

        <p><label>Choose a Date on Friday*</label></p>
        <p><input type="date" name="user_date" class="input"/><p>
		
<?php } ?>



    <h2>Personal Information</h2>

    <p><label> Your First Name*:</label></p>
    <p><input type="text" name="firstname" class="input"/></p>

    <p><label>Your Last Name*:</label></p>
    <p><input type="text" name="lastname" class="input"/></p>

    <p><label>No. of Bags you Intend to Donate*:</label></p>
    <p><input type="text" name="bags" class="input"/></p>

    <h2>Address</h2>

    <p><label>Street an House Number/Name*:</label></p>
    <p><input type="text" name="street" class="input"/></p>

    <p><label>Postcode*:</label></p>
    <p><input type="text" name="postcode" class="input"/></p>

    <p>Contact Details (in case we need to cancel)</p>

    <p><label>Your Email*:</label></p>
    <p><input type="text" name="email" class="input"/></p>

    <p><label>Your Mobile Number*:</label></p>
    <p><input type="text" name="mobile" class="input"/></p>

    <h2>Additional Notes</h2>

    <p><label>Additional Notes:</label></p>
    <p><textarea placeholder="e.g. please knock or I am out between 8am and
 10am" rows="5" columns="60 " class="input notes" name="additionalnotes"></textarea></p>

    <p><input type="submit" value="Request Booking" class="submit"/></p>

    <p>We promise not to share your data with anyone but our collection driver, Barry :D</p>

    <?php } /* end region selected */  ?>

</form>
<div class="home_button button">
    <a href="index.html"><img src="homehouse.gif" title="Go Back to Home Page"/></a>
</div>
</body>

</html>