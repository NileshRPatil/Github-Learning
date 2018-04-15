<<<<<<< HEAD

<?php
// Important Document

********************* Important functions *********************
1) split() - jquery - split a sentence into array e.g. str.split(' ');
2)substr(string,start,length) - php - 
3)PHP - $a = 'How are you?'; if (preg_match('/are/',$a)) echo 'true';
4)
strpos() -  finds the position of the first occurrence of a string inside another string.
strrpos() - Finds the position of the last occurrence of a string inside another string (case-sensitive)
stripos() - Finds the position of the first occurrence of a string inside another string (case-insensitive)
strripos() - Finds the position of the last occurrence of a string inside another string (case-insensitive)
5)unset($arr['value']) // remove values from array
6)array_unique($your_array)// php - it removes duplicate values from array
7)array_merge($arr1,$arr2) // php - it combines two or more array into one array 
9)in_array($value, $array); // php - check value is present in Array
10)explode(" ",$str) // php - split the string into array 
11)array_chunk() //The  function splits an array into chunks of new arrays. e.g array_chunk($cars,2)
12)array_count_values() // php -  function counts all the values of an array.
13)array_diff() // php - Compare arrays, and returns the differences (compare values only)
14)error_reporting(level); level : error_reporting(E_ALL);,error_reporting(E_ERROR | E_WARNING | E_PARSE);ini_set("error_reporting", E_ALL);
15) echo phpversion(); // get php version

******************* Important Links *********************

// pagination
 
http://www.dreamtemplate.com/dreamcodes/documentation/sliders.html
	
http://www.phpeasystep.com/phptu/29.html
	
--------------------------------------------------------------------------------------------------------------

// State Cities in India 
//mysql query for state, district, city in india
  
http://questionbox.in/india-state-district-sub-district-database-in-excel-csv-and-sql-query-format/
http://www.c-sharpcorner.com/forums/sql-server-districts-table
http://www.c-sharpcorner.com/forums/india-state-city-pin-code-database-sql-file
https://www.daniweb.com/programming/databases/threads/416522/indian-state-and-its-city-database

--------------------------------------------------------------------------------------------------------------


// upload image without using formdata in jQuery

http://stackoverflow.com/questions/5392344/sending-multipart-formdata-with-jquery-ajax	

--------------------------------------------------------------------------------------------------------------

// html form with validation
http://formvalidation.io/examples/

http://www.jqueryscript.net/form/Powerful-Form-Validation-Plugin-For-jQuery-Bootstrap-3.html

https://1000hz.github.io/bootstrap-validator/#validator-fields

--------------------------------------------------------------------------------------------------------------

// softwares download 
http://en.uptodown.com/windows/internet

--------------------------------------------------------------------------------------------------------------

//jquery plugins
http://jquery-plugins.net/

--------------------------------------------------------------------------------------------------------------

// file uploader
http://filer.grandesign.md/#demos

[www.dropzonejs.com](http://www.dropzonejs.com)

--------------------------------------------------------------------------------------------------------------

// scroll 
http://enscrollplugin.com/#documentation

--------------------------------------------------------------------------------------------------------------

// photoshop tutorial

https://www.youtube.com/watch?v=x0TXU0saNtM&index=12&list=PLIr8j3Q0h3mHPSMnBiG-ZDH2Zg995-Pyd

--------------------------------------------------------------------------------------------------------------

//pagination
http://www.phpeasystep.com/phptu/29.html

// list view
http://listjs.com/

http://luis-almeida.github.io/jPages/mosaic.html

http://jplist.com/demo

//Multi Column Dropdown Box with jQuery and CSS3 
http://www.jqueryscript.net/form/Multi-Column-Dropdown-Box-with-jQuery-CSS3-Multi-Column-Select.html

// free icons
http://www.flaticon.com/packs/office-11

// toggle button 
http://www.bootstraptoggle.com/

// tool for display error log : [putty]

// data tables with server side processing
https://coderexample.com/datatable-demo-server-side-in-phpmysql-and-ajax/

// drag and drop file upload 
https://css-tricks.com/drag-and-drop-file-uploading/

// PDO Tutorial
https://phpdelusions.net/pdo

// multiple select
https://select2.github.io/examples.html
https://silviomoreto.github.io/bootstrap-select/examples/#basic-examples

// PHP mailer tutorial
https://www.sitepoint.com/sending-emails-php-phpmailer/

// mysql Tutorial
http://www.mysqltutorial.org/

https://www.techonthenet.com/mysql

//check mobile device from php
http://mobiledetect.net/

// Android Link
https://www.simplifiedcoding.net/firebase-cloud-messaging-tutorial-android/

//date picker
https://bootstrap-datepicker.readthedocs.io/en/latest/options.html

time picker
https://weareoutman.github.io/clockpicker/


******************* Important Notes *********************

Note :  after ajax call there must be RETURN FALSE otherwise it gives error [object Object];


******************* Important Tasks *********************

Calculate Age from Date of Birth in PHP
<?php  
function getAge($dob) {
  $today = date("Y-m-d");
  $diff = date_diff(date_create($dob), date_create($today));
  return $diff->format('%yYears, %mMonths, %dDays');
}
 
echo getAge('19-10-1988');
?>

--------------------------------------------------------------------------------------------------------------

// send email using PhpMailer
require("class.phpmailer.php");
require("class.smtp.php");
function sendemail($rcpt, $sub, $msg)
{
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = "mail.yarnlive.com";
    $mail->Port = 26;
    $mail->Username = "info@yarnlive.com";
    $mail->Password = "AdElE25oLLeH21";
    $mail->SetFrom('info@yarnlive.com', 'YarnLIVE');
    $mail->IsHTML(true);
    
    $mail->AddAddress($rcpt);
    $mail->Subject  = $sub;
    $mail->Body     = $msg;
    
    if(!$mail->Send()){
        $result = 0;
        $error = $mail->ErrorInfo;
    }
    else {
        $result = 1;
    }
    return $result;
}

--------------------------------------------------------------------------------------------------------------

// go to at div or set focus at div
$('html, body').animate({ scrollTop: $("#"+errors[0]+"_div").offset().top }, 500);

--------------------------------------------------------------------------------------------------------------

//refresh div 
jq("#refresh_div").load(location.href + " #refresh_div");

--------------------------------------------------------------------------------------------------------------

// change on first select box when change other select box
jq("#height").on("change",function(){
	
		var height = jq(this).val();
		
		var cm = Math.round(height/0.032808);
		
		jq("#heightincms").val(cm).attr("selected","selected");
	
});

--------------------------------------------------------------------------------------------------------------

//validation for image in JQuery

		var profilephoto = $("#profilephoto").val();
		if(profilephoto != '')
		{
			var ext = profilephoto.split('.').pop().toLowerCase();
			var fp = $("#profilephoto");
			var lg = fp[0].files.length; 
			var items = fp[0].files;
			var fragment = "";
			if (lg > 0)
			{
				for (var i = 0; i < lg; i++) {
					var fileName = items[i].name; 
					var fileSize = items[i].size; 
					var fileType = items[i].type; 
				}
			}
			
			if ($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
			
					errors.push("profilephoto");
					
			} else if(fileSize > 1000000) {
				
					errors.push("profilephoto");
				
			}else {
				
				$("#profilephoto_err").hide();
				
			}
		} else {
		
			$("#profilephoto_err").hide();
		}


--------------------------------------------------------------------------------------------------------------

generate four digit random number 

function generatePIN($digits = 4){
    $i = 0; //counter
    $pin = ""; //our default pin is blank.
    while($i < $digits){
        //generate a random number between 0 and 9.
        $pin .= mt_rand(0, 9);
        $i++;
    }
    return $pin;
}
 
//If I want a 4-digit PIN code.
$pin = generatePIN();
echo $pin, '<br>';
 
//If I want a 6-digit PIN code.
$pin = generatePIN(6);
echo $pin;


$pin = mt_rand(1000, 9999);
?>

--------------------------------------------------------------------------------------------------------------

// save image in database using BLOB MySql
$imgData =file_get_contents($_FILES['invitation_card']['tmp_name']);

$imageProperties = getimageSize($_FILES['invitation_card']['tmp_name']);
		
$objsocial->_item['invitation_img'] = $imgData;

$objsocial->_item['invitation_img_type'] = $imageProperties['mime'];

$mime = $invitation_image_type;
 
$b64Src = "data:".$mime.";base64," . base64_encode($img_path);
							 
echo '<img src="'.$b64Src.'" width="45" height="45" alt="Logo" />';

--------------------------------------------------------------------------------------------------------------

// open a new tabb in jquery

window.open('full_profile.php?user='+userid, '_blank');
---------------------------------------------------------------------------------------------------------------


9] disable right click so cant download image
$(".imagebox img").on("contextmenu",function(){
       return false;
}); 

10] desable and enable button
$(this).attr("disabled","disabled");
$(this).removeAttr("disabled");


11] count of columns from mysql
SELECT count(*)
FROM information_schema.columns
WHERE table_schema = 'uniquefi_milingayat'  
AND table_name = 'matrimoniprofiles';

12] Insert and Update query
insert into emp (id,name,lastname,dept) values('key that already exists', 'new name','new last name','Accounts') 
on duplicate KEY UPDATE  name='default name', lastname='default last name';
In the above query, if the value of "id" passed already exists, then we can update the value of the row instead of inserting a new row.
This is more useful when you need to check columns other than auto-incremented ones.

13] compare date in mysql
$currentdate = date('Y-m-d H:i:s',strtotime('-150 minutes'));
$prevdate72hrs =  date('Y-m-d H:i:s',strtotime('-3 days -1hours -30 minutes'));
"SELECT `product_id`,gcmmsg,created FROM `notifications` WHERE `created`  between '$prevdate72hrs' AND '$currentdate' ORDER BY created DESC" 

14] check radio button is checked or not
if($("input:radio[name='weight_terms']").is(":checked")) 
	
15] compate two decimal numbers
$a = 1.23456789;
$b = 1.23456780;
$epsilon = 0.00001;

if(abs($a-$b) < $epsilon) {
    echo "true";
}

16] check substring is present or not
 if (strpos($a, 'added') !== false) {
	echo true;
 }	 
 
17] check value is set or not in jquery
 if(typeof(citysle) != "undefined" && citysle !== null) {
	 echo true;
 }
 
18] drop primary key
	ALTER TABLE user_customer_permission MODIFY id INT NOT NULL;
	ALTER TABLE user_customer_permission DROP PRIMARY KEY;
19] add unique key for combination of two columns
	ALTER TABLE MyTable
	ADD UNIQUE KEY `my_unique_key` (`group_id`, `user_id`)

	ALTER TABLE cottonproductlikes

	ADD UNIQUE KEY `my_unique_key` (`buyerid`, `productid`)
	
20] Button click is not working after second page in DATATABLE
		use this event
		$('body').on('click', '.paid', function() {});
		
21] JQUERY FOR VALIDATION
			
			var profileerrors = [];
			var accounttypethree = $("#accounttypethree").val();
			if ($.trim(fname) == "") 
			{	
				profileerrors.push("fname");
				$("#fnamecorrectone").hide();
			}
			else if(!fname.match(charRegex1))
			{
				profileerrors.push("fnamecorrect");
				$("#fnameone").hide();
			}
			else
			{
				$("#fnameone").hide();
			}
			if(bankerrors.length>0)
			{
				var i, currentElem;
				for( i = 0, l = bankerrors.length; i < l; i++ ) 
				{
					currentElem = bankerrors[i];
					$("#"+currentElem+"one").show();
				}
				return false;
			}
			else
			{
				var datastring = $("#bankdetails").serialize();
				$("#profileipdate_loadingone").css('display','block');
				$.ajax({
						type:'POST',
						url:'asyUpdateMyProfile.php',
						data:datastring,
						success:function(data)
						{		
								if($.trim(data)=="Updated")
								{
										$("#profileipdate_loadingone").hide();
										$("#profileipdate_checkone").show();
										$("#profileipdate_msgone").fadeIn(500);
										$("#profileipdate_msgone").fadeOut(1000);
										setTimeout(function(){ window.location.href='/seller/admin/profile/myprofile.php' },1000);
								}
								else
								{
									
								}
						},
						error:function(data)
						{
								alert('Error occured while inserting record');
						}
				});
			}	
			return false;	
		});
		
22] at the time of comparing dates then convert date as follows
	$prevdate72hrs =  date('Y-m-d H:i:s',strtotime('-3 days -2hours -30 minutes'));		
	$currentdate = date('Y-m-d H:i:s',strtotime('-150 minutes'));
	"SELECT `product_id`,gcmmsg,created FROM `notifications` WHERE `created`  between '$prevdate72hrs' AND '$currentdate'"
	
23] User marathi fonts in php 
	header('Content-Type: text/html; charset=utf-8');
	http://stackoverflow.com/questions/4279282/set-http-header-to-utf-8-using-php
	
24] file upload using ajax
	var datastring = new FormData($(this)[0]);
	

******************* Error *********************

1) jquery is not defined
http://stackoverflow.com/questions/2194992/jquery-is-not-defined

2) how to debug jquery
 console.log(c);

=======

<?php
// Important Document

********************* Important functions *********************

// php
1) error_reporting(level); level : error_reporting(E_ALL);,error_reporting(E_ERROR | E_WARNING | E_PARSE);ini_set("error_reporting", E_ALL);
2) echo phpversion(); // get php version


// JQUERY

1) split() - jquery - split a sentence into array e.g. str.split(' ');
2)	//How do I check if string contains substring?
	if (str.indexOf("Yes") >= 0) or if (~str.indexOf("Yes"))
	
	if (str.toLowerCase().indexOf("yes") >= 0) or if (/yes/i.test(str)) // if case sensitive then




******************* Important Links *********************

// pagination
 
http://www.dreamtemplate.com/dreamcodes/documentation/sliders.html
	
http://www.phpeasystep.com/phptu/29.html
	
--------------------------------------------------------------------------------------------------------------

// State Cities in India 
//mysql query for state, district, city in india
  
http://questionbox.in/india-state-district-sub-district-database-in-excel-csv-and-sql-query-format/
http://www.c-sharpcorner.com/forums/sql-server-districts-table
http://www.c-sharpcorner.com/forums/india-state-city-pin-code-database-sql-file
https://www.daniweb.com/programming/databases/threads/416522/indian-state-and-its-city-database

--------------------------------------------------------------------------------------------------------------


// upload image without using formdata in jQuery

http://stackoverflow.com/questions/5392344/sending-multipart-formdata-with-jquery-ajax	

--------------------------------------------------------------------------------------------------------------

// html form with validation
http://formvalidation.io/examples/

http://www.jqueryscript.net/form/Powerful-Form-Validation-Plugin-For-jQuery-Bootstrap-3.html

https://1000hz.github.io/bootstrap-validator/#validator-fields

http://www.formvalidator.net/

--------------------------------------------------------------------------------------------------------------

// softwares download 
http://en.uptodown.com/windows/internet

--------------------------------------------------------------------------------------------------------------

//jquery plugins
http://jquery-plugins.net/

--------------------------------------------------------------------------------------------------------------

// file uploader
http://filer.grandesign.md/#demos

[www.dropzonejs.com](http://www.dropzonejs.com)

--------------------------------------------------------------------------------------------------------------

// scroll 
http://enscrollplugin.com/#documentation

--------------------------------------------------------------------------------------------------------------

// photoshop tutorial

https://www.youtube.com/watch?v=x0TXU0saNtM&index=12&list=PLIr8j3Q0h3mHPSMnBiG-ZDH2Zg995-Pyd

--------------------------------------------------------------------------------------------------------------

//pagination
http://www.phpeasystep.com/phptu/29.html

// list view
http://listjs.com/

http://luis-almeida.github.io/jPages/mosaic.html

http://jplist.com/demo

//Multi Column Dropdown Box with jQuery and CSS3 
http://www.jqueryscript.net/form/Multi-Column-Dropdown-Box-with-jQuery-CSS3-Multi-Column-Select.html

// free icons
http://www.flaticon.com/packs/office-11

// toggle button 
http://www.bootstraptoggle.com/

// tool for display error log : [putty]

// data tables with server side processing
https://coderexample.com/datatable-demo-server-side-in-phpmysql-and-ajax/

// drag and drop file upload 
https://css-tricks.com/drag-and-drop-file-uploading/

// PDO Tutorial
https://phpdelusions.net/pdo

// multiple select
https://select2.github.io/examples.html
https://silviomoreto.github.io/bootstrap-select/examples/#basic-examples
http://www.jqueryscript.net/demo/jQuery-Multiple-Select-Plugin-For-Bootstrap-Bootstrap-Multiselect/

// PHP mailer tutorial
https://www.sitepoint.com/sending-emails-php-phpmailer/

// mysql Tutorial
http://www.mysqltutorial.org/

https://www.techonthenet.com/mysql

//check mobile device from php
http://mobiledetect.net/

// Android Link
https://www.simplifiedcoding.net/firebase-cloud-messaging-tutorial-android/

//date picker
https://bootstrap-datepicker.readthedocs.io/en/latest/options.html

//time picker
https://weareoutman.github.io/clockpicker/

//date range picker
http://www.daterangepicker.com/

// share on social media

http://tools.sharethis.com/account/
username nileshrpatil1811@gmail.com
password nilesh3832

<span class='st_sharethis_large' displayText='ShareThis'></span>
<span class='st_facebook_large' displayText='Facebook'></span>
<span class='st_email_large' displayText='Email'></span>
<span class='st_twitter_large' displayText='Tweet'></span>
<span class='st_googleplus_large' displayText='Google +'></span>
<span class='st_whatsapp_large' displayText='WhatsApp'></span>

copy the script tags and place them inside and at the end of your "head" tag.

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" id="st_insights_js" src="http://w.sharethis.com/button/buttons.js?publisher=0e84febd-8ba4-45ca-a323-dec6594ad488"></script>
<script type="text/javascript">stLight.options({publisher: "0e84febd-8ba4-45ca-a323-dec6594ad488", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

// hover effects
http://www.queness.com/post/16216/create-different-styles-of-hover-effects-with-css3-only

// alert
http://bootboxjs.com/examples.html

http://alfredobarron.github.io/smoke/#/

//resize image
http://www.9lessons.info/2009/03/upload-and-resize-image-with-php.html#surveyGridOne

// multi steps form
https://www.thesoftwareguy.in/creating-responsive-multi-step-form-bootstrap-jquery/

// facebook api
https://www.youtube.com/watch?v=P9ktjGNeAzg&list=PLmpuiTmSb3xCLwwkpXeuJxwKyljf7e3Tx 

https://www.youtube.com/watch?v=gNFQkVeOXa0

sohaib ilyas github

// Instagram API
https://elfsight.com/blog/2016/05/how-to-get-instagram-access-token/

get access token/  https://www.instagram.com/oauth/authorize/?client_id=CLIENT_ID&redirect_uri=REDIRECT_URI&response_type=token

//Social media share
https://www.addthis.com/academy/setting-the-url-title-to-share/

https://www.addtoany.com/buttons/customize/https://www.addtoany.com/buttons/customize/

// PHP Tutorial
http://www.codexworld.com

// Regular expressions
https://www.regex101.com

// android Tutorial
http://sampleprogramz.com/

// Cronjob Setting
http://www.thegeekstuff.com/2009/06/15-practical-crontab-examples

http://crontab-generator.org/

// Import Database From CSV file to MySql
sqlilser.co.in

// code igniter tutorial
https://www.youtube.com/watch?v=c_eROQKnkfc&list=PLHFGzOr0F8DI5IBxWWzHvdUL_HmWUAqg2&index=46

// HTML material design
https://getmdl.io/components/index.html#textfields-section
http://materializecss.com/forms.html

// Jquery Plugins
http://www.jqueryrain.com/demo/jquery-autocomplete/

//bootstrap notify
http://bootstrap-notify.remabledesigns.com/


******************* Important Notes *********************

Note :  after ajax call there must be RETURN FALSE otherwise it gives error [object Object];


******************* New Concepts *********************
1]  Tinymcr text editor	


******************* Error *********************

1) //jquery is not defined
http://stackoverflow.com/questions/2194992/jquery-is-not-defined

2) how to debug jquery
 console.log(c);

3) PHP 
//  http://stackoverflow.com/questions/4314392/send-parameters-to-a-url-and-get-output-from-that-page
>>>>>>> 184f49c3c90c3f940549c8d0a457811be86dc141
