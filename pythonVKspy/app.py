from auth_data import token
import requests
import json 
import time 
import os  # not sure 

def spy():
    print('TOKEN:', token)

def main():
    spy()

if __name__ == '__main__':
    main()