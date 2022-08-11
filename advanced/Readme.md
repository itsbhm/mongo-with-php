# Document relationships

## i). One to one relationships (1:1)
## ii). One to many relationships (1:N)
## iii). Many to many relationships (N:N)

Let's learn more from such examples:

Example 1: college and students\
Example 2: Articles and Comments\
Example 3: courses and institution

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
    _id: "C200543210",
    name: "Delhi University"
}
     </pre>
    </td>
    <td>
    <pre>
{
    _id: "S201107200306",
    collegeID: "C200543210",
    street: "One Way, University Road",
    city: "New Delhi",
    country: "India"
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

Note: This is not a good way to use One to many relation, we can't simply update the vote counter or available document in comment portion.

> Let's implement the best practices to do the same .. 

