Stage A:\
Topic: Introduction to MongoDB

-> A Simple note about mongodb is "MongoDB is a non relational database. And about the architecture MongoDB stores "documents" in "collections".

-> Stored documents will be in JSON Format.

-----

#) JSON (JavaScript Object Notation)?\
*) Objects start with { and end with }\
*) Data stored as key-value pairs.

Sample Code: 

```
{
    "name": "Ankita Kaur",
    "class": 8,
    "skills": ["Hindi Writing", "Speech"],
    "courses": {
        "course_name": "Java",
        "validity": 180
    }
}
```
-----
Stage B:\
Topic: Installation of MongoDB

Download URL: https://www.mongodb.com/try/download/community

Install "mongodb-windows-x86_64-<version.no>-signed.msi" then set path "C:\Program Files\MongoDB\Server\<version.no>\bin".

After this install "mongodb-compass-<version.no>-win32-x64.exe" to connect MongoDB to it's GUI Client.

To check the version of install MongoDB Version: mongod --version


Note: The installation guide will work only Windows Operating System.

-----

Setup Database Folder:

data/db

For windows users Create **db** folder in **C:/** drive under the data folder.,\
For mac users Create **db** folder in **Macintosh HD** under the data folder.

-----
Stage C:\
Topic: Query commands

