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

To get all the available list of database:

```
show dbs
```

To create and switch to a new DB:

```
use collegedb
```

To create a new collection:

```
db.createCollection('students')
```

To insert document into the collection:

```
db.students.insertOne({name: "Kiran", class: 8})
```

To view all available documents:

```
db.students.find()
```

----

To see a more readable and cleaner output:

```
db.students.find().pretty()
```

----

Let's add more documents:

```
db.students.insertOne({name: "Kashish", class: 12})
db.students.insertOne({name: "Rahul", class: 9})
```

Note:  Use insertOne, insertMany, or bulkWrite for inserting records.

----

To get documents with condition:

Condition Statement: Get all the students where class should be grater than 9. using **$gt**.

```
db.students.find({class: {$gt: 9}})
```

To get specific fields:

```
db.students.find({}, {class: 1})
```

> To hide some fields:

```
db.students.find({}, {class: 1, _id: 0})
```

To sort the results (**Ascending Order**):

```
db.students.find({}, {class: 1, _id: 0}).sort({class: 1})
```

To sort the results (**Descending Order**):

```
db.students.find({}, {class: 1, _id: 0}).sort({class: -1})
```

To limit the no of results:

```
db.students.find().limit(2)
```

----

To update document:

Note: Use updateOne, updateMany, or bulkWrite to update the collection.

> db.collection.update(search term, new data you wants to update)

To update one document:

```
db.students.updateOne({}, {$set: {language: "english"}})
```

To update many documents:

```
db.students.updateMany({}, {$set: {language: "english"}})
```

To update specific document:

```
db.students.update({name: "Rahul"}, {$set:{language: "hindi"}})
```

To unset document:

```
db.students.updateMany({}, {$unset: {language: ""}})
```

To replace document:

```
db.students.update({name: "Rahul"}, {$set:{name: "Vinay Kumar", favorite_color: "black"}})
```

----

To remove a document:

Note: Use deleteOne, deleteMany, findOneAndDelete, or bulkWrite.

```
db.students.deleteOne({name: "Kiran"})
```

To remove all documents:

```
db.students.deleteMany({})
```

----

To drop a collection:

```
db.students.drop()
```

----

To show all available collections:

```
show collections
```