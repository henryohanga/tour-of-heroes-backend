About Tour of Heroes Backend
----------------------------

This is a simple RESTful API for the Angular2+ tutorial app documented at https://angular.io/tutorial.

### Live Link

https://tour-of-heroes-back-end.herokuapp.com

### End-points

List of heroes: `GET` `/heroes`
    Response looks something like this.
    `{
        success: true,
        data: {
            items: [
                {
                    id: 12,
                    name: "Mr IQ"
                },
                ...,
                ...,
                ...
            ]
        }
    }`

View Hero: `GET` `/heroes/{id}`

Create Hero: `POST` `/heroes`

Update Hero: `PUT` `/heroes/{id}`

Delete Hero: `DELETE` `/heroes/{id}`

Search Heroes: `GET` `/heroes/search?name={term}`

### Link to Detailed API Documentation
