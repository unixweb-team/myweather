#!/usr/bin/python

import subprocess
import re
import os
import sys
import time
import MySQLdb as mdb
import datetime
from sampledata import *

databaseUsername="admin"
databasePassword="admin@123"
databaseName="wordpressdb" #do not change unless you named the Wordpress database with some other name
databaseHost="localhost"


#check if table is created or if we need to create one
try:
    queryFile=file("createTable.sql","r")

    con=mdb.connect(databaseHost,databaseUsername,databasePassword,databaseName)
    currentDate=datetime.datetime.now().date()

    with con:
        line=queryFile.readline()
        query=""
        while(line!=""):
            query+=line
            line=queryFile.readline()

        cur=con.cursor()
        cur.execute(query)

            #now rename the file, because we do not need to recreate the table everytime this script is run
        queryFile.close()
        os.rename("createTable.sql","createTable.sql.bkp")


except IOError:
    pass #table has already been created

def saveToDatabase(temp1, temp2, temp3, temp4, humidity, pressure, sea_pressure, altitude):
    #print "SaveToDatabase Hit"

    con=mdb.connect(databaseHost, databaseUsername, databasePassword, databaseName)
    currentDate=datetime.datetime.now().date()
    print currentDate
    now=datetime.datetime.now()
    midnight=datetime.datetime.combine(now.date(),datetime.time())
    minutes=((now-midnight).seconds)/60 #minutes after midnight, use datead$


    with con:
            cur=con.cursor()
            query = ("INSERT INTO `temperatures`(`temperature_1`, `temperature_2`, `temperature_3`, `temperature_4`, `humidity`, `dateMeasured`, `hourMeasured`, `pressure`, `pressure-sea`, `altitude`)"
                        "VALUES (%s,%s,%s,%s,%s,'%s',%s,%s,%s,%s)"% (temp1, temp2, temp3, temp4, humidity, currentDate, minutes, pressure, sea_pressure, altitude))
            cur.execute(query)

    print "Saved temperature"
    return "false"


def readInfo():
    #print "ReadInfo Hit"
    temperatureSaved="false"
    while(temperatureSaved=="false"):
         temp1 =Temp1
         temp2 = Temp2
         temp3 = Temp3
         temp4 = Temp4
         humidity=Humidity
         altitude =  Altitude
         pressure =  Pressure
         sea_pressure  =  Sea_pressure
         #temperatureSaved="true"
         return saveToDatabase(temp1, temp2, temp3, temp4, humidity, pressure, sea_pressure, altitude)

def search_attr(val, source):
    #print "Search Hit"
    #print val
    #print source
    output = subprocess.check_output([source]);
    matches = re.search(("%s =\s+([-]?[0-9.]+)" % val), output)
    if (not matches):
        print "searching for %s"% (val)
        time.sleep(3)
        search_attr(val, source)
    return float(matches.group(1))


def auto_execute():
     status="false"
     while(status!="true"):
        #print status,datetime.datetime.now().time()
        status=readInfo()
        time.sleep(60)
     return

while True:
    auto_execute()

