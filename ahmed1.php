<?php
ob_start();
$token ='1502386684:AAEBPlDWzjUXnrjDd-e8tQN22_AsXQsul2Q';
define('API_KEY',$token);
  echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
            function bot($method,$datas=[]){
    $ALI = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$ALI";
        $xtxtk = file_get_contents($url);
        return json_decode($xtxtk);
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$id = $message->from->id;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$text = $message->text;
$namee = $update->callback_query->from->first_name;
$user = $message->from->username;
if(isset($update->callback_query)){
  $chat_id = $update->callback_query->message->chat->id;
  $message_id = $update->callback_query->message->message_id;
  $data     = $update->callback_query->data;
 $user = $update->callback_query->from->username;
}
$ex = explode("#",$data);
if($text == 'اغاني' || $text == 'الاغاني'){ 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"
اختر نوع الاغاني                                   
.
. ", 
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'اغاني عربي↗️','callback_data'=>"ar"],['text'=>'اغاني اجنبي↗️','callback_data'=>"en"]],
[['text'=>'احـمـد ♡','url'=>'t.me/AAHMEED11']],
]
])
]);
}


if($data == "ar" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
آخـتر المطرب 🌚 𖤐
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'محمد سعيد','callback_data'=>"ms"],['text'=>'احمد كامل','callback_data'=>"ak"]],
[['text'=>'ابو الانوار','callback_data'=>"an"],['text'=>'ابيوسف','callback_data'=>"ab"]],
[['text'=>'مهرجانات','callback_data'=>"mh"],['text'=>'حمو بيكا','callback_data'=>"حمو"]],
[['text'=>'ويجز','callback_data'=>"ويجز"]],
[['text'=>'مسلم','callback_data'=>"مسلم"]],
[['text'=>'حماقي','callback_data'=>"حماقي"],['text'=>'بابلو','callback_data'=>"بابلو"]],
[['text'=>'مروان موسى','callback_data'=>"mas"]],
[['text'=>'عمرو دياب','callback_data'=>"amr"]],
[['text'=>'𝖇𝖆𝖈𝖐','callback_data'=>"back1"]],
]
])
]);
}

if($data == "en" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
آخـتر المطرب 🌚 𖤐
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'Close','callback_data'=>"Closer"],['text'=>'Something just like','callback_data'=>"Something just like"]],
[['text'=>'Illenium','callback_data'=>"Illenium"],['text'=>'Lonely','callback_data'=>"Lonely"]],
[['text'=>'Yummy','callback_data'=>"Yummy"],['text'=>'Sick boy','callback_data'=>"Sick boy"]],
[['text'=>'Hope','callback_data'=>"Hope"]],
[['text'=>'Lovely','callback_data'=>"Lovely"]],
[['text'=>'Cold water','callback_data'=>"Cold water"],['text'=>'Pop stars','callback_data'=>"Pop stars"]],
[['text'=>'Sorry','callback_data'=>"Sorry"]],
[['text'=>'Holy','callback_data'=>"Holy"]],
[['text'=>'𝖇𝖆𝖈𝖐','callback_data'=>"back1"]],
]
])
]);
}



if($data == "back1" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر نوع الاغاني
.
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'اغاني عربي↗️','callback_data'=>"ar"],['text'=>'اغاني اجنبي↗️','callback_data'=>"en"]],
[['text'=>'احـمـد ♡','url'=>'t.me/AAHMEED11']],
]
])
]);
}


if($data == "back2" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
آخـتر المطرب 🌚 𖤐
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'محمد سعيد','callback_data'=>"ms"],['text'=>'احمد كامل','callback_data'=>"ak"]],
[['text'=>'ابو الانوار','callback_data'=>"an"],['text'=>'ابيوسف','callback_data'=>"ab"]],
[['text'=>'مهرجانات','callback_data'=>"mh"],['text'=>'حمو بيكا','callback_data'=>"حمو"]],
[['text'=>'ويجز','callback_data'=>"ويجز"]],
[['text'=>'مسلم','callback_data'=>"مسلم"]],
[['text'=>'حماقي','callback_data'=>"حماقي"],['text'=>'بابلو','callback_data'=>"بابلو"]],
[['text'=>'مروان موسى','callback_data'=>"mas"]],
[['text'=>'عمرو دياب','callback_data'=>"amr"]],
[['text'=>'𝖇𝖆𝖈𝖐','callback_data'=>"back1"]],
]
])
]);
}




if($data == "ms" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اليك قائمه اغاني محمد سعيد
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' يا ويلي','callback_data'=>"يا ويلي"]],
[['text'=>'مفيش بديل','callback_data'=>"مفيش بديل"]],
[['text'=>'وحدي لكن','callback_data'=>"وحدي لكن"]],
[['text'=>'مش بحكي','callback_data'=>"مش بحكي"],['text'=>'بيني وبينك','callback_data'=>"بيني وبينك"]],
[['text'=>'متغير','callback_data'=>"متغير"],['text'=>'جواكي','callback_data'=>"جواكي"]],
[['text'=>'لو','callback_data'=>"لو"]],
[['text'=>'احـمـد ♡','url'=>'t.me/AAHMEED11']],
[['text'=>'𝖇𝖆𝖈𝖐','callback_data'=>"back2"]],
]
])
]);
}
if($data == "ak" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اليك قائمه اغاني احمد كامل
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' قصاد بابك','callback_data'=>"قصاد بابك"]],
[['text'=>'زمن المعجزات','callback_data'=>"زمن المعجزات"]],
[['text'=>'ياليل','callback_data'=>"ياليل"]],
[['text'=>'مبقتش اخاف','callback_data'=>"مبقتش اخاف"],['text'=>'كان في طفل','callback_data'=>"كان في طفل"]],
[['text'=>'قولي','callback_data'=>"قولي"],['text'=>'مش شرط','callback_data'=>"مش شرط"]],
[['text'=>'كانسر','callback_data'=>"كانسر"]],
[['text'=>'لو يسألوكي','callback_data'=>"لو يسألوكي"],['text'=>'متزعليش','callback_data'=>"متزعليش"]],
[['text'=>'𝖇𝖆𝖈𝖐','callback_data'=>"back2"]],
]
])
]);
}

if($data == "an" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اليك قائمه اغاني ابو الانوار
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' بارات','callback_data'=>"بارات"]],
[['text'=>'مقصوره','callback_data'=>"مقصوره"]],
[['text'=>'عسليه','callback_data'=>"عسليه"]],
[['text'=>'انجز','callback_data'=>"انجز"],['text'=>'اتغيرنا','callback_data'=>"اتغيرنا"]],
[['text'=>'غلبه','callback_data'=>"غلبه"],['text'=>'سكو','callback_data'=>"سكو"]],
[['text'=>'الميوريتو','callback_data'=>"الميوريتو"]],
[['text'=>'𝖇𝖆𝖈𝖐','callback_data'=>"back2"]],
]
])
]);
}

if($data == "بابلو" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اليك قائمه اغاني ابو بابلو
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' الجميزه','callback_data'=>"الجميزه"]],
[['text'=>'ديناميت','callback_data'=>"ديناميت"]],
[['text'=>'فولكلور','callback_data'=>"فولكلور"]],
[['text'=>'ابو مكه','callback_data'=>"ابو مكه"],['text'=>'سندباد','callback_data'=>"سندباد"]],
[['text'=>'فري','callback_data'=>"فري"],['text'=>'افتر بارتي','callback_data'=>"افتر بارتي"]],
[['text'=>'سكانيا','callback_data'=>"سكانيا"]],
[['text'=>'غابه','callback_data'=>"غابه"]],
[['text'=>'𝖇𝖆𝖈𝖐','callback_data'=>"back2"]],
]
])
]);
}



if($data == "mh" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اليك قائمه اغاني مهرجانات
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' عملت بلوك لصحابي','callback_data'=>"عملت بلوك لصحابي"]],
[['text'=>'ابطال ومشتهم مرا','callback_data'=>"ابطال ومشتهم مرا"]],
[['text'=>'قلبي عايز صرمة','callback_data'=>"قلبي عايز صرمة"]],
[['text'=>'شاقط 100 واحده','callback_data'=>"شاقط 100 واحده"],['text'=>'كرهت الناس','callback_data'=>"كرهت الناس"]],
[['text'=>'اربع حيطان','callback_data'=>"اربع حيطان"],['text'=>'ندمانة وقولتي نرجع','callback_data'=>"ندمانة وقولتي نرجع"]],
[['text'=>'يلا اكشن','callback_data'=>"يلا اكشن"]],
[['text'=>'في القرايب','callback_data'=>"في القرايب"],['text'=>'قلب ميت من سنين','callback_data'=>"قلب ميت من سنين"]],
[['text'=>'اخواتي','callback_data'=>"اخواتي"],['text'=>'مع السلامة','callback_data'=>"مع السلامة"]],
[['text'=>'خاينة وبايعة','callback_data'=>"خاينة وبايعة"],['text'=>'وقت عوزة','callback_data'=>"وقت عوزة"]],
[['text'=>'بركان فجر','callback_data'=>"بركان فجر"],['text'=>'هلا والله','callback_data'=>"هلا والله"]],
[['text'=>'𝖇𝖆𝖈𝖐','callback_data'=>"back2"]],
]
])
]);
}



if($data == "ab" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اليك قائمه اغاني ابيوسف
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' انا مش هقدر حد','callback_data'=>"انا مش هقدر حد"]],
[['text'=>'عظمه','callback_data'=>"عظمه"]],
[['text'=>'انترو','callback_data'=>"انترو"]],
[['text'=>'استلم يا هيثم','callback_data'=>"استلم يا هيثم"],['text'=>'باشا اعتمد','callback_data'=>"باشا اعتمد"]],
[['text'=>'فوقني','callback_data'=>"فوقني"],['text'=>'نا نا نا','callback_data'=>"نا نا نا"]],
[['text'=>'𝖇𝖆𝖈𝖐','callback_data'=>"back2"]],
]
])
]);
}

if($data == "حمو" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اليك قائمه اغاني حمو بيكا
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' هاتلي فوديكا','callback_data'=>"هاتلي فوديكا"]],
[['text'=>'وداع يادينا','callback_data'=>"وداع يادينا"]],
[['text'=>'هلا والله','callback_data'=>"هلا والله"]],
[['text'=>'باتون ساليه','callback_data'=>"باتون ساليه"],['text'=>'احنا ع المريخ','callback_data'=>"احنا ع المريخ"]],
[['text'=>'انا حبيتك وجرحتيني','callback_data'=>"انا حبيتك وجرحتيني"],['text'=>'انا بيكا ماي لاڤ الفانز','callback_data'=>"انا بيكا ماي لاڤ الفانز"]],
[['text'=>'عالم فاسد','callback_data'=>"عالم فاسد"]],
[['text'=>'رب الكون ميزنا بميزه','callback_data'=>"رب الكون ميزنا بميزة"],['text'=>'شمس المجرة','callback_data'=>"شمس المجرة"]],
[['text'=>'شارب المرار','callback_data'=>"شارب المرار"],['text'=>'حب عمري','callback_data'=>"حب عمري"]],
[['text'=>'𝖇𝖆𝖈𝖐','callback_data'=>"back2"]],
]
])
]);
}



if($data == "mas" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اليك قائمه اغاني مروان موسي
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' نهاية العالم','callback_data'=>"نهاية العالم"]],
[['text'=>'فرعون','callback_data'=>"فرعون"]],
[['text'=>'البوصله ضاعت','callback_data'=>"البوصلة ضاعت"]],
[['text'=>'النظام','callback_data'=>"النظام"],['text'=>'خربت','callback_data'=>"خربت"]],
[['text'=>'ابطال','callback_data'=>"ابطال"],['text'=>'نجوم باريس','callback_data'=>"نجوم باريس"]],
[['text'=>'شيراتون','callback_data'=>"شيراتون"]],
[['text'=>'شهر اتناشر','callback_data'=>"شهر اتناشر"],['text'=>'شطائر','callback_data'=>"شطائر"]],
[['text'=>'تاتش','callback_data'=>"تاتش"],['text'=>'فرصه','callback_data'=>"فرصه"]],
[['text'=>'الجلالة','callback_data'=>"الجلالة"],['text'=>'مين يشتري','callback_data'=>"مين يشتري"]],
[['text'=>'موضة','callback_data'=>"موضة"],['text'=>'ربح صافي','callback_data'=>"ربح صافي"]],
[['text'=>'الخلاصة','callback_data'=>"الخلاصة"],['text'=>'مطار','callback_data'=>"مطار"]],
[['text'=>'اشباح','callback_data'=>"اشباح"],['text'=>'اللي نسيته','callback_data'=>"اللي نسيته"]],
[['text'=>'بالمناسبة','callback_data'=>"بالمناسبة"],['text'=>'سينمائي','callback_data'=>"سينمائي"]],
[['text'=>'رابتور','callback_data'=>"رابتور"],['text'=>'DEV 𝙰𝙷𝙼𝙴𝙳','callback_data'=>"DEV 𝙰𝙷𝙼𝙴𝙳"]],
[['text'=>'𝖇𝖆𝖈𝖐','callback_data'=>"back2"]],
]
])
]);
}

if($data == "amr" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اليك قائمه اغاني عمرو دياب
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'دا لو اتساب','callback_data'=>"دا لو اتساب"]],
[['text'=>'يا اجمل عيون','callback_data'=>"يا اجمل عيون"]],
[['text'=>'ومالو','callback_data'=>"ومالو"]],
[['text'=>'تملي معاك','callback_data'=>"تملي معاك"],['text'=>'معاك قلبي','callback_data'=>"معاك قلبي"]],
[['text'=>'قدام مرايتها','callback_data'=>"قدام مرايتها"],['text'=>'هيعيش يفتكرني','callback_data'=>"هيعيش يفتكرني"]],
[['text'=>'اول يوم في البعد','callback_data'=>"اول يوم في البعد"]],
[['text'=>'جامده بس','callback_data'=>"جامده بس"],['text'=>'بالضحكه دي','callback_data'=>"بالضحكه دي"]],
[['text'=>'سهران','callback_data'=>"سهران"],['text'=>'حبيت يا قلبي','callback_data'=>"حبيت يا قلبي"]],
[['text'=>'رصيف نمره خمسه','callback_data'=>"رصيف نمره خمسه"],['text'=>'اماكن السهر','callback_data'=>"اماكن السهر"]],
[['text'=>'اهي اهي','callback_data'=>"اهي اهي"],['text'=>'زي ما انتي','callback_data'=>"زي ما انتي"]],
[['text'=>'عم الطيب','callback_data'=>"عم الطيب"],['text'=>'حلوه البدايات','callback_data'=>"حلوه البدايات"]],
[['text'=>'𝖇𝖆𝖈𝖐','callback_data'=>"back2"]],
]
])
]);
}

if($data == "حماقي" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اليك قائمه اغاني حماقي
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'حاجه مستخبيه','callback_data'=>"حاجه مستخبيه"]],
[['text'=>'من قلبي بغني','callback_data'=>"من قلبي بغني"]],
[['text'=>'واعمل ايه','callback_data'=>"واعمل ايه"]],
[['text'=>'الليله باظت','callback_data'=>"الليله باظت"],['text'=>'م البدايه','callback_data'=>"م البدايه"]],
[['text'=>'ما بلاش','callback_data'=>"ما بلاش"],['text'=>'احلي حاجه فيكي','callback_data'=>"احلي حاجه فيكي"]],
[['text'=>'راسمك في خيالي','callback_data'=>"راسمك في خيالي"]],
[['text'=>'يا ستار','callback_data'=>"يا ستار"],['text'=>'قدام الناس','callback_data'=>"قدام الناس"]],
[['text'=>'هو دا حبيبي','callback_data'=>"هو دا حبيبي"],['text'=>'احـمـد ♡','callback_data'=>"𝙳𝙴𝚅 𝙰𝙷𝙼𝙴𝙳"]],
[['text'=>'𝖇𝖆𝖈𝖐','callback_data'=>"back2"]],
]
])
]);
}



if($data == "مسلم" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اليك قائمه اغاني مسلم 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' يا صحبه ورا الستاره','callback_data'=>"يا صحبه ورا الستاره"]],
[['text'=>'بتوع مصالح','callback_data'=>"بتوع مصالح"]],
[['text'=>'قلبي عايز صرمة','callback_data'=>"قلبي عايز صرمة"]],
[['text'=>'مولود كبير','callback_data'=>"مولود كبير"],['text'=>'اضربت بكيف وخمره','callback_data'=>"اضربت بكيف وخمره"]],
[['text'=>'اربع حيطان','callback_data'=>"اربع حيطان"],['text'=>'حرب وحوش','callback_data'=>"حرب وحوش"]],
[['text'=>'هضرب عيار ع الجسد','callback_data'=>"هضرب عيار ع الجسد"]],
[['text'=>'الاسم دبابة','callback_data'=>"الاسم دبابة"],['text'=>'اسكت ياقلبي','callback_data'=>"اسكت ياقلبي"]],
[['text'=>'𝖇𝖆𝖈𝖐','callback_data'=>"back2"]],
]
])
]);
}


if($data == "ويجز" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اليك قائمه اغاني ويجز
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' دورك جاي','callback_data'=>"دورك جاي"]],
[['text'=>'باظت','callback_data'=>"باظت"]],
[['text'=>'واحد وعشرين','callback_data'=>"واحد وعشرين"]],
[['text'=>'سكرتي','callback_data'=>"سكرتي"],['text'=>'اي تي ام','callback_data'=>"اي تي ام"]],
[['text'=>'على راحتي','callback_data'=>"على راحتي"],['text'=>'كدا كدا','callback_data'=>"كدا كدا"]],
[['text'=>'تي ان تي','callback_data'=>"تي ان تي"]],
[['text'=>'حواري','callback_data'=>"حواري"],['text'=>'خربان','callback_data'=>"خربان"]],
[['text'=>'لقطة','callback_data'=>"لقطة"],['text'=>'مش هقولك بيبي','callback_data'=>"مش هقولك بيبي"]],
[['text'=>'نصين','callback_data'=>"نصين"],['text'=>'الغساله','callback_data'=>"الغسالة"]],
[['text'=>'منحوس','callback_data'=>"منحوس"],['text'=>'اسياد البلد','callback_data'=>"اسياد البلد"]],
[['text'=>'حوريه','callback_data'=>"حوريه"],['text'=>'كان نفسي','callback_data'=>"كان نفسي"]],
[['text'=>'الزار','callback_data'=>"الزار"],['text'=>'اليمامة','callback_data'=>"اليمامة"]],
[['text'=>'ورديان','callback_data'=>"ورديان"],['text'=>'متواليش','callback_data'=>"متواليش"]],
[['text'=>'نجم ساليني','callback_data'=>"نجم ساليني"],['text'=>'دموعنا مالحة','callback_data'=>"دموعنا مالحة"]],
[['text'=>'تايه','callback_data'=>"تايه"],['text'=>'بولا بولا','callback_data'=>"بولا بولا"]],
[['text'=>'هصلا','callback_data'=>"هصلا"],['text'=>'سالكة','callback_data'=>"سالكة"]],
[['text'=>'مش فير','callback_data'=>"مش فير"],['text'=>'𝙰𝙷𝙼𝙴𝙳','callback_data'=>"𝙰𝙷𝙼𝙴𝙳"]],
[['text'=>'𝖇𝖆𝖈𝖐','callback_data'=>"back2"]],
]
])
]);
}


if($data == "هلا والله"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/17",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "Something just like"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/317",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "Closer"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/318",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "Illenium"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/319",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "Don't let me down"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/320",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "Hope"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/321",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "Sick boy"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/322",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "Yummy"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/323",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "Lonely"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/324",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "Intentions"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/325",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "Holy"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/326",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "Sorry"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/327",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "Pop stars"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/328",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "Cold water"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/329",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "Love your self"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/331",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "Company"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/332",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "Lovely"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/333",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "When the party's"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/334",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "Bellyache"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/335",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "All the good girl"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/336",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "Bury  a friend"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/337",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "Bad guy"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/338",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "Memories"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/339",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "Maps"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/340",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "Girls like you"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/341",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "Sugar"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/342",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "Payphone"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/343",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "Animals"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/344",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "Believer"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/345",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "Natural"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/346",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "Thunder"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/347",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "Radioactive"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/348",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "Bad liar"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/349",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "Whatever"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/350",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "The greatest"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/351",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "Unstoppable"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/352",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "Cheap thrills"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/353",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "I am still here"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/354",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "Dusk till dawn"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/355",
'reply_to_message_id'=>$message->message_id,
]);
}


if($data == "هو دا حبيبي"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/145",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "قدام الناس"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/146",
'reply_to_message_id'=>$message->message_id,
]);
}


if($data == "يا ستار"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/147",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "راسمك في خيالي"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/148",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "احلى حاجه فيكي" or $data == "احلي حاجه فيكي"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/149",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "ما بلاش"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/150",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "م البدايه"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/151",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "الليله باظت"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/Sha2otaya/660",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "واعمل ايه"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/152",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "من قلبي بغني"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/153",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "حاجه مستخبيه"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/154",
'reply_to_message_id'=>$message->message_id,
]);
}


if($data == "يا ويلي"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/155",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "يا صحبه ورا الستاره"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/156",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "تملي معاك"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/157",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "قدام مرايتها"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/158",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "معاك قلبي"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/159",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "ومالو"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/160",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "يا اجمل عيون"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/161",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "دا لو اتساب"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/162",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "هيعيش يفتكرني"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/163",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "اول يوم في البعد"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/173",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "جامده بس"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/174",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "سهران"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/175",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "بالضحكه دي"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/176",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "حلوه البدايات"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/177",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "عم الطبيب"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/178",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "زي ما انتي"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/179",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "اهي اهي"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/283",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "اماكن السهر"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/180",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "رصيف نمره خمسه"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/181",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "حبيت يا قلبي"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/182",
'reply_to_message_id'=>$message->message_id,
]);
}


if($data == "بتوع مصالح"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/183",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "مولود كبير"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/184",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "اضربت بكيف وخمره"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/185",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "حرب وحوش"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/186",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "هضرب عيار ع الجسد"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/187",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "الاسم دبابة"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/188",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "اسكت ياقلبي"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/189",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "دورك جاي"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/190",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "باظت"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/191",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "واحد وعشرين"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/192",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "سكرتي"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/193",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "اي تي ام"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/194",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "حواري"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/195",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "خربان"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/196",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "بولا بولا"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/197",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "هصلا"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/198",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "سالكة"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/199",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "مش فير"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/200",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "منحوس"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/201",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "اسياد البلد"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/202",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "اليمامة"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/203",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "على راحتي"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/204",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "الغسالة"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/205",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "تايه"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/206",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "دموعنا مالحة"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/207",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "ورديان"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/208",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "متواليش"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/209",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "الزار"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/210",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "نصين"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/211",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "لقطة"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/212",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "مش هقولك بيبي"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/213",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "حوريه"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/214",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "كان نفسي"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/215",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "مفيش بديل"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/216",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "وحدي لكن"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/217",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "مش بحكي"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/218",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "متغير"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/219",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "جواكي"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/220",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "لو"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/221",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "قصاد بابك"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/222",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "بتيجي ف بالي"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/223",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "برشامة منوم"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/224",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "بساط"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/225",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "طفرة"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/226",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "ترام"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/227",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "هلوسة"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/228",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "مسوخ"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/229",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "اخر عازف"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/230",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "بلاش تغني"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/231",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "زمن المعجزات"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/232",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "ياليل"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/233",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "مبقتش اخاف"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/234",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "كان في طفل"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/235",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "قولي"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/236",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "مش شرط"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/237",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "كانسر"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/238",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "لو يسألوكي"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/281",
'reply_to_message_id'=>$message->message_id,
]);
}


if($data == "متزعليش"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/239",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "بارات"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/240",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "مقصوره"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/241",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "عسليه"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/242",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "انجز"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/282",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "اتغيرنا"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/243",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "غلبه"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/244",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "سكو"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/245",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "الميوريتو"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/285",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "انا مش هقدر"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/246",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "عظمه"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/247",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "انترو"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/248",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "استلم يا هيثم"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/249",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "باشا اعتمد"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/250",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "فوقني"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/251",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "نا نا نا"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/252",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "الجميزه"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/253",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "ديناميت"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/254",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "فولكلور"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/255",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "ابو مكه"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/256",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "سندباد"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/257",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "فري"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/258",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "افتر بارتي"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/259",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "سكانيا"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/260",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "غابه"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/261",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "عملت بلوك لصحابي"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/262",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "ابطال ومشتهم مرا"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/263",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "قلبي عايز صرمة"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/264",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "شاقط 100 واحده"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/265",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "كرهت الناس"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/266",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "اربع حيطان"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/267",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "ندمانه وقولتي نرجع"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/268",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "يلا اكشن"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/269",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "هاتلي فوديكا"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/270",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "وداع يادنيا"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/271",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "باتون ساليه"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/272",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "عالم فاسد"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/273",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "رب الكون ميزنا بميزة"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/274",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "شمس المجرة"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/275",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "شارب المرار"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/276",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "حب عمري"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/277",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "بنتخان"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/278",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "في القرايب"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/279",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "قلب ميت من سنين"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/280",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "احنا ع المريخ"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/284",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "نهاية العالم"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/286",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "فرعون"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/287",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "البوصلة ضاعت"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/288",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "النظام"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/289",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "خربت"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/290",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "ابطال"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/291",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "نجوم باريس"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/292",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "شيراتون"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/294",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "شهر اتناشر"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/295",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "شطائر"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/296",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "تاتش"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/297",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "فرصه"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/298",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "الجلالة"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/299",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "مين يشتري"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/300",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "موضة"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/301",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "ربح صافي"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/302",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "الخلاصة"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/303",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "مطار"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/304",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "اشباح"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/305",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "اللي نسيته"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/306",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "بالمناسبة"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/307",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "سينمائي"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/308",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "رابتور"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/309",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "انا حبيتك وجرحتيني"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/310",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "انا بيكا ماي لاڤ الفانز"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/311",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "خاينة وبايعة"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/312",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "اخواتي"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/313",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "مع السلامة"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/314",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "وقت عوزة"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/315",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "بركان فجر"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/316",
'reply_to_message_id'=>$message->message_id,
]);
}
















