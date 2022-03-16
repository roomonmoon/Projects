from auth_data import token
import requests
import json 
import time 
import os  # not sure 

def spy(token):
    print(token)

def main():
    spy(token)
    # it was update

if __name__ == '__main__':
    main()