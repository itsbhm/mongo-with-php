# Document relationships

## i). One to one relationships (1:1)
## ii). One to many relationships (1:N)
## iii). Many to many relationships (N:N)

Let's learn more from such examples:

Example 1: college and students\
Example 2: Articles and Comments

----
### i). One to one relationships (1:1)

Example 1: college and students

<table>
<thead>
  <tr>
    <th>college</th>
    <th>students</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>
    <pre>
{
    "_id": "C200543210",
    "name": "Delhi University"
}
     </pre>
    </td>
    <td>
    <pre>
{
    "_id": "S201107200306",
    "collegeID": "C200543210",
    "street": "One Way, University Road",
    "city": "New Delhi",
    "country": "India"
}
     </pre>
    </td>
  </tr>
</tbody>
</table>

----

### ii). One to many relationships (1:N)

Example 2: Articles and Comments

```
{
    "_id":"A86925",
    "body":"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...",
    "comments":[
        {
            "body":"This is a first comment.",
            "upvotes":10,
            "downvotes":4
        },
        {
            "body":"This is a second comment.",
            "upvotes":18,
            "downvotes":6
        }
    ]
}
```

<table>
<tbody>
  <tr>
    <td>
        Code checks:
    </td>
    <td>
        <img src="https://img.shields.io/badge/Syntax%20Validation-Passed-brightgreen" alt="syntax-check-status">
    </td>
  </tr>
</tbody>
</table>


Note: This is not a good way to use One to many relation, we can't simply update the vote counter or available document in comment portion.

> Let's implement the best practices to do the same .. 

Below in the the table you can see the code, by using such type of code bock we can easily find the particular comment.

Code for fetching comment:

```
db.comments.find({"articleId": "A86925"})
```

<table>
<thead>
  <tr>
    <th>article</th>
    <th>comments</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>
    <pre>
{
    "_id": "A86925",
    "body": "The body section for article"
}
     </pre>
    </td>
    <td>
    <pre>
[   
    {
        "_id": "C1001",
        "body": "This is a first comment.",
        "upvotes": 10,
        "downvotes": 4,
        "articleId": "A86925"
    },

    {
        "_id": "C1002",
        "body": "This is a second comment.",
        "upvotes": 18,
        "downvotes": 6,
        "articleId": "A86925"
    }
]
     </pre>
    </td>
  </tr>
</tbody>
</table>

<table>
<tbody>
  <tr>
    <td>
        Code checks:
    </td>
    <td>
        <img src="https://img.shields.io/badge/Syntax%20Validation-Passed-brightgreen" alt="syntax-check-status">
    </td>
  </tr>
</tbody>
</table>

Note: In this presented code bock each comment have reference to article. Now we can easily update and access any comment. 


### iii). Many to many relationships (N:N)

Code for fetching tags:

```
db.comments.find({"tags": "T888"})
```

<table>
<tbody>
  <tr>
    <td>
    <pre>
[
   {
      "_id":"C1001",
      "body":"This is a first comment.",
      "tags":[
         "T777",
         "T888",
         "T999"
      ]
   },
   {
      "_id":"C1002",
      "body":"This is a second comment.",
      "tags":[
         "T777",
         "T888"
      ]
   }
]
     </pre>
    </td>
    <td>
    <pre>
[
   {
      "_id":"T777",
      "tagName":"Digital Marketing"
   },
   {
      "_id":"T888",
      "tagName":"Core Java"
   },
   {
      "_id":"T999",
      "tagName":"NoSQL DB"
   }
]
     </pre>
    </td>
  </tr>
</tbody>
</table>

<table>
<tbody>
  <tr>
    <td>
        Code checks:
    </td>
    <td>
        <img src="https://img.shields.io/badge/Syntax%20Validation-Passed-brightgreen" alt="syntax-check-status">
    </td>
  </tr>
</tbody>
</table>

----

# Index

Indexes are special data structures that store only a small subset of the data held in a collection???s documents separately from the documents themselves. In MongoDB, they are implemented in such a way that the database can quickly and efficiently traverse them when searching for values.

Index Content Source: [DigitalOcean](https://www.digitalocean.com/community/tutorials/how-to-use-indexes-in-mongodb)

To create Index:

Base Syntax:

> db.collection.enseureIndex({"index_target": 1})

Note: To specify sorting order 1 and -1 are used. 1 is used for ascending order while -1 is used for descending order.



Example:

```
db.collegedb.ensureIndex({"country": 1})
```

To see the the available indexes: 

```
db.collegedb.getIndexes()
```

----

To Drop an Index:

Base Syntax:

> db.collection.dropIndex("index_name")

Example:

```
db.collegedb.dropIndex("country_1")
```

----

To create an Index for (Sub-Documents) properties inside arrays:

```
db.comments.ensureIndex({"tags": 1})
```

To search:

```
db.comments.find({"tags": "T777"})
```

----

To create Index on text:

```
db.comments.ensureIndex({"body": "text"})
```

To search:

```
db.comments.find({$text: {$search: "pain"}})
```