## Short Brief
Directory structure is modified in a way to use best practice from **Clean Code Architecture** but also to keep Symfony best practice.  

The reason is simple, to build software that lasts and also is not too expensive to implement, keeping in mind faster learning curve for new developers need to be onboarded.

![Clean code architecture](https://codersopinion.com/images/posts/clean-architecture/clean-architecture.png)

## Directory structure
The main word is about `./src` directory in **API** project  

```html
src/
  Core/
    Domain/
      Entity/
        Order/
          Order.php
      ...
    Application/
      Action/
        Order/
          ListOrdersAction.php
      ...
    Infrastructure/
      Persistence/
        Doctrine/
          Mapping/
            Domain/
              Order.Order.orm.xml
      ...
```

### Domain -> Entity
**Example** - [Order.php](../src/Core/Domain/Entity/Order/Order.php)

The domain layer is the innermost layer and doesn’t depend on the outer layers.  
It has the classes that make up the business rules of the application.

### Application -> Action
**Example** - [ListOrdersAction.php](../src/Core/Application/Action/Order/ListOrdersAction.php)  

The application layer could also be seen as the service layer of your application.  
It can contain service classes that help with executing business rules on aggregates in your domain layer.  
It will load an aggregate from the domain repository, run an operation on the aggregate, and if the operation was successful, persist the aggregate again.  
The application layer can also handle the collecting and dispatching of domain events so other systems can listen in on the changes that have happened in your domain.

The only rule to keep here is that the application code only depends on code in the domain and application layer.  
If communication with an outside system is needed the application layer can supply an interface and DTO objects that can be implemented in the infrastructure layer.  
By doing so the application layer stays in control of the protocol and can be tested without the outside systems present.  
If you want to test the application layer you can either make use of unit or acceptance tests.

Actions are used instead of controllers as **ADR pattern** (Action-Domain-Responder) and Symfony has already supported this started from 3.3 version.   
I am adherent of Action Class approach using instead of Controller.  
The explanation is very simple:
 - very often Controller includes many actions, when following the Dependency Injection principle we must pass all required dependencies to a constructor and this makes a situation when the Controller has a huge number of dependencies, but in the certain moment of time (e.g. request) we use only some dependencies.
It's hard to maintain and test that spaghetti code.

### Infrastructure -> Mapping
**Example** - [Order.Order.orm.xml](../src/Core/Infrastructure/Persistence/Doctrine/Mapping/Domain/Order.Order.orm.xml)

Most applications have to communicate with external systems like databases, message queues, APIs, and so on.  
These systems can make testing your application and domain layer very hard if you don’t separate them properly from these layers.

The infrastructure layer has any code that handles as an example, the following tasks:

- Handling HTTP requests
- Talking to external API’s
- Sending emails and notifications
- Persisting data in the database
- And many more… 

Separating these tasks from your domain and application layer enables you to write integration tests for them without the need of having the domain and application layer present.

## Advantages
There are many advantages to having a clear separation between these layers.  
Not only will the code be easier to read but also easier to follow.  
Testability will improve because you can test the layers separately.  
There are more advantages to using separated layers.  
I will list them for you here:

 - You can design the domain, and the application layer without having to think about infrastructures like databases, frameworks, and email systems.
 - Upgrading frameworks, libraries, and other infrastructural systems will only cause a change in the Infrastructure layer keeping domain logic and application services intact.
 - Switching around infrastructure systems and libraries becomes easier. Have a library that became deprecated? No worries just find another one to replace the deprecated library.
 - Testability improves: You can write unit tests for your domain layer, acceptance tests for your application layer, and integration tests for your infrastructure layer.
