from auth_data import TOKEN
from datetime import datetime
import requests
import json 
import os 

def spy():
    GetUsers = f'https://api.vk.com/method/users.get?user_id=498256285&fields=last_seen,followers_count&access_token={TOKEN}&v=5.131'
    GetFollowers = f'https://api.vk.com/method/users.getFollowers?user_ids=498256285&access_token={TOKEN}&v=5.131'
    GetFriends = f'https://api.vk.com/method/friends.get?users_ids=498256285&access_token={TOKEN}&v=5.131'

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
        followersCount = i['followers_count']
        time = datetime.utcfromtimestamp(lastSeen).strftime('%Y-%m-%d %H:%M:%S')
    
    for i in data2["items"]: 
        friends.append(i)

    for i in data3["items"]:
        followers.append(i)


def main():
    spy()
    

if __name__ == '__main__':
    main()