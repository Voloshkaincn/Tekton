import psycopg2
import psycopg2.extensions
import urllib

psycopg2.extensions.register_type(psycopg2.extensions.UNICODE)
psycopg2.extensions.register_type(psycopg2.extensions.UNICODEARRAY)

try:
    conn = psycopg2.connect("dbname='ballroom' user='django' host='localhost' password='1qw23er4'")
    print "Got Con"
    cursor = conn.cursor()
    cursor.execute("SELECT image FROM equipment_equipment")
    records = cursor.fetchall()
    print records
    for r in records:
        link = str(r).replace("(u'", '').replace("',)", '')
        #print "YEAH!"
        #link = 'image/upload/v1500914326/cyeozcfewutmfuanzco3.jpg'
        cloudinary_link = 'http://res.cloudinary.com/soulmates/'
        result = cloudinary_link + link
        print 'Downloading......' + result.split('/')[7]  
        urllib.urlretrieve (result, result.split('/')[7])
except:
     print "I am unable to connect to the database"




