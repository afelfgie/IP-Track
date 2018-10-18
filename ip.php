<?php
if(strtolower(substr(PHP_OS, 0, 3)) == "win") {
$bersih="cls";
} else {
$bersih="clear";
}
function input($echo) {
        echo $echo."\033[31;1m";
}
$cyn="\033[01;36m";
$yel="\033[01;33m";
$data = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
$FCL="\033[01;33m";
$MCL="\033[01;37m>\033[01;32m";
$NCL="\033[00m";
$un = "\033[04m";
$cyan = "\033[01;32m";
$lblue  = "\e[36m";
$bluebg = "\e[44m";
$blued = "\033[34;1m";
$bold   = "\e[1m";
$cln    = "\e[0m";
$redbg = "\e[101m";
$yellowbg = "\e[43m";
$green  = "\e[92m";
$red    = "\e[91m";
$yellow = "\e[93m";
$yellownl = "\033[01;33m";
$blue   = "\e[36m";
$n="\033[1;37m";
$m="\033[1;31m";
$h="\033[1;32m";

a_c_tp:
system($bersih);
echo "\033[31m[!] \033[37;1mYOU MUST AGREE TO THESE TERMS BEFORE USING THIS PROGRAM!\n";
echo "\n";
echo "\n";
echo "\033[37;1mPlease Press \033[31;1m'Yes' \033[37;1m And Enter To Accept And Continue\n";
input("\033[36;1m--> \033[37;1m");
$actp=trim(fgets(STDIN));
        if($actp == "yes" OR $actp == "Yes") {
		echo "\n";
		sleep(1.20);
		goto rumah;
	} else {
                echo "\n";
                echo "\033[31;1mSomething When Wrong !!!\n";
                sleep(1);
                goto a_c_tp;
        }
rumah:
system($bersih);
echo "\n$red
╻┏━┓   ╺┳╸┏━┓┏━┓┏━╸╻┏
┃┣━┛╺━╸ ┃ ┣┳┛┣━┫┃  ┣┻┓
╹╹      ╹ ╹┗╸╹ ╹┗━╸╹ ╹";
echo "\n\033[31;1m
|================================\033[31;1m>
\033[01;35m[+]\033[33;1mAuthor  \033[31;1m : \e[36mGunadiCBR
\033[01;35m[+]\033[33;1mCode    \033[31;1m : \e[36mPHP
\033[01;35m[+]\033[33;1mVersion \033[31;1m : \e[36m1.4
\033[01;35m[+]\033[33;1mTeam    \033[31;1m : \e[36mMls18hckr
\033[31;1m|================================\033[31;1m>
\033[34;1m~\033[31;1m{\033[01;32m01\033[31;1m}\033[34;1m~\033[37;1mTrack Your Ip Address
\033[34;1m~\033[31;1m{\033[01;32m02\033[31;1m}\033[34;1m~\033[37;1mTrack Ip Address
\033[34;1m~\033[31;1m{\033[01;32m03\033[31;1m}\033[34;1m~\033[37;1mAbout
\033[34;1m~\033[31;1m{\033[01;32m00\033[31;1m}\033[34;1m~\033[37;1mExit
\033[31;1m|================================\033[31;1m>\n";
echo "\033[37;1m\n";
echo "\033[37;1m╭─\033[31;1mGunadiCBR\033[37;1m@\033[36;1mlocalhost \033[35;1m~ \033[34;1mIP-Track\033[39;1m\n";
input("\033[37;1m╰─$\033[36;1m ");
$TD=trim(fgets(STDIN));

if($TD == "1" OR $TD == "01") {
        if($data['status'] == 'success') {
    echo "\n";
    echo "\n ".$FCL."IP Address    ".$MCL."   ".$data['query'];
    echo "\n ".$FCL."Country code  ".$MCL."   ".$data['countryCode'];
    echo "\n ".$FCL."Country       ".$MCL."   ".$data['country'];
    echo "\n ".$FCL."Region code   ".$MCL."   ".$data['region'];
    echo "\n ".$FCL."Region        ".$MCL."   ".$data['regionName'];
    echo "\n ".$FCL."City          ".$MCL."   ".$data['city'];
    echo "\n ".$FCL."Zip code      ".$MCL."   ".$data['zip'];
    echo "\n ".$FCL."Time zone     ".$MCL."   ".$data['timezone'];
    echo "\n ".$FCL."ISP           ".$MCL."   ".$data['isp'];
    echo "\n ".$FCL."Organization  ".$MCL."   ".$data['org'];
    echo "\n ".$FCL."ASN           ".$MCL."   ".$data['as'];
    echo "\n ".$FCL."Latitude      ".$MCL."   ".$data['lat'];
    echo "\n ".$FCL."Longtitude    ".$MCL."   ".$data['lon'];
    echo "\n ".$FCL."Location      ".$MCL."   ".$data['lat'].",".$data['lon'];
    echo "\n\n$NCL";
  } else {
    echo "\n";
    echo "\n\033[01;31m Sorry unable to track your\033[01;33m IP Address\033[01;31m !!!\033[00m\n";
    echo "\033[01;31m Check your \033[01;33mNetwork connection\033[01;31m !!\033[00m\n";
    echo "\033[01;31m If you are \033[01;33mOnline\033[01;31m then check your \033[01;33mIP Address\033[01;31m !!\033[00m\n\n";
  }
err_1:
echo "\n";
input("\033[37;1mBack \033[31;1m{B} \033[37;1mOr Exit \033[31;1m{E} \033[36;1m--> \033[32;1m");
$err1=trim(fgets(STDIN));
if($err1 == "b" OR $err1 == "B") {
	goto rumah;
	}       elseif($err1 == "e" OR $err1 == "E") {
		system($bersih);
		echo "\033[36;1mBye...\n";
		sleep(2);
		exit();
	} else {
		echo "\n";
		echo "\033[31;1mSomething When Wrong !!!\n";
		sleep(1);
		goto err_1;
	}
} elseif($TD == "03" OR $TD == "03") {
system($bersih);
echo "\n\033[34;1m
╻┏━┓   ╺┳╸┏━┓┏━┓┏━╸╻┏
┃┣━┛╺━╸ ┃ ┣┳┛┣━┫┃  ┣┻┓
╹╹      ╹ ╹┗╸╹ ╹┗━╸╹ ╹\n";
echo "\n$blue
\033[34;1m|=========================================>
\033[01;33m[+] Tool Name : \033[1;32mIP-Track
\033[01;33m[+] Author    : \033[1;32mGunadiCBR
\033[01;33m[+] Contack   : \033[1;32m+6285341xxxxxx
\033[01;33m[+] Version   : \033[1;32m1.4
\033[01;33m[+] Date      : \033[1;32m10-10-2018
\033[01;33m[+] code      : \033[1;32mPHP
\033[01;33m[+] Github    : \033[1;32mhttps://github.com/afelfgie
\033[01;33m[+] Team      : \033[1;32mMls18Hckr
\033[34;1m|=========================================>\n";
echo "\n";
echo "\033[32;1mIP-Track \033[37;1mIs Use \033[36;1mIp-Api \033[37;1mTo Retrieve any IP Address Information. Our System Will Automatically Ban Any IP Addresses Doing Ever 150 Requests Per Minute.\n";
echo "\n";
echo "\033[37;1mPress \033[31;1m[ENTER] \033[37;1m For Back To Menu";
                fgets(STDIN);
		goto rumah;
} elseif($TD == "02" OR $TD == "02") {
echo "\n";
$cyn="\033[01;36m";
$yel="\033[01;33m";
$prompt="\n".$cyn." Enter IP : ".$yel;
echo $prompt;
$ip = readline('');
$data = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
$FCL="\033[01;33m";
$MCL="\033[01;37m>\033[01;32m";
$NCL="\033[00m";

  if($data['status'] == 'success') {
    echo "\n ".$FCL."IP Address    ".$MCL."   ".$data['query'];
    echo "\n ".$FCL."Country code  ".$MCL."   ".$data['countryCode'];
    echo "\n ".$FCL."Country       ".$MCL."   ".$data['country'];
    echo "\n ".$FCL."Region code   ".$MCL."   ".$data['region'];
    echo "\n ".$FCL."Region        ".$MCL."   ".$data['regionName'];
    echo "\n ".$FCL."City          ".$MCL."   ".$data['city'];
    echo "\n ".$FCL."Zip code      ".$MCL."   ".$data['zip'];
    echo "\n ".$FCL."Time zone     ".$MCL."   ".$data['timezone'];
    echo "\n ".$FCL."ISP           ".$MCL."   ".$data['isp'];
    echo "\n ".$FCL."Organization  ".$MCL."   ".$data['org'];
    echo "\n ".$FCL."ASN           ".$MCL."   ".$data['as'];
    echo "\n ".$FCL."Latitude      ".$MCL."   ".$data['lat'];
    echo "\n ".$FCL."Longtitude    ".$MCL."   ".$data['lon'];
    echo "\n ".$FCL."Location      ".$MCL."   ".$data['lat'].",".$data['lon'];
    echo "\n\n$NCL";
  } else {
    echo "\n\033[01;31m Sorry unable to track \033[01;33m IP Address\033[01;31m !!!\033[00m\n";
    echo "\033[01;31m Check your \033[01;33mNetwork connection\033[01;31m !!\033[00m\n";
    echo "\033[01;31m If you are \033[01;33mOnline\033[01;31m then check \033[01;33mIP Address\033[01;31m !!\033[00m\n\n";
  }
err_2:
echo "\n";
input("\033[37;1mBack \033[31;1m{B} \033[37;1mOr Exit \033[31;1m{E} \033[36;1m--> \033[32;1m");
$err2=trim(fgets(STDIN));
if($err2 == "b" OR $err2 == "B") {
	goto rumah;
	}       elseif($err2 == "e" OR $err2 == "E") {
		system($bersih);
		echo "\033[36;1mBye...\n";
		sleep(2);
		exit();
	} else {
		echo "\n";
		echo "\033[31;1mSomething When Wrong !!!\n";
		sleep(1);
		goto err_2;
	}
} elseif($TD == "0" OR $TD == "00") {
	ex_t:
        echo "\n";
	input("\033[37;1m Do You Want To Exit \033[31;1m[y/n] \033[32;1m--> \033[32;1m");
	$ext=trim(fgets(STDIN));
	if($ext == "y" OR $ext == "Y") {
		system($bersih);
		echo "\033[31;1m[==================================]\n";
		echo " \033[39;1m[+] \033[36;1mThanks For Using My Tool...:)\n";
		echo " \033[39;1m[+] \033[36;1mGood By...:)\n";
		echo "\033[31;1m[==================================]\033[37;1m\n";
		echo "\n";
		input("???");
		$enter=trim(fgets(STDIN));
		sleep(0.20);
		exit();
	}       elseif($ext == "n" OR $ext == "N") {
		sleep(1);
		goto rumah;
	} else {
		echo "\n";
		echo "\033[31;1mSomething When Wrong !!!\n";
                sleep(1);
                goto ex_t;
	}
} else {
	echo "\033[31;1m[!] \033[37;1mCommand \033[36;1m'$TD' \033[37;1m Not Found !!!\n";
	sleep(1);
	goto rumah;
}


