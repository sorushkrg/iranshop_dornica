<?php 
//require_once('../../checklogin.php'); 

function cvt_arraytostrquots($arrinput){
		$arrinput = explode(',',$arrinput);
		$b=",";
		foreach($arrinput as $arsh){
			$shahrestans.=$b."'".$arsh."'";
		}
		$shahrestans=ltrim($shahrestans,",");

		return _ktx($shahrestans);
}
function kaneksstatus($input)
{
	switch($input)
	{
	case 1 : return "دریافت شده";break;
	case 2 : return "دریافت نشده";break;
	case 0 : return "نامشخص";break;
	default : return "نامشخص";break;
	}
}

//////////////////////////////////////////////////////////////////////////////

function convertlogtable($input)
{
	if($input=='parvande') return 'پرونده متقاضی';
	else if($input=='hadese_file') return 'پیوست فایل ها';
	else if($input=='parvandepelak') return 'پلاک ثبتی';
	else if($input=='parvandehesab') return 'شماره حساب';
	else if($input=='khanevar') return 'مشخصات مالک';
	else if($input=='parvande_changebc') return 'انتقال موقعیت مکانی';
	else if($input=='tashilat') return 'تسهیلات متقاضی';
	else if($input=='pishraft') return 'پیشرفت فیزیکی';
	else if($input=='parvande_ekhtar') return 'صدور اخطار';
	else if($input=='request_remove') return 'درخواست حذف متقاضی';
	else if($input=='parvande_lock') return 'قفل پرونده متقاضی';
	else if($input=='parvande_buildingm') return 'مصالح  به کار رفته در اجزای ساختمان';
	else if($input=='gps') return 'موقعیت مکانی';
	else if($input=='tashilat_formb') return 'فرم ب تسهیلات';
	else if($input=='tashilat_forma') return 'فرم الف تسهیلات';
	else if($input=='parvande_exeption') return 'استثنائات پرونده';
	else if($input=='parvande_phloc') return 'موقعیت فیزیکی پرونده';
	else if($input=='tashilat_tafahomnameh') return 'فرم تفاهم نامه';
	else if($input=='tashilat_renewmosharekatreq') return 'تمدید دوران مشارکت';
	else if($input=='suratvaziat') return 'صورت وضعیت';
	else if($input=='tashilat_changemablaghreq') return 'درخواست تغییر مبلغ تسهیلات';
}


//////////////////////////////////////////////////////////////////////////////


function checkstatus($input, $type="")
{
	if($type == 'admin'){
		switch($input)
		{
		case 0 : echo "غیرفعال";break;
		case 1 : echo "فعال";break;
		case 2 : echo "بایگانی";break;
		default : echo "نامشخص";break;
		}
	}
	
	else{
		switch($input)
		{
		case 0 : echo "غیرفعال";break;
		case 1 : echo "فعال";break;
		default : echo "نامشخص";break;
		}
	}
}


//////////////////////////////////////////////////////////////////////////////


function convertenN($input)
{
    $unicode = array('۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹');
    $english = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');

    $string = str_replace($unicode, $english , $input);

    return $string;
}


function checkspectype($input)
{
	switch($input)
	{
	case 0 : echo "معمولی";break;
	case 1 : echo "ویژه";break;
	default : echo "";break;
	}
}



//////////////////////////////////////////////////////////////////////////////



function checkkhstatus($input)
{
	switch($input)
	{
	case 0 : echo "فوت شده";break;
	case 1 : echo "زنده";break;
	default : echo "نامشخص";break;
	}
}



//////////////////////////////////////////////////////////////////////////////



function checksuratvaziatstatus($input)
{
	switch($input)
	{
	case 0 : return "<span class='badge badge-danger'>غیرفعال</span>";break;
	case 1 : return "<span class='badge badge-success'>فعال</span>";break;
	case 2 : return "<span class='badge badge-warning'>لغوشده</span>";break;
	default : return "<span class='badge badge-default'>نامشخص</span>";break;
	}
}



//////////////////////////////////////////////////////////////////////////////



function tfstatus($input)
{
	switch($input)
	{
	case 0 : echo "ندارد";break;
	case 1 : echo "دارد";break;
	default : echo "نامشخص";break;
	}
}



//////////////////////////////////////////////////////////////////////////////



function checkserialstatus($input)
{
	switch($input)
	{
	case 0 : echo "<span style='color:#990000;'>فروخته نشده</span>";break;
	case 1 : echo "<span style='color:#006600;'>فروخته شده</span>";break;
	default : echo "<span style='color:#990000;'>نامشخص</span>";break;
	}
}


function checktchangereq($input)
{
	switch($input)
	{
	case 0 : echo " بررسی نشده";break;
	case 1 : echo " تائید";break;
	case 2 : echo " عدم تائید";break;
	default : echo "";break;
	}
}

//////////////////////////////////////////////////////////////////////////////



function checkgender($input)
{
	switch($input)
	{
	case 0 : return "نامشخص";break;
	case 1 : return "مرد";break;
	case 2 : return "زن";break;
	default : return "نامشخص";break;
	}
}



//////////////////////////////////////////////////////////////////////////////



function blocktype($input)
{
	switch($input)
	{
	case 0 : return "متنی";break;
	case 1 : return "مطالب";break;
	case 2 : return "تصاویر";break;
	case 3 : return "گروه مطالب";break;
	case 4 : return "گروه تصاویر";break;
	case 5 : return "لینک ها";break;
	case 6 : return "تبلیغات";break;
	case 7 : return "اسلایدشو";break;
	case 8 : return "ماژول";break;
	case 9 : return "منو";break;
	case 10 : return "نظرسنجی";break;
	default : return "نامشخص";break;
	}
}



//////////////////////////////////////////////////////////////////////////////



function blockalign($input)
{
	switch($input)
	{
	case 1 : return "راست";break;
	case 2 : return "چپ";break;
	case 3 : return "وسط";break;
	case 4 : return "بالا";break;
	case 5 : return "پایین";break;
	case 6 : return "راست فرعی";break;
	case 7 : return "چپ فرعی";break;
	default : return "نامشخص";break;
	}
}



//////////////////////////////////////////////////////////////////////////////




function blocknoetype($input)
{
	switch($input)
	{
	case 1 : echo "اصلی";break;
	case 2 : echo "فرعی";break;
	default : echo "نامشخص";break;
	}
}



//////////////////////////////////////////////////////////////////////////////



function checkdoretype($input)
{
	switch($input)
	{
	case 1 : return "خدمات";break;
	case 2 : return "معرفی نامه";break;
	default : return "نامشخص";break;
	}
}



//////////////////////////////////////////////////////////////////////////////



function komitetype($input)
{
	switch($input)
	{
	case 1 : echo "کمیته";break;
	case 2 : echo "سایر";break;
	default : echo "نامشخص";break;
	}
}



//////////////////////////////////////////////////////////////////////////////



function checkbedehistatus($input)
{
	switch($input)
	{
	case 0 : return "پرداخت نشده";break;
	case 1 : return "پرداخت شده";break;
	default : return "نامشخص";break;
	}
}



//////////////////////////////////////////////////////////////////////////////



function paymentcheckstatus($input)
{
	switch($input)
	{
	case 0 : echo "پرداخت نشده";break;
	case 1 : echo "پرداخت موفق";break;
	case 2 : echo "پرداخت ناموفق";break;
	case 9 : echo "بررسی نشده";break;
	default : echo "نامشخص";break;
	}
}



//////////////////////////////////////////////////////////////////////////////



function smssendstatus($input)
{
	switch($input)
	{
	case 0 : echo "نام کاربری و رمز عبور صحیح نمی باشد .";break;
	case 1 : echo "ارسال موفق";break;
	case 2 : echo "اعتبار کافی نمی باشد";break;
	case 3 : echo "محدودیت ارسال روزانه";break;
	case 4 : echo "محدودیت در حجم ارسال";break;
	case 5 : echo "شماره فرستنده معتبر نیست";break;
	case 6 : echo "سامانه در حال به روز رسانی می باشد";break;
	case 7 : echo "متن پیامک شما شامل حروف فیلتر شده می باشد";break;
	case 8 : echo "عدم رسیدن متن به حداقل ارسال";break;
	case 9 : echo "ارسال از خطوط عمومی از طریق وب سرویس مقدور نمی باشد";break;
	case 10 : echo "کاربر مسدود شده است";break;
	case 11 : echo "ارسال نا موفق";break;
	default : echo "ارسال موفق";break;
	}
}



//////////////////////////////////////////////////////////////////////////////



function smsdeliverystatus($input)
{
	switch($input)
	{
	case 0 : echo "ارسال شده به مخابرات";break;
	case 1 : echo "رسیده به تلفن همراه";break;
	case 2 : echo "نرسیده به تلفن همراه";break;
	case 3 : echo "خطای مخابراتی";break;
	case 5 : echo "خطای نا مشخص";break;
	case 8 : echo "رسیده به مخابرات";break;
	case 16 : echo "نرسیده به مخابرات";break;
	case 100 : echo "نامشخص";break;
	default : echo "نامشخص";break;
	}
}


//////////////////////////////////////////////////////////////////////////////
function encrypt($data, $key){

    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    $encrypted = openssl_encrypt($data, 'aes-256-cbc', str_pad($key, 32, "\0"), 0, $iv);
    $finaldata = base64_encode($encrypted . '::' . $iv);
    
    
    
    
//   $finaldata=  base64_encode(
//     mcrypt_encrypt(
//         MCRYPT_RIJNDAEL_128,
//         str_pad($key, 32, "\0"),
//         $data,
//         MCRYPT_MODE_ECB,
//         "\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0"
//     )
//   );
  
  $finaldata = str_replace("=","!!",$finaldata);
  $finaldata = str_replace("+","@@",$finaldata);
  $finaldata = str_replace("/","$$",$finaldata);
  $finaldata = strrev($finaldata);
  
  return $finaldata;
}
//////////////////////////////////////////////////////////////////////////////
function decrypt($data, $key){
   $data = strrev($data);
  $data = str_replace("!!","=",$data);
  $data = str_replace("@@","+",$data);
  $data = str_replace("$$","/",$data);
    $decode = base64_decode($data);
  
  list($encrypted_data, $iv) = explode('::', base64_decode($data), 2);
  return openssl_decrypt($encrypted_data, 'aes-256-cbc', str_pad($key, 32, "\0"), 0, $iv);
  
    return mcrypt_decrypt(
                    MCRYPT_RIJNDAEL_128,
                    str_pad($key, 32, "\0"),
                    $decode,
                    MCRYPT_MODE_ECB,
                    "\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0"
            );
}
//////////////////////////////////////////////////////////////////////////////



function checknewstatus($input)
{
	switch($input)
	{
	case 0 : echo "غیرفعال";break;
	case 1 : echo "فعال";break;
	case 2 : echo "در حال بررسی";break;
	case 3 : echo "پیش نویس";break;
	default : echo "نامشخص";break;
	}
}

 

//////////////////////////////////////////////////////////////////////////////



function checkgallerytype($input)
{
	switch($input)
	{
	case 1 : echo "عکس";break;
	case 2 : echo "فیلم";break;
	case 3 : echo "صوت";break;
	default : echo "";break;
	}
}

 


 

//////////////////////////////////////////////////////////////////////////////



function checkadvertisetype($input)
{
	switch($input)
	{
	case 1 : echo "فلش";break;
	case 2 : echo "عکس";break;
	default : echo "";break;
	}
}

 

//////////////////////////////////////////////////////////////////////////////



function checkselecttype($input)
{
	switch($input)
	{
	case 1 : echo "تک انتخابی";break;
	case 2 : echo "چند انتخابی";break;
	default : echo "";break;
	}
}

 

//////////////////////////////////////////////////////////////////////////////



function checkmemtype($input)
{
	switch($input)
	{
	case 0 : echo "همه";break;
	case 1 : echo "اعضاء";break;
	default : echo "";break;
	}
}

 

//////////////////////////////////////////////////////////////////////////////



function checktype($input)
{
	switch($input)
	{
	case 0 : echo "اصلی";break;
	case 1 : echo "فرعی";break;
	default : echo "نامشخص";break;
	}
}

 

//////////////////////////////////////////////////////////////////////////////



function checkexamtype($input)
{
	switch($input)
	{
	case 1 : echo "تصادفی";break;
	case 2 : echo "انتخابی";break;
	default : echo "نامشخص";break;
	}
}

 

//////////////////////////////////////////////////////////////////////////////



function checkread($input)
{
	switch($input)
	{
		case 0 : echo "خوانده نشده";break;
		case 1 : echo "خوانده شده";break;
		default : echo "نامشخص";break;
	}
}

 

//////////////////////////////////////////////////////////////////////////////



function checkstock($input)
{
	switch($input)
	{
		case 1 : echo "عدد";break;
		case 2 : echo "لیتر";break;
		case 3 : echo "بشکه";break;
		case 4 : echo "گرم";break;
		case 5 : echo "کیلوگرم";break;
		case 6 : echo "تن";break;
		default : echo "نامشخص";break;
	}
}

 

//////////////////////////////////////////////////////////////////////////////



function checkmenucat($input,$type)
{
	if($type=='n') {
		switch($input)
		{
			case 1 : echo "صفحات";break;
			case 2 : echo "مطالب";break;
			case 3 : echo "تصاویر";break;
			case 4 : echo "خدمات";break;
			case 5 : echo "محصولات";break;
			default : echo "نامشخص";break;
		}
	}
	else if($type=='t') {
		switch($input)
		{
			case 1 : echo "page";break;
			case 2 : echo "contents";break;
			case 3 : echo "gallery";break;
			case 4 : echo "services";break;
			case 5 : echo "products";break;
			default : echo "نامشخص";break;
		}
	}
}

 

//////////////////////////////////////////////////////////////////////////////



function calendartype($input)
{
	switch($input)
	{
		case 1 : echo "شمسی";break;
		case 2 : echo "میلادی";break;
		case 3 : echo "قمری";break;
		default : echo "نامشخص";break;
	}
}

 

//////////////////////////////////////////////////////////////////////////////



function eventtype($input)
{
	switch($input)
	{
		case 1 : echo "ملی";break;
		case 2 : echo "مذهبی";break;
		case 3 : echo "تاریخی";break;
		case 4 : echo "فرهنگی";break;
		case 5 : echo "جهانی";break;
		case 6 : echo "عمومی";break;
		default : echo "نامشخص";break;
	}
}

 

//////////////////////////////////////////////////////////////////////////////



function checkprojectplace($input)
{
	switch($input)
	{
		case 1 : echo "نظام مهندسی";break;
		case 2 : echo "سازمان کاردانی";break;
		default : echo "";break;
	}
}

 

//////////////////////////////////////////////////////////////////////////////



function hijrimonthname($input)
{
	switch($input)
	{
		case 1 : echo "محرم";break;
		case 2 : echo "صفر";break;
		case 3 : echo "ربيع الاول";break;
		case 4 : echo "ربيع الثاني";break;
		case 5 : echo "جمادي الاولي";break;
		case 6 : echo "جمادي الثانيه";break;
		case 7 : echo "رجب";break;
		case 8 : echo "شعبان";break;
		case 9 : echo "رمضان";break;
		case 10 : echo "شوال";break;
		case 11 : echo "ذوالقعده";break;
		case 12 : echo "ذوالحجه";break;
		default : echo "نامشخص";break;
	}
}

 

//////////////////////////////////////////////////////////////////////////////



function FileSizeConvert($bytes)
{
    $bytes = floatval($bytes);
        $arBytes = array(
            0 => array(
                "UNIT" => "TB",
                "VALUE" => pow(1024, 4)
            ),
            1 => array(
                "UNIT" => "GB",
                "VALUE" => pow(1024, 3)
            ),
            2 => array(
                "UNIT" => "MB",
                "VALUE" => pow(1024, 2)
            ),
            3 => array(
                "UNIT" => "KB",
                "VALUE" => 1024
            ),
            4 => array(
                "UNIT" => "B",
                "VALUE" => 1
            ),
        );

    foreach($arBytes as $arItem)
    {
        if($bytes >= $arItem["VALUE"])
        {
            $result = $bytes / $arItem["VALUE"];
            $result = str_replace(".", "," , strval(round($result, 2)))." ".$arItem["UNIT"];
            break;
        }
    }
    return $result;
}

 

//////////////////////////////////////////////////////////////////////////////



function sepratenumber($str)
{
	$str=round($str,0);
	if(substr($str , 0,1)=='-')
	{
		$str=abs($str);
		$number .="-";
	}
	
	$cc=strlen($str)%3;
	
	if($cc==2)
		$cc+=2;
	elseif($cc==1)
		$cc++;
	
	
	for($i=0;$i<strlen($str);$i++)
	{
		$cc++;
		$number .= substr($str , $i,1);
		if($str<0 and $i<3 and $cc%3==0)
		$cc--;
		if($cc%3==0 and $i<strlen($str)-1)
		$number .= ",";
	}
	
	return _ktx($number);
}


//////////////////////////////////////////////////////////////////////////////


function checkrepdatastatus($input)
{
	switch($input)
	{
		case 0 : echo "ثبت موقت"; break;
		case 1 : echo "تائید شده"; break;
		case 2 : echo "تائید نشده"; break;
		default : echo "";break;
	}
}


//////////////////////////////////////////////////////////////////////////////////
function bankstate($input)
{
    switch($input)
    {
        case 0 : return "لغو قرارداد";break;
        case 1 : return "معرفی";break;
        case 2 : return "انعقاد قرارداد";break;
        default : return "نامشخص";break;
    }
}
////////////////////////////////////////////////////////////////////////////////

function checkdarsad($input)
{
	switch($input)
	{
	case 0 : return "0%";break;
	case 1 : return "1 تا 30%";break;
	case 2 : return "31 تا 60%";break;
	case 3 : return "61 تا 99%";break;
	case 4 : return "100%";break;
	default : return "نامشخص";break;
	}
}


//////////////////////////////////////////////////////////////////////////////


function checknoekhesarat($input)
{
	switch($input)
	{
	case 1 : echo "وارده به بنا";break;
	case 2 : echo "وارده به شیروانی";break;
	case 3 : echo "وارده به محوطه و تاسیسات";break;
	case 4 : echo "وارده به لوازم";break;
	default : echo "نامشخص";break;
	}
}


//////////////////////////////////////////////////////////////////////////////


function tashilatstatus($input , $type="0")
{
	if($type=="1")
	{
		switch($input)
		{
		case 2 : return "<span data-popup='tooltip' data-original-title='وضعیت تسهیلات' class='badge badge-info'>معرفی به بانک</span>";break;
		case 1 : return "<span data-popup='tooltip' data-original-title='وضعیت تسهیلات' class='badge badge-success'>انعقاد قرارداد</span>";break;
		case 0 : return "<span data-popup='tooltip' data-original-title='وضعیت تسهیلات' class='badge badge-danger'>لغو قرارداد</span>";break;
		case 3 : return "<span data-popup='tooltip' data-original-title='وضعیت تسهیلات' class='badge badge-warning'>لغو معرفی</span>";break;
		default : return "<span data-popup='tooltip' data-original-title='وضعیت تسهیلات' class='badge badge-default'>نامشخص</span>";break;
		}
	}
	else{
		switch($input)
		{
		case 2 : return "معرفی به بانک";break;
		case 1 : return "انعقاد قرارداد";break;
		case 0 : return "لغو قرارداد";break;
		case 3 : return "لغو معرفی";break;
		default : return "نامشخص";break;
		}
	}

	
}

function taghsitstatus($input , $type="0")
{
	if($type=="1")
	{
		switch($input)
		{
		case 1 : return '<span class="badge badge-success">تقسیط شده</span>';break;
		case 0 : return '<span class="badge badge-danger">تقسیط نشده</span>';break;
		default : return '<span class="badge badge-danger">تقسیط نشده</span>';break;
		}
	}
	else{
		switch($input)
		{
		case 1 : return "تقسیط شده";break;
		case 0 : return "تقسیط نشده";break;
		default : return "تقسیط نشده";break;
		}
	}

	
}

//////////////////////////////////////////////////////////////////////////////


function moteghazinesbat($status)
{
	switch($status)
	{
	case 1: echo "وام گیرنده";break;
	case 2: echo "همسر";break;
	case 3: echo "پسر";break;
	case 4: echo "دختر";break;
	case 5: echo "پدر";break;
	case 6: echo "مادر";break;
	case 7: echo "برادر";break;
	case 8: echo "خواهر";break;
	default:echo "نا مشخص";break;
	}
}


//////////////////////////////////////////////////////////////////////////////


function moteghazisokonat($status)
{
	switch($status)
	{
	case 1: echo "مالک";break;
	case 2: echo "مستاجر";break;
	default:echo "نا مشخص";break;
	}
}


//////////////////////////////////////////////////////////////////////////////


function melktabaghe($status)
{
	switch($status)
	{
	case -1: echo "زیر زمین";break;
	case 0: echo "همکف";break;
	case 1: echo "طبقه اول";break;
	case 2: echo "طبقه دوم";break;
	case 3: echo "طبقه سوم";break;
	case 4: echo "طبقه چهارم";break;
	case 5: echo "طبقه پنجم";break;
	case 6: echo "طبقه ششم";break;
	case 7: echo "طبقه هفتم";break;
	case 8: echo "طبقه هشتم";break;
	case 9: echo "طبقه نهم";break;
	case 10: echo "طبقه دهم";break;
	default:echo "نا مشخص";break;
	}
}


//////////////////////////////////////////////////////////////////////////////


function checkmojavez($input)
{
	switch($input)
	{
	case 1 : echo "دارد";break;
	case 0 : echo "ندارد";break;
	default : echo "نامشخص";break;
	}
}


//////////////////////////////////////////////////////////////////////////////


function checksokonat($input)
{
	switch($input)
	{
	case 1 : echo "دائمی";break;
	case 2 : echo "فصلی";break;
	default : echo "نامشخص";break;
	}
}


//////////////////////////////////////////////////////////////////////////////


function checkmalekiyat($input)
{
	switch($input)
	{
	case 1 : echo "سند رسمی";break;
	case 2 : echo "قول نامه";break;
	case 3 : echo "وقفی";break;
	case 4 : echo "استیجاری";break;
	case 5 : echo "سایر";break;
	default : echo "نامشخص";break;
	}
}


//////////////////////////////////////////////////////////////////////////////


function checkgholname($input)
{
	switch($input)
	{
	case 1 : echo "وجود دارد";break;
	case 0 : echo "وجود ندارد";break;
	default : echo "نامشخص";break;
	}
}


//////////////////////////////////////////////////////////////////////////////


function checkeskan($input)
{
	switch($input)
	{
	case 0 : echo "هیچکدام";break;
	case 1 : echo " امکان برپایی اسکان موقت در محوطه محل سکونت قبلی وجود دارد";break;
	case 2 : echo " ناچار به سکونت در اردوگاه";break;
	case 3 : echo "علاقمند به سکونت در اردوگاه";break;
	default : echo "نامشخص";break;
	}
}


//////////////////////////////////////////////////////////////////////////////


function checkdastresy($input)
{
	switch($input)
	{
	case 1 : echo "وجود دارد";break;
	case 0 : echo "وجود ندارد";break;
	default : echo "نامشخص";break;
	}
}


//////////////////////////////////////////////////////////////////////////////


function checkmojaver($input)
{
	switch($input)
	{
	case 1 : return "دارد";break;
	case 0 : return "-";break;
	default : return "نامشخص";break;
	}
}


//////////////////////////////////////////////////////////////////////////////


function checktasarof($input, $type)
{
	if($type=="1")
	{
		switch($input)
		{
		case 1 : echo "<span class='badge badge-success'>مالک</span>";break;
		case 2 : echo "<span class='badge badge-danger'>مستاجر</span>";break;
		case 3 : echo "<span class='badge badge-info'>سرقفلی</span>";break;
		default : echo "<span class='badge badge-default'>نامشخص</span>";break;
		}
	}
	else{
		switch($input)
		{
		case 1 : echo "مالک";break;
		case 2 : echo "مستاجر";break;
		case 3 : echo "سرقفلی";break;
		default : echo "نامشخص";break;
		}
	}
}

////////////////////////////////////////////////////////////////////////////////////

function checktasarofreturn($input, $type)
{
    if($type=="1")
    {
        switch($input)
        {
            case 1 : return "<span class='badge badge-success'>مالک</span>";break;
            case 2 : return "<span class='badge badge-danger'>مستاجر</span>";break;
            case 3 : return "<span class='badge badge-info'>سرقفلی</span>";break;
            default : return "<span class='badge badge-default'>نامشخص</span>";break;
        }
    }
    else{
        switch($input)
        {
            case 1 : return "مالک";break;
            case 2 : return "مستاجر";break;
            case 3 : return "سرقفلی";break;
            default : return "نامشخص";break;
        }
    }
}


//////////////////////////////////////////////////////////////////////////////


function checktabaghe($input)
{
	switch($input)
	{
	case -1 : echo "زیر زمین";break;
	case 0 : echo "همکف";break;
	case 1 : echo "طبقه اول";break;
	case 2 : echo "طبفه دوم";break;
	case 3 : echo "طبقه سوم";break;
	case 4 : echo "طبقه چهارم";break;
	case 5 : echo "طبقه پنجم";break;
	case 6 : echo "طبقه ششم";break;
	case 7 : echo "طبقه هفتم";break;
	case 8 : echo "طبقه هشتم";break;
	case 9 : echo "طبقه نهم";break;
	case 10 : echo "طبقه دهم";break;
	default : echo "نامشخص";break;
	}
}


//////////////////////////////////////////////////////////////////////////////


function checktashilat($input)
{
	switch($input)
	{
	case 0 : echo "همه";break;
	case 1 : echo "قرض الحسنه";break;
	case 2 : echo "حوادث";break;
	case 3 : echo "بلاعوض";break;
	default : echo "نامشخص";break;
	}
}



function checktahkhes($input)
{
	switch($input)
	{
	case 0 : echo "همه";break;
	case 1 : echo "احداثی";break;
	case 2 : echo "تعمیری";break;
	case 3 : echo "معیشتی";break;
	default : echo "نامشخص";break;
	}
}
//////////////////////////////////////////////////////////////////////////////


function checkavar($input)
{
	switch($input)
	{
	case 1 : echo "دارد";break;
	case 0 : echo "ندارد";break;
	default : echo "نامشخص";break;
	}
}


//////////////////////////////////////////////////////////////////////////////


function checkshoro($input)
{
	switch($input)
	{
	case 1 : echo " می تواند شروع شود";break;
	case 0 : echo " نیاز به اقدامات ویژه دارد";break;
	default : echo "نامشخص";break;
	}
}


//////////////////////////////////////////////////////////////////////////////


function checkmelkmogh($input)
{
	switch($input)
	{
	case 1 : return "مقاوم";break;
	case 0 : return "غیرمقاوم";break;
	default : return "نامشخص";break;
	}
}


//////////////////////////////////////////////////////////////////////////////


function chechkarbari($input)
{
	switch($input)
	{
	case 1 : echo "مسکونی";break;
	case 2 : echo "تجاری";break;
	case 3 : echo "تجاری مسکونی";break;
	case 4 : echo "خدماتی";break;
	case 5 : echo "مذهبی";break;
	case 6 : echo "اداری";break;
	default : echo "نامشخص";break;
	}
}





//////////////////////////////////////////////////////////////////////////////


function checkstatusattachtype($input)
{
	switch($input)
	{
	case 1 : echo "جهت نمایش در تسهیلات";break;
	case 2 : echo "الزامی در تسهیلات";break;
	default : echo "";break;
	}
}


//////////////////////////////////////////////////////////////////////////////


function moteghazistatus($input)
{
	switch($input)
	{
	case 2 : return "<span class='badge badge-default'>بررسی اولیه</span>";break;
	case 1 : return "<span class='badge badge-success'>تائید شده</span>";break;
	case 0 : return "<span class='badge badge-danger'>تائید نشده</span>";break;
	case 9 : return "<span class='badge badge-danger'>راکد</span>";break;
	default : return "<span class='badge badge-default'>نامشخص</span>";break;
	}
}



function pishraftstatus($input)
{
	switch($input)
	{
	case 1 : return "<span class='badge badge-success'>تائید شده</span>";break;
	case 0 : return "<span class='badge badge-danger'>تائید نشده</span>";break;
	default : return "<span class='badge badge-default'>نامشخص</span>";break;
	}
}

function pishraftstatus_print($input)
{
	switch($input)
	{
	case 1 : return "تائید شده";break;
	case 0 : return "تائید نشده";break;
	default : return "نامشخص";break;
	}
}



function parvande_ekhtarstatus($input)
{
	switch($input)
	{
	case 1 : return "<span class='badge badge-success'>جاری</span>";break;
	case 0 : return "<span class='badge badge-info'>رفع شده</span>";break;
	default : return "<span class='badge badge-default'>نامشخص</span>";break;
	}
}
//////////////////////////////////////////////////////////////////////////////


function pishrafttype($input)
{
	switch($input)
	{
	case 1 : echo " خدمات فنی و مهندسی";break;
	case 2 : echo " مراحل کاری";break;
	default : echo "";break;
	}
}


////////////////////////////////////////////////////////////////////////

function checkCodemeli($input) {
    if (!preg_match("/^\d{10}$/", $input)
|| $input=='0000000000'
|| $input=='1111111111'
|| $input=='2222222222'
|| $input=='3333333333'
|| $input=='4444444444'
|| $input=='5555555555'
|| $input=='6666666666'
|| $input=='7777777777'
|| $input=='8888888888'
|| $input=='9999999999') {
        return false;
    }
    $check = (int) $input[9];
    $sum = array_sum(array_map(function ($x) use ($input) {
        return ((int) $input[$x]) * (10 - $x);
    }, range(0, 8))) % 11;
    return ($sum < 2 && $check == $sum) || ($sum >= 2 && $check + $sum == 11);
}



//////////////////////////////////////////////////////////////////////////////

function tashilatmarhale($input)
{
	switch($input)
	{
	case 0 : echo "معرفی";break;
	case 1 : echo "مرحله اول";break;
	case 2 : echo "مرحله دوم";break;
	case 3 : echo "مرحله سوم";break;
	case 4 : echo "مرحله چهارم";break;
	case 5 : echo "مرحله پنجم";break;
	case 6 : echo "مرحله ششم";break;
	case 7 : echo "مرحله هفتم";break;
	case 8 : echo "مرحله هشتم";break;
	case 9 : echo "مرحله نهم";break;
	case 10 : echo "مرحله دهم";break;
	default : echo "نامشخص";break;
	}
}

function checkhavalestatus($input)
{
	switch($input)
	{
	case 0 : echo " ثبت اولیه";break;
	case 1 : echo " ارسال شده";break;
	case 2 : echo " تحویل شده";break;
	case 3 : echo " تایید شده";break;
	case 4 : echo " ارسال نشده";break;
	default : echo "";break;
	}
}

function check_moteghazi_page_title( $page_name ){

    $arr = [
        'parvande_edit'         => 'مشخصات پرونده',
        'moteghazi_add'         => 'مشخصات مالک',
        'pelakregister_add'     => 'پلاک ثبتی',
        'bankhesab_add'         => 'شماره حساب',
        'dastresy_add'          => 'اطلاعات دسترسی',
        'makan_add'             => 'تقسیمات سیاسی',
        'file_add'              => 'پیوست ها',
        'code_add'              => 'اصلاح کد',
        'tashilat_detailes'     => 'تسهیلات نقدی',
        'pishraft_add'          => 'پیشرفت فیزیکی',
        'parvande_details'      => 'اطلاعات پرونده',
        'parvandelock_history'  => 'تاریخچه قفل',
        'parvande_events'       => 'رویدادها',
        'karshenas'             => 'کارشناس پرونده',
        'taein_nazer'           => 'تعیین ناظر',
        'parvandeekhtar_add'    => 'صدور اخطار',
        'parvande_changebc'     => 'انتقال تقسیمات سیاسی',
        'parvande_payankar'     => 'ثبت پایان کار',
        'print_view'            => 'پرینت خلاصه پرونده',
    ];

    if ( isset( $arr[ $page_name ] ) ){
        return "{moteghazi_name} - " . $arr[$page_name];
    }
    return "سیستم مدیریت مسکن روستایی";
}

function check_taahol( $input ){
	
	switch($input)
	{
	case "0" : echo " مجرد";break;
	case "1" : echo " متاهل";break;
	case "2" : echo " متارکه";break;
	case "3" : echo " فوت شده";break;
	default : echo "انتخاب نشده";break;
	}
}


function check_moteghazi_status( $input ){
	
	switch($input)
	{
	case 1 : return "<span class='badge badge-success'>فعال</span>";break;
	case 3 : return "<span class='badge badge-info'>منتقل شده</span>";break;
	case 0 : return "<span class='badge badge-danger'>غیرفعال</span>";break;
	case 2 : return "<span class='badge badge-warning'>فوت شده</span>";break;
	default : return "<span class='badge badge-default'>فعال</span>";break;
	}
}


//convert persian 'ye' and 'ke' to arabic
function convertarChars($a) {
	$b=str_replace('ي','ی',$a);
	$c=str_replace('ك','ک',$b);
	return $c;
}

function DelayProcess(){
//	flush();
	ob_flush();
}

function unset_session_fun($tfi_nameOne , $tfi_nameTow = null){
	foreach($_SESSION as $key => $value){
		if(strpos($key , $tfi_nameOne) !== false)
			unset($_SESSION[$key]);
		if(!is_null($tfi_nameTow) && strpos($key , $tfi_nameTow) !== false)
			unset($_SESSION[$key]);
	}
}
function dontaccess(){
	$refValue = encrypt($_SERVER['HTTP_REFERER'],session_id()."ReFeRval");
    header('Location: ../../dontaccess.php?ref=' . $refValue);
	echo "<script>
	window.location= '../../dontaccess.php?ref=" . $refValue . "';
	</script>";
	exit;
}

//////////////////////////////////////////////////////////////////////////////

function checkpishrafttype($input)
{
	switch($input)
	{
	case "0" : return "غیر بنایی";break;
	case "1" : return "بنایی";break;
	default : return "";break;
	}
}

//////////////////////////////////////////////////////////////////////////////
function tamdidmonth($tamdiddate,$mahtamdid=1)
{
$tarikhs=explode("/",$tamdiddate);
$tarikh=explode("/",$tamdiddate);
$sal =$tarikh[0];
$mah = ($tarikh[1]+$mahtamdid);

$day = $tarikh[2];
	if($mah>6)
	{
		if($day>30)
		$day=30;
	}
	else
	{
		if($tarikhs[2]==31)
		$day=31;
	}
if($mah>12)
{
$mah=$mah-12;
$sal=$sal+1;
}
if($mah<10)
{$mah = "0".$mah;}
 return $tamdiddate=$sal."/".$mah."/".$day;
}

