#!/usr/bin/python3.7
import requests
from bs4 import BeautifulSoup
from tika import parser
import pandas as pd

pURL = "https://*****/*/*/auth/login.php"
kURL = "https://*****/login.php"
session = requests.Session()
f = session.get(kURL)

def getCsrf():
  soup = BeautifulSoup(f.text, 'html.parser')
  csrfv = soup.find('input', {'name': 'csrf'})
  strcsrfv = str(csrfv)
  csrfm = strcsrfv[40:]
  csrf = csrfm[:-3]
  return(csrf)

login_data = {
  'csrf': getCsrf(),
	'username': '*****',
	'password': '*****',
	'go_to': ''
	}
f = session.post(pURL, data=login_data)

def getEssen():
	essen = session.get("https://*****/aktuelles/get_file/?f=ep_speisenplan.pdf")
	open('assets/essen.pdf', 'wb').write(essen.content)

def getVertretung():
	vertretung = session.get("https://*****/service/vertretungsplan")
	soup = BeautifulSoup(vertretung.text, 'html.parser')
	vg = str(soup.find('div', {'class': 'main_center'}))
	return (vg)

 g = open('/var/www/html/assets/content/v.php','w')
 g.write(getVertretung())
 g.close()
