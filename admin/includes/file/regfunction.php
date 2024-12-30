<?php

if (!function_exists("regcheckstatus")) {
	function regcheckstatus($input_dehyar, $input_karshenas = 9, $input_modir = 9) {
		if($input_karshenas == 0) {
			if ($input_dehyar == 0) {
				return "<span class='label label-warning'>درحال بررسی دهیاری</span>";
			} elseif ($input_dehyar == 1) {
				return "<span class='label label-pink'>درحال بررسی کارشناس</span>";
			} elseif($input_dehyar == 2)
				return "<span class='label label-important'>عدم تائید دهیاری</span>";
			else
				return "<span class='label label-warning'>نامشخص</span>";
		} elseif ($input_karshenas == 1) {
			if($input_modir == 0 or $input_modir == "")
				return "<span class='label label-magenta'>درحال بررسی مدیر</span>";
			elseif($input_modir == 1)
				return "<span class='label label-success'>تائید شده</span>";
			elseif($input_modir == 2)
				return "<span class='label label-important'>عدم تائید مدیر</span>";
			else
				return "<span class='label label-warning'>نامشخص</span>";
		} elseif($input_karshenas == 2)
			return "<span class='label label-pink'>عدم تائید کارشناس</span>";
		else
			return "<span class='label label-warning'>نامشخص</span>";
	}
}
function adpeivastcheckstatus($input)
{
	switch ($input) {
		case "0":
			$theValue =  "<span class='label label-info'>درحال بررسی </span>";
			break;
		case "1":
			$theValue = "<span class='label label-success'>تائید شده</span>";
			break;
		case "2":
			$theValue = "<span class='label label-important'>عدم تائید </span>";
			break;
	}
	return $theValue;
}

function regcheckstatus_ret($input,$input2=9,$input3=9)
{
	if($input==0)
	{
	return "<span class='label label-warning'>درحال بررسی دهیاری</span>";
	}
	elseif($input==1)
	{
		if($input2==0)
		{
			return "<span class='label label-pink'>درحال بررسی کارشناس</span>";
		}
		elseif($input2==1)
		{
			if($input3==0 or $input3=="")
			{
				return "<span class='label label-magenta'>درحال بررسی مدیر</span>";
			}
			elseif($input3==1)
			{
				return "<span class='label label-success'>تائید شده</span>";
			}
			elseif($input3==2)
			{
				return "<span class='label label-important'>عدم تائید مدیر</span>";
			}
			else
			{
				return "<span class='label label-warning'>نامشخص</span>";
			}
		}
		elseif($input2==2)
		{
			return "<span class='label label-pink'>عدم تائید کارشناس</span>";
		}
		else
		{
			return "<span class='label label-warning'>نامشخص</span>";
		}
	}
	elseif($input==2)
	{
		return "<span class='label label-important'>عدم تائید دهیاری</span>";
	}
	else
	{
		return "<span class='label label-warning'>نامشخص</span>";
	}
}


function regcheckstatuscode($input,$input2=9,$input3=9)
{
	if($input==0)
	{
	$result= "0";
	}
	elseif($input==1)
	{
		if($input2==0)
		{
		$result= "9";
		}
		elseif($input2==1)
		{
			if($input3==0 or $input3=="")
			{
			$result= "30";
			}
			elseif($input3==1)
			{
			$result= "70";
			}
			elseif($input3==2)
			{
			$result= "71";
			}
			else
			{
			$result= "99";
			}
		}
		elseif($input2==2)
		{
		$result= "11";
		}
		else
		{
		$result= "99";
		}
	}
	elseif($input==2)
	{
	$result= "2";
	}
	else
	{
	$result= "99";
	}
	return $result;
}


function tarhstatus($input)
{
	switch($input)
	{
	case 0 : echo "فاقد طرح";break;
	case 1 : echo "دارای طرح هادی";break;
	case 2 : echo "تعیین محدوده";break;
	default : echo "نامشخص";break;
	}
}

function tarhprintstatus($input)
{
	switch($input)
	{
	case 0 : echo "روستاهای&nbsp;فاقد&nbsp;طرح";break;
	case 1 : echo "طرح&nbsp;هادی&nbsp;مصوب&nbsp;روستا";break;
	case 2 : echo "تعیین&nbsp;محدوده";break;
	default : echo "نامشخص";break;
	}
}
function tarhprintstatus_ret($input)
{
	switch($input)
	{
	case 0 : return "روستاهای&nbsp;فاقد&nbsp;طرح";break;
	case 1 : return "طرح&nbsp;هادی&nbsp;مصوب&nbsp;روستا";break;
	case 2 : return "تعیین&nbsp;محدوده";break;
	default : return "نامشخص";break;
	}
}
function mahdodestatus($input)
{
	switch($input)
	{
	case 1 : echo "داخل&nbsp;محدوده";break;
	case 2 : echo "خارج&nbsp;محدوده";break;
	case 3 : echo "محدوده&nbsp;عرفی";break;
	default : echo "نامشخص";break;
	}
}

function zaminjahat($input)
{
	global $db;
	$db->where('code' , "$input");
	return $db->getValue('jahattype' , "name");
}
function vakiltype($input)
{
	switch($input)
	{
	case 1 : echo "وکیل";break;
	case 2 : echo "شریک";break;
	default : echo "نامشخص";break;
	}
}
function vaziattype($input)
{
	switch($input)
	{
	case 1 : echo "خارج کردن از محدوده";break;
	case 2 : echo "الحاق به محدوده";break;
	default : echo "نامشخص";break;
	}
}

function tashilatstatus($input)
{
	switch($input)
	{
	case 1 : echo "قبلا استفاده نموده ام";break;
	case 0 : echo "تا به حال استفاده ننموده ام";break;
	default : echo "نامشخص";break;
	}
}

function parvanehstatus($input)
{
	switch($input)
	{
	case 0 : echo "ندارد";break;
	case 1 : echo "دارد";break;
	default : echo "نامشخص";break;
	}
}


function violationreporter($input)
{
	switch($input)
	{
	case 1 : echo "دهیاری";break;
	case 2 : echo "بخشداری";break;
	case 3 : echo "بنیاد مسکن";break;
	default : echo "نامشخص";break;
	}
}

function violationreceiver($input)
{
	switch($input)
	{
	case 1 : echo "فرمانداری";break;
	case 2 : echo "استانداری";break;
	case 3 : echo "بخشداری";break;
	case 4 : echo "شورای حفاظت از حقوق بیت المال در امور اراضی";break;
	case 5 : echo "معاونت اجتماعی";break;
	case 6 : echo "پیشگیری از وقوع جرم دادگستری";break;
	case 7 : echo "اداره راهداری و امور حمل و نقل جاده ای";break;
	default : echo "نامشخص";break;
	}
}

function violationvtype($input)
{
	switch($input)
	{
	case 1 : echo "داخل محدوده";break;
	case 2 : echo "خارج محدوده";break;
	default : echo "نامشخص";break;
	}
}

if (!function_exists("tarhhadiName")) {
    function tarhhadiName($input)
    {
        switch($input){
			case 0 : return "کلی";break;
			case 1 : return "داخل محدوده";break;
			case 2 : return "خارج محدوده";break;
			default : return "نامشخص";break;
        }
    }
}

if (!function_exists("run_redirect")) {
	function run_redirect($post, $url)
	{
		$redirect = true;
		foreach ($post as $value) {
			if (isset($value) && $value != "")
				$redirect = false;
		}
		if ($redirect) 
			redirect($url);
	}
}
if (!function_exists("get_reload_error")) {
	function get_reload_error()
	{
		$error = '';
		if (!empty_null($_GET['info']) and $_GET['info'] == "1") {
			$error = '<div class="alert alert-warning alert-styled-left alert-arrow-left alert-bordered">
				به علت بارگذاری مجدد صفحه، نیاز به تکمیل دوباره فیلترها می باشد.
			</div>';
		}
		return $error;
	}
}

if (!function_exists("checkstatusEstelam")) {
	function checkstatusEstelam($input) {
		switch($input) {
			case 0 : echo "<span class='label label-info'> بررسی نشده </span>";break;
			case 1 : echo "<span class='label label-success'> تایید شده</span>";break;
			case 2 : echo "<span class='label label-important'>تایید نشده</span>";break;
			default : echo "<span class='label label-warning'> نامشخص </span>";break;
		}
	}
}
?>