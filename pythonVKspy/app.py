from auth_data import TOKEN, user_id
from datetime import datetime
import requests
import json 
import os 

def spy():
    GetUsers = f'https://api.vk.com/method/users.get?user_id=498256285&fields=last_seen,followers_count&access_token={TOKEN}&v=5.131'
    GetFollowers = f'https://api.vk.com/method/users.getFollowers?user_id=498256285&access_token={TOKEN}&v=5.131'
    GetFriends = f'https://api.vk.com/method/friends.get?users_id=498256285&access_token={TOKEN}&v=5.131'

    req = requests.get(GetUsers) 
    req2 = requests.get(GetFriends) 
    req3 = requests.get(GetFollowers)

    src = req.json()
    src2 = req2.json()
    src3 = req3.json()

    # Словари
    data = src["response"]
    data2 = src2["response"]
    data3 = src3['response']

    friends = []
    followers = []


    for i in data:
        name = i['first_name'] + ' ' + i['last_name']
        lastSeen = i['last_seen']['time']
        time = datetime.utcfromtimestamp(lastSeen + 10800).strftime('%Y-%m-%d %H:%M:%S')
    print("Имя пользователя:", name, '\n' "Последний раз в сети:", time)

    for i in data2['items']: 
        friends.append(i)
        friendsCount = len(friends)
    print("Кол-во друзей:",friendsCount)
            


    for i in data3['items']:
        followers.append(i)
        followersCount = len(followers)
    if followersCount +- 1: 
        nu = followers[0]
    else:
        print("Новых подписчиков нет!")

    print("Кол-во подписчиков:", followersCount)
    
    # if followersCount > 70:
    #     print(followers[0])
    # else: 
    # print("Его друзья:", friends)
    # print("Его подписчики:", followers)

def newUser(nu):
    print(nu)

    def main():
        spy()
        newUser()
    

if __name__ == '__main__':
    main()