# Document relationships

## i). One to one relationships (1:1)
## ii). One to many relationships (1:N)
## iii). Many to many relationships (N:N)

Let's learn more from such examples:

Example 1: college and students\
Example 2: courses and institution

|                         college                         |                                                                     students                                                                    |
|:-------------------------------------------------------:|:-----------------------------------------------------------------------------------------------------------------------------------------------:|
| {     _id: "C200543210",    name: "Delhi University"  } | {      _id: "S201107200306",     collegeID: "C200543210",     street: "One Way, University Road",     city: "New Delhi",     country: "India" } |


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
    ```
     {
       _id: "C200543210",
       name: "Delhi University"
     }
     ```
    </td>
    <td>
     ```
     {
       _id: "C200543210",
       name: "Delhi University"
     }
     ```
    </td>
  </tr>
</tbody>
</table>