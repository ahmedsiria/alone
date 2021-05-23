local function Reply(msg)
local text = msg.content_.text_
if not database:get(bot_id..'Reply:Status'..msg.chat_id_) then
if text == 'هاي' then
TextReply = 'هايي اي يسطا ضيف/ي جهاتك 🙂😂'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'حصلخير ' then
TextReply = 'خير هيجي منين الخير بوشك ده 🙂😂'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'يساتر' then
TextReply ='استر يرب 🙂😂'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'سلام' then
TextReply = 'يلا فداهيه🙂😂'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end

if text == 'تفعيل ردود البوت' and Manager(msg) then
database:del(bot_id..'Reply:Status'..msg.chat_id_)
send(msg.chat_id_, msg.id_,'❃∫ تم تفعيل ردود البوت')
return false
end

if text == 'تعطيل ردود البوت' and Manager(msg) then
database:set(bot_id..'Reply:Status'..msg.chat_id_,true)
send(msg.chat_id_, msg.id_,'❃∫ تم تعطيل ردود البوت')
return false
end

if text == "صاحب السورس" or text == "مطور السورس" or text == "مالك السورس" or text == "صاحب السورس1" or text == "احمد" then
send(msg.chat_id_,msg.id_, '[مطور سورس دراجون](t.me/SIRIA199)') 
return false
end

end
return {
Poyka = Reply
}