from auth_data import login, password, bot_token, messageID
from datetime import datetime
import telebot
import vk_api
import requests
import json
import time

def infinity_polling(self, *args, **kwargs):
    while not self.__stop_polling.is_set():
        try:
            self.polling(*args, **kwargs)
        except Exception as e:
            time.sleep(5)
            pass
    logger.info("Break infinity polling")

bot = telebot.TeleBot(bot_token)

@bot.message_handler(commands=["start"])
def start_message(message):
    bot.send_message(message.chat.id, "Привет!\nНачинаю считывать информацию.\nПо умолчанию интервал 90 минут.")
    while True:
        try: 
            vk_session = vk_api.VkApi(login, password)
            vk_session.auth()
            vk = vk_session.get_api()

            GetFollowers = vk.users.getFollowers(user_id=f"{messageID}")
            followers = GetFollowers['items']

            GetFriends = vk.friends.get(user_id=f"{messageID}")
            friends = GetFriends['items']

            time.sleep(5400)

            getUsers = vk.users.get(user_id=f"{messageID}", fields='last_seen,followers_count,photo_200_orig',)[0]
            userID = getUsers['id']
            userPhoto = getUsers['photo_200_orig']
            fullname = getUsers['first_name'] + ' ' + getUsers['last_name']
            lastseen = datetime.utcfromtimestamp(getUsers['last_seen']['time'] + 10800).strftime('%Y-%m-%d %H:%M')

            GetFollowers2 = vk.users.getFollowers(user_id=f"{messageID}")
            followersCount = GetFollowers2['count']
            NewFollower = list(set(GetFollowers2['items']) - set(GetFollowers['items']))
            def newfollower():
                if NewFollower != []:
                    NewFollowerGet = vk.users.get(user_id=f"{NewFollower[0]}")[0]
                    NewFollowerName = NewFollowerGet['first_name'] + ' ' + NewFollowerGet['last_name']
                    return NewFollowerName
                else:
                    return "-"

            GetFriends2 = vk.friends.get(user_id=f"{messageID}")
            friendsCount = GetFriends2['count']
            NewFriend = list(set(GetFriends2['items']) - set(GetFriends['items']))
            def newfriend():
                if NewFriend != []:
                    NewFriendGet = vk.users.get(user_id=f"{NewFriend[0]}")[0]
                    NewFriendName = NewFriendGet['first_name'] + ' ' + NewFriendGet['last_name']
                    return NewFriendName
                else:
                    return "-"

            bot.send_message(message.chat.id, 
        f"ID пользователя: {userID}\nИмя пользователя: {fullname}\nПоследний раз в сети: {lastseen}\n\nОбщее кол-во друзей: {friendsCount}\nОбщее кол-во подписчиков: {followersCount}\n\nНовый подписчик: {newfollower()}\nНовый друг: {newfriend()}\n\n\n{userPhoto}")  
        except Exception as _ex:
            bot.send_message(message.chat.id, _ex)

bot.infinity_polling()

def main():
    pass
    
if __name__ == '__main__':
    main()
