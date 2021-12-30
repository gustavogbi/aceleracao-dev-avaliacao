# Projeto Faculdade Vila Nova
O projeto disponibiliza um sistema web com api integrada

# Endpoints
+ Listagem de professores
+ Listagem de alunos por curso
+ Listagem aulas por curso
+ Cursos disponíveis
+ Cursos indisponiveis
+ Filtragem de resultados por campos nas consultas principais
+ Aulas do aluno + valor da mensalidade com desconto

### Autenticação
Basic auth 

### Endpoint Professores
GET Listar Professores <br />
```api/professores```

RESPONSE 
```
{
    "data": [
        {
            "id": 1,
            "num_aula": 81,
            "tema": "Eliza Flatley",
            "duracao": "55",
            "observacao": "Autem vero id possimus dolor. Voluptas sunt harum esse recusandae quo quo. Possimus ut commodi maiores quae facere sapiente repellat eum.",
            "idcurso": 1,
            "idprofessor": 1,
            "created_at": "2021-12-30T08:52:27.000000Z",
            "updated_at": "2021-12-30T09:09:46.000000Z"
        },
        {
            "id": 2,
            "num_aula": 70,
            "tema": "Mrs. Destinee Mayer",
            "duracao": "61",
            "observacao": "Animi earum temporibus omnis voluptate explicabo voluptatem corrupti. Praesentium incidunt quam blanditiis eum.",
            "idcurso": 3,
            "idprofessor": 7,
            "created_at": "2021-12-30T08:52:27.000000Z",
            "updated_at": "2021-12-30T08:52:27.000000Z"
        },
        {
            "id": 3,
            "num_aula": 58,
            "tema": "Dino Lemke Sr.",
            "duracao": "7",
            "observacao": "Architecto neque natus est excepturi et assumenda quia consequatur. Molestiae quaerat sequi delectus totam.",
            "idcurso": 7,
            "idprofessor": 6,
            "created_at": "2021-12-30T08:52:27.000000Z",
            "updated_at": "2021-12-30T08:52:27.000000Z"
        },
        {
            "id": 4,
            "num_aula": 77,
            "tema": "Buddy Schimmel",
            "duracao": "23",
            "observacao": "Sed eum soluta pariatur corporis sit. Distinctio eaque veniam aut cum ad sed. Quos culpa veniam magnam voluptatem animi.",
            "idcurso": 1,
            "idprofessor": 10,
            "created_at": "2021-12-30T08:52:27.000000Z",
            "updated_at": "2021-12-30T08:52:27.000000Z"
        },
        {
            "id": 5,
            "num_aula": 44,
            "tema": "Frank Bechtelar DDS",
            "duracao": "86",
            "observacao": "Magni animi sed molestiae. Facilis recusandae ea quidem cupiditate modi consectetur.",
            "idcurso": 1,
            "idprofessor": 10,
            "created_at": "2021-12-30T08:52:27.000000Z",
            "updated_at": "2021-12-30T08:52:27.000000Z"
        },
        {
            "id": 6,
            "num_aula": 2,
            "tema": "Prof. Pauline Weissnat",
            "duracao": "92",
            "observacao": "Voluptas qui consequatur aliquid id dolorem. Iure ipsam distinctio modi libero laboriosam perferendis nisi.",
            "idcurso": 7,
            "idprofessor": 8,
            "created_at": "2021-12-30T08:52:27.000000Z",
            "updated_at": "2021-12-30T08:52:27.000000Z"
        },
        {
            "id": 7,
            "num_aula": 95,
            "tema": "Prof. Ned Emard Jr.",
            "duracao": "36",
            "observacao": "Blanditiis sapiente aut soluta veritatis quis. Incidunt porro repellendus officiis non iste impedit quae. Et optio accusamus at.",
            "idcurso": 8,
            "idprofessor": 5,
            "created_at": "2021-12-30T08:52:27.000000Z",
            "updated_at": "2021-12-30T08:52:27.000000Z"
        },
        {
            "id": 8,
            "num_aula": 84,
            "tema": "Mrs. Aubree Feil III",
            "duracao": "62",
            "observacao": "Cumque aut quasi nulla adipisci eligendi eius laudantium. Cumque nihil molestiae illo natus. Distinctio quae reprehenderit laudantium quisquam rem est.",
            "idcurso": 7,
            "idprofessor": 1,
            "created_at": "2021-12-30T08:52:27.000000Z",
            "updated_at": "2021-12-30T08:52:27.000000Z"
        },
        {
            "id": 9,
            "num_aula": 68,
            "tema": "Alexandria Stamm",
            "duracao": "29",
            "observacao": "Necessitatibus dolore qui placeat itaque. Optio laudantium a possimus qui id ex.",
            "idcurso": 3,
            "idprofessor": 9,
            "created_at": "2021-12-30T08:52:27.000000Z",
            "updated_at": "2021-12-30T08:52:27.000000Z"
        },
        {
            "id": 10,
            "num_aula": 87,
            "tema": "Miss Shanelle Bartoletti I",
            "duracao": "76",
            "observacao": "Culpa eos repellendus impedit suscipit voluptas mollitia assumenda. Aut in maxime et quaerat similique nemo eum. In quo sunt placeat harum.",
            "idcurso": 4,
            "idprofessor": 8,
            "created_at": "2021-12-30T08:52:27.000000Z",
            "updated_at": "2021-12-30T08:52:27.000000Z"
        }
    ],
    "links": {
        "first": "http://localhost:8000/api/aulas?page=1",
        "last": "http://localhost:8000/api/aulas?page=5",
        "prev": null,
        "next": "http://localhost:8000/api/aulas?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 5,
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http://localhost:8000/api/aulas?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": "http://localhost:8000/api/aulas?page=2",
                "label": "2",
                "active": false
            },
            {
                "url": "http://localhost:8000/api/aulas?page=3",
                "label": "3",
                "active": false
            },
            {
                "url": "http://localhost:8000/api/aulas?page=4",
                "label": "4",
                "active": false
            },
            {
                "url": "http://localhost:8000/api/aulas?page=5",
                "label": "5",
                "active": false
            },
            {
                "url": "http://localhost:8000/api/aulas?page=2",
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http://localhost:8000/api/aulas",
        "per_page": 10,
        "to": 10,
        "total": 50
    },
    "informação importante": "Essa API não está em produção, é apenas de homologação e testes"
}
```

POST Criar Professor <br />
```api/professores```

BODY
```
{
    "nome": "Nome do professor",
    "matricula": "Numero de matricula do professor",
    "competencia": "competência do professor",
    "escolaridade": "nivel de escolaridade do professor",
}
```

RESPONSE
```
{
    "code": "200",
    "msg": "Cadastro inserido com sucesso"
}
```


PUT Editar Professor <br />
```api/professores/{id}```

BODY
```
{
    "nome": "Nome do professor",
    "matricula": "Numero de matricula do professor",
    "competencia": "competência do professor",
    "escolaridade": "nivel de escolaridade do professor",
}
```

RESPONSE
```
{
    "code": 200,
    "msg": "Cadastro alterado com sucesso"
}
```

DELETE Listar Professores <br />
```api/professores/{id}```

RESPONSE
```
{
    "code": 200,
    "msg": "Cadastro removido com sucesso"
}
```

asdasdasda
### Endpoint Alunos
GET Listar Alunos
```api/professores```
```
{
    "data": [
        {
            "id": 1,
            "num_aula": 81,
            "tema": "Eliza Flatley",
            "duracao": "55",
            "observacao": "Autem vero id possimus dolor. Voluptas sunt harum esse recusandae quo quo. Possimus ut commodi maiores quae facere sapiente repellat eum.",
            "idcurso": 1,
            "idprofessor": 1,
            "created_at": "2021-12-30T08:52:27.000000Z",
            "updated_at": "2021-12-30T09:09:46.000000Z"
        },
        {
            "id": 2,
            "num_aula": 70,
            "tema": "Mrs. Destinee Mayer",
            "duracao": "61",
            "observacao": "Animi earum temporibus omnis voluptate explicabo voluptatem corrupti. Praesentium incidunt quam blanditiis eum.",
            "idcurso": 3,
            "idprofessor": 7,
            "created_at": "2021-12-30T08:52:27.000000Z",
            "updated_at": "2021-12-30T08:52:27.000000Z"
        },
        {
            "id": 3,
            "num_aula": 58,
            "tema": "Dino Lemke Sr.",
            "duracao": "7",
            "observacao": "Architecto neque natus est excepturi et assumenda quia consequatur. Molestiae quaerat sequi delectus totam.",
            "idcurso": 7,
            "idprofessor": 6,
            "created_at": "2021-12-30T08:52:27.000000Z",
            "updated_at": "2021-12-30T08:52:27.000000Z"
        },
        {
            "id": 4,
            "num_aula": 77,
            "tema": "Buddy Schimmel",
            "duracao": "23",
            "observacao": "Sed eum soluta pariatur corporis sit. Distinctio eaque veniam aut cum ad sed. Quos culpa veniam magnam voluptatem animi.",
            "idcurso": 1,
            "idprofessor": 10,
            "created_at": "2021-12-30T08:52:27.000000Z",
            "updated_at": "2021-12-30T08:52:27.000000Z"
        },
        {
            "id": 5,
            "num_aula": 44,
            "tema": "Frank Bechtelar DDS",
            "duracao": "86",
            "observacao": "Magni animi sed molestiae. Facilis recusandae ea quidem cupiditate modi consectetur.",
            "idcurso": 1,
            "idprofessor": 10,
            "created_at": "2021-12-30T08:52:27.000000Z",
            "updated_at": "2021-12-30T08:52:27.000000Z"
        },
        {
            "id": 6,
            "num_aula": 2,
            "tema": "Prof. Pauline Weissnat",
            "duracao": "92",
            "observacao": "Voluptas qui consequatur aliquid id dolorem. Iure ipsam distinctio modi libero laboriosam perferendis nisi.",
            "idcurso": 7,
            "idprofessor": 8,
            "created_at": "2021-12-30T08:52:27.000000Z",
            "updated_at": "2021-12-30T08:52:27.000000Z"
        },
        {
            "id": 7,
            "num_aula": 95,
            "tema": "Prof. Ned Emard Jr.",
            "duracao": "36",
            "observacao": "Blanditiis sapiente aut soluta veritatis quis. Incidunt porro repellendus officiis non iste impedit quae. Et optio accusamus at.",
            "idcurso": 8,
            "idprofessor": 5,
            "created_at": "2021-12-30T08:52:27.000000Z",
            "updated_at": "2021-12-30T08:52:27.000000Z"
        },
        {
            "id": 8,
            "num_aula": 84,
            "tema": "Mrs. Aubree Feil III",
            "duracao": "62",
            "observacao": "Cumque aut quasi nulla adipisci eligendi eius laudantium. Cumque nihil molestiae illo natus. Distinctio quae reprehenderit laudantium quisquam rem est.",
            "idcurso": 7,
            "idprofessor": 1,
            "created_at": "2021-12-30T08:52:27.000000Z",
            "updated_at": "2021-12-30T08:52:27.000000Z"
        },
        {
            "id": 9,
            "num_aula": 68,
            "tema": "Alexandria Stamm",
            "duracao": "29",
            "observacao": "Necessitatibus dolore qui placeat itaque. Optio laudantium a possimus qui id ex.",
            "idcurso": 3,
            "idprofessor": 9,
            "created_at": "2021-12-30T08:52:27.000000Z",
            "updated_at": "2021-12-30T08:52:27.000000Z"
        },
        {
            "id": 10,
            "num_aula": 87,
            "tema": "Miss Shanelle Bartoletti I",
            "duracao": "76",
            "observacao": "Culpa eos repellendus impedit suscipit voluptas mollitia assumenda. Aut in maxime et quaerat similique nemo eum. In quo sunt placeat harum.",
            "idcurso": 4,
            "idprofessor": 8,
            "created_at": "2021-12-30T08:52:27.000000Z",
            "updated_at": "2021-12-30T08:52:27.000000Z"
        }
    ],
    "links": {
        "first": "http://localhost:8000/api/aulas?page=1",
        "last": "http://localhost:8000/api/aulas?page=5",
        "prev": null,
        "next": "http://localhost:8000/api/aulas?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 5,
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http://localhost:8000/api/aulas?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": "http://localhost:8000/api/aulas?page=2",
                "label": "2",
                "active": false
            },
            {
                "url": "http://localhost:8000/api/aulas?page=3",
                "label": "3",
                "active": false
            },
            {
                "url": "http://localhost:8000/api/aulas?page=4",
                "label": "4",
                "active": false
            },
            {
                "url": "http://localhost:8000/api/aulas?page=5",
                "label": "5",
                "active": false
            },
            {
                "url": "http://localhost:8000/api/aulas?page=2",
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http://localhost:8000/api/aulas",
        "per_page": 10,
        "to": 10,
        "total": 50
    },
    "informação importante": "Essa API não está em produção, é apenas de homologação e testes"
}
```

POST Criar Professor
```api/professores```

```
{
    "nome": "Nome do professor",
    "matricula": "Numero de matricula do professor",
    "competencia": "competência do professor",
    "escolaridade": "nivel de escolaridade do professor",
}
```

```
{
    "code": "200",
    "msg": "Cadastro inserido com sucesso"
}
```


PUT Editar Professor
```api/professores/{id}```
```
{
    "nome": "Nome do professor",
    "matricula": "Numero de matricula do professor",
    "competencia": "competência do professor",
    "escolaridade": "nivel de escolaridade do professor",
}
```

```
{
    "code": 200,
    "msg": "Cadastro alterado com sucesso"
}
```

DELETE Listar Professores
```api/professores/{id}```

```
{
    "code": 200,
    "msg": "Cadastro removido com sucesso"
}
```













