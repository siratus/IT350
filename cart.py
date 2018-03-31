#!/usr/bin/env python

from pymongo import MongoClient
import sys

prodname = sys.argv[1]
# prodprice = sys.argv[2]

client = MongoClient('localhost',27017)
db = client.qtea

template = {
	
	"product": prodname,
	
}

db.cart.insert(template)