from auth_data import login, password, bot_token
from datetime import datetime
import telebot
import vk_api
import requests
import json
import time

vk_session = vk_api.VkApi(f'{login}', f'{password}')
vk_session.auth()

vk = vk_session.get_api()

def telegram_bot(bot_token):
    bot = telebot.TeleBot(bot_token)

    @bot.message_handler(commands=["start"])
    def start_message(message):
        bot.send_message(message.chat.id, "Привет! Пришли ID :)")

    @bot.message_handler(content_types=["text"])
    def send_text(message):
        try: 
            while True: 
                getUsers = vk.users.get(user_id=f"{messageID}", fields='last_seen,followers_count,photo_200_orig',)[0]
                userID = getUsers['id']
                userPhoto = getUsers['photo_200_orig']
                fullname = getUsers['first_name'] + ' ' + getUsers['last_name']
                lastseen = datetime.utcfromtimestamp(getUsers['last_seen']['time'] + 10800).strftime('%Y-%m-%d %H:%M')

                GetFollowers = vk.users.getFollowers(user_id=f"{messageID}")
                followers = GetFollowers['items']

                GetFriends = vk.friends.get(user_id=f"{messageID}")
                friends = GetFriends['items']

                time.sleep(5400)

                GetFollowers2 = vk.users.getFollowers(user_id=f"{messageID}")
                followersCount = GetFollowers2['count']
                NewFollower = list(set(GetFollowers2['items']) - set(GetFollowers['items']))
                def newfollower():
                    if NewFollower != []:
                        NewFollowerGet = vk.users.get(user_id=f"{NewFollower[0]}")[0]
                        NewFollowerName = NewFollowerGet['first_name'] + ' ' + NewFollowerGet['last_name']
                        return NewFollowerName
                    else:
                        return "Новых подписчиков нет"

                GetFriends2 = vk.friends.get(user_id=f"{messageID}")
                friendsCount = GetFriends2['count']
                NewFriend = list(set(GetFriends2['items']) - set(GetFriends['items']))
                def newfriend():
                    if NewFriend != []:
                        NewFriendGet = vk.users.get(user_id=f"{NewFriend[0]}")[0]
                        NewFriendName = NewFriendGet['first_name'] + ' ' + NewFriendGet['last_name']
                        return NewFriendName
                    else:
                        return "Новых друзей нет"

                bot.send_message(message.chat.id, 
f"ID пользователя: {userID}\nИмя пользователя: {fullname}\nПоследний раз в сети: {lastseen}\n\nОбщее кол-во друзей: {friendsCount}\nОбщее кол-во подписчиков: {followersCount}\n\nНовый подписчик: {newfollower()}\nНовый друг: {newfriend()}\n\n\n{userPhoto}") 
        except Exception as ex: 
            bot.send_message(message.chat.id, "Что-то пошло не так!")

    bot.polling()

def main():
    telegram_bot(bot_token)

if __name__ == '__main__':
    main()
