FAQ
===

Perguntas e respostas para dizer como um problema foi resolvido.

### Fluxo
Surge a dúvida => FAQ => Google => Pergunta pro colega

### Motivo
Ter um FAQ dentro da equipe de T.I para evitar interrupções dos colegas, e também gerar um banco de conhecimento para a equipe toda.

### Tecnologias
[Laravel](http://laravel.com/)
MySQL

### Estrutura
@@@
.
├── application
│   ├── config
│   ├── controllers
│   ├── language
│   │   ├── ar
│   │   ├── bg
│   │   ├── da
│   │   ├── de
│   │   ├── el
│   │   ├── en
│   │   ├── fi
│   │   ├── fr
│   │   ├── he
│   │   ├── hu
│   │   ├── id
│   │   ├── it
│   │   ├── ja
│   │   ├── nl
│   │   ├── pl
│   │   ├── pt
│   │   ├── ro
│   │   ├── ru
│   │   ├── sq
│   │   ├── sr
│   │   ├── sv
│   │   └── tr
│   ├── libraries
│   ├── migrations
│   ├── models
│   ├── tasks
│   ├── tests
│   └── views
│       ├── error
│       └── home
├── bundles
│   └── docs
│       ├── libraries
│       └── views
├── laravel
│   ├── auth
│   │   └── drivers
│   ├── cache
│   │   └── drivers
│   ├── cli
│   │   └── tasks
│   │       ├── bundle
│   │       │   └── providers
│   │       ├── migrate
│   │       ├── session
│   │       └── test
│   ├── database
│   │   ├── connectors
│   │   ├── eloquent
│   │   │   └── relationships
│   │   ├── query
│   │   │   └── grammars
│   │   └── schema
│   │       └── grammars
│   ├── documentation
│   │   ├── artisan
│   │   ├── auth
│   │   ├── cache
│   │   ├── contrib
│   │   ├── database
│   │   ├── session
│   │   └── views
│   ├── profiling
│   ├── routing
│   ├── session
│   │   └── drivers
│   ├── tests
│   │   ├── application
│   │   │   ├── config
│   │   │   │   └── local
│   │   │   ├── controllers
│   │   │   │   ├── admin
│   │   │   │   └── template
│   │   │   ├── dashboard
│   │   │   ├── language
│   │   │   │   ├── en
│   │   │   │   └── sp
│   │   │   ├── libraries
│   │   │   ├── migrations
│   │   │   ├── models
│   │   │   │   └── repositories
│   │   │   ├── tasks
│   │   │   └── views
│   │   │       ├── error
│   │   │       ├── home
│   │   │       └── tests
│   │   ├── bundles
│   │   │   ├── dashboard
│   │   │   │   ├── config
│   │   │   │   ├── controllers
│   │   │   │   └── models
│   │   │   └── dummy
│   │   ├── cases
│   │   └── storage
│   │       ├── cache
│   │       ├── database
│   │       ├── files
│   │       ├── logs
│   │       ├── sessions
│   │       └── views
│   └── vendor
│       └── Symfony
│           └── Component
│               ├── Console
│               │   ├── Command
│               │   ├── Formatter
│               │   ├── Helper
│               │   ├── Input
│               │   ├── Output
│               │   └── Tester
│               └── HttpFoundation
│                   ├── File
│                   │   ├── Exception
│                   │   └── MimeType
│                   ├── Resources
│                   │   └── stubs
│                   └── Session
│                       ├── Attribute
│                       ├── Flash
│                       └── Storage
│                           ├── Handler
│                           └── Proxy
├── public
│   ├── bundles
│   ├── css
│   ├── img
│   ├── js
│   └── laravel
│       ├── css
│       ├── img
│       └── js
└── storage
    ├── cache
    ├── database
    ├── logs
    ├── sessions
    ├── views
    └── work
@@@
