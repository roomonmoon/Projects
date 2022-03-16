from auth_data import token
import requests
import json 
import time 
import os  # not sure 

def spy(token):
    print(token)

def main():
    spy(token)
    # всем привет с вами элез

if __name__ == '__main__':
    main()