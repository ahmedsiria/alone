<?php
ob_start();
$token ='1724888563:AAHGsOh87UgEEr31c-fbHmhKkqSyhHACgFg';
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
      [['text'=>'ويجز','callback_data'=>'ويجز']],
	  
	  [['text'=>'مروان موسى','callback_data'=>'مروان موسى'],['text'=>'بابلو','callback_data'=>'بابلو']],
	  
	   
	  
	  
	  [['text'=>'ابو الانوار','callback_data'=>'ابو الانوار'],['text'=>'محمد سعيد','callback_data'=>'محمد سعيد']],
	  [['text'=>'حمو بيكا','callback_data'=>'حمو بيكا'],['text'=>'عمار حسني','callback_data'=>'عمار حسني']],
	  
	  
	  [['text'=>'عنبه','callback_data'=>'عنبه'],['text'=>'حماقي','callback_data'=>'حماقي']],
	  
	  
	  [['text'=>'عمرو دياب','callback_data'=>'عمرو دياب'],['text'=>'احمد كامل','callback_data'=>'احمد كامل']],
	  
	  
	  [['text'=>'اصالة','callback_data'=>'اصالة'],['text'=>'تامر حسني','callback_data'=>'تامر حسني']],
	  
	  
	  [['text'=>'مسلم','callback_data'=>'مسلم'],['text'=>'حسين الجسمي','callback_data'=>'حسين الجسمي']],
	  
	  
	  [['text'=>'رامي صبري','callback_data'=>'رامي صبري'],['text'=>'ابيوسف','callback_data'=>'ابيوسف']],
	  
	  
	  [['text'=>'شاهين','callback_data'=>'شاهين'],['text'=>'عفروتو','callback_data'=>'عفروتو']],
	  
	  
	  [['text'=>'الجوكر','callback_data'=>'الجوكر'],['text'=>'حسن شاكوش','callback_data'=>'حسن شاكوش']],
	   
	  [['text'=>'back','callback_data'=>'back1']],

    
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
  [['text'=>'ويجز','callback_data'=>'ويجز']],
	  
  [['text'=>'مروان موسى','callback_data'=>'مروان موسى'],['text'=>'بابلو','callback_data'=>'بابلو']],
  
   
  
  
  [['text'=>'ابو الانوار','callback_data'=>'ابو الانوار'],['text'=>'محمد سعيد','callback_data'=>'محمد سعيد']],
  [['text'=>'حمو بيكا','callback_data'=>'حمو بيكا'],['text'=>'عمار حسني','callback_data'=>'عمار حسني']],
  
  
  [['text'=>'عنبه','callback_data'=>'عنبه'],['text'=>'حماقي','callback_data'=>'حماقي']],
  
  
  [['text'=>'عمرو دياب','callback_data'=>'عمرو دياب'],['text'=>'احمد كامل','callback_data'=>'احمد كامل']],
  
  
  [['text'=>'اصالة','callback_data'=>'اصالة'],['text'=>'تامر حسني','callback_data'=>'تامر حسني']],
  
  
  [['text'=>'مسلم','callback_data'=>'مسلم'],['text'=>'حسين الجسمي','callback_data'=>'حسين الجسمي']],
  
  
  [['text'=>'رامي صبري','callback_data'=>'رامي صبري'],['text'=>'ابيوسف','callback_data'=>'ابيوسف']],
  
  
  [['text'=>'شاهين','callback_data'=>'شاهين'],['text'=>'عفروتو','callback_data'=>'عفروتو']],
  
  
  [['text'=>'الجوكر','callback_data'=>'الجوكر'],['text'=>'حسن شاكوش','callback_data'=>'حسن شاكوش']],
   
  [['text'=>'back','callback_data'=>'back1']],

  
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
  [['text'=>'علي راحتي','callback_data'=>'علي راحتي'],['text'=>'كده كده','callback_data'=>'كده كده']],[['text'=>'مش هقولك بيبي','callback_data'=>'مش هقولك بيبي'],['text'=>'منحوس','callback_data'=>'منحوس']],[['text'=>'واحد وعشرين','callback_data'=>'واحد وعشرين'],['text'=>'سالكه','callback_data'=>'سالكه']],[['text'=>'اسياد البلد','callback_data'=>'اسياد البلد'],['text'=>'الغساله','callback_data'=>'الغساله']],[['text'=>'باظت','callback_data'=>'باظت'],['text'=>'لقطه','callback_data'=>'لقطه']],[['text'=>'دورك جاي','callback_data'=>'دورك جاي'],['text'=>'خربان','callback_data'=>'خربان']],[['text'=>'باسلامه','callback_data'=>'باسلامه'],['text'=>'علي راحتي','callback_data'=>'علي راحتي']],[['text'=>'back','callback_data'=>'back2']]
  
]
])
]);
} 
if($data == "علي راحتي"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/566",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "كده كده"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/567",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "مش هقولك بيبي"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/568",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "منحوس"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/569",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "واحد وعشرين"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/570",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "سالكه"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/571",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "اسياد البلد"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/572",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "الغساله"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/573",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "باظت"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/574",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "لقطه"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/575",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "دورك جاي"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/576",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "خربان"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/577",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "باسلامه"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/578",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "علي راحتي"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/59",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
 
if($data == "مروان موسى" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اليك قائمه اغاني مروان موسى
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
  [['text'=>'نهاية العالم','callback_data'=>'نهاية العالم'],['text'=>'فرعون','callback_data'=>'فرعون']],[['text'=>'البوصله ضاعت','callback_data'=>'البوصله ضاعت'],['text'=>'خربت','callback_data'=>'خربت']],[['text'=>'النظام','callback_data'=>'النظام'],['text'=>'نجوم باريس','callback_data'=>'نجوم باريس']],[['text'=>'ابطال','callback_data'=>'ابطال'],['text'=>'شيراتون','callback_data'=>'شيراتون']],[['text'=>'شطائر','callback_data'=>'شطائر'],['text'=>'شهر اتناشر','callback_data'=>'شهر اتناشر']],[['text'=>'فرصه','callback_data'=>'فرصه'],['text'=>'تاتش','callback_data'=>'تاتش']],[['text'=>'مين يشتري','callback_data'=>'مين يشتري'],['text'=>'الجلالة','callback_data'=>'الجلالة']],[['text'=>'ربح صافي','callback_data'=>'ربح صافي'],['text'=>'موضة','callback_data'=>'موضة']],[['text'=>'مطار','callback_data'=>'مطار'],['text'=>'الخلاصة','callback_data'=>'الخلاصة']],[['text'=>'الي نسيته','callback_data'=>'الي نسيته'],['text'=>'اشباح','callback_data'=>'اشباح']],[['text'=>'سينمائي','callback_data'=>'سينمائي'],['text'=>'بالمناسبة','callback_data'=>'بالمناسبة']],['text'=>'رابتور','callback_data'=>'رابتور'],[['text'=>'back','callback_data'=>'back2']]
]
])
]);
} 
if($data == "نهاية العالم"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/580",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "فرعون"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/581",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "البوصله ضاعت"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/582",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "خربت"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/583",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "النظام"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/584",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "نجوم باريس"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/585",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "ابطال"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/586",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "شيراتون"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/587",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "شطائر"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/588",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "شهر اتناشر"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/589",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "فرصه"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/590",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "تاتش"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/591",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "مين يشتري"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/592",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "الجلالة"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/593",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "ربح صافي"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/594",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "موضة"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/595",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "مطار"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/596",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "الخلاصة"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/597",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "الي نسيته"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/598",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "اشباح"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/599",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "سينمائي"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/600",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "بالمناسبة"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/601",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "رابتور"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/602",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
if($data == "بابلو" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اليك قائمه اغاني بابلو
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
  [['text'=>'اتاري','callback_data'=>'اتاري'],['text'=>'افتر بارتي','callback_data'=>'افتر بارتي']],[['text'=>'سندباد','callback_data'=>'سندباد'],['text'=>'فولكور','callback_data'=>'فولكور']],[['text'=>'سكانيا','callback_data'=>'سكانيا'],['text'=>'فري','callback_data'=>'فري']],[['text'=>'ابو مكه','callback_data'=>'ابو مكه'],['text'=>'ديناميت','callback_data'=>'ديناميت']],['text'=>'الجميزه','callback_data'=>'الجميزه'],[['text'=>'back','callback_data'=>'back2']]
]
])
]);
} 
if($data == "اتاري"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/603",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "افتر بارتي"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/604",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "سندباد"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/605",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "فولكور"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/606",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "سكانيا"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/607",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "فري"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/608",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "ابو مكه"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/609",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "ديناميت"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/610",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "الجميزه"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/611",
  'reply_to_message_id'=>$message->message_id,
  ]);
  } 

if($data == "ابو الانوار" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اليك قائمه اغاني ابو الانوار
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
  [['text'=>'بارات','callback_data'=>'بارات'],['text'=>'مقصوره','callback_data'=>'مقصوره']],[['text'=>'عسليه','callback_data'=>'عسليه'],['text'=>'اتغيرنا','callback_data'=>'اتغيرنا']],[['text'=>'انجز','callback_data'=>'انجز'],['text'=>'سكو','callback_data'=>'سكو']],[['text'=>'غلبه','callback_data'=>'غلبه'],['text'=>'الميوريتو','callback_data'=>'الميوريتو']],[['text'=>'back','callback_data'=>'back2']]
  ]
])
]);
} 
if($data == "بارات"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/612",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "مقصوره"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/613",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "عسليه"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/614",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "اتغيرنا"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/615",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "انجز"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/616",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "سكو"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/617",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "غلبه"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/618",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "الميوريتو"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/619",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
   
if($data == "محمد سعيد" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اليك قائمه اغاني محمد سعيد
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
  [['text'=>'يا ويلي','callback_data'=>'يا ويلي'],['text'=>'مفيش بديل','callback_data'=>'مفيش بديل']],[['text'=>'وحدي لكن','callback_data'=>'وحدي لكن'],['text'=>'بيني وبينك','callback_data'=>'بيني وبينك']],[['text'=>'مش بحكي','callback_data'=>'مش بحكي'],['text'=>'جواكي','callback_data'=>'جواكي']],[['text'=>'متغير','callback_data'=>'متغير'],['text'=>'لو','callback_data'=>'لو']],[['text'=>'back','callback_data'=>'back2']]
]
])
]);
} 
if($data == "يا ويلي"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/623",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "مفيش بديل"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/624",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "وحدي لكن"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/625",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "بيني وبينك"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/626",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "مش بحكي"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/627",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "جواكي"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/628",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "متغير"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/629",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "لو"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/630",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
if($data == "حمو بيكا" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اليك قائمه اغاني حمو بيكا
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
  [['text'=>'هاتلي فوديكا','callback_data'=>'هاتلي فوديكا'],['text'=>'وداع يا دنيا','callback_data'=>'وداع يا دنيا']],[['text'=>'هلا والله','callback_data'=>'هلا والله'],['text'=>'باتون ساليه','callback_data'=>'باتون ساليه']],[['text'=>'انا حبيتك وجرحتيني','callback_data'=>'انا حبيتك وجرحتيني'],['text'=>'عالم فاسد','callback_data'=>'عالم فاسد']],[['text'=>'رب الكون ميزنا بميزه','callback_data'=>'رب الكون ميزنا بميزه'],['text'=>'شارب المرار','callback_data'=>'شارب المرار']],[['text'=>'احنا ع المريخ','callback_data'=>'احنا ع المريخ'],['text'=>'انا بيكا ماي لاڤ الفانز','callback_data'=>'انا بيكا ماي لاڤ الفانز']],[['text'=>'back','callback_data'=>'back2']]
]
])
]);
} 
if($data == "هاتلي فوديكا"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/631",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "وداع يا دنيا"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/632",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "هلا والله"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/633",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "باتون ساليه"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/634",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "انا حبيتك وجرحتيني"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/635",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "عالم فاسد"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/636",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "رب الكون ميزنا بميزه"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/637",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "شارب المرار"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/638",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "احنا ع المريخ"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/639",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "انا بيكا ماي لاڤ الفانز"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/640",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }

  
if($data == "عمار حسني" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اليك قائمه اغاني عمار حسني
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
  [['text'=>'بتيجي ف بالي','callback_data'=>'بتيجي ف بالي'],['text'=>'بساط','callback_data'=>'بساط']],[['text'=>'ترام','callback_data'=>'ترام'],['text'=>'مسوخ','callback_data'=>'مسوخ']],[['text'=>'برشامه منوم','callback_data'=>'برشامه منوم'],['text'=>'طفره','callback_data'=>'طفره']],[['text'=>'هلوسه','callback_data'=>'هلوسه'],['text'=>'اخر عازف','callback_data'=>'اخر عازف']],['text'=>'بلاش تغني','callback_data'=>'بلاش تغني'],[['text'=>'back','callback_data'=>'back2']]
]
])
]);
} 
if($data == "بتيجي ف بالي"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/641",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "بساط"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/642",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "ترام"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/643",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "مسوخ"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/644",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "برشامه منوم"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/645",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "طفره"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/646",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "هلوسه"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/647",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "اخر عازف"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/648",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "بلاش تغني"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/649",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
if($data == "عنبه" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اليك قائمه اغاني عنبه
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
  [['text'=>'هنا القاهره','callback_data'=>'هنا القاهره'],['text'=>'العملاق','callback_data'=>'العملاق']],[['text'=>'عالم الجريمه','callback_data'=>'عالم الجريمه'],['text'=>'العين علينا','callback_data'=>'العين علينا']],[['text'=>'كينج اللعبه','callback_data'=>'كينج اللعبه'],['text'=>'القفاص','callback_data'=>'القفاص']],[['text'=>'طيارات','callback_data'=>'طيارات'],['text'=>'حرب القرود','callback_data'=>'حرب القرود']],[['text'=>'دنيا الموالد','callback_data'=>'دنيا الموالد'],['text'=>'الليله باظت','callback_data'=>'الليله باظت']],[['text'=>'ظاطت','callback_data'=>'ظاطت'],['text'=>'جينا ترجعو','callback_data'=>'جينا ترجعو']],[['text'=>'مفيش اصول','callback_data'=>'مفيش اصول'],['text'=>'غشيم','callback_data'=>'غشيم']],[['text'=>'back','callback_data'=>'back2']]
]
])
]);
} 
if($data == "هنا القاهره"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/650",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "العملاق"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/651",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "عالم الجريمه"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/652",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "العين علينا"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/653",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "كينج اللعبه"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/654",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "القفاص"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/655",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "طيارات"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/656",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "حرب القرود"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/657",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "دنيا الموالد"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/658",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "الليله باظت"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/659",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "ظاطت"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/660",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "جينا ترجعو"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/661",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "مفيش اصول"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/661",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "غشيم"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/662",
  'reply_to_message_id'=>$message->message_id,
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
  [['text'=>'هنا القاهره','callback_data'=>'هنا القاهره'],['text'=>'العملاق','callback_data'=>'العملاق']],[['text'=>'عالم الجريمه','callback_data'=>'عالم الجريمه'],['text'=>'العين علينا','callback_data'=>'العين علينا']],[['text'=>'كينج اللعبه','callback_data'=>'كينج اللعبه'],['text'=>'القفاص','callback_data'=>'القفاص']],[['text'=>'طيارات','callback_data'=>'طيارات'],['text'=>'حرب القرود','callback_data'=>'حرب القرود']],[['text'=>'دنيا الموالد','callback_data'=>'دنيا الموالد'],['text'=>'الليلهحاجة مستخبيه','callback_data'=>'الليلهحاجة مستخبيه']],[['text'=>'من قلبي بغني','callback_data'=>'من قلبي بغني'],['text'=>'واعمل ايه','callback_data'=>'واعمل ايه']],[['text'=>'الليله باظت','callback_data'=>'الليله باظت'],['text'=>'م البدايه','callback_data'=>'م البدايه']],[['text'=>'ما بلاش','callback_data'=>'ما بلاش'],['text'=>'راسمك في خيالي','callback_data'=>'راسمك في خيالي']],[['text'=>'يا ستار','callback_data'=>'يا ستار'],['text'=>'هوا دا حبيبي','callback_data'=>'هوا دا حبيبي']],[['text'=>'احلي حاجة فيكي','callback_data'=>'احلي حاجة فيكي'],['text'=>'قدام الناس','callback_data'=>'قدام الناس']],[['text'=>'back','callback_data'=>'back2']]
]
])
]);
} 

if($data == "حاجة مستخبيه"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/663",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "من قلبي بغني"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/664",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "واعمل ايه"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/665",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "الليله باظت"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/666",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "م البدايه"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/667",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "ما بلاش"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/668",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "راسمك في خيالي"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/669",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "يا ستار"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/670",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "هوا دا حبيبي"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/671",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "احلي حاجة فيكي"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/672",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "قدام الناس"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/673",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
if($data == "عمرو دياب" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اليك قائمه اغاني عمرو دياب
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
  [['text'=>'دا لو اتساب','callback_data'=>'دا لو اتساب'],['text'=>'يا اجمل عيون','callback_data'=>'يا اجمل عيون']],[['text'=>'ومالو','callback_data'=>'ومالو'],['text'=>'تملي معاك','callback_data'=>'تملي معاك']],[['text'=>'قدام مدايتها','callback_data'=>'قدام مدايتها'],['text'=>'اول يوم في البعد','callback_data'=>'اول يوم في البعد']],[['text'=>'جامده بس','callback_data'=>'جامده بس'],['text'=>'رصيف نمره خمسه','callback_data'=>'رصيف نمره خمسه']],[['text'=>'اهي اهي','callback_data'=>'اهي اهي'],['text'=>'عم الطيب','callback_data'=>'عم الطيب']],[['text'=>'معاك قلبي','callback_data'=>'معاك قلبي'],['text'=>'هيعيش يفتكرني','callback_data'=>'هيعيش يفتكرني']],[['text'=>'بالضحكه دي','callback_data'=>'بالضحكه دي'],['text'=>'حبيت يا قلبي','callback_data'=>'حبيت يا قلبي']],[['text'=>'اماكن السهر','callback_data'=>'اماكن السهر'],['text'=>'زي ما انتي','callback_data'=>'زي ما انتي']],['text'=>'حلوه البدايات','callback_data'=>'حلوه البدايات'],[['text'=>'back','callback_data'=>'back2']]
]
])
]);
} 
if($data == "دا لو اتساب"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/673",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "يا اجمل عيون"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/674",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "ومالو"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/675",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "تملي معاك"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/676",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "قدام مدايتها"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/677",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "اول يوم في البعد"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/678",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "جامده بس"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/681",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "رصيف نمره خمسه"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/681",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "اهي اهي"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/682",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "عم الطيب"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/683",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "معاك قلبي"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/684",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "هيعيش يفتكرني"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/685",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "بالضحكه دي"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/686",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "حبيت يا قلبي"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/687",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "اماكن السهر"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/688",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "زي ما انتي"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/689",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "حلوه البدايات"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/690",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  

  
if($data == "احمد كامل" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اليك قائمه اغاني احمد كامل
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
  [['text'=>'قصاد بابك','callback_data'=>'قصاد بابك'],['text'=>'زمن المعجزات','callback_data'=>'زمن المعجزات']],[['text'=>'ياليل','callback_data'=>'ياليل'],['text'=>'مبقتش اخاف','callback_data'=>'مبقتش اخاف']],[['text'=>'قولي','callback_data'=>'قولي'],['text'=>'كانسر','callback_data'=>'كانسر']],[['text'=>'لو يسألوكي','callback_data'=>'لو يسألوكي'],['text'=>'كان في طفل','callback_data'=>'كان في طفل']],[['text'=>'مش شرط','callback_data'=>'مش شرط'],['text'=>'متزعلش','callback_data'=>'متزعلش']],[['text'=>'back','callback_data'=>'back2']]
]
])
]);
} 
if($data == "قصاد بابك"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "زمن المعجزات"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "ياليل"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "مبقتش اخاف"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "قولي"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "كانسر"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "لو يسألوكي"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "كان في طفل"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "مش شرط"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "متزعلش"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
if($data == "اصالة" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اليك قائمه اغاني اصالة
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
  [['text'=>'جيتني مكسور','callback_data'=>'جيتني مكسور'],['text'=>'جابو سيرته','callback_data'=>'جابو سيرته']],[['text'=>'بنت اكابر','callback_data'=>'بنت اكابر'],['text'=>'لا تخاف','callback_data'=>'لا تخاف']],[['text'=>'كبير الشوق','callback_data'=>'كبير الشوق'],['text'=>'اكثر','callback_data'=>'اكثر']],[['text'=>'اتحبني','callback_data'=>'اتحبني'],['text'=>'داك الغبي','callback_data'=>'داك الغبي']],[['text'=>'60 دقيقه','callback_data'=>'60 دقيقه'],['text'=>'عقوبه','callback_data'=>'عقوبه']],[['text'=>'شامخ','callback_data'=>'شامخ'],['text'=>'كان يهمني','callback_data'=>'كان يهمني']],['text'=>'مبقاش انا','callback_data'=>'مبقاش انا'],[['text'=>'back','callback_data'=>'back2']]
]
])
]);
} 
if($data == "جيتني مكسور"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "جابو سيرته"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "بنت اكابر"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "لا تخاف"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "كبير الشوق"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "اكثر"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "اتحبني"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "داك الغبي"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "60 دقيقه"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "عقوبه"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "شامخ"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "كان يهمني"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "مبقاش انا"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
if($data == "تامر حسني" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اليك قائمه اغاني تامر حسني
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
  [['text'=>'ناسيني ليه','callback_data'=>'ناسيني ليه'],['text'=>'كل سنه وانت طيب','callback_data'=>'كل سنه وانت طيب']],[['text'=>'الله شاهد','callback_data'=>'الله شاهد'],['text'=>'الله شاهد','callback_data'=>'الله شاهد']],[['text'=>'عمري ابتدي','callback_data'=>'عمري ابتدي'],['text'=>'كل حاجة','callback_data'=>'كل حاجة']],[['text'=>'ثمن اختيار','callback_data'=>'ثمن اختيار'],['text'=>'عيش بشوقكك','callback_data'=>'عيش بشوقكك']],[['text'=>'ميت وش','callback_data'=>'ميت وش'],['text'=>'حلم سنين','callback_data'=>'حلم سنين']],[['text'=>'كفاياك اعذار','callback_data'=>'كفاياك اعذار'],['text'=>'واخيرا','callback_data'=>'واخيرا']],['text'=>'ورد صناعي','callback_data'=>'ورد صناعي'],[['text'=>'back','callback_data'=>'back2']]
]
])
]);
} 

if($data == "جيتني مكسور"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "جابو سيرته"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "بنت اكابر"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "لا تخاف"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "كبير الشوق"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "اكثر"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "اتحبني"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "داك الغبي"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "60 دقيقه"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "عقوبه"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "شامخ"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "كان يهمني"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "مبقاش انا"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
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
  [['text'=>'يا صحبه ورا الستاره','callback_data'=>'يا صحبه ورا الستاره'],['text'=>'بتوع مصالح','callback_data'=>'بتوع مصالح']],[['text'=>'قلبي عايز صرمة','callback_data'=>'قلبي عايز صرمة'],['text'=>'مولود كبير','callback_data'=>'مولود كبير']],[['text'=>'اربع حيطان','callback_data'=>'اربع حيطان'],['text'=>'هضرب عيار ع الجسد','callback_data'=>'هضرب عيار ع الجسد']],[['text'=>'الاسم دبابة','callback_data'=>'الاسم دبابة'],['text'=>'اضربت بكيف وخمره','callback_data'=>'اضربت بكيف وخمره']],[['text'=>'حرب وحوش','callback_data'=>'حرب وحوش'],['text'=>'اسكت يا قلبي','callback_data'=>'اسكت يا قلبي']],[['text'=>'back','callback_data'=>'back2']]
]
])
]);
} 
if($data == "يا صحبه ورا الستاره"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "بتوع مصالح"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "قلبي عايز صرمة"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "مولود كبير"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "اربع حيطان"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "هضرب عيار ع الجسد"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "الاسم دبابة"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "اضربت بكيف وخمره"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "حرب وحوش"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "اسكت يا قلبي"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
if($data == "حسين الجسمي" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اليك قائمه اغاني حسين الجسمي
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
  [['text'=>'اه لقيت الطبطبه','callback_data'=>'اه لقيت الطبطبه'],['text'=>'خطير','callback_data'=>'خطير']],[['text'=>'احبك','callback_data'=>'احبك'],['text'=>'ابشرك','callback_data'=>'ابشرك']],[['text'=>'مهم جدا','callback_data'=>'مهم جدا'],['text'=>'بنعدي','callback_data'=>'بنعدي']],[['text'=>'الحساس','callback_data'=>'الحساس'],['text'=>'اهواك للموت','callback_data'=>'اهواك للموت']],[['text'=>'فديته','callback_data'=>'فديته'],['text'=>'شفت','callback_data'=>'شفت']],[['text'=>'الاسير','callback_data'=>'الاسير'],['text'=>'بطل حكايه','callback_data'=>'بطل حكايه']],[['text'=>'back','callback_data'=>'back2']]
]
])
]);
} 
if($data == "اه لقيت الطبطبه"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "خطير"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "احبك"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "ابشرك"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "مهم جدا"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "بنعدي"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "الحساس"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "اهواك للموت"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "فديته"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "شفت"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "الاسير"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "بطل حكايه"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
if($data == "رامي صبري" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اليك قائمه اغاني رامي صبري
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
  [['text'=>'خطيره','callback_data'=>'خطيره'],['text'=>'فارق معاك','callback_data'=>'فارق معاك']],[['text'=>'قولو ال عندي','callback_data'=>'قولو ال عندي'],['text'=>'وعجبي عليك يا زمن','callback_data'=>'وعجبي عليك يا زمن']],[['text'=>'وبقابل ناس','callback_data'=>'وبقابل ناس'],['text'=>'حكايه حبنا','callback_data'=>'حكايه حبنا']],[['text'=>'غريب الحب','callback_data'=>'غريب الحب'],['text'=>'صعبان عليا','callback_data'=>'صعبان عليا']],[['text'=>'بتاع بنات','callback_data'=>'بتاع بنات'],['text'=>'بتهتمي','callback_data'=>'بتهتمي']],[['text'=>'انا بعترفلك','callback_data'=>'انا بعترفلك'],['text'=>'حاول تنساني','callback_data'=>'حاول تنساني']],[['text'=>'back','callback_data'=>'back2']]
]
])
]);
} 
if($data == "خطيره"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "فارق معاك"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "قولو ال عندي"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "وعجبي عليك يا زمن"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "وبقابل ناس"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "حكايه حبنا"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "غريب الحب"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "صعبان عليا"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "بتاع بنات"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "بتهتمي"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "انا بعترفلك"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "حاول تنساني"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
if($data == "ابيوسف" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اليك قائمه اغاني ابيوسف
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
  [['text'=>'انا مش هقدر حد','callback_data'=>'انا مش هقدر حد'],['text'=>'عظمه','callback_data'=>'عظمه']],[['text'=>'انترو مين','callback_data'=>'انترو مين'],['text'=>'باشا اعتمد','callback_data'=>'باشا اعتمد']],[['text'=>'استلم يا هيثم','callback_data'=>'استلم يا هيثم'],['text'=>'نا نا نا','callback_data'=>'نا نا نا']],['text'=>'فوقني','callback_data'=>'فوقني'],[['text'=>'back','callback_data'=>'back2']]
]
])
]);
} 
if($data == "انا مش هقدر حد"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "عظمه"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "انترو مين"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "باشا اعتمد"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "استلم يا هيثم"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "نا نا نا"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "فوقني"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
if($data == "شاهين" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اليك قائمه اغاني شاهين
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
  [['text'=>'صوت يجع','callback_data'=>'صوت يجع'],['text'=>'الفرنده','callback_data'=>'الفرنده']],[['text'=>'ايد هون','callback_data'=>'ايد هون'],['text'=>'زين','callback_data'=>'زين']],[['text'=>'جديد نوفي','callback_data'=>'جديد نوفي'],['text'=>'سايفر المعادي','callback_data'=>'سايفر المعادي']],[['text'=>'اكسلانس','callback_data'=>'اكسلانس'],['text'=>'كوم تراب','callback_data'=>'كوم تراب']],[['text'=>'اشرس انوع الصقور','callback_data'=>'اشرس انوع الصقور'],['text'=>'كل شيت','callback_data'=>'كل شيت']],[['text'=>'حديث مع الانا','callback_data'=>'حديث مع الانا'],['text'=>'جامد هيك','callback_data'=>'جامد هيك']],['text'=>'لولو','callback_data'=>'لولو'],[['text'=>'back','callback_data'=>'back2']]
]
])
]);
} 
if($data == "صوت يجع"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/xxxxx",
'reply_to_message_id'=>$message->message_id,
]);
}


if($data == "الفرنده"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/xxxxx",
'reply_to_message_id'=>$message->message_id,
]);
}


if($data == "ايد هون"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/xxxxx",
'reply_to_message_id'=>$message->message_id,
]);
}


if($data == "زين"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/xxxxx",
'reply_to_message_id'=>$message->message_id,
]);
}


if($data == "جديد نوفي"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/xxxxx",
'reply_to_message_id'=>$message->message_id,
]);
}


if($data == "سايفر المعادي"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/xxxxx",
'reply_to_message_id'=>$message->message_id,
]);
}


if($data == "اكسلانس"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/xxxxx",
'reply_to_message_id'=>$message->message_id,
]);
}


if($data == "كوم تراب"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/xxxxx",
'reply_to_message_id'=>$message->message_id,
]);
}


if($data == "اشرس انوع الصقور"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/xxxxx",
'reply_to_message_id'=>$message->message_id,
]);
}


if($data == "كل شيت"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/xxxxx",
'reply_to_message_id'=>$message->message_id,
]);
}


if($data == "حديث مع الانا"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/xxxxx",
'reply_to_message_id'=>$message->message_id,
]);
}


if($data == "جامد هيك"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/xxxxx",
'reply_to_message_id'=>$message->message_id,
]);
}


if($data == "لولو"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/AMR_CH1/xxxxx",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data == "عفروتو" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اليك قائمه اغاني عفروتو
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
  [['text'=>'بكار','callback_data'=>'بكار'],['text'=>'سجاره','callback_data'=>'سجاره']],[['text'=>'كوتش اديداس','callback_data'=>'كوتش اديداس'],['text'=>'مين كول يلا','callback_data'=>'مين كول يلا']],[['text'=>'بس الا بارد','callback_data'=>'بس الا بارد'],['text'=>'احمد علي اسم جدو','callback_data'=>'احمد علي اسم جدو']],[['text'=>'خربت','callback_data'=>'خربت'],['text'=>'ناميجا','callback_data'=>'ناميجا']],[['text'=>'حبك مات','callback_data'=>'حبك مات'],['text'=>'انتو اعدائي','callback_data'=>'انتو اعدائي']],[['text'=>'back','callback_data'=>'back2']]
]
])
]);
} 
if($data == "بكار"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "سجاره"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "كوتش اديداس"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "مين كول يلا"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "بس الا بارد"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "احمد علي اسم جدو"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "خربت"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "ناميجا"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "حبك مات"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "انتو اعدائي"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
if($data == "الجوكر" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اليك قائمه اغاني الجوكر
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
  [['text'=>'سلمي 1','callback_data'=>'سلمي 1'],['text'=>'اختلافنا رحمه','callback_data'=>'اختلافنا رحمه']],[['text'=>'فصله','callback_data'=>'فصله'],['text'=>'الكبت','callback_data'=>'الكبت']],[['text'=>'انفصام حاد 2','callback_data'=>'انفصام حاد 2'],['text'=>'حلم كبير','callback_data'=>'حلم كبير']],[['text'=>'عالم تالت','callback_data'=>'عالم تالت'],['text'=>'الوصايا','callback_data'=>'الوصايا']],[['text'=>'خد فشار','callback_data'=>'خد فشار'],['text'=>'دا تقدير','callback_data'=>'دا تقدير']],[['text'=>'سلمي 2','callback_data'=>'سلمي 2'],['text'=>'الواقع','callback_data'=>'الواقع']],[['text'=>'مناسك الالم','callback_data'=>'مناسك الالم'],['text'=>'انفصام حاد 1','callback_data'=>'انفصام حاد 1']],[['text'=>'كوبايه عصير','callback_data'=>'كوبايه عصير'],['text'=>'فراق صالونات','callback_data'=>'فراق صالونات']],[['text'=>'عالم رابع','callback_data'=>'عالم رابع'],['text'=>'العقد','callback_data'=>'العقد']],[['text'=>'فرصه تانيه','callback_data'=>'فرصه تانيه'],['text'=>'قصيده','callback_data'=>'قصيده']],['text'=>'قطه مغمضه','callback_data'=>'قطه مغمضه'],[['text'=>'back','callback_data'=>'back2']]
]
])
]);
} 
if($data == "سلمي 1"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "اختلافنا رحمه"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "فصله"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "الكبت"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "انفصام حاد 2"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "حلم كبير"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "عالم تالت"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "الوصايا"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "خد فشار"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "دا تقدير"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "سلمي 2"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "الواقع"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "مناسك الالم"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "انفصام حاد 1"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "كوبايه عصير"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "فراق صالونات"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "عالم رابع"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "العقد"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "فرصه تانيه"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "قصيده"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "قطه مغمضه"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
if($data == "حسن شاكوش" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اليك قائمه اغاني حسن شاكوش
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
  [['text'=>'بنت الجيران','callback_data'=>'بنت الجيران'],['text'=>'عود البطل','callback_data'=>'عود البطل']],[['text'=>'شمس المجره','callback_data'=>'شمس المجره'],['text'=>'جيشنا الابيض','callback_data'=>'جيشنا الابيض']],[['text'=>'يا ابن امك','callback_data'=>'يا ابن امك'],['text'=>'صاحبي دراعي','callback_data'=>'صاحبي دراعي']],[['text'=>'هنعمل لغبطيطا','callback_data'=>'هنعمل لغبطيطا'],['text'=>'عود البنات','callback_data'=>'عود البنات']],[['text'=>'بونبوتي ساقط','callback_data'=>'بونبوتي ساقط'],['text'=>'انا علي وضعي','callback_data'=>'انا علي وضعي']],[['text'=>'خربانه انتي','callback_data'=>'خربانه انتي'],['text'=>'يا بنت قلبي','callback_data'=>'يا بنت قلبي']],[['text'=>'back','callback_data'=>'back2']]
]
])
]);
} 

if($data == "بنت الجيران"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/536",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "عود البطل"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "شمس المجره"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "جيشنا الابيض"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "يا ابن امك"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "صاحبي دراعي"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "هنعمل لغبطيطا"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "عود البنات"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "بونبوتي ساقط"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "انا علي وضعي"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "خربانه انتي"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  
  
  if($data == "يا بنت قلبي"){
  bot('sendaudio',[
  'chat_id'=>$chat_id, 
  'audio'=>"https://t.me/AMR_CH1/xxxxx",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }






