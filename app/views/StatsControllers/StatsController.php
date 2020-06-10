<?php
function GetColumnsEvent(){
    return ['Success','Suicide','Attack-Type'];
}
$event_columns=GetColumnsEvent();

function GetColumnsTime(){
    return ['Year','Month','Day', 'Duration'];
}
$time_columns=GetColumnsTime();

function GetColumnsLocation(){
    return ['Country','Country-Code','Region','Provence','City','Corp'];
}
$location_columns=GetColumnsLocation();

function GetColumnsTargetDetails(){
    return ['Target-type','Target-subtype','Target','Target-Nationality'];
}
$target_columns=GetColumnsTargetDetails();

function GetColumnsAttackerDetails(){
    return ['Group-name', 'Group-subname','Gun-certain','Terrorists-number','Claim','Claim-Mode'];
}
$attacker_columns=GetColumnsAttackerDetails();

function GetWeaponDetails(){
    return ['Weapon-type','Weapon-subtype'];
}
$weapons_columns=GetWeaponDetails();

function GetDeathsDetails(){
    return ['Total-fatalities','U.S.-Citizens-who-died'];
}
$deaths_columns=GetDeathsDetails();

function GetAllColumns(){
    return['Event ID','Summary','Success','Suicide','Attack Type','Tactics','Year','Month','Day','Approximate Date','Duration',
    'Country','Country Code','Region','Provence','City','Latitude','Longitude','Corp',
    'Target type','Target subtype','Target','Target Nationality','Group name', 'Group subname','Motive','Gun certain','Terrorists number','Claim','Claim Mode',
    'Weapon type','Weapon subtype', 'Weapon details','Total fatalities','U.S. Citizens who died'];
}
$all_columns=GetAllColumns();

function GetVisualisationType() {
    return ['Table','Map','Pie chart','Vertical bars chart', 'Horizontal bars chart', 'Bubbles chart', 'Doughnut Chart'];
}
$view_type=GetVisualisationType();

function GetStates() {
    return ['Afghanistan','Albania','Algeria','Andorra','Angola','Antigua and Barbuda','Argentina','Armenia','Australia','Austria','Azerbaijan','Bahamas',
'Bahrain','Bangladesh','Barbados','Belarus','Belgium','Belize','Benin','Bhutan','Bolivia','Bosnia and Herzegovina','Botswana','Brazil','Brunei','Bulgaria',
'Burkina Faso','Burundi','Cambodia','Cameroon','Canada','Cape Verde','Central African Republic','Chad','Chile','China','Colombi','Comoros','Congo (Brazzaville)','Costa Rica',
'Cote d Ivoire','Croatia','Cuba','Cyprus','Czech Republic','Denmark','Djibouti','Dominica','Dominican Republic','East Timor (Timor Timur)','Ecuador','Egypt',
'El Salvador','Equatorial Guinea','Eritrea','Estonia','Ethiopia','Fiji','Finland','France','Gabon','Gambia','Georgia','Germany','Ghana','Greece','Grenada',
'Guatemala','Guinea','Guinea-Bissau','Guyana','Haiti','Honduras','Hungary','Iceland','India','Indonesia','Iran','Iraq','Ireland','Israel','Italy','Jamaica',
'Japan','Jordan','Kazakhstan','Kenya','Kiribati','North Korea','South Korea','Kuwait','Kyrgyzstan','Laos','Latvia','Lebanon','Lesotho','Liberia','Libya',
'Liechtenstein','Lithuania','Luxembourg','Macedonia','Madagascar','Malawi','Malaysia','Maldives','Mali','Malta','Marshall Islands','Mauritania','Mauritius',
'Mexico','Micronesia','Moldova','Monaco','Mongolia','Morocco','Mozambique','Myanmar','Namibia','Nauru','Nepal','Netherlands','New Zealand','Nicaragua','Niger',
'Nigeria','Norway','Oman','Pakistan','Palau','Panama','Papua New Guinea','Paraguay','Peru','Philippines','Poland','Portugal','Qatar','Romania','Russia',
'Rwanda','Saint Kitts and Nevis','Saint Lucia','Saint Vincent','Samoa','San Marino','Sao Tome and Principe','Saudi Arabia','Senegal','Serbia and Montenegro','Seychelles',
'Sierra Leone','Singapore','Slovakia','Slovenia','Solomon Islands','Somalia','South Africa','Spain','Sri Lanka','Sudan','Suriname','Swaziland','Sweden',
'Switzerland','Syria','Taiwan','Tajikistan','Tanzania','Thailand','Togo','Tonga','Trinidad and Tobago','Tunisia','Turkey','Turkmenistan','Tuvalu','Uganda',
'Ukraine','United Arab Emirates','United Kingdom','United States','Uruguay','Uzbekistan','Vanuatu','Vatican City','Venezuela','Vietnam','Yemen','Zambia',
'Zimbabwe'];
}
$states=GetStates();

function GetRegions() {
    return ['Eastern Africa', 'Middle Africa', 'Northern Africa', 'Southern Africa', 'Western Africa', 'The Caribbean','Central America', 'South America', 'Northern America', 
'Asia','Europe','European Union','Middle East','Oceania'];
}
$regions=GetRegions();
?>